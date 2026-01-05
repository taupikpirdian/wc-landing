<!-- Basic Meta Tags -->
<title>{{ $seoService->getMetaTags()['title'] }}</title>
<meta name="description" content="{{ $seoService->getMetaTags()['description'] }}">
<meta name="keywords" content="{{ $seoService->getMetaTags()['keywords'] }}">
<meta name="robots" content="{{ $seoService->getMetaTags()['robots'] }}">
<meta name="author" content="{{ $seoService->getMetaTags()['author'] ?? config('app.name') }}">
<meta name="language" content="id">
<meta name="generator" content="Laravel SEO Optimizer">

<!-- Canonical URL -->
<link rel="canonical" href="{{ $seoService->getMetaTags()['canonical'] }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $seoService->getMetaTags()['openGraph']['type'] }}">
<meta property="og:site_name" content="{{ $seoService->getMetaTags()['openGraph']['site_name'] }}">
<meta property="og:title" content="{{ $seoService->getMetaTags()['openGraph']['title'] }}">
<meta property="og:description" content="{{ $seoService->getMetaTags()['openGraph']['description'] }}">
<meta property="og:url" content="{{ $seoService->getMetaTags()['openGraph']['url'] }}">
<meta property="og:image" content="{{ $seoService->getMetaTags()['openGraph']['image'] }}">
<meta property="og:image:alt" content="{{ $seoService->getMetaTags()['openGraph']['image:alt'] }}">
<meta property="og:image:width" content="{{ $seoService->getMetaTags()['openGraph']['image:width'] }}">
<meta property="og:image:height" content="{{ $seoService->getMetaTags()['openGraph']['image:height'] }}">
<meta property="og:locale" content="{{ $seoService->getMetaTags()['openGraph']['locale'] }}">

<!-- Twitter Card use Open Graph -->
<meta name="twitter:card" content="{{ $seoService->getMetaTags()['twitter']['card'] }}">
<meta name="twitter:site" content="{{ $seoService->getMetaTags()['twitter']['site'] }}">
<meta name="twitter:title" content="{{ $seoService->getMetaTags()['twitter']['title'] }}">
<meta name="twitter:description" content="{{ $seoService->getMetaTags()['twitter']['description'] }}">
<meta name="twitter:image" content="{{ $seoService->getMetaTags()['twitter']['image'] }}">
<meta name="twitter:image:alt" content="{{ $seoService->getMetaTags()['twitter']['image:alt'] }}">

<!-- Favicon and App Icons -->
<!-- <link rel="icon" type="image/x-icon" href="{{ asset('images/fevicon.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}"> -->

<!-- PWA Manifest -->
<link rel="manifest" href="{{ asset('manifest.json') }}">

<!-- Theme Color -->
<meta name="theme-color" content="#2563eb">
<meta name="msapplication-TileColor" content="#2563eb">

<!-- Stylesheets -->
<!-- Resource Hints -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//www.googletagmanager.com">
<!-- Preload Critical Fonts -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"></noscript>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"></noscript>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"></noscript>	
@php($gaId = config('seo.analytics.google_analytics_id'))
@if($gaId)
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $gaId }}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '{{ $gaId }}', { anonymize_ip: true });

// Check already start
if (window.gtag) {
    console.log('Google Analytics already started');
}
</script>
@endif
