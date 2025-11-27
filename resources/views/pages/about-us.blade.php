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
                    <h4 class="pbmit-subtitle">Kenapa harus memilih kami?</h4>
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
                                        Hubungi Kami Kapan Saja
                                    </h4>
                                    <h2 class="pbmit-element-title">
                                        <a href="https://wa.me/{{ $contactUs->phone ?? '+1800123456789' }}">
                                            <span class="pbmit-button-text">{{ $contactUs->phone ?? '+1 800 123 456 789' }}</span>
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-6 pt-xl-0 pt-3">
                        <a class="pbmit-btn pbmit-btn-outline" href="https://wa.me/{{ $contactUs->phone ?? '+1800123456789' }}">
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
</section> 
<!-- About Us end --> 

<!-- Vision & Mission Start -->
<section class="section-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle">Visi & Misi</h4>
                    <h2 class="pbmit-title">Arah dan tujuan perusahaan</h2>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                @if(isset($aboutUs) && $aboutUs->vission)
                    <div class="pbmit-text-editor">{!! $aboutUs->vission !!}</div>
                @endif
            </div>
            <div class="col-md-12 col-xl-6">
                @if(isset($aboutUs) && is_array($aboutUs->mission) && count($aboutUs->mission))
                    <ul class="list-group list-group-borderless">
                        @foreach($aboutUs->mission as $m)
                            <li class="list-group-item">
                                <span class="pbmit-icon-list-icon"><i class="fa fa-check-circle"></i></span>
                                <span class="pbmit-icon-list-text">{{ strip_tags($m['mission_point'] ?? '') }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
    </section>
<!-- Vision & Mission End -->

<!-- Team Start -->
<section class="section-lg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle">Tim Kami</h4>
                    <h2 class="pbmit-title">Tim kami memiliki ahli yang berpengalaman untuk memberikan layanan terbaik.</h2>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <div class="team-swiper-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div> 
            </div>
        </div>
        <div class="swiper-slider" data-arrows-class="team-swiper-arrow" data-autoplay="false" data-loop="false" data-dots="false" data-arrows="true" data-columns="4" data-margin="40" data-effect="slide">
            <div class="swiper-wrapper">
                @foreach($ourTeams as $team)
                    <article class="pbmit-team-style-1 swiper-slide">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-featured-wrap">
                                <div class="pbmit-featured-inner">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            @php($imageUrl = $team->image ? Storage::disk('public')->url($team->image) : null)
                                            @if($imageUrl)
                                                <img src="{{ asset(str_replace('public/', '', $imageUrl)) }}" class="img-fluid" alt="{{ $team->name }}">
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
            </div>
        </div>
    </div>
</section>
<!-- Team End -->

<!-- Testimonial Start -->
<section class="testimonial-two mb-5">
    <div class="container-fluid px-xl-5">
        <div class="row g-0">
            <div class="col-md-12 col-xl-6">
                <div class="testimonial-two-bg" style="background-image: url('{{ asset('assets/images/trusted-customer.jpg') }}');"></div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="testimonial-two-box pbmit-bg-color-light">
                    <div class="pbmit-heading-subheading animation-style4">
                        <h4 class="pbmit-subtitle">Testimoni</h4>
                        <h2 class="pbmit-title">Kepercayaan dari para pelanggan dan perusahaan</h2>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End -->
@endsection
