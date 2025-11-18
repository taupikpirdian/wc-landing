<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

class PerformanceMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only apply to HTML responses
        if (!$response instanceof \Illuminate\Http\Response ||
            !$response->headers->has('content-type') ||
            !str_contains($response->headers->get('content-type'), 'text/html')) {
            return $response;
        }

        if (Config::get('seo.performance.minify_html', true)) {
            $response->setContent($this->minifyHtml($response->getContent()));
        }

        // Add performance headers
        $response->headers->set('X-Performance-Optimized', 'true');

        return $response;
    }

    /**
     * Minify HTML content
     */
    private function minifyHtml(string $html): string
    {
        // Remove comments (except for IE conditional comments)
        $html = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $html);

        // Remove whitespace between HTML tags
        $html = preg_replace('/>\s+</', '><', $html);

        // Remove multiple whitespace characters
        $html = preg_replace('/\s+/', ' ', $html);

        // Remove whitespace at the beginning and end of the string
        $html = trim($html);

        return $html;
    }
}