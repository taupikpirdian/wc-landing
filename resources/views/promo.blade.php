@extends('layouts.app-promo')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
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
        </div>
    </section>

    <!-- Feature Section -->
    <section class="feature-section" id="keunggulan">
        <div class="container">
            <h2 class="section-title">Mengapa Memilih Kami?</h2>
            <div class="row g-4 mt-2">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3 class="feature-title">Respons Cepat</h3>
                        <p class="feature-description">Datang dalam 1-2 Jam</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon green">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3 class="feature-title">Harga Transparan</h3>
                        <p class="feature-description">Nego di awal, No Nambah</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon blue">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="feature-title">Tim Profesional</h3>
                        <p class="feature-description">Sopan & berpengalaman</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon emerald">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3 class="feature-title">Ramah Lingkungan</h3>
                        <p class="feature-description">Pembuangan Resmi (IPLT)</p>
                    </div>
                </div>
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
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-toilet"></i>
                        </div>
                        <h3 class="service-title">Sedot WC Penuh</h3>
                        <p class="service-description">
                            Penyedotan septic tank penuh dengan armada vacuum bertenaga tinggi. Bersih tuntas tanpa sisa.
                        </p>
                        @php($rawMobile = $contactUs->mobile ?? '08513277679')
                        @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                        @php($wa = null)
                        @if($digits)
                            @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits))))
                        @endif
                        <a href="https://wa.me/{{ $wa }}" class="btn-service" target="_blank" rel="noopener">
                            Pesan Layanan <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h3 class="service-title">Pelancaran Saluran Mampet</h3>
                        <p class="service-description">
                            Mengatasi WC, wastafel, atau got yang mampet tanpa bongkar pasang keramik.
                        </p>
                        <a href="https://wa.me/{{ $wa }}" class="btn-service" target="_blank" rel="noopener">
                            Pesan Layanan <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3 class="service-title">Sedot Lemak (Grease Trap)</h3>
                        <p class="service-description">
                            Solusi untuk restoran & hotel. Membersihkan limbah keras dapur agar tidak bau dan mampet.
                        </p>
                        <a href="https://wa.me/{{ $wa }}" class="btn-service" target="_blank" rel="noopener">
                            Pesan Layanan <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title">Apa Kata Mereka?</h2>
            <div class="row g-4 mt-2">
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
                            "Pelayanannya cepat banget. Saya hubungi pagi, siang sudah datang. WC langsung lancar dan bersih. Recommended!"
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">R</div>
                            <div>
                                <div class="testimonial-author-name">Rudi</div>
                                <div class="testimonial-author-location">Jakarta</div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            "Teknisinya ramah dan jelasin masalahnya dengan jelas. Harganya juga sesuai dari awal. Sangat puas!"
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">SM</div>
                            <div>
                                <div class="testimonial-author-name">S.M.</div>
                                <div class="testimonial-author-location">Depok</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Apakah harga di awal sudah final?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, harga yang kami tawarkan di awal sudah final dan transparan. Tidak ada biaya tambahan yang tersembunyi. Kami akan memberikan estimasi biaya setelah survey lokasi, dan harga tersebut tidak akan berubah.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Berapa lama teknisi sampai ke lokasi?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tim teknisi kami biasanya tiba dalam waktu 1-2 jam setelah Anda menghubungi kami, tergantung lokasi dan situasi lalu lintas. Kami beroperasi 24/7 untuk memastikan layanan cepat tanggap.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Apakah limbah dibuang sembarangan?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tidak, kami sangat memperhatikan aspek lingkungan. Semua limbah yang kami sedot akan dibuang ke Instalasi Pengolahan Lumpur Tinja (IPLT) resmi yang telah ditunjuk pemerintah. Kami memiliki izin lengkap dan berkomitmen terhadap kelestarian lingkungan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
