<!-- Header Main Area -->
<header class="site-header header-style-4">
    <div class="pbmit-header-overlay">
        <div class="site-header-menu">
            <div class="pbmit-main-header-area">
                <div class="container-fluid">
                    <div class="pbmit-header-content d-flex justify-content-between align-items-center">
                        <div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
                            <div class="site-branding">
                                <h1 class="site-title">
                                    @php($setting = \App\Models\Setting::first())
                                    @php($logoPath = ($setting && $setting->logo) ? $setting->logo : null)
                                    @php($logoUrl = $logoPath ? route('file', ['path' => $logoPath]) : asset('assets/images/logo-white.svg'))
                                    <a href="{{ route('home') }}">
                                        <!-- <img class="logo-img" src="{{ $logoUrl }}" alt="Xcleen" style="height:500px;width:auto;display:inline-block;"> -->
                                        <img src="{{ $logoUrl }}" class="pbmit-sticky-logo" alt="Xcleen" style="height:500px;width:auto;display:inline-block;">
                                    </a>
                                </h1>
                            </div>
                            <div class="site-navigation">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                    <div class="pbmit-mobile-menu-bg"></div>
                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                        <div class="pbmit-menu-wrap">
                                            <span class="closepanel">
                                                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                                    <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                                                    <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                                                </svg>
                                            </span>
                                            <ul class="navigation clearfix" id="header-navigation">
                                                <li class="@if(request()->segment(1) == '') active @endif"><a href="{{ route('home') }}" style="font-size: 16px !important;">Home</a></li>
                                                <li class="@if(request()->segment(1) == 'promo') active @endif"><a href="{{ route('promo') }}">Promo</a></li>
                                                <li class="@if(request()->segment(1) == 'layanan-kami') active @endif"><a href="{{ route('service-area') }}">Area Layanan</a></li>
                                                <li class="@if(request()->segment(1) == 'tentang-kami') active @endif"><a href="{{ route('about-us') }}">Tentang Kami</a></li>
                                                <li class="@if(request()->segment(1) == 'layanan-kami') active @endif"><a href="{{ route('services') }}">Layanan Kami</a></li>
                                                <li class="@if(request()->segment(1) == 'portfolio') active @endif"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                                <li class="@if(request()->segment(1) == 'blog') active @endif"><a href="{{ route('blog') }}">Blog</a></li>
                                                <li class="@if(request()->segment(1) == 'faq') active @endif"><a href="{{ route('faq') }}">Faq</a></li>
                                                <li class="@if(request()->segment(1) == 'hubungi-kami') active @endif"><a href="{{ route('contact-us') }}">Kontak Kami</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="pbmit-right-box d-flex align-items-center">
                            <!-- Mobile Hubungi Kami Button -->
                            <div class="d-xl-none me-3" style="margin-left: auto; margin-right: 50px !important;">
                                @php($rawMobile = $contactUs->mobile ?? null)
                                @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                                @php($wa = null)
                                @if($digits)
                                    @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits)))
                                @endif
                                <a class="pbmit-btn" href="{{ $wa ? ('https://wa.me/' . $wa) : '#' }}" @if($wa) target="_blank" rel="noopener" @endif style="padding: 8px 16px; font-size: 12px;">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0 0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 4px; vertical-align: middle;">
                                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                            </svg>
                                            Hubungi Kami
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="pbmit-right-box-button d-flex align-items-center">
                                {{-- <div class="pbmit-button-box pe-4" style="display: block !important;">
                                    <div class="pbmit-header-button">
                                        @php($rawMobile = $contactUs->mobile ?? null)
                                        @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                                        @php($wa = null)
                                        @if($digits)
                                            @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits)))
                                        @endif
                                        <a href="{{ $wa ? ('https://wa.me/' . $wa) : '#' }}" @if($wa) target="_blank" rel="noopener" @endif>
                                            <span class="pbmit-header-button-text-1">{{ $rawMobile ?? '+1(212)255-511' }}</span>
                                        </a>
                                    </div>
                                </div> --}}
                                <div class="pbmit-button-box-second">
                                    @php($rawMobile = $contactUs->mobile ?? null)
                                    @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                                    @php($wa = null)
                                    @if($digits)
                                        @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits)))
                                    @endif
                                    <a class="pbmit-btn" href="{{ $wa ? ('https://wa.me/' . $wa) : '#' }}" @if($wa) target="_blank" rel="noopener" @endif>
                                        <span class="pbmit-button-content-wrapper">
                                            <span class="pbmit-button-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                    <title>black-arrow</title>
                                                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                </svg>
                                            </span>
                                            <span class="pbmit-button-text" style="font-size: 14px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px; vertical-align: middle;">
                                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                </svg>
                                                Hubungi Kami
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="pbmit-sticky-corner  pbmit-top-left-corner">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 30V0C30 16 16 30 0 30H30Z" fill="#fba310"></path>
                                    </svg>
                                </div>
                                <div class="pbmit-sticky-corner pbmit-bottom-right-corner">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 30V0C30 16 16 30 0 30H30Z" fill="#fba310"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-slider-area pbmit-slider-four">
        <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="true" data-arrows="false" data-columns="1" data-margin="0" data-effect="fade">
            <div class="swiper-wrapper">
                @foreach($sliders as $s)
                    <div class="swiper-slide">
                        <div class="pbmit-slider-item">
                            @php($sliderImage = asset(str_replace("public/", "", $s->image_url)))
                            @php($isFirstSlider = $loop->first)
                            @php($isSecondSlider = $loop->index == 1)
                            <div class="pbmit-slider-bg">
                                <picture>
                                    <source
                                        media="(max-width: 767px)"
                                        srcset="{{ $sliderImage }}"
                                        width="767"
                                        height="1000"
                                    >
                                    <source
                                        media="(max-width: 1023px)"
                                        srcset="{{ $sliderImage }}"
                                        width="1023"
                                        height="800"
                                    >
                                    <img
                                        src="{{ $sliderImage }}"
                                        alt="{{ $s->title ?? 'Hero Slider' }}"
                                        @if($isFirstSlider) fetchpriority="high" @elseif($isSecondSlider) fetchpriority="auto" @endif
                                        decoding="async"
                                        loading="@if($isFirstSlider || $isSecondSlider) eager @else lazy @endif"
                                        style="position: absolute; top: 0; left: 0; object-fit: cover; width: 100%; height: 100%;"
                                        width="1920"
                                        height="1080"
                                        sizes="(max-width: 767px) 767px, (max-width: 1023px) 1023px, 1920px"
                                    >
                                </picture>
                            </div>
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <div class="pbmit-slider-content">
                                            <h5 class="pbmit-sub-title transform-delay-1">{{ $s->title }}</h5>
                                            <h2 class="pbmit-title transform-bottom transform-delay-2">{{ $s->desc }}</h2>
                                            <div class="pbmit-button d-flex justify-content-center">
                                                <div class="transform-bottom transform-delay-3 me-md-4 me-2">
                                                    <a class="pbmit-btn" href="{{ $wa ? ('https://wa.me/' . $wa) : '#' }}" @if($wa) target="_blank" rel="noopener" @endif style="background-color: #fba310; border-color: #fba310;">
                                                        <span class="pbmit-button-content-wrapper">
                                                            <span class="pbmit-button-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76" style="color: #000000 !important;">
                                                                    <title>black-arrow</title>
                                                                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000000 !important" stroke-width="2" style="stroke: #000000 !important;"></path>
                                                                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000000 !important" stroke-width="2" style="stroke: #000000 !important;"></path>
                                                                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000000 !important" stroke-width="2" style="stroke: #000000 !important;"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="pbmit-button-text" style="font-size: 18px; font-weight: bold; color: #000000;">Hubungi Kami</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</header>
<!-- Header Main Area End Here -->
