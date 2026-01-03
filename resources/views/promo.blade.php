@extends('layouts.app-promo')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            @if(isset($sliders) && $sliders->isNotEmpty())
                @foreach($sliders as $index => $s)
                    @if($index === 0)
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <div class="hero-badge">
                                    <i class="fas fa-tools"></i>
                                    {{ $s->tagline ?? $s->title }}
                                </div>
                                <h1 class="hero-title">
                                    {{ $s->title }}
                                </h1>
                                <p class="hero-subtitle">
                                    {!! $s->desc !!}
                                </p>
                                <div class="d-flex flex-wrap">
                                    @php($rawMobile = $contactUs->mobile ?? '08513277679')
                                    @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                                    @php($wa = null)
                                    @if($digits)
                                        @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits)))
                                    @endif
                                    <a href="https://wa.me/{{ $wa }}" class="btn btn-whatsapp" target="_blank" rel="noopener">
                                        <i class="fab fa-whatsapp"></i>
                                        Chat WhatsApp
                                    </a>
                                </div>
                                @if(isset($heroFeatures) && $heroFeatures->isNotEmpty())
                                    <div class="hero-features">
                                        @foreach($heroFeatures as $hf)
                                            <div class="hero-feature-item">
                                                @php($isFa = is_string($hf->icon) && (strpos($hf->icon, 'fa ') === 0 || strpos($hf->icon, 'fa-') === 0 || strpos($hf->icon, ' fa-') !== false))
                                                @if($isFa)
                                                    <i class="{{ $hf->icon }}"></i>
                                                @else
                                                    <i class="pbmit-xclean-icon {{ $hf->icon }}"></i>
                                                @endif
                                                <span>{{ $hf->title }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="hero-features">
                                        <div class="hero-feature-item">
                                            <i class="fas fa-shield-alt"></i>
                                            <span>Bergaransi</span>
                                        </div>
                                        <div class="hero-feature-item">
                                            <i class="fas fa-certificate"></i>
                                            <span>Legalitas Lengkap</span>
                                        </div>
                                        <div class="hero-feature-item">
                                            <i class="fas fa-clock"></i>
                                            <span>Layanan 24 Jam</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                @if($s->image_url)
                                    <div class="hero-card" style="background-image: url('{{ asset(str_replace('public/', '', $s->image_url)) }}'); background-size: cover; background-position: center; min-height: 400px;">
                                    </div>
                                @else
                                    <div class="hero-card">
                                        <div class="hero-card-icon">
                                            <i class="fas fa-truck"></i>
                                        </div>
                                        <h3 class="hero-card-title">Armada Modern & Bersih</h3>
                                        <p class="hero-card-subtitle">Siap melayani ke lokasi Anda</p>
                                        <div class="hero-card-rating">
                                            <div>
                                                <i class="fas fa-star"></i>
                                                <span class="hero-card-rating-text">4.9/5.0</span>
                                                <span class="hero-card-rating-subtext">Kepuasan Pelanggan</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="hero-badge">
                            <i class="fas fa-tools"></i>
                            Layanan Sedot & Perbaikan WC
                        </div>
                        <h1 class="hero-title">
                            WC Mampet?<br>
                            <span>1 Jam Tuntas.</span>
                        </h1>
                        <p class="hero-subtitle">
                            Layanan sedot WC profesional, bersih, dan bergaransi. Harga transparan tanpa biaya tersembunyi. Siap datang 24/7 ke lokasi Anda.
                        </p>
                        <div class="d-flex flex-wrap">
                            @php($rawMobile = $contactUs->mobile ?? '08513277679')
                            @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                            @php($wa = null)
                            @if($digits)
                                @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits)))
                            @endif
                            <a href="https://wa.me/{{ $wa }}" class="btn btn-whatsapp" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i>
                                Chat WhatsApp
                            </a>
                        </div>
                        @if(isset($heroFeatures) && $heroFeatures->isNotEmpty())
                            <div class="hero-features">
                                @foreach($heroFeatures as $hf)
                                    <div class="hero-feature-item">
                                        @php($isFa = is_string($hf->icon) && (strpos($hf->icon, 'fa ') === 0 || strpos($hf->icon, 'fa-') === 0 || strpos($hf->icon, ' fa-') !== false))
                                        @if($isFa)
                                            <i class="{{ $hf->icon }}"></i>
                                        @else
                                            <i class="pbmit-xclean-icon {{ $hf->icon }}"></i>
                                        @endif
                                        <span>{{ $hf->title }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="hero-features">
                                <div class="hero-feature-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Bergaransi</span>
                                </div>
                                <div class="hero-feature-item">
                                    <i class="fas fa-certificate"></i>
                                    <span>Legalitas Lengkap</span>
                                </div>
                                <div class="hero-feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>Layanan 24 Jam</span>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-card">
                            <div class="hero-card-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h3 class="hero-card-title">Armada Modern & Bersih</h3>
                            <p class="hero-card-subtitle">Siap melayani ke lokasi Anda</p>
                            <div class="hero-card-rating">
                                <div>
                                    <i class="fas fa-star"></i>
                                    <span class="hero-card-rating-text">4.9/5.0</span>
                                    <span class="hero-card-rating-subtext">Kepuasan Pelanggan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Feature Section -->
    <section class="feature-section" id="keunggulan">
        <div class="container">
            <h2 class="section-title">Mengapa Memilih Kami?</h2>
            <div class="row g-4 mt-2">
                @if(isset($ourAdvantages) && $ourAdvantages->count())
                    @foreach($ourAdvantages as $adv)
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    @php($isFa = is_string($adv->icon) && (strpos($adv->icon, 'fa ') === 0 || strpos($adv->icon, 'fa-') === 0 || strpos($adv->icon, ' fa-') !== false))
                                    @if($isFa)
                                        <i class="{{ $adv->icon }}"></i>
                                    @else
                                        <i class="pbmit-xclean-icon {{ $adv->icon }}"></i>
                                    @endif
                                </div>
                                <h3 class="feature-title">{{ $adv->title }}</h3>
                                <p class="feature-description">{{ $adv->desc }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>Belum ada data keunggulan.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="service-section" id="layanan">
        <div class="container">
            <h2 class="section-title">Solusi Masalah Sanitasi Anda</h2>
            <p class="section-subtitle">
                Kami menangani segala jenis masalah saluran, dan mampu tanpa bongkar instalasi kamar mandi.
            </p>
            <div class="row g-4">
                @if(isset($services) && $services->isNotEmpty())
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-icon">
                                    @php($iconUrl = $service->image_icon_url)
                                    @php($iconClass = $service->icon_class)
                                    @if($iconUrl)
                                        <img src="{{ $iconUrl }}" class="img-fluid" alt="{{ $service->title }}" style="width:32px;height:32px;object-fit:contain;">
                                    @elseif($iconClass)
                                        <i class="{{ $iconClass }}" style="font-size:28px;"></i>
                                    @else
                                        <i class="fa fa-life-ring"></i>
                                    @endif
                                </div>
                                <h3 class="service-title">{{ $service->title }}</h3>
                                <p class="service-description">
                                    {{ strip_tags($service->desc) }}
                                </p>
                                @php($rawMobile = $contactUs->mobile ?? '08513277679')
                                @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                                @php($wa = null)
                                @if($digits)
                                    @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits)))
                                @endif
                                <a href="https://wa.me/{{ $wa }}" class="btn-service" target="_blank" rel="noopener">
                                    Pesan Layanan <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>Belum ada data layanan.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title">Apa Kata Mereka?</h2>
            @if(isset($testimonies) && $testimonies->isNotEmpty())
                @php($chunkedTestimonies = $testimonies->chunk(2))
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        @foreach($chunkedTestimonies as $index => $chunk)
                            @if($index === 0)
                                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $index }}" class="active" aria-current="true"></button>
                            @else
                                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $index }}" aria-label="Slide {{ $index + 1 }}"></button>
                            @endif
                        @endforeach
                    </div>

                    <div class="carousel-inner">
                        @foreach($chunkedTestimonies as $index => $chunk)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <div class="row g-4">
                                    @foreach($chunk as $t)
                                        <div class="col-lg-6">
                                            <div class="testimonial-card">
                                                <div class="testimonial-stars">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p class="testimonial-text">
                                                    "{{ $t->desc }}"
                                                </p>
                                                <div class="testimonial-author">
                                                    @if($t->image_url)
                                                        <div class="testimonial-avatar-img">
                                                            <img src="{{ asset(str_replace('public/', '', $t->image_url)) }}" class="img-fluid" alt="{{ $t->name }}">
                                                        </div>
                                                    @else
                                                        <div class="testimonial-avatar">{{ substr($t->name, 0, 1) }}</div>
                                                    @endif
                                                    <div>
                                                        <div class="testimonial-author-name">{{ $t->name }}</div>
                                                        <div class="testimonial-author-location">{{ $t->position }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-center">
                    <p>Belum ada data testimoni.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @if(isset($faqs) && $faqs->isNotEmpty())
                            @foreach($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $loop->iteration }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="faq{{ $loop->iteration }}" class="accordion-collapse collapse @if($loop->first) show @endif" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 text-center">
                                <p>Belum ada data FAQ.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
