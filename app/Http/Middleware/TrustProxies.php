<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */
    protected $proxies = '*';

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;

    /**
     * Determine if the request should be trusted.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function shouldTrustProxy(Request $request): bool
    {
        // Always trust proxies in production
        if (config('app.env') === 'production' || config('app.env') === 'development') {
            return true;
        }

        return parent::shouldTrustProxy($request);
    }
}