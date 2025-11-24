@extends('layouts.app2')

@section('title-bar')
<!-- Title Bar Start -->
@php($banner = \App\Models\BannerSetting::where('page', 'tentang-kami')->first())
@php($bannerImage = $banner && $banner->image_url ? asset(str_replace('public/', '', $banner->image_url)) : null)
<div class="pbmit-title-bar-wrapper" @if($bannerImage) style="background-image:url('{{ $bannerImage }}');background-size:cover;background-position:center;" @endif>
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> Tentang Kami</h1>
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
                        <span><span class="post-root post post-post current-item"> Tentang Kami</span></span>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
<!-- Title Bar End -->
@endsection

@section('content')
<!-- About Us Start --> 
<section class="section-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle">Why choose us?</h4>
                    <h2 class="pbmit-title">{{ $aboutUs->title ?? '' }}</h2>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <p class="pbmit-text-editor">{{ $aboutUs->desc ?? '' }}</p>
                <div class="row g-0 align-items-center">
                    <div class="col-md-12 col-xl-6">
                        <div class="pbmit-ihbox-style-4">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-xclean-icon pbmit-xclean-icon-customer-service"></i>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h4 class="pbmit-element-subtitle">
                                        Call Us Anytime
                                    </h4>
                                    <h2 class="pbmit-element-title">
                                        <a href="tel:+1(212)-255-511">
                                            <span class="pbmit-button-text">+ 1(212) 255-511</span>
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6 pt-xl-0 pt-3">
                        <a class="pbmit-btn pbmit-btn-outline" href="about-us.html">
                            <span class="pbmit-button-content-wrapper">
                                <span class="pbmit-button-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                        <title>black-arrow</title>
                                        <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                        <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                        <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                    </svg>
                                </span>
                                <span class="pbmit-button-text">Book Free Demo</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @if(isset($ourAdvantages) && $ourAdvantages->count())
        <div class="row mt-4">
            <div class="col-md-12 col-xl-6">
                <div class="ihbox-four-rightbox">
                    <div class="row pbmit-element-posts-wrapper pbminfotech-gap-50px">
                        @foreach($ourAdvantages as $adv)
                            <article class="pbmit-miconheading-style-14 col-md-12">
                                <div class="pbmit-ihbox-style-14">
                                    <div class="pbmit-ihbox-wrap">
                                        <div class="pbmit-icon-wrap">
                                            <div class="pbmit-content-number">
                                                <div class="pbmit-wrap-number">
                                                    <div class="pbmit-ihbox-box-number">{{ sprintf('%02d', $adv->number) }}</div>
                                                </div>
                                            </div>
                                            <div class="pbmit-content-wrap">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                        <i class="pbmit-xclean-icon {{ $adv->icon }}"></i>
                                                    </div>
                                                </div>
                                                <div class="pbmit-text-wrap">
                                                    <h2 class="pbmit-element-title">{{ $adv->title }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-heading-desc">{{ $adv->desc }}</div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section> 
<!-- About Us end --> 

<!-- Team Start -->
<section class="section-lg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle">Team Members</h4>
                    <h2 class="pbmit-title">We have a expert team to serve you.</h2>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <div class="team-swiper-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div> 
            </div>
        </div>
        <div class="swiper-slider" data-arrows-class="team-swiper-arrow" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="true" data-columns="4" data-margin="40" data-effect="slide">
            <div class="swiper-wrapper">
                @if(isset($ourTeams) && $ourTeams->count())
                    @foreach($ourTeams as $team)
                        <article class="pbmit-team-style-1 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-featured-wrap">
                                    <div class="pbmit-featured-inner">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                @php($imageUrl = $team->image ? Storage::disk('public')->url($team->image) : null)
                                                @if($imageUrl)
                                                    <img src="{{ $imageUrl }}" class="img-fluid" alt="{{ $team->name }}">
                                                @endif
                                            </div>
                                        </div>
                                        <a class="pbmit-link" href="#"></a>
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <h3 class="pbmit-team-title">
                                            <a href="#">{{ $team->name }}</a>
                                        </h3>
                                        <div class="pbminfotech-box-team-position">{{ $team->position }}</div>
                                    </div>
                                    <div class="pbmit-team-btn">
                                        <a class="pbmit-team-text" href="#">
                                            <i class="pbmit-base-icon-share"></i>
                                        </a>
                                        <div class="pbminfotech-box-social-links">
                                            <ul class="pbmit-social-links pbmit-team-social-links">
                                                @if($team->facebook)
                                                    <li class="pbmit-social-li pbmit-social-facebook">
                                                        <a href="{{ $team->facebook }}" title="Facebook" target="_blank">
                                                            <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                                        </a>
                                                    </li>
                                                @endif
                                                @if($team->twitter)
                                                    <li class="pbmit-social-li pbmit-social-twitter">
                                                        <a href="{{ $team->twitter }}" title="Twitter" target="_blank">
                                                            <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                                        </a>
                                                    </li>
                                                @endif
                                                @if($team->instagram)
                                                    <li class="pbmit-social-li pbmit-social-instagram">
                                                        <a href="{{ $team->instagram }}" title="Instagram" target="_blank">
                                                            <span><i class="pbmit-base-icon-instagram"></i></span>
                                                        </a>
                                                    </li>
                                                @endif
                                                @if($team->youtube)
                                                    <li class="pbmit-social-li pbmit-social-youtube">
                                                        <a href="{{ $team->youtube }}" title="YouTube" target="_blank">
                                                            <span><i class="pbmit-base-icon-youtube"></i></span>
                                                        </a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Team End -->

<!-- Fid Start --> 
<section class="section-lgb">
    <div class="container">
        <div class="fid-one-area">
            <div class="pbmit-text-editor">
                <span>Fun and facts</span>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="pbminfotech-ele-fid-style-2">
                        <div class="pbmit-fid-content">
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="250" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">250</span>
                                <span class="pbmit-fid"><span>+</span></span>
                            </h4>
                            <div class="pbmit-heading-desc">Professional and Experienced staff ready to help you anytime.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="pbminfotech-ele-fid-style-2">
                        <div class="pbmit-fid-content">
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="14" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">14</span>
                                <span class="pbmit-fid"><sub>m</sub></span>
                            </h4>
                            <div class="pbmit-heading-desc">Proving all type of cleaning solutions  every small and big businesses</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="pbminfotech-ele-fid-style-2">
                        <div class="pbmit-fid-content">
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="460" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">460</span>
                                <span class="pbmit-fid"><span>+</span></span>
                            </h4>
                            <div class="pbmit-heading-desc">We start with a thorough detail clean throughout your house.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="pbminfotech-ele-fid-style-2">
                        <div class="pbmit-fid-content">
                            <h4 class="pbmit-fid-inner">
                                <span class="pbmit-fid-before"></span>
                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="30" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">30</span>
                                <span class="pbmit-fid"><sub>k</sub></span>
                            </h4>
                            <div class="pbmit-heading-desc">We hold a successful track record of satisfying our customers.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fid End --> 

<!-- Testimonial Start -->
<section class="testimonial-two mb-5">
    <div class="container-fluid px-xl-5">
        <div class="row g-0">
            <div class="col-md-12 col-xl-6">
                <div class="testimonial-two-bg"></div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="testimonial-two-box pbmit-bg-color-light">
                    <div class="pbmit-heading-subheading animation-style4">
                        <h4 class="pbmit-subtitle">Testimonials</h4>
                        <h2 class="pbmit-title">Trusted by thousand of people & companies.</h2>
                    </div>
                    <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="1" data-margin="30" data-effect="slide">
                        <div class="swiper-wrapper">
                            @if(isset($testimonies) && $testimonies->count())
                                @foreach($testimonies as $t)
                                    <article class="pbmit-testimonial-style-1 swiper-slide">
                                        <div class="pbminfotech-post-item">
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>{{ $t->desc }}</p>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-box-author">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        @if($t->image_url)
                                                            <img src="{{ $t->image_url }}" class="img-fluid" alt="{{ $t->name }}">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="pbmit-auther-content">
                                                    <h3 class="pbminfotech-box-title">{{ $t->name }}</h3>
                                                    <div class="pbminfotech-testimonial-detail">{{ $t->position }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="fid-style-area">
                        <div class="pbminfotech-ele-fid-style-3">
                            <div class="pbmit-fid-content">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-fid-before"></span>
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="460" data-interval="16" data-before="" data-before-style="" data-after="" data-after-style="">460</span>
                                    <span class="pbmit-fid"><span>+</span></span>
                                </h4>
                                <div class="pbmit-heading-desc">Professional and Experienced staff <br>ready to help you</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End -->
@endsection
