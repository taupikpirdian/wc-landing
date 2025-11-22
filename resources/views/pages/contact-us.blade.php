@extends('layouts.app2')
@section('title-bar')
<!-- Title Bar Start -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> Kontak Kami</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="" href="{{ url('/') }}" class="home"><span>HOME</span></a>
                        </span>
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-right"></i>
                        </span>
                        <span><span class="post-root post post-post current-item"> Kontak Kami</span></span>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
<!-- Title Bar End -->
@endsection
@section('content')
<!-- Title Bar Start -->
<section class="section-xl">
    <div class="container">
        <div class="row pbminfotech-gap-40px">
            <article class="pbmit-miconheading-style-10 col-md-6 col-lg-3">
                <div class="pbmit-ihbox-style-10">
                    <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-ihbox-wrap">
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">Mail Us 24/7</h2>
                                <div class="pbmit-heading-desc">{{ $contactUs->mail ?? '' }}</div>
                            </div>
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xclean-icon pbmit-xclean-icon-email"></i>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-btn-wrap">
                            <div class="pbmit-ihbox-btn">
                                <a href="#">
                                    <span class="pbmit-button-text">Read More</span>
                                    <span class="pbmit-button-icon-wrapper">
                                        <span class="pbmit-button-icon">
                                            <i class="pbmit-base-icon-black-arrow-1"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-miconheading-style-10 col-md-6 col-lg-3">
                <div class="pbmit-ihbox-style-10">
                    <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-ihbox-wrap">
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">Our Location</h2>
                                <div class="pbmit-heading-desc">{{ $contactUs->location ?? '' }}</div>
                            </div>
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xclean-icon pbmit-xclean-icon-email"></i>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-btn-wrap">
                            <div class="pbmit-ihbox-btn">
                                <a href="#">
                                    <span class="pbmit-button-text">Read More</span>
                                    <span class="pbmit-button-icon-wrapper">
                                        <span class="pbmit-button-icon">
                                            <i class="pbmit-base-icon-black-arrow-1"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-miconheading-style-10 col-md-6 col-lg-3">
                <div class="pbmit-ihbox-style-10">
                    <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-ihbox-wrap">
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">Call US 24/7</h2>
                                <div class="pbmit-heading-desc">Phone: {{ $contactUs->phone ?? '' }} <br> Mobile: {{ $contactUs->mobile ?? '' }}</div>
                            </div>
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xclean-icon pbmit-xclean-icon-phone"></i>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-btn-wrap">
                            <div class="pbmit-ihbox-btn">
                                <a href="#">
                                    <span class="pbmit-button-text">Read More</span>
                                    <span class="pbmit-button-icon-wrapper">
                                        <span class="pbmit-button-icon">
                                            <i class="pbmit-base-icon-black-arrow-1"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-miconheading-style-10 col-md-6 col-lg-3">
                <div class="pbmit-ihbox-style-10">
                    <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-ihbox-wrap">
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">Working Days</h2>
                                <div class="pbmit-heading-desc">{{ $contactUs->working_day_summary ?? '' }}</div>
                            </div>
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xclean-icon pbmit-xclean-icon-briefcase"></i>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-btn-wrap">
                            <div class="pbmit-ihbox-btn">
                                <a href="#">
                                    <span class="pbmit-button-text">Read More</span>
                                    <span class="pbmit-button-icon-wrapper">
                                        <span class="pbmit-button-icon">
                                            <i class="pbmit-base-icon-black-arrow-1"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>            
<!-- Ihbox End -->  

<!-- Iframe -->
<section class="iframe-section section-lgb pbmit-extend-animation">
    <div class="container-fluid p-0">
        @php($mapQuery = null)
        @if(isset($contactUs) && $contactUs)
            @php($mapQuery = ($contactUs->latitude && $contactUs->longitude) ? ($contactUs->latitude . ',' . $contactUs->longitude) : ($contactUs->location ?? null))
        @endif
        <iframe src="https://maps.google.com/maps?q={{ $mapQuery }}&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="{{ $contactUs->location ?? 'Location' }}" aria-label="{{ $contactUs->location ?? 'Location' }}"></iframe>
    </div>
</section>
<!-- Iframe End-->

@endsection
