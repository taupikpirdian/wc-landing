<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RobotsController extends Controller
{
    /**
     * Generate dynamic robots.txt
     */
    public function index()
    {
        $content = $this->generateRobotsTxt();

        return response($content)
            ->header('Content-Type', 'text/plain')
            ->header('Cache-Control', 'public, max-age=86400'); // Cache for 24 hours
    }

    /**
     * Generate robots.txt content
     */
    private function generateRobotsTxt(): string
    {
        $baseUrl = config('app.url');
        $environment = config('app.env');

        $content = "# Robots.txt for Sedot WC Resmi\n";
        $content .= "# Generated on: " . now()->format('Y-m-d H:i:s') . "\n\n";

        // User-Agent rules
        $content .= "User-agent: *\n";

        if ($environment === 'production') {
            // Production environment rules
            $content .= "Allow: /\n";
            $content .= "Allow: /assets/\n";
            $content .= "Allow: /images/\n";
            $content .= "Allow: /css/\n";
            $content .= "Allow: /js/\n\n";

            // Disallow admin routes
            $content .= "Disallow: /admin/\n";
            $content .= "Disallow: /login\n";
            $content .= "Disallow: /register\n";
            $content .= "Disallow: /password/\n";
            $content .= "Disallow: /verify/\n";
            $content .= "Disallow: /*.json$\n";
            $content .= "Disallow: /?\n";
        } else {
            // Non-production environment - block all indexing
            $content .= "Disallow: /\n";
        }

        $content .= "\n";

        // Crawl-delay for specific bots
        $content .= "User-agent: Googlebot\n";
        $content .= "Crawl-delay: 1\n\n";

        $content .= "User-agent: Bingbot\n";
        $content .= "Crawl-delay: 1\n\n";

        // Allow specific search engines
        if ($environment === 'production') {
            $content .= "User-agent: Googlebot\n";
            $content .= "Allow: /\n\n";

            $content .= "User-agent: Googlebot-Image\n";
            $content .= "Allow: /\n\n";

            $content .= "User-agent: Bingbot\n";
            $content .= "Allow: /\n\n";

            $content .= "User-agent: Slurp\n";
            $content .= "Allow: /\n\n";

            $content .= "User-agent: DuckDuckBot\n";
            $content .= "Allow: /\n\n";
        }

        // Sitemap location
        if ($environment === 'production') {
            $content .= "\n";
            $content .= "# Sitemap\n";
            $content .= "Sitemap: " . $baseUrl . "/sitemap.xml\n";
            $content .= "Sitemap: " . $baseUrl . "/sitemap-main.xml\n";
        }

        // Additional directives
        $content .= "\n";
        $content .= "# Host directive (for Yandex)\n";
        if ($environment === 'production') {
            $content .= "Host: " . parse_url($baseUrl, PHP_URL_HOST) . "\n";
        }

        return $content;
    }
}