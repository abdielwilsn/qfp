<?php

namespace App\Http\Controllers;

use App\Models\TradingPair;
use App\Models\Trade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class TradeController extends Controller
{
    public function index()
    {
        $currencies = TradingPair::where('is_active', true)->get();
        $openTrades = Trade::where('user_id', Auth::id())
            ->where('status', 'open')
            ->with('user')
            ->get()
            ->map(function ($trade) {
                $currentPrice = $this->getCurrentPrice($trade->pair_base);
                $trade->current_price = $currentPrice ?? 0;
                $trade->unrealized_pl = $currentPrice
                    ? ($trade->type === 'buy'
                        ? ($currentPrice - $trade->entry_price) * $trade->volume
                        : ($trade->entry_price - $currentPrice) * $trade->volume)
                    : 0;
                return $trade;
            });

        return view('user.trade', compact('currencies', 'openTrades'));
    }

    public function getPairData(Request $request, $symbol)
    {
        $pair = TradingPair::where('base_currency', strtolower($symbol))
            ->where('is_active', true)
            ->first();

        if (!$pair) {
            Log::warning('Invalid trading pair requested: ' . $symbol);
            return response()->json([
                'success' => false,
                'error' => 'Invalid trading pair'
            ], 404);
        }

        $cacheKey = "price:{$pair->coingecko_id}";
        $cachedData = Cache::get($cacheKey);

        if ($cachedData) {
            return response()->json([
                'success' => true,
                'price' => $cachedData['price'],
                'change' => $cachedData['change']
            ]);
        }

        try {
            $response = Http::get('https://api.coingecko.com/api/v3/coins/markets', [
                'ids' => $pair->coingecko_id,
                'vs_currency' => 'usd',
                'price_change_percentage' => '24h'
            ]);

            if ($response->successful()) {
                $data = $response->json();
                if (isset($data[0]['current_price'])) {
                    $price = $data[0]['current_price'];
                    $change = number_format($data[0]['price_change_percentage_24h'] ?? 0, 2) . '% ($' . number_format($data[0]['price_change_24h'] ?? 0, 2) . ')';

                    Cache::put($cacheKey, [
                        'price' => $price,
                        'change' => $change
                    ], now()->addMinutes(2));

                    return response()->json([
                        'success' => true,
                        'price' => $price,
                        'change' => $change
                    ]);
                }
                Log::warning('No price data found for coingecko_id: ' . $pair->coingecko_id);
                return response()->json([
                    'success' => false,
                    'error' => 'Price data unavailable'
                ], 404);
            }

            Log::error('CoinGecko API failed: ' . $response->status());
            return response()->json([
                'success' => false,
                'error' => 'Price data unavailable'
            ], 500);

        } catch (\Exception $e) {
            Log::error('Pair data fetch error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Failed to fetch pair data'
            ], 500);
        }
    }

    public function executeTrade(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0.00000001',
            'price' => 'required_if:order_type,limit,stop|numeric|min:0',
            'order_type' => 'required|in:market,limit,stop',
            'stop_loss' => 'nullable|numeric|min:0',
            'take_profit' => 'nullable|numeric|min:0',
            'type' => 'required|in:buy,sell',
            'pair' => 'required|string'
        ]);

        $user = Auth::user();
        $pair = TradingPair::where('base_currency', strtolower($request->pair))
            ->where('is_active', true)
            ->first();

        if (!$pair) {
            return back()->with('error', 'Invalid trading pair');
        }

        $price = $request->order_type === 'market' 
            ? $this->getCurrentPrice($pair->base_currency)
            : $request->price;

        if (!$price) {
            return back()->with('error', 'Failed to fetch current price');
        }

        $totalCost = $request->amount * $price;
        $fee = $totalCost * 0.001; // 0.1% fee
        $totalWithFee = $totalCost + $fee;

        if ($request->type === 'buy' && $totalWithFee > $user->balance) {
            return back()->with('error', 'Insufficient balance');
        }

        \DB::beginTransaction();
        try {
            if ($request->type === 'buy') {
                $user->balance -= $totalWithFee;
            } else {
                $existingVolume = Trade::where('user_id', $user->id)
                    ->where('pair_base', $pair->base_currency)
                    ->where('status', 'open')
                    ->sum('volume');

                if ($existingVolume < $request->amount) {
                    return back()->with('error', 'Insufficient asset volume for sell order');
                }
            }

            $trade = Trade::create([
                'user_id' => $user->id,
                'pair_base' => $pair->base_currency,
                'quote_currency' => $pair->quote_currency,
                'type' => $request->type,
                'order_type' => $request->order_type,
                'entry_price' => $price,
                'volume' => $request->amount,
                'amount' => $totalCost,
                'fee' => $fee,
                'stop_loss' => $request->stop_loss,
                'take_profit' => $request->take_profit,
                'status' => 'open',
            ]);

            $user->save();
            \DB::commit();

            return back()->with('success', 'Trade executed successfully');

        } catch (\Exception $e) {
            \DB::rollBack();
            Log::error('Trade execution error: ' . $e->getMessage());
            return back()->with('error', 'Failed to execute trade');
        }
    }

    private function getCurrentPrice($symbol)
    {
        $pair = TradingPair::where('base_currency', strtolower($symbol))
            ->where('is_active', true)
            ->first();

        if (!$pair) {
            Log::warning('Invalid trading pair for price fetch: ' . $symbol);
            return null;
        }

        $cacheKey = "price:{$pair->coingecko_id}";
        $cachedData = Cache::get($cacheKey);

        if ($cachedData) {
            return $cachedData['price'];
        }

        try {
            $response = Http::get('https://api.coingecko.com/api/v3/coins/markets', [
                'ids' => $pair->coingecko_id,
                'vs_currency' => 'usd'
            ]);

            if ($response->successful()) {
                $data = $response->json();
                if (isset($data[0]['current_price'])) {
                    $price = $data[0]['current_price'];
                    Cache::put($cacheKey, [
                        'price' => $price,
                        'change' => '0.00% ($0.00)' // Placeholder for consistency
                    ], now()->addMinutes(2));
                    return $price;
                }
            }
            Log::error('CoinGecko API failed for price fetch: ' . $response->status());
            return null;
        } catch (\Exception $e) {
            Log::error('Price fetch error: ' . $e->getMessage());
            return null;
        }
    }
}