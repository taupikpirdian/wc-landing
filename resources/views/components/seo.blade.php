@php
use App\Services\SeoService;

// SEO Component for Laravel Applications
// Usage: <x-seo :seo="$seoService" />
// Props: $seoService (SeoService instance)

// Simple fallback - always create basic SEO if not provided
if (!isset($seoService)) {
    $seoService = SeoService::forPage(
        config('app.name', 'Sedot WC Resmi'),
        'Jasa profesional sedot WC terpercaya dengan layanan cepat, bersih, dan terjangkau.'
    );
}

$meta = $seoService->getMetaTags();
$openGraph = $seoService->getOpenGraph();
$twitter = $seoService->getTwitter();
$jsonLd = $seoService->getJsonLd();
@endphp

<!-- Basic Meta Tags -->
<title>{{ $meta['title'] }}</title>
<meta name="description" content="{{ $meta['description'] }}">
<meta name="keywords" content="{{ $meta['keywords'] }}">
<meta name="robots" content="{{ $meta['robots'] }}">
<meta name="author" content="{{ $meta['author'] ?? config('app.name') }}">
<meta name="language" content="id">
<meta name="generator" content="Laravel SEO Optimizer">

<!-- Canonical URL -->
<link rel="canonical" href="{{ $meta['canonical'] }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $openGraph['type'] }}">
<meta property="og:site_name" content="{{ $openGraph['site_name'] }}">
<meta property="og:title" content="{{ $openGraph['title'] }}">
<meta property="og:description" content="{{ $openGraph['description'] }}">
<meta property="og:url" content="{{ $openGraph['url'] }}">
<meta property="og:image" content="{{ $openGraph['image'] }}">
<meta property="og:image:alt" content="{{ $openGraph['image:alt'] }}">
<meta property="og:image:width" content="{{ $openGraph['image:width'] }}">
<meta property="og:image:height" content="{{ $openGraph['image:height'] }}">
<meta property="og:locale" content="{{ $openGraph['locale'] }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="{{ $twitter['card'] }}">
<meta name="twitter:site" content="{{ $twitter['site'] }}">
<meta name="twitter:title" content="{{ $twitter['title'] }}">
<meta name="twitter:description" content="{{ $twitter['description'] }}">
<meta name="twitter:image" content="{{ $twitter['image'] }}">
<meta name="twitter:image:alt" content="{{ $twitter['image:alt'] }}">

<!-- Article Meta (if applicable) -->
@if(isset($meta['published_time']))
<meta property="article:published_time" content="{{ $meta['published_time'] }}">
<meta property="article:modified_time" content="{{ $meta['modified_time'] }}">
@endif

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{!! json_encode($jsonLd, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>

<!-- Favicon and App Icons -->
<link rel="icon" type="image/x-icon" href="{{ asset('images/fevicon.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

<!-- Theme Color -->
<meta name="theme-color" content="#2563eb">
<meta name="msapplication-TileColor" content="#2563eb">

<!-- Resource Hints -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//www.googletagmanager.com">

<!-- Preload Critical CSS -->
<link rel="preload" href="{{ asset('assets/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">

<noscript>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</noscript>

<!-- Manifest (for PWA) -->
<link rel="manifest" href="{{ asset('manifest.json') }}">