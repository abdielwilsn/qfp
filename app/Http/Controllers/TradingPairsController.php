<?php

namespace App\Http\Controllers;

use App\Models\TradingPair;
use App\Models\Settings;
use App\Models\Investment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TradingPairsController extends Controller
{
    public function index()
    {
        $tradingPairs = TradingPair::ordered()->get();
        $settings = Settings::first();
        $this->updateStalePrices($tradingPairs);
        return view('admin.Plans.plans', compact('tradingPairs', 'settings'));
    }

    public function recentTrades()
    {
        $investments = Investment::with(['user', 'tradingPair'])
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

            // dd($investments);
        $settings = Settings::first() ?? new Settings(['currency' => 'USD']);
        return view('user.recent-trades', compact('investments', 'settings'));
    }

    public function store(Request $request)
    {
        try {
            $coinData = $this->fetchCoinGeckoData($request->coingecko_id);
            if (!$coinData) {
                return back()->with('error', 'Failed to fetch coin data from CoinGecko. Please verify the CoinGecko ID.');
            }

            $tradingPair = TradingPair::create([
                'coingecko_id' => $request->coingecko_id,
                'base_symbol' => strtoupper($coinData['symbol']),
                'base_name' => $coinData['name'],
                'quote_symbol' => $request->quote_symbol,
                'base_icon_url' => $coinData['image']['large'] ?? null,
                'current_price' => $coinData['market_data']['current_price']['usd'] ?? 0,
                'price_change_24h' => $coinData['market_data']['price_change_percentage_24h'] ?? 0,
                'market_cap' => $coinData['market_data']['market_cap']['usd'] ?? null,
                'volume_24h' => $coinData['market_data']['total_volume']['usd'] ?? null,
                'price_last_updated' => now(),
                'min_investment' => $request->min_investment,
                'max_investment' => $request->max_investment,
                'min_return_percentage' => $request->min_return_percentage,
                'max_return_percentage' => $request->max_return_percentage,
                'investment_duration' => $request->investment_duration,
                'is_active' => $request->boolean('is_active', true)
            ]);

            return back()->with('success', 'Trading pair added successfully!');
        } catch (\Exception $e) {
            Log::error('Error creating trading pair: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while creating the trading pair.');
        }
    }

    public function edit(TradingPair $tradingPair)
    {
        return response()->json($tradingPair);
    }

    public function create()
    {
        return view('admin.Plans.add-new-trading-pair');
    }

    public function update(Request $request, TradingPair $tradingPair)
    {
        $validator = Validator::make($request->all(), [
            'coingecko_id' => 'required|string|unique:trading_pairs,coingecko_id,' . $tradingPair->id,
            'quote_symbol' => 'required|string|in:USDT,USD,BTC,ETH',
            'min_investment' => 'required|numeric|min:0',
            'max_investment' => 'required|numeric|gt:min_investment',
            'min_return_percentage' => 'required|numeric|min:0',
            'max_return_percentage' => 'required|numeric|gt:min_return_percentage',
            'investment_duration' => 'required|integer|min:1',
            'is_active' => 'boolean'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            if ($request->coingecko_id !== $tradingPair->coingecko_id) {
                $coinData = $this->fetchCoinGeckoData($request->coingecko_id);
                if (!$coinData) {
                    return back()->with('error', 'Failed to fetch coin data from CoinGecko. Please verify the CoinGecko ID.');
                }

                $tradingPair->update([
                    'coingecko_id' => $request->coingecko_id,
                    'base_symbol' => strtoupper($coinData['symbol']),
                    'base_name' => $coinData['name'],
                    'base_icon_url' => $coinData['image']['large'] ?? $tradingPair->base_icon_url,
                    'current_price' => $coinData['market_data']['current_price']['usd'] ?? $tradingPair->current_price,
                    'price_change_24h' => $coinData['market_data']['price_change_percentage_24h'] ?? $tradingPair->price_change_24h,
                    'market_cap' => $coinData['market_data']['market_cap']['usd'] ?? $tradingPair->market_cap,
                    'volume_24h' => $coinData['market_data']['total_volume']['usd'] ?? $tradingPair->volume_24h,
                    'price_last_updated' => now(),
                ]);
            }

            $tradingPair->update([
                'quote_symbol' => $request->quote_symbol,
                'min_investment' => $request->min_investment,
                'max_investment' => $request->max_investment,
                'min_return_percentage' => $request->min_return_percentage,
                'max_return_percentage' => $request->max_return_percentage,
                'investment_duration' => $request->investment_duration,
                'is_active' => $request->boolean('is_active', true)
            ]);

            return back()->with('success', 'Trading pair updated successfully!');
        } catch (\Exception $e) {
            Log::error('Error updating trading pair: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while updating the trading pair.');
        }
    }

    public function toggleStatus(TradingPair $tradingPair)
    {
        try {
            $tradingPair->update([
                'is_active' => !$tradingPair->is_active
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Trading pair status updated successfully',
                'is_active' => $tradingPair->is_active
            ]);
        } catch (\Exception $e) {
            Log::error('Error toggling trading pair status: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating the status'
            ], 500);
        }
    }

    public function destroy(TradingPair $tradingPair)
    {
        try {
            $tradingPair->delete();
            return response()->json([
                'success' => true,
                'message' => 'Trading pair deleted successfully'
            ]);
        } catch (\Exception $e) {
            Log::error('Error deleting trading pair: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the trading pair'
            ], 500);
        }
    }

    public function refreshPrices()
    {
        try {
            TradingPair::updateAllPrices();
            $tradingPairs = TradingPair::active()->ordered()->get();
            return response()->json($tradingPairs->map(function ($pair) {
                return [
                    'id' => $pair->id,
                    'current_price' => $pair->current_price,
                    'price_change_24h' => $pair->price_change_24h
                ];
            }));
        } catch (\Exception $e) {
            Log::error('Error refreshing prices: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to refresh prices'
            ], 500);
        }
    }

    public function getPublicTradingPairs()
    {
        $tradingPairs = TradingPair::active()->ordered()->get();
        $this->updateStalePrices($tradingPairs);
        return response()->json($tradingPairs->map(function ($pair) {
            return [
                'id' => $pair->id,
                'pair_name' => $pair->pair_name,
                'base_symbol' => $pair->base_symbol,
                'base_name' => $pair->base_name,
                'quote_symbol' => $pair->quote_symbol,
                'base_icon_url' => $pair->base_icon_url,
                'current_price' => $pair->formatted_price,
                'price_change_24h' => $pair->price_change_24h,
                'price_change_color' => $pair->price_change_color,
                'min_investment' => $pair->min_investment,
                'max_investment' => $pair->max_investment,
                'min_return_percentage' => $pair->min_return_percentage,
                'max_return_percentage' => $pair->max_return_percentage,
                'investment_duration' => $pair->investment_duration
            ];
        }));
    }

    private function fetchCoinGeckoData($coingeckoId)
    {
        try {
            $response = Http::timeout(10)->get("https://api.coingecko.com/api/v3/coins/{$coingeckoId}", [
                'localization' => false,
                'tickers' => false,
                'market_data' => true,
                'community_data' => false,
                'developer_data' => false,
                'sparkline' => false
            ]);
            if ($response->successful()) {
                return $response->json();
            }
        } catch (\Exception $e) {
            Log::error("Failed to fetch CoinGecko data for {$coingeckoId}: " . $e->getMessage());
        }
        return null;
    }

    private function updateStalePrices($tradingPairs)
    {
        $stalePairs = $tradingPairs->filter(function ($pair) {
            return $pair->isPriceStale();
        });
        if ($stalePairs->count() > 0) {
            TradingPair::updateAllPrices();
        }
    }

    public function updateSortOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pairs' => 'required|array',
            'pairs.*.id' => 'required|exists:trading_pairs,id',
            'pairs.*.sort_order' => 'required|integer|min:0'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid data provided'
            ], 400);
        }
        try {
            foreach ($request->pairs as $pairData) {
                TradingPair::where('id', $pairData['id'])
                    ->update(['sort_order' => $pairData['sort_order']]);
            }
            return response()->json([
                'success' => true,
                'message' => 'Sort order updated successfully'
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating sort order: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating sort order'
            ], 500);
        }
    }

    public function userIndex()
    {
        $tradingPairs = TradingPair::active()->ordered()->get();
        $settings = Settings::first();
        $this->updateStalePrices($tradingPairs);
        return view('user.mplans', compact('tradingPairs', 'settings'));
    }

    public function showPair(TradingPair $tradingPair)
    {
        $settings = Settings::first();
        return view('user.invest_pair', compact('tradingPair', 'settings'));
    }

    public function invest(TradingPair $tradingPair)
    {
        $settings = Settings::first();
        return view('user.invest-trading-pair', compact('tradingPair', 'settings'));
    }

    public function storeInvestment(Request $request, TradingPair $tradingPair)
    {
        $user = Auth::user();

        // dd($user->)

        $validator = Validator::make($request->all(), [
            'amount' => [
                'required',
                'numeric',
                'min:' . $tradingPair->min_investment,
                'max:' . $tradingPair->max_investment,
                function ($attribute, $value, $fail) use ($user) {
                    if ($value > $user->account_bal) {
                        $fail('Insufficient balance for this investment.');
                    }
                }
            ]
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            \DB::beginTransaction();

            // Deduct amount from user balance
            $user->decrement('account_bal', $request->amount);

            // Create investment
            Investment::create([
                'user_id' => auth()->id(),
                'trading_pair_id' => $tradingPair->id,
                'amount' => $request->amount,
                'status' => 'active',
                'start_date' => now(),
                'end_date' => now()->addDays($tradingPair->investment_duration)
            ]);

            \DB::commit();

            return redirect()->route('user.recent-trades')->with('success', 'Investment placed successfully!');
        } catch (\Exception $e) {
            \DB::rollBack();
            Log::error('Error creating investment: ' . $e->getMessage());
            return back()->with('error', 'Failed to place investment.');
        }
    }
}
?>
