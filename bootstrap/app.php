<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'seo' => \App\Http\Middleware\SeoMiddleware::class,
            'force.https' => \App\Http\Middleware\ForceHttps::class,
            'trust.proxies' => \App\Http\Middleware\TrustProxies::class,
        ]);

        // Apply HTTPS middleware to all web routes in production
        $middleware->web(\App\Http\Middleware\ForceHttps::class);
        $middleware->web(\App\Http\Middleware\TrustProxies::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
