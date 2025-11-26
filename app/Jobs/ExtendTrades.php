<?php

namespace App\Jobs;

use App\Models\Investment; // Make sure this model exists
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ExtendTrades implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // Optional: prevent overlapping runs if needed
    // use \Illuminate\Queue\Middleware\WithoutOverlapping;
    // public $withoutOverlapping = true;

    /**
     * Execute the job.
     */
    public function handle()
    {
        try {
            $now = Carbon::now();
            $in24Hours = $now->copy()->addHours(24);

            // Find active investments ending within the next 24 hours
            $tradesToExtend = Investment::where('status', 'active')
                ->whereNotNull('end_date')
                ->whereBetween('end_date', [$now, $in24Hours])
                ->get();

            if ($tradesToExtend->isEmpty()) {
                Log::info('ExtendTrades: No active trades found expiring in the next 24 hours.');
                return;
            }

            $count = 0;
            foreach ($tradesToExtend as $investment) {
                $oldEndDate = $investment->end_date;
                $newEndDate = $oldEndDate->copy()->addHours(10);

                $investment->end_date = $newEndDate;
                $investment->save();

                Log::info("Trade extended", [
                    'investment_id' => $investment->id,
                    'user_id'       => $investment->user_id,
                    'old_end_date'  => $oldEndDate->toDateTimeString(),
                    'new_end_date'  => $newEndDate->toDateTimeString(),
                ]);

                $count++;
            }

            Log::info("ExtendTrades job completed: {$count} trade(s) extended by 10 hours.");

        } catch (\Exception $e) {
            Log::error('ExtendTrades job failed', [
                'error'   => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);

            throw $e;
        }
    }
}
