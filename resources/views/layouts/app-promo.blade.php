<!doctype html>
<html class="no-js" lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>SedotWC Resmi - Layanan Sedot WC Profesional 24/7</title>
		@include('components.seo')
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

		<style>
			* {
				font-family: 'Inter', sans-serif;
			}

			body {
				overflow-x: hidden;
			}

			/* Header Styles */
			.navbar {
				padding: 1rem 0;
				background-color: #FFFFFF;
				box-shadow: 0 2px 4px rgba(0,0,0,0.05);
			}

			.navbar-brand {
				font-weight: 700;
				font-size: 1.25rem;
				color: #1A2B3C !important;
			}

			.navbar-brand i {
				color: #479EF6;
				margin-right: 0.5rem;
			}

			.nav-link {
				color: #607284 !important;
				font-weight: 500;
				margin: 0 1rem;
				transition: color 0.3s ease;
			}

			.nav-link:hover {
				color: #479EF6 !important;
			}

			.btn-phone-header {
				background-color: #479EF6;
				color: white;
				border: none;
				padding: 0.6rem 1.5rem;
				border-radius: 8px;
				font-weight: 600;
				transition: all 0.3s ease;
			}

			.btn-phone-header:hover {
				background-color: #3685D6;
				transform: translateY(-2px);
				box-shadow: 0 4px 12px rgba(71, 158, 246, 0.3);
			}

			/* Hero Section */
			.hero-section {
				background: linear-gradient(135deg, #F9FCFF 0%, #FFFFFF 100%);
				padding: 4rem 0 6rem 0;
				position: relative;
			}

			.hero-badge {
				display: inline-flex;
				align-items: center;
				background-color: #E0F2FE;
				color: #479EF6;
				padding: 0.5rem 1rem;
				border-radius: 50px;
				font-size: 0.875rem;
				font-weight: 600;
				margin-bottom: 1.5rem;
			}

			.hero-badge i {
				margin-right: 0.5rem;
			}

			.hero-title {
				font-size: 3.5rem;
				font-weight: 800;
				color: #1A2B3C;
				line-height: 1.2;
				margin-bottom: 1.5rem;
			}

			.hero-title span {
				color: #479EF6;
			}

			.hero-subtitle {
				font-size: 1.125rem;
				color: #607284;
				line-height: 1.7;
				margin-bottom: 2rem;
			}

			.btn-whatsapp {
				background-color: #25D366;
				color: white;
				border: none;
				padding: 1rem 2rem;
				border-radius: 10px;
				font-weight: 600;
				font-size: 1rem;
				margin-right: 1rem;
				transition: all 0.3s ease;
				display: inline-flex;
				align-items: center;
			}

			.btn-whatsapp:hover {
				background-color: #1FAD53;
				transform: translateY(-2px);
				box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
				color: white;
			}

			.btn-whatsapp i {
				margin-right: 0.75rem;
				font-size: 1.25rem;
			}

			.btn-phone {
				background-color: white;
				color: #1A2B3C;
				border: 2px solid #E5E7EB;
				padding: 1rem 2rem;
				border-radius: 10px;
				font-weight: 600;
				font-size: 1rem;
				transition: all 0.3s ease;
				display: inline-flex;
				align-items: center;
			}

			.btn-phone:hover {
				border-color: #479EF6;
				color: #479EF6;
				transform: translateY(-2px);
				box-shadow: 0 6px 20px rgba(71, 158, 246, 0.2);
			}

			.btn-phone i {
				margin-right: 0.75rem;
				font-size: 1.25rem;
			}

			.hero-features {
				display: flex;
				gap: 2rem;
				margin-top: 3rem;
			}

			.hero-feature-item {
				display: flex;
				align-items: center;
				color: #607284;
				font-size: 0.875rem;
			}

			.hero-feature-item i {
				color: #479EF6;
				margin-right: 0.5rem;
			}

			.hero-card {
				background: white;
				border-radius: 20px;
				padding: 2.5rem;
				box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
				text-align: center;
				position: relative;
			}

			.hero-card-icon {
				width: 120px;
				height: 120px;
				background: linear-gradient(135deg, #E0F2FE 0%, #F0F9FF 100%);
				border-radius: 20px;
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 0 auto 1.5rem auto;
			}

			.hero-card-icon i {
				font-size: 3rem;
				color: #479EF6;
			}

			.hero-card-title {
				font-size: 1.25rem;
				font-weight: 700;
				color: #1A2B3C;
				margin-bottom: 0.5rem;
			}

			.hero-card-subtitle {
				font-size: 0.875rem;
				color: #9CA3AF;
				margin-bottom: 1.5rem;
			}

			.hero-card-rating {
				display: inline-flex;
				align-items: center;
				background-color: #F0FDF4;
				padding: 0.75rem 1.5rem;
				border-radius: 50px;
				margin-top: 1rem;
			}

			.hero-card-rating i {
				color: #10B981;
				margin-right: 0.5rem;
				font-size: 1.25rem;
			}

			.hero-card-rating-text {
				font-size: 1.25rem;
				font-weight: 700;
				color: #1A2B3C;
			}

			.hero-card-rating-subtext {
				font-size: 0.75rem;
				color: #6B7280;
				display: block;
				margin-top: 0.25rem;
			}

			/* Section Styles */
			.section-title {
				font-size: 2.5rem;
				font-weight: 800;
				color: #1A2B3C;
				text-align: center;
				margin-bottom: 1rem;
			}

			.section-subtitle {
				font-size: 1.125rem;
				color: #607284;
				text-align: center;
				margin-bottom: 4rem;
				max-width: 700px;
				margin-left: auto;
				margin-right: auto;
			}

			/* Feature Cards */
			.feature-section {
				padding: 5rem 0;
				background-color: #FFFFFF;
			}

			.feature-card {
				text-align: center;
				padding: 2rem 1.5rem;
				border-radius: 15px;
				transition: all 0.3s ease;
				background: white;
				border: 1px solid #F3F4F6;
			}

			.feature-card:hover {
				transform: translateY(-5px);
				box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
				border-color: #E0F2FE;
			}

			.feature-icon {
				width: 70px;
				height: 70px;
				background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 100%);
				border-radius: 15px;
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 0 auto 1.5rem auto;
			}

			.feature-icon.green {
				background: linear-gradient(135deg, #D1FAE5 0%, #A7F3D0 100%);
			}

			.feature-icon.blue {
				background: linear-gradient(135deg, #DBEAFE 0%, #BFDBFE 100%);
			}

			.feature-icon.emerald {
				background: linear-gradient(135deg, #D1FAE5 0%, #A7F3D0 100%);
			}

			.feature-icon i {
				font-size: 2rem;
				color: #1A2B3C;
			}

			.feature-title {
				font-size: 1.125rem;
				font-weight: 700;
				color: #1A2B3C;
				margin-bottom: 0.75rem;
			}

			.feature-description {
				font-size: 0.875rem;
				color: #6B7280;
				line-height: 1.6;
			}

			/* Service Cards */
			.service-section {
				padding: 5rem 0;
				background: linear-gradient(135deg, #F9FCFF 0%, #FFFFFF 100%);
			}

			.service-card {
				background: white;
				border-radius: 20px;
				padding: 2.5rem;
				box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
				height: 100%;
				transition: all 0.3s ease;
				border: 1px solid #F3F4F6;
			}

			.service-card:hover {
				transform: translateY(-5px);
				box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
			}

			.service-icon {
				width: 60px;
				height: 60px;
				background: linear-gradient(135deg, #E0F2FE 0%, #BAE6FD 100%);
				border-radius: 12px;
				display: flex;
				align-items: center;
				justify-content: center;
				margin-bottom: 1.5rem;
			}

			.service-icon i {
				font-size: 1.75rem;
				color: #479EF6;
			}

			.service-title {
				font-size: 1.25rem;
				font-weight: 700;
				color: #1A2B3C;
				margin-bottom: 1rem;
			}

			.service-description {
				font-size: 0.9375rem;
				color: #6B7280;
				line-height: 1.7;
				margin-bottom: 1.5rem;
			}

			.btn-service {
				background-color: transparent;
				color: #479EF6;
				border: none;
				padding: 0;
				font-weight: 600;
				font-size: 0.9375rem;
				transition: all 0.3s ease;
				display: inline-flex;
				align-items: center;
			}

			.btn-service:hover {
				color: #3685D6;
			}

			.btn-service i {
				margin-left: 0.5rem;
				transition: transform 0.3s ease;
			}

			.btn-service:hover i {
				transform: translateX(5px);
			}

			/* Testimonial Section */
			.testimonial-section {
				padding: 5rem 0;
				background-color: #FFFFFF;
			}

			.testimonial-section .carousel {
				position: relative;
			}

			.testimonial-section .carousel-indicators {
				position: relative;
				margin-bottom: 2rem;
			}

			.testimonial-section .carousel-indicators [data-bs-target] {
				width: 12px;
				height: 12px;
				border-radius: 50%;
				background-color: #E5E7EB;
				border: none;
				opacity: 1;
				margin: 0 6px;
				transition: all 0.3s ease;
			}

			.testimonial-section .carousel-indicators [data-bs-target].active {
				background-color: #479EF6;
				width: 32px;
				border-radius: 6px;
			}

			.testimonial-section .carousel-control-prev,
			.testimonial-section .carousel-control-next {
				width: 50px;
				height: 50px;
				background-color: white;
				border-radius: 50%;
				top: 50%;
				transform: translateY(-50%);
				opacity: 0;
				transition: all 0.3s ease;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
			}

			.testimonial-section:hover .carousel-control-prev,
			.testimonial-section:hover .carousel-control-next {
				opacity: 1;
			}

			.testimonial-section .carousel-control-prev {
				left: -25px;
			}

			.testimonial-section .carousel-control-next {
				right: -25px;
			}

			.testimonial-section .carousel-control-prev:hover,
			.testimonial-section .carousel-control-next:hover {
				background-color: #479EF6;
			}

			.testimonial-section .carousel-control-prev-icon,
			.testimonial-section .carousel-control-next-icon {
				width: 20px;
				height: 20px;
			}

			.testimonial-card {
				background: white;
				border-radius: 20px;
				padding: 2.5rem;
				box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
				height: 100%;
				border: 1px solid #F3F4F6;
				transition: all 0.3s ease;
			}

			.testimonial-card:hover {
				transform: translateY(-5px);
				box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
			}

			.testimonial-stars {
				color: #FCD34D;
				margin-bottom: 1.5rem;
				font-size: 1.25rem;
			}

			.testimonial-text {
				font-size: 1rem;
				color: #1A2B3C;
				line-height: 1.7;
				margin-bottom: 1.5rem;
				font-style: italic;
			}

			.testimonial-author {
				display: flex;
				align-items: center;
			}

			.testimonial-avatar {
				width: 50px;
				height: 50px;
				background: linear-gradient(135deg, #E0F2FE 0%, #BAE6FD 100%);
				border-radius: 50%;
				display: flex;
				align-items: center;
				justify-content: center;
				margin-right: 1rem;
				font-weight: 700;
				color: #479EF6;
				font-size: 1.125rem;
			}

			.testimonial-avatar-img img {
				width: 50px;
				height: 50px;
				border-radius: 50%;
				object-fit: cover;
				margin-right: 1rem;
			}

			.testimonial-author-name {
				font-weight: 700;
				color: #1A2B3C;
				margin-bottom: 0.25rem;
			}

			.testimonial-author-location {
				font-size: 0.875rem;
				color: #6B7280;
			}

			/* FAQ Section */
			.faq-section {
				padding: 5rem 0;
				background: linear-gradient(135deg, #F9FCFF 0%, #FFFFFF 100%);
			}

			.accordion-item {
				border: 1px solid #E5E7EB;
				border-radius: 12px !important;
				margin-bottom: 1rem;
				overflow: hidden;
			}

			.accordion-button {
				font-weight: 600;
				color: #1A2B3C;
				background-color: white;
				padding: 1.25rem 1.5rem;
				font-size: 1rem;
			}

			.accordion-button:not(.collapsed) {
				background-color: #F9FAFB;
				color: #479EF6;
				box-shadow: none;
			}

			.accordion-button:focus {
				box-shadow: none;
				border-color: #E5E7EB;
			}

			.accordion-button::after {
				background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23479EF6'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
			}

			.accordion-body {
				padding: 1.25rem 1.5rem;
				color: #6B7280;
				line-height: 1.7;
			}

			/* Footer */
			.footer {
				background-color: #1A2B3C;
				color: white;
				padding: 3rem 0 1.5rem 0;
			}

			.footer-brand {
				font-size: 1.5rem;
				font-weight: 700;
				margin-bottom: 1rem;
			}

			.footer-brand i {
				color: #479EF6;
				margin-right: 0.5rem;
			}

			.footer-text {
				color: #9CA3AF;
				margin-bottom: 1.5rem;
				line-height: 1.7;
			}

			.footer-copyright {
				text-align: center;
				color: #6B7280;
				padding-top: 2rem;
				margin-top: 2rem;
				border-top: 1px solid rgba(255, 255, 255, 0.1);
			}

			/* Responsive */
			@media (max-width: 768px) {
				.hero-title {
					font-size: 2.5rem;
				}

				.section-title {
					font-size: 2rem;
				}

				.hero-features {
					flex-direction: column;
					gap: 1rem;
				}

				.btn-whatsapp,
				.btn-phone {
					width: 100%;
					justify-content: center;
					margin-bottom: 1rem;
				}

				.navbar-collapse {
					padding-left: 1.5rem !important;
				}

				.nav-link {
					padding: 0.75rem 0 !important;
					margin: 0 !important;
				}

				.btn-phone-header {
					margin-left: 0 !important;
					margin-top: 1rem;
				}

				.hero-section .container {
					padding-left: 1.5rem;
					padding-right: 1.5rem;
				}

				.feature-section .container,
				.service-section .container,
				.testimonial-section .container,
				.faq-section .container {
					padding-left: 1.5rem;
					padding-right: 1.5rem;
				}

				.footer .container {
					padding-left: 1.5rem;
					padding-right: 1.5rem;
				}
			}
		</style>
	</head>
	<body>
		<!-- Navbar -->
		@include('components.header-promo')
		<!-- page content -->
		@yield('content')
		<!-- page content End -->

		<!-- Footer -->
		@include('components.footer-promo')

		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Structured Data (JSON-LD) -->
		<script type="application/ld+json">
			{!! json_encode($seoService->getMetaTags()['jsonLd'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
		</script>
		<script>
			// Smooth scroll for anchor links
			document.querySelectorAll('a[href^="#"]').forEach(anchor => {
				anchor.addEventListener('click', function (e) {
					e.preventDefault();
					const target = document.querySelector(this.getAttribute('href'));
					if (target) {
						target.scrollIntoView({
							behavior: 'smooth',
							block: 'start'
						});
					}
				});
			});

			// Navbar background on scroll
			window.addEventListener('scroll', function() {
				const navbar = document.querySelector('.navbar');
				if (window.scrollY > 50) {
					navbar.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
				} else {
					navbar.style.boxShadow = '0 2px 4px rgba(0,0,0,0.05)';
				}
			});
		</script>
	</body>
</html>
