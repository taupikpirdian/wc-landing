<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS in production and development environments
        if (config('app.env') === 'production' || config('app.env') === 'development') {
            URL::forceScheme('https');

            // Force asset URL to use HTTPS if ASSET_URL is set
            if (config('app.asset_url')) {
                URL::forceRootUrl(config('app.asset_url'));
            }
        }
    }
}
