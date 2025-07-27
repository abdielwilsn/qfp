<?php

namespace App\Jobs;

use App\Models\User_plans;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ExpireUserPlans implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        try {
            // Get all active user plans
            $activePlans = User_plans::where('active', 'active')
                ->whereNotNull('activated_at')
                ->whereNotNull('inv_duration')
                ->get();

            $expiredCount = 0;

            // dd("hello");

            // dd($activePlans);

            foreach ($activePlans as $plan) {
                $activatedAt = Carbon::parse($plan->activated_at);
                $duration = $this->parseDuration($plan->inv_duration);

                dd($duration);
                
                if ($duration) {
                    $expirationDate = $activatedAt->add($duration['interval'], $duration['value']);
                    
                    // Check if the plan has expired
                    if (Carbon::now()->greaterThan($expirationDate)) {
                        $plan->update([
                            'active' => 'expired',
                            'expire_date' => $expirationDate
                        ]);
                        
                        $expiredCount++;
                        
                        Log::info("User plan {$plan->id} expired for user {$plan->user}");
                    }
                }
            }

            Log::info("ExpireUserPlans job completed. {$expiredCount} plans expired.");

        } catch (\Exception $e) {
            Log::error('Error in ExpireUserPlans job: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Parse duration string and return interval details
     * 
     * @param string $duration
     * @return array|null
     */
    private function parseDuration($duration)
    {
        $duration = strtolower(trim($duration));
        
        // Define patterns for different duration formats
        $patterns = [
            // Hours
            '/^(\d+)\s*hours?$/' => ['interval' => 'hour', 'multiplier' => 1],
            '/^(\d+)\s*hrs?$/' => ['interval' => 'hour', 'multiplier' => 1],
            '/^(\d+)\s*h$/' => ['interval' => 'hour', 'multiplier' => 1],
            
            // Days
            '/^(\d+)\s*days?$/' => ['interval' => 'day', 'multiplier' => 1],
            '/^(\d+)\s*d$/' => ['interval' => 'day', 'multiplier' => 1],
            
            // Weeks
            '/^(\d+)\s*weeks?$/' => ['interval' => 'week', 'multiplier' => 1],
            '/^(\d+)\s*w$/' => ['interval' => 'week', 'multiplier' => 1],
            
            // Months
            '/^(\d+)\s*months?$/' => ['interval' => 'month', 'multiplier' => 1],
            '/^(\d+)\s*m$/' => ['interval' => 'month', 'multiplier' => 1],
            
            // Years
            '/^(\d+)\s*years?$/' => ['interval' => 'year', 'multiplier' => 1],
            '/^(\d+)\s*y$/' => ['interval' => 'year', 'multiplier' => 1],
        ];

        // Special word cases
        $wordPatterns = [
            'one hour' => ['interval' => 'hour', 'value' => 1],
            'two hours' => ['interval' => 'hour', 'value' => 2],
            'three hours' => ['interval' => 'hour', 'value' => 3],
            'four hours' => ['interval' => 'hour', 'value' => 4],
            'five hours' => ['interval' => 'hour', 'value' => 5],
            'six hours' => ['interval' => 'hour', 'value' => 6],
            'twelve hours' => ['interval' => 'hour', 'value' => 12],
            'one day' => ['interval' => 'day', 'value' => 1],
            'two days' => ['interval' => 'day', 'value' => 2],
            'three days' => ['interval' => 'day', 'value' => 3],
            'four days' => ['interval' => 'day', 'value' => 4],
            'five days' => ['interval' => 'day', 'value' => 5],
            'one week' => ['interval' => 'week', 'value' => 1],
            'two weeks' => ['interval' => 'week', 'value' => 2],
            'one month' => ['interval' => 'month', 'value' => 1],
            'two months' => ['interval' => 'month', 'value' => 2],
            'three months' => ['interval' => 'month', 'value' => 3],
            'six months' => ['interval' => 'month', 'value' => 6],
            'one year' => ['interval' => 'year', 'value' => 1],
            'two years' => ['interval' => 'year', 'value' => 2],
        ];

        // Check word patterns first
        if (isset($wordPatterns[$duration])) {
            return $wordPatterns[$duration];
        }

        // Check numeric patterns
        foreach ($patterns as $pattern => $config) {
            if (preg_match($pattern, $duration, $matches)) {
                return [
                    'interval' => $config['interval'],
                    'value' => (int)$matches[1] * $config['multiplier']
                ];
            }
        }

        // Log unrecognized duration format
        Log::warning("Unrecognized duration format: {$duration}");
        
        return null;
    }
}