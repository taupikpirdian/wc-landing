<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-toilet"></i>
            SedotWC<span style="color: #479EF6;">Resmi</span>
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
                    <a href="tel:{{ $rawMobile }}" class="btn btn-phone-header">
                        <i class="fas fa-phone"></i> {{ $rawMobile }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
