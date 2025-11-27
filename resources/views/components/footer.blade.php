<!-- footer -->
<footer class="site-footer pbmit-bg-color-blackish">
    <div class="pbmit-footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="pbmit-footer-widget-col-1 col-md-3">
                    @php($setting = \App\Models\Setting::first())
                    @php($logoUrl = $setting && $setting->logo_url ? asset(str_replace('public/', '', $setting->logo_url)) : asset('assets/images/footer-logo.svg'))
                    <a href="{{ route('home') }}">
                        <img src="{{ $logoUrl }}" alt="logo">
                    </a>
                    <div class="widget">
                        <div class="textwidget">
                            <ul class="pbmit-social-links">
                                @if($setting && $setting->facebook)
                                    <li class="pbmit-social-li pbmit-social-facebook">
                                        <a title="Facebook" href="{{ $setting->facebook }}" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                        </a>
                                    </li>
                                @endif
                                @if($setting && $setting->twitter)
                                    <li class="pbmit-social-li pbmit-social-twitter">
                                        <a title="Twitter" href="{{ $setting->twitter }}" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                        </a>
                                    </li>
                                @endif
                                @if($setting && $setting->instagram)
                                    <li class="pbmit-social-li pbmit-social-instagram">
                                        <a title="Instagram" href="{{ $setting->instagram }}" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-instagram"></i></span>
                                        </a>
                                    </li>
                                @endif
                                @if($setting && $setting->youtube)
                                    <li class="pbmit-social-li pbmit-social-youtube">
                                        <a title="Youtube" href="{{ $setting->youtube }}" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pbmit-footer-widget-col-2 col-md-3">
                    <div class="widget pbmit-two-column-menu">
                        <h2 class="widget-title">Useful Link</h2>
                        <div class="textwidget">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('about-us') }}">About</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pbmit-footer-widget-col-3 col-md-3">
                    <div class="widget widget_text">
                        <h2 class="widget-title">Working Time</h2>
                        <div class="pbmit-timelist-wrapper">
                            @php($contactUs = isset($contactUs) ? $contactUs : \App\Models\ContactUs::with('workingTimes')->first())
                            <ul class="pbmit-timelist-list">
                                    @foreach($contactUs->workingTimes as $wt)
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
                                    <li>
                                        <span class="pbmit-timelist-time">{{ ($day ? ($day.': ') : '') . ($isClosed ? 'Closed' : (($startFmt && $endFmt) ? ($startFmt.' - '.$endFmt) : '-')) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pbmit-footer-widget-col-4 col-md-3">
                    <aside class="widget">
                        <h2 class="widget-title">Hubungi Kami</h2>
                        <div class="pbmit-contact-widget-lines">
                            <div class="pbmit-contact-widget-line pbmit-contact-widget-phone">{{ $contactUs->phone ?? '+1 800 123 456 789' }}</div>
                            <div class="pbmit-contact-widget-line pbmit-contact-widget-email">{{ $contactUs->mail ?? 'info@yourdomain.com' }}</div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-footer-text-area">
        <div class="container">
            <div class="pbmit-footer-text-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pbmit-footer-copyright-text-area"> Copyright © 2025 <a href="#">Sedot WC Resmi</a>, All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer End -->
