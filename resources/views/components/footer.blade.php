<!-- footer -->
<footer class="site-footer pbmit-bg-color-blackish">
    <div class="pbmit-footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="pbmit-footer-widget-col-1 col-md-3">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/footer-logo.svg') }}" alt="logo">
                    </a>
                    <div class="widget">
                        <div class="textwidget">
                            <ul class="pbmit-social-links">
                                <li class="pbmit-social-li pbmit-social-facebook">
                                    <a title="Facebook" href="#" target="_blank" rel="noopener">
                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-twitter">
                                    <a title="Twitter" href="#" target="_blank" rel="noopener">
                                        <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-instagram">
                                    <a title="Instagram" href="#" target="_blank" rel="noopener">
                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-youtube">
                                    <a title="Youtube" href="#" target="_blank" rel="noopener">
                                        <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                    </a>
                                </li>
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
                                @if($contactUs && $contactUs->relationLoaded('workingTimes') && $contactUs->workingTimes->count())
                                    @foreach($contactUs->workingTimes as $wt)
                                        @php($summary = data_get($wt, 'summary'))
                                        @php($day = data_get($wt, 'day'))
                                        @php($start = data_get($wt, 'start'))
                                        @php($end = data_get($wt, 'end'))
                                        <li>
                                            <span class="pbmit-timelist-time">{{ $summary ?? trim(($day ? ($day.': ') : '').(($start && $end) ? ($start.' - '.$end) : '')) }}</span>
                                        </li>
                                    @endforeach
                                @elseif($contactUs && $contactUs->working_day_summary)
                                    <li>
                                        <span class="pbmit-timelist-time">{{ $contactUs->working_day_summary }}</span>
                                    </li>
                                @else
                                    <li>
                                        <span class="pbmit-timelist-time">Mon - Fri: 9.00am - 5.00pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-time">Saturday: 10.00am - 6.00pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-time">Sunday Closed</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pbmit-footer-widget-col-4 col-md-3">
                    <aside class="widget">
                        <h2 class="widget-title">Say Hello</h2>
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
                        <div class="pbmit-footer-copyright-text-area"> Copyright © 2024 <a href="#">Xcleen</a>, All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer End -->
