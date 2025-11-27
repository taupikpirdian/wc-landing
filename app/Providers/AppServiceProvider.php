<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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

        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label('Manajemen Pengguna'),
                NavigationGroup::make()
                    ->label('Konten Website'),
                NavigationGroup::make()
                    ->label('SEO & Marketing'),
                NavigationGroup::make()
                    ->label('Pengaturan')
                    ->collapsed(),
            ]);
        });
    }
}
