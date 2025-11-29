<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReverseWithdrawals implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Starting ReverseWithdrawals job');

        // Get all pending withdrawals
        $pendingWithdrawals = Withdrawal::where('status', 'pending')
            ->with('user') // Assuming you have a relationship defined
            ->get();

        if ($pendingWithdrawals->isEmpty()) {
            Log::info('No pending withdrawals found to reverse');
            return;
        }

        Log::info("Found {$pendingWithdrawals->count()} pending withdrawals to reverse");

        // Process each withdrawal in a transaction
        foreach ($pendingWithdrawals as $withdrawal) {
            $this->reverseSingleWithdrawal($withdrawal);
        }

        Log::info('ReverseWithdrawals job completed');
    }

    /**
     * Reverse a single withdrawal
     *
     * @param Withdrawal $withdrawal
     * @return void
     */
    protected function reverseSingleWithdrawal(Withdrawal $withdrawal)
    {
        DB::transaction(function () use ($withdrawal) {
            $user = $withdrawal->user;

            if (!$user) {
                Log::warning("User not found for withdrawal ID: {$withdrawal->id}");
                return;
            }

            // Get the amount to restore (use to_deduct if available, otherwise amount)
            $amountToRestore = $withdrawal->amount;

            if (!$amountToRestore) {
                Log::warning("No amount to restore for withdrawal ID: {$withdrawal->id}");
                return;
            }

            // Restore balance to user's account
            $user->increment('account_bal', $amountToRestore);

            // Update withdrawal status
            $withdrawal->update([
                'status' => 'reversed',
                'notes' => $withdrawal->notes
                    ? $withdrawal->notes . "\nReversed on: " . now()
                    : "Reversed on: " . now()
            ]);

            Log::info("Reversed withdrawal ID: {$withdrawal->id}, restored: {$amountToRestore} to user: {$user->id}");
        });
    }

    /**
     * Handle a job failure.
     *
     * @return void
     */
    public function failed(\Throwable $exception)
    {
        Log::error('ReverseWithdrawals job failed', [
            'exception' => $exception->getMessage(),
            'trace' => $exception->getTraceAsString()
        ]);
    }
}
