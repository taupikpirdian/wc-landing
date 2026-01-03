<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        @php($setting = \App\Models\Setting::first())
        @php($logoUrl = $setting && $setting->logo_url ? asset(str_replace('public/', '', $setting->logo_url)) : null)
        <a class="navbar-brand" href="{{ route('home') }}">
            @if($logoUrl)
                <img src="{{ $logoUrl }}" alt="SedotWCResmi" style="height: 40px;">
                SedotWC<span style="color: #479EF6;"> Resmi</span>
            @else
                <i class="fas fa-toilet"></i>
                SedotWC<span style="color: #479EF6;">Resmi</span>
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#keunggulan">Keunggulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    @php($rawMobile = $contactUs->mobile ?? '08513277679')
                    @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                    @php($wa = null)
                    @if($digits)
                        @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits)))
                    @endif
                    <a href="https://wa.me/{{ $wa }}" target="_blank" rel="noopener" class="btn btn-phone-header">
                        <i class="fab fa-whatsapp"></i> {{ $rawMobile }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
