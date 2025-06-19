<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Settings;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\AutoTopup::class,
        Commands\CheckPlanDuration::class, 
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Retrieve the global settings
        $settings = Settings::where('id', '=', 1)->first();

        // Schedule the AutoTopup command
        if ($settings && $settings->weekend_trade === "true") {
            $schedule->command('auto:topup')
                ->weekdays() // Monday to Friday
                ->everyMinute();
        } else {
            $schedule->command('auto:topup')->everyMinute();
        }

        // Schedule the CheckPlanDuration command to run daily
        $schedule->command('plans:check-duration')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
