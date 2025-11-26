<?php

namespace App\Jobs;

use App\Models\Investment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ExtendTrades implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        // Get ALL active trades
        $activeTrades = Investment::where('status', 'active')->get();

        if ($activeTrades->isEmpty()) {
            Log::info('ExtendTrades: No active trades to extend.');
            return;
        }

        foreach ($activeTrades as $trade) {
            // Add 72 hours to the current end_date (or set one if null)
            $newEndDate = $trade->end_date
                ? $trade->end_date->addHours(72)
                : now()->addHours(72);

            $trade->end_date = $newEndDate;
            $trade->save();

            Log::info('Trade extended by 72 hours', [
                'trade_id' => $trade->id,
                'user_id'  => $trade->user_id,
                'new_end_date' => $newEndDate->toDateTimeString(),
            ]);
        }

        Log::info("ExtendTrades completed: All {$activeTrades->count()} active trade(s) extended by 72 hours.");
    }
}
