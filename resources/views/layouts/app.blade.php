<!doctype html>
<html class="no-js" lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@include('components.seo')
		@include('components.style')
	</head>
	<body>
	<!-- page wrapper -->
	<div class="page-wrapper" id="page">
		@include('components.header')
		<!-- page content -->
		<div class="page-content">
			@yield('content')
		</div>
		<!-- page content End -->
		@include('components.footer')
	</div>
	<!-- page wrapper End -->

	<!-- Search Box Start Here -->
	<div class="pbmit-search-overlay">
		<div class="pbmit-icon-close">
			<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
				<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
				<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
			</svg>
		</div>
		<div class="pbmit-search-outer"> 
			<form class="pbmit-site-searchform">
				<input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
				<button type="submit"></button>
			</form>
		</div>
	</div>
	<!-- Search Box End Here -->

	<!-- Scroll To Top -->
	<div class="pbmit-progress-wrap">
		<svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
		</svg>	
	</div>
	<!-- Scroll To Top End -->
	@include('components.script')
	<!-- Structured Data (JSON-LD) -->
	<script type="application/ld+json">
		{!! json_encode($seoService->getMetaTags()['jsonLd'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
	</script>
	<noscript>
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	</noscript>
	</body>
</html>
