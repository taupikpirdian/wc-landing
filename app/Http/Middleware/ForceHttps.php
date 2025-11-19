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
            if (!$request->secure() && !$this->isBehindProxy($request)) {
                return redirect()->secure($request->getRequestUri());
            }
            URL::forceScheme('https');
        }

        return $next($request);
    }

    /**
     * Check if the request is behind a proxy that already handles HTTPS
     */
    protected function isBehindProxy(Request $request): bool
    {
        return $request->hasHeader('X-Forwarded-Proto') &&
               $request->header('X-Forwarded-Proto') === 'https';
    }
}