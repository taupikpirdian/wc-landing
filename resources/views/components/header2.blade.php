<header class="site-header header-style-1">
    <div class="site-header-menu">
        <div class="pbmit-main-header-area pbmit-bg-color-white">
            <div class="container-fluid">
                <div class="pbmit-header-content d-flex justify-content-between align-items-center">
                    <div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
                        <div class="site-branding">
                            <h1 class="site-title">
                                @php($setting = \App\Models\Setting::first())
                                @php($logoUrl = $setting && $setting->logo_url ? asset(str_replace('public/', '', $setting->logo_url)) : asset('assets/images/logo.svg'))
                                <a href="{{ route('home') }}">
                                    <img class="logo-img" src="{{ $logoUrl }}" alt="Xcleen">
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
                                            <li class="dropdown @if(request()->segment(1) == '') active @endif">
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li class="dropdown @if(request()->segment(1) == 'tentang-kami') active @endif">
                                                <a href="{{ route('about-us') }}">Tentang Kami</a>
                                            </li>
                                            <li class="dropdown @if(request()->segment(1) == 'layanan-kami') active @endif">
                                                <a href="{{ route('services') }}">Layanan Kami</a>
                                            </li>
                                            <li class="dropdown @if(request()->segment(1) == 'portfolio') active @endif">
                                                <a href="{{ route('portfolio') }}">Portfolio</a>
                                            </li>
                                            <li class="dropdown @if(request()->segment(1) == 'blog') active @endif">
                                                <a href="{{ route('blog') }}">Blog</a>
                                            </li>
                                            <li class="dropdown @if(request()->segment(1) == 'faq') active @endif"><a href="{{ route('faq') }}">Faq</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="pbmit-right-box d-flex align-items-center">
                        <div class="pbmit-button-box">
                            <div class="pbmit-header-button">
                                @php($contactUs = isset($contactUs) ? $contactUs : \App\Models\ContactUs::first())
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
                        </div>
                        <div class="pbmit-header-search-btn">
                            <a href="#" title="Search">
                                <i class="pbmit-base-icon-search-1"></i>
                            </a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
