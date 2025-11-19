<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Force HTTPS in production and development environments
        if (config('app.env') === 'production' || config('app.env') === 'development') {
            if (!$request->secure()) {
                return redirect()->secure($request->getRequestUri());
            }
        }

        // Force asset URLs to use HTTPS
        if (config('app.env') === 'production' || config('app.env') === 'development') {
            URL::forceScheme('https');
        }

        return $next($request);
    }
}