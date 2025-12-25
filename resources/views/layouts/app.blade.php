<!doctype html>
<html class="no-js" lang="id">
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TKJJ4D24');</script>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@include('components.seo')
		@include('components.style')
		<style>.floating-wpp{bottom:20px !important; right:20px !important;} .pbmit-progress-wrap{right:90px !important; bottom:20px !important;}</style>
	</head>
	<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKJJ4D24"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
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
	<div class="floating-wpp"></div>
	@include('components.script')
	<script>
		$(function(){
			function formatPhone(phone){
				if (!phone) return '';
				phone = String(phone).replace(/\D/g, '');
				if (phone.startsWith('0')) return '62' + phone.slice(1);
				if (phone.startsWith('62')) return phone;
				return phone;
			}
			const phone = formatPhone(@json($contactUs->phone ?? null));
			if (typeof $.fn.floatingWhatsApp === 'function' && phone && $('.floating-wpp').length) {
				$('.floating-wpp').floatingWhatsApp({
					phone: phone,
					popupMessage: 'Halo! Ada yang bisa kami bantu?',
					showPopup: true,
					message: 'Halo, saya ingin konsultasi layanan.',
					headerTitle: 'Sedot WC Resmi',
					position: 'right',
					size: '60px',
					zIndex: 1000
				});
			}
		});
	</script>
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
