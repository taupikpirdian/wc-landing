<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Services – Xcleen Demo1 HTML Template</title>
	<meta name="robots" content="noindex, follow">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- SEO Meta Tags -->
    <x-seo :seo="$seoService" />

    <!-- Stylesheets -->
    @include('components.style')
   </head>

   <body>
	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<!-- Header Main Area -->
		@include('components.header2')
		<!-- Header Main Area End Here -->

		<!-- Title Bar -->
		@yield('title-bar')
		<!-- Title Bar End-->

		<div class="page-content">  
			@yield('content')
		</div>
         
		@include('components.footer')
    </div>
    <!-- Page Wrapper End -->

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
   </body>
</html>