<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                @php($setting = \App\Models\Setting::first())
                @php($logoUrl = $setting && $setting->logo_url ? asset(str_replace('public/', '', $setting->logo_url)) : null)
                @if($logoUrl)
                    <div class="footer-brand mb-3">
                        <img src="{{ $logoUrl }}" alt="SedotWCResmi" style="width: 25%;">
                    </div>
                @else
                    <div class="footer-brand">
                        <i class="fas fa-toilet"></i>
                        SedotWCResmi
                    </div>
                @endif
                @if($setting && $setting->description)
                    <p class="footer-text">
                        {{ $setting->description }}
                    </p>
                @else
                    <p class="footer-text">
                        Layanan sedot WC profesional dan terpercaya. Siap melayani Anda 24/7 dengan armada modern dan tim berpengalaman.
                    </p>
                @endif
                @if($setting && ($setting->facebook || $setting->instagram || $setting->twitter || $setting->youtube))
                    <div class="mt-3">
                        @if($setting->facebook)
                            <a href="{{ $setting->facebook }}" target="_blank" rel="noopener" class="me-2 text-white">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif
                        @if($setting->instagram)
                            <a href="{{ $setting->instagram }}" target="_blank" rel="noopener" class="me-2 text-white">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif
                        @if($setting->twitter)
                            <a href="{{ $setting->twitter }}" target="_blank" rel="noopener" class="me-2 text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                        @endif
                        @if($setting->youtube)
                            <a href="{{ $setting->youtube }}" target="_blank" rel="noopener" class="me-2 text-white">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif
                    </div>
                @endif
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="mb-3">Kontak</h5>
                @php($rawMobile = $contactUs->mobile ?? '08513277679')
                @php($digits = $rawMobile ? preg_replace('/\D+/', '', $rawMobile) : null)
                @php($wa = null)
                @if($digits)
                    @php($wa = str_starts_with($digits, '0') ? ('62' . substr($digits, 1)) : (str_starts_with($digits, '62') ? $digits : (str_starts_with($digits, '8') ? ('62' . $digits) : $digits)))
                @endif
                @if($contactUs && $contactUs->phone)
                    <p class="footer-text mb-2">
                        <i class="fas fa-phone me-2"></i>
                        <a href="https://wa.me/{{ $wa }}" target="_blank" rel="noopener" class="text-white text-decoration-none">
                            {{ $contactUs->phone }}
                        </a>
                    </p>
                @endif
                @if($rawMobile)
                    <p class="footer-text mb-2">
                        <i class="fab fa-whatsapp me-2"></i>
                        <a href="https://wa.me/{{ $wa }}" target="_blank" rel="noopener" class="text-white text-decoration-none">
                            WhatsApp: {{ $rawMobile }}
                        </a>
                    </p>
                @endif
                @if($contactUs && $contactUs->mail)
                    <p class="footer-text">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:{{ $contactUs->mail }}" class="text-white text-decoration-none">
                            {{ $contactUs->mail }}
                        </a>
                    </p>
                @else
                    @php($email = $setting->mail ?? 'info@sedotwcresmi.com')
                    <p class="footer-text">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:{{ $email }}" class="text-white text-decoration-none">
                            {{ $email }}
                        </a>
                    </p>
                @endif
                @if($contactUs && $contactUs->address)
                    <p class="footer-text mt-2">
                        <i class="fas fa-map-marker-alt me-2"></i> {{ $contactUs->address }}
                    </p>
                @endif
            </div>
            <div class="col-lg-4">
                <h5 class="mb-3">Jam Operasional</h5>
                @php($contactUsWithHours = isset($contactUs) ? $contactUs : \App\Models\ContactUs::with('workingTimes')->first())
                @if($contactUsWithHours && $contactUsWithHours->workingTimes && $contactUsWithHours->workingTimes->isNotEmpty())
                    <div class="footer-text">
                        @foreach($contactUsWithHours->workingTimes as $wt)
                            @php($dayEn = data_get($wt, 'day'))
                            @php($day = $dayEn ? ([
                                'Monday' => 'Senin',
                                'Tuesday' => 'Selasa',
                                'Wednesday' => 'Rabu',
                                'Thursday' => 'Kamis',
                                'Friday' => 'Jumat',
                                'Saturday' => 'Sabtu',
                                'Sunday' => 'Minggu',
                            ][$dayEn] ?? $dayEn) : null)
                            @php($start = data_get($wt, 'open_time'))
                            @php($end = data_get($wt, 'close_time'))
                            @php($isClosed = (bool) data_get($wt, 'is_closed'))
                            @php($startFmt = $start ? substr($start, 0, 5) : null)
                            @php($endFmt = $end ? substr($end, 0, 5) : null)
                            <p class="mb-1">
                                <strong>{{ $day }}</strong>: {{ $isClosed ? 'Tutup' : (($startFmt && $endFmt) ? ($startFmt . ' - ' . $endFmt) : 'Buka') }}
                            </p>
                        @endforeach
                    </div>
                @else
                    <p class="footer-text">
                        Senin - Minggu: 24 Jam<br>
                        Siap melayani darurat kapan saja
                    </p>
                @endif
            </div>
        </div>
        <div class="footer-copyright">
            <p class="mb-0">&copy; {{ date('Y') }} SedotWCResmi. All rights reserved.</p>
        </div>
    </div>
</footer>
