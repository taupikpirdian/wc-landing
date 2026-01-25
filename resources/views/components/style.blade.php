<!-- Critical CSS - Load Immediately -->
{{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
<link rel="stylesheet"
      href="{{ asset('assets/css/bootstrap.min.css') }}"
      media="print"
      onload="this.media='all'">
      
{{-- <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}"> --}}
<link rel="stylesheet"
      href="{{ asset('assets/css/base.css') }}"
      media="print"
      onload="this.media='all'">

<!-- CLS Fixes - Load Immediately to prevent layout shift -->
{{-- <link rel="stylesheet" href="{{ asset('assets/css/cls-fixes.css') }}"> --}}

<link rel="preload" href="{{ asset('assets/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"></noscript>

<!-- Animation Performance Optimizations - Load Immediately -->
{{-- <link rel="stylesheet" href="{{ asset('assets/css/animation-performance.css') }}"> --}}

<!-- Defer Non-Critical CSS -->
<link rel="preload" href="{{ asset('assets/css/fontawesome.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}"></noscript>

<link rel="preload" href="{{ asset('assets/css/pbminfotech-base-icons.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/pbminfotech-base-icons.css') }}"></noscript>

{{-- <link rel="preload" href="{{ asset('assets/css/themify-icons.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}"></noscript> --}}

<link rel="preload" href="{{ asset('assets/css/swiper.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}"></noscript>

{{-- <link rel="preload" href="{{ asset('assets/css/magnific-popup.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}"></noscript> --}}

<link rel="preload" href="{{ asset('assets/css/aos.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}"></noscript>

<link rel="preload" href="{{ asset('assets/css/shortcode.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/shortcode.css') }}"></noscript>

<link rel="preload" href="{{ asset('assets/css/responsive.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"></noscript>

<link rel="preload" href="{{ asset('assets/js/floating-whatsapp-message-button-jquery/floating-wpp.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('assets/js/floating-whatsapp-message-button-jquery/floating-wpp.min.css') }}"></noscript>

<style defer>
    /**
    * CLS (Cumulative Layout Shift) Fixes
    *
    * File ini berisi perbaikan untuk mencegah layout shift pada halaman
    * Fokus utama: Reserve space, prevent content reflow, stabilize dimensions
    */

    /*===========================================================
    1. HERO SECTION - FIXED HEIGHT (Score 0.492)
    ===========================================================*/

    /* Reserve fixed height untuk hero slider - mencegah shift besar */
    .pbmit-slider-area {
        min-height: 600px;
        height: 100vh;
        max-height: 1300px;
        position: relative;
    }

    /* Mobile version - adjust height for smaller screens */
    @media (max-width: 768px) {
        .pbmit-slider-area {
            height: 80vh;
            max-height: 30px;
        }
    }

    /**
    * Animation Performance Optimizations
    *
    * This file contains CSS optimizations to ensure all animations are GPU-accelerated
    * and composited, preventing janky animations and reducing CLS (Cumulative Layout Shift).
    *
    * Key Principles:
    * 1. Only animate transform and opacity for GPU acceleration
    * 2. Use will-change sparingly to hint browser optimizations
    * 3. Use translateZ(0) or transform: translate3d(0,0,0) to force GPU compositing
    * 4. Add backface-visibility: hidden to prevent rendering artifacts
    */

    /*===========================================================
    GLOBAL ANIMATION OPTIMIZATIONS
    ===========================================================*/

    /* Force GPU acceleration for all animated elements */
    .pbmit-title,
    .pbmit-sub-title,
    .pbmit-slider-content > *,
    .transform-left,
    .transform-right,
    .transform-top,
    .transform-bottom,
    .transform-center,
    .pbmit-animation-style1,
    .pbmit-animation-style2,
    .pbmit-animation-style3,
    .pbmit-animation-style4,
    .pbmit-animation-style5,
    .pbmit-animation-style6,
    .pbmit-animation-style7 {
        /* Force hardware acceleration */
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);

        /* Prevent rendering artifacts */
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;

        /* Hint browser for upcoming changes (use sparingly) */
        will-change: transform, opacity;

        /* Improve rendering performance */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    /* Clear will-change after animations complete */
    .swiper-slide-active .transform-left,
    .swiper-slide-active .transform-right,
    .swiper-slide-active .transform-top,
    .swiper-slide-active .transform-bottom,
    .swiper-slide-active .transform-center {
        will-change: auto;
    }

    /*===========================================================
    SPECIFIC ANIMATION FIXES
    ===========================================================*/

    /* Fix: Avoid animating non-composited properties */
    /* Only animate transform and opacity, never margin/padding/width/height */

    .pbmit-slider-area .transform-bottom,
    .pbmit-slider-area .transform-left,
    .pbmit-slider-area .transform-right,
    .pbmit-slider-area .transform-top,
    .pbmit-slider-area .transform-center {
        /* Use specific transition properties instead of 'all' */
        transition: transform 1000ms ease, opacity 1000ms ease;
        /* Never animate: margin, padding, width, height, font-size, color, line-height */
    }

    /*===========================================================
    REDUCE CLS (CUMULATIVE LAYOUT SHIFT)
    ===========================================================*/

    /* Reserve space for animated elements to prevent layout shifts */
    .pbmit-slider-content {
        contain: layout style paint;
    }

    .pbmit-heading-subheading {
        contain: layout style;
    }

    /*===========================================================
    OPTIMIZE PAINT COMPOSITING
    ===========================================================*/

    /* Reduce paint areas and promote to own layer */
    .pbmit-slider-area .swiper-slide {
        /* Create a new compositing layer for each slide */
        transform: translateZ(0);
        -webkit-transform: translateZ(0);

        /* Isolate compositing */
        contain: layout style paint;
    }

    /*===========================================================
    IMPROVE RENDERING PERFORMANCE
    ===========================================================*/

    /* Use content-visibility for elements outside viewport */
    .pbmit-element-portfolio-style-2,
    .pbmit-element-blog-style-1,
    .pbmit-element-service-style-1 {
        content-visibility: auto;
        contain-intrinsic-size: auto 500px;
    }

    /*===========================================================
    RESPONSIVE OPTIMIZATIONS
    ===========================================================*/

    @media (max-width: 1200px) {
        /* Reduce animation complexity on smaller screens */
        .pbmit-title,
        .pbmit-sub-title {
            will-change: auto;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        /* Respect user's motion preferences */
        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            will-change: auto !important;
        }
    }

    /*===========================================================
    SWIPER SLIDER - ASPECT RATIO FIX (CLS Prevention)
    ===========================================================*/

    /* Fix layout shifts by setting aspect-ratio for swiper slides */
    .swiper-slide {
        position: relative;
        /* Ensure slide has height before content loads */
        min-height: 300px;
    }

    /* Add aspect-ratio to images in swiper slides to prevent layout shift */
    .swiper-slide img {
        aspect-ratio: 16 / 9;
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
        /* Prevent image from causing layout shift while loading */
        background-color: transparent;
    }

    /* Specific fix for carousel with fade effect */
    .swiper-fade .swiper-slide {
        /* Reserve space for fade transitions */
        min-height: 400px;
    }

    /* Fix for slider area with background images */
    .pbmit-slider-area .swiper-slide {
        min-height: 600px;
        height: 100vh;
        max-height: 1300px;
    }

    @media (max-width: 768px) {
        .pbmit-slider-area .swiper-slide {
            min-height: 400px;
            height: 80vh;
        }

        .swiper-fade .swiper-slide {
            min-height: 250px;
        }

        .swiper-slide {
            min-height: 200px;
        }
    }

    /* Prevent content from shifting during slide transitions */
    .swiper-slide-active > * {
        contain: layout style paint;
    }
</style>
