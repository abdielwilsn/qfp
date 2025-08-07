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
            $investments = Investment::with('tradingPair')
                ->where('status', 'active')
                ->whereNotNull('end_date')
                ->where('end_date', '<=', now())
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


                // Calculate profit (random between min and max return percentage)
                $minReturn = $investment->tradingPair->min_return_percentage / 100;
                $maxReturn = $investment->tradingPair->max_return_percentage / 100;
                $returnRate = mt_rand($minReturn * 10000, $maxReturn * 10000) / 10000; // Random between min and max
                $profit = $investment->amount * $returnRate;
                $totalReturn = $investment->amount + $profit;

                // Update user balance
                $user = $investment->user;
                if ($user) {
                    $user->increment('account_bal', $totalReturn);
                    // Log::info("user total return {$totalReturn}");
                    // Log::info("user")
                    Log::info("User ID {$user->id} balance updated: +{$totalReturn} (Investment ID {$investment->id})");
                } else {
                    Log::warning("Investment ID {$investment->id} has no associated user. Skipping balance update.");
                    continue;
                }

                // dd($profit);

                // Update investment
                $investment->update([
                    'status' => 'completed',
                    'profit' => $profit,
                    'updated_at' => now()
                ]);
                // dd($investment);

                Log::info("Investment ID {$investment->id} closed. Profit: {$profit}, Total Return: {$totalReturn}");
            }
        } catch (\Exception $e) {
            Log::error('Error in CloseExpiredInvestmentsJob: ' . $e->getMessage());
        }
    }
}
?>
