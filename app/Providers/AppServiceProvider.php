<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\ContactUs;
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

        $contact = ContactUs::first();
        $rawMobile = $contact ? $contact->mobile : null;
        $digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null;
        $wa = null;
        if ($digits) {
            if (str_starts_with($digits, '0')) {
                $wa = '62' . substr($digits, 1);
            } elseif (str_starts_with($digits, '62')) {
                $wa = $digits;
            } elseif (str_starts_with($digits, '8')) {
                $wa = '62' . $digits;
            } else {
                $wa = $digits;
            }
        }
        View::share('whatsappLink', $wa ? ('https://wa.me/' . $wa) : null);
    }
}
