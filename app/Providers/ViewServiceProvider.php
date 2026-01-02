<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactUs;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share contactUs to all views
        View::composer('*', function ($view) {
            $data = $view->getData();
            if (!isset($data['contactUs'])) {
                $view->with('contactUs', ContactUs::first());
            }
        });
    }
}
