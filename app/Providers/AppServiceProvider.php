<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Settings;
use App\Models\SettingsCont;
use App\Models\TermsPrivacy;
use Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\Sftp\SftpAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Storage::extend('sftp', function ($app, $config) {
            return new Filesystem(new SftpAdapter($config));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Share settings with views only if tables exist
        if (Schema::hasTable('settings') && Schema::hasTable('terms_privacies') && Schema::hasTable('settings_conts')) {
            $settings = Settings::where('id', '1')->first();
            $terms = TermsPrivacy::find(1);
            $moreset = SettingsCont::find(1);

            View::share('settings', $settings);
            View::share('terms', $terms);
            View::share('moresettings', $moreset);
        }
    }
}