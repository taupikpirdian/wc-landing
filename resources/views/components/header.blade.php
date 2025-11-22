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
                                    <a href="index.html">
                                        <img class="logo-img" src="{{ asset('assets/images/logo-white.svg') }}" alt="Xcleen">
                                        <img src="{{ asset('assets/images/logo.svg') }}" class="pbmit-sticky-logo" alt="Xcleen">
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
                                            <ul class="navigation clearfix">
                                                <li class="@if(request()->segment(1) == '') active @endif"><a href="{{ route('home') }}">Home</a></li>
                                                <li class="@if(request()->segment(1) == 'tentang-kami') active @endif"><a href="{{ route('about-us') }}">Tentang Kami</a></li>
                                                <li class="@if(request()->segment(1) == 'layanan-kami') active @endif"><a href="{{ route('services') }}">Layanan Kami</a></li>
                                                <li class="@if(request()->segment(1) == 'portfolio') active @endif"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                                <li class="@if(request()->segment(1) == 'blog') active @endif"><a href="{{ route('blog') }}">Blog</a></li>
                                                <li class="@if(request()->segment(1) == 'faq') active @endif"><a href="{{ route('faq') }}">Faq</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="pbmit-right-box d-flex align-items-center">
                            <div class="pbmit-right-box-button d-flex align-items-center">
                                <div class="pbmit-button-box pe-4">
                                    <div class="pbmit-header-button">
                                        <a href="tel:+1(212)255-511">
                                            <span class="pbmit-header-button-text-1">+1(212)255-511</span>			
                                        </a>
                                    </div>
                                </div>
                                <div class="pbmit-button-box-second">
                                    <a class="pbmit-btn" href="{{ route('contact-us') }}">
                                        <span class="pbmit-button-content-wrapper">
                                            <span class="pbmit-button-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                    <title>black-arrow</title>
                                                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                </svg>
                                            </span>
                                            <span class="pbmit-button-text">Hubungi Kami</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="pbmit-sticky-corner  pbmit-top-left-corner">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 30V0C30 16 16 30 0 30H30Z" fill="red"></path>
                                    </svg>
                                </div>
                                <div class="pbmit-sticky-corner pbmit-bottom-right-corner">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30 30V0C30 16 16 30 0 30H30Z" fill="red"></path>
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
                            <div class="pbmit-slider-bg" style="background-image: url({{ asset(str_replace("public/", "", $s->image_url)) }});"></div>
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <div class="pbmit-slider-content">
                                            <h5 class="pbmit-sub-title transform-delay-1">{{ $s->title }}</h5>
                                            <h2 class="pbmit-title transform-bottom transform-delay-2">{{ $s->desc }}</h2>
                                            <div class="pbmit-button d-flex justify-content-center">
                                                <div class="transform-bottom transform-delay-3 me-md-4 me-2">
                                                    <a class="pbmit-btn pbmit-btn-hover-blackish" href="{{ route('contact-us') }}">
                                                        <span class="pbmit-button-content-wrapper">
                                                            <span class="pbmit-button-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                                    <title>black-arrow</title>
                                                                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="pbmit-button-text">Hubungi Kami</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="transform-bottom transform-delay-4">
                                                    <a class="pbmit-btn pbmit-btn-global" href="{{ route('contact-us') }}">
                                                        <span class="pbmit-button-content-wrapper">
                                                            <span class="pbmit-button-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                                    <title>black-arrow</title>
                                                                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="pbmit-button-text">Get a Quote</span>
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
