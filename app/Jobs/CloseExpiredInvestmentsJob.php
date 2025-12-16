<?php

namespace App\Jobs;

use App\Models\Investment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CloseExpiredInvestmentsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        try {
            // Get active investments where start_date + duration has passed
            $investments = Investment::with(['tradingPair', 'user'])
                ->where('status', 'active')
                ->whereNotNull('start_date')
                ->whereNotNull('duration')
                ->whereRaw('DATE_ADD(start_date, INTERVAL duration DAY) <= NOW()')
                ->get();

            if ($investments->isEmpty()) {
                Log::info('No expired investments found.');
                return;
            }

            foreach ($investments as $investment) {
                if (!$investment->tradingPair) {
                    Log::warning("Investment ID {$investment->id} has no associated trading pair. Skipping.");
                    continue;
                }

                $user = $investment->user;
                if (!$user) {
                    Log::warning("Investment ID {$investment->id} has no associated user. Skipping.");
                    continue;
                }

                // Calculate profit (random between min and max return percentage)
                $minReturn = $investment->tradingPair->min_return_percentage / 100;
                $maxReturn = $investment->tradingPair->max_return_percentage / 100;
                $returnRate = mt_rand((int)($minReturn * 10000), (int)($maxReturn * 10000)) / 10000;

                // Daily profit multiplied by number of days
                $dailyProfit = $investment->amount * $returnRate;
                $profit = $dailyProfit * $investment->duration;
                $totalReturn = $investment->amount + $profit;

                // Update user balance
                $user->increment('account_bal', $totalReturn);
                $user->increment('roi', $profit);

                Log::info("User ID {$user->id} balance updated: +{$totalReturn} (Investment ID {$investment->id})");

                // Calculate actual end date for record keeping
                $endDate = $investment->start_date->addDays($investment->duration);

                // Update investment
                $investment->update([
                    'status' => 'completed',
                    'profit' => $profit,
                    'end_date' => $endDate,
                    'updated_at' => now()
                ]);

                Log::info("Investment ID {$investment->id} closed. Duration: {$investment->duration} days, Daily Rate: " . ($returnRate * 100) . "%, Total Profit: {$profit}, Total Return: {$totalReturn}");
            }

            Log::info("Processed " . $investments->count() . " expired investments.");

        } catch (\Exception $e) {
            Log::error('Error in CloseExpiredInvestmentsJob: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
        }
    }
}
