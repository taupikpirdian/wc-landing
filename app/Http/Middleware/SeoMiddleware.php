<?php

namespace App\Http\Middleware;

use App\Services\SeoService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class SeoMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Set SEO data based on current route BEFORE processing the request
        $seoService = $this->getSeoServiceForRoute($request);

        // Share SEO data with all views
        View::share('seoService', $seoService);

        $response = $next($request);

        // Add security headers
        if ($response instanceof \Illuminate\Http\Response) {
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
            $response->headers->set('X-XSS-Protection', '1; mode=block');
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

            if (app()->environment('production')) {
                $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
            }
        }

        return $response;
    }

    /**
     * Get SEO service instance based on current route
     */
    private function getSeoServiceForRoute(Request $request): SeoService
    {
        $routeName = $request->route()?->getName();
        $path = $request->path();

        return match ($routeName) {
            'home' => SeoService::forHome(),
            'services' => SeoService::forServices(),
            'about-us' => SeoService::forAbout(),
            'contact-us' => SeoService::forContact(),
            'blog' => SeoService::forBlog(),
            'portfolio' => SeoService::forPage(
                'Portfolio - Proyek Sedot WC Berhasil | Sedot WC Resmi',
                'Lihat portfolio proyek jasa sedot WC yang telah kami kerjakan. Dokumentasi pekerjaan profesional dan hasil terbaik.',
                [
                    'keywords' => ['portfolio sedot wc', 'proyek sedot wc', 'dokumentasi pekerjaan'],
                    'image' => asset('assets/images/og-portfolio.jpg'),
                ]
            ),
            'faq' => SeoService::forPage(
                'FAQ - Pertanyaan Umum Jasa Sedot WC | Sedot WC Resmi',
                'Temukan jawaban pertanyaan umum seputar jasa sedot WC. Panduan lengkap untuk layanan profesional kami.',
                [
                    'keywords' => ['faq sedot wc', 'pertanyaan sedot wc', 'jawaban sedot wc'],
                    'image' => asset('assets/images/og-faq.jpg'),
                ]
            ),
            default => SeoService::forPage(
                'Sedot WC Resmi - Jasa Profesional 24/7',
                'Jasa sedot WC resmi dan terpercaya dengan layanan 24 jam. Tenaga ahli, peralatan modern, harga terjangkau.',
                [
                    'keywords' => ['sedot wc', 'jasa sedot wc', 'sedot wc profesional'],
                ]
            )
        };
    }
}