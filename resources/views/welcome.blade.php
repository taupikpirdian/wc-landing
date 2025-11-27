@extends('layouts.app')
@section('content')
<!-- Ihbox Start -->
<section class="section-lg ihbox-four-bg">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-12 col-xl-6 pbmit-sticky-column">
                <div class="theiaStickySidebar">
                    <div class="ihbox-four-leftbox">
                        <div class="pbmit-heading-subheading animation-style4">
                            <h4 class="pbmit-subtitle">Kami menyediakan layanan terbaik</h4>
                            <h2 class="pbmit-title">Layanan paling lengkap dan efektif bersama kami</h2>
                        </div>
                        <div class="position-relative">
                            <div class="text-xl-start text-center">
                                @php($imageTestimony = isset($aboutUs) && $aboutUs->image_testimony ? Storage::disk('public')->url($aboutUs->image_testimony) : null)
                                @if($imageTestimony)
                                    <img src="{{ asset(str_replace('public/', '', $imageTestimony)) }}" class="about-img img-fluid" alt="">
                                @endif
                            </div>
                            <div class="fid-style-box">
                                <div class="pbminfotech-ele-fid-style-4">
                                    <div class="pbmit-sticky-corner  pbmit-bottom-left-corner">
                                        <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30 30V0C30 16 16 30 0 30H30Z"></path>
                                        </svg>
                                    </div>
                                    <div class="pbmit-sticky-corner pbmit-top-right-corner">
                                        <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30 30V0C30 16 16 30 0 30H30Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="ihbox-four-rightbox">
                    <div class="row pbmit-element-posts-wrapper pbminfotech-gap-50px">
                        @if(isset($ourAdvantages) && $ourAdvantages->count())
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
                                                            @php($isFa = is_string($adv->icon) && (strpos($adv->icon, 'fa ') === 0 || strpos($adv->icon, 'fa-') === 0 || strpos($adv->icon, ' fa-') !== false))
                                                            @if($isFa)
                                                                <i class="{{ $adv->icon }}"></i>
                                                            @else
                                                                <i class="pbmit-xclean-icon {{ $adv->icon }}"></i>
                                                            @endif
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ihbox End -->

<!-- Service Start --> 
<section class="pbmit-bg-color-light section-xl service-sec-four mb-5">
    <div class="container">
        <div class="pbmit-heading-subheading text-center animation-style2">
            <h4 class="pbmit-subtitle">Layanan Kami</h4>
            <h2 class="pbmit-title">Apa pun kebutuhan Anda</h2>
        </div>
        <div class="row">
            @if(isset($services) && $services->isNotEmpty())
                @foreach($services as $service)
                    <article class="pbmit-service-style-5 col-md-4">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-box-content-wrap">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        @if($service->image_cover_url)
                                            <img src="{{ asset(str_replace("public/", "", $service->image_cover_url)) }}" class="img-fluid" alt="{{ $service->title }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="pbmit-content-box">
                                    <div class="pbmit-content-box-inner">
                                        <div class="pbmit-service-icon">
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
                                        <div class="pbmit-service-title-wrap">
                                            <div class="pbminfotech-box-number">{{ sprintf('%02d', $loop->iteration) }}</div>
                                            <div class="pbmit-serv-cat">
                                                @if($service->label)
                                                    <a href="{{ route('services') }}" rel="tag">{{ $service->label }}</a>
                                                @endif
                                            </div>
                                            <h3 class="pbmit-service-title">
                                                <a href="{{ route('service-detail', $service->slug) }}">{{ $service->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="pbmit-service-description">
                                        <p>{{ strip_tags($service->desc) }}</p>
                                    </div>
                                </div>
                                <div class="pbmit-service-btn-wrapper">
                                    <a class="pbmit-service-btn" href="{{ route('service-detail', $service->slug) }}" title="{{ $service->title }}">
                                        <span class="pbmit-button-icon-wrapper">
                                            <span class="pbmit-button-icon">
                                                <i class=" pbmit-base-icon-black-arrow-1"></i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', $service->slug) }}"></a>
                        </div>
                    </article>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p>Belum ada data layanan.</p>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Service End -->

<!-- Portfolio Start -->
<section class="position-relative mt-5">
    <div class="container-fluid p-0">
        <div class="swiper-slider pbmit-element-portfolio-style-3" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false" data-columns="4" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                @foreach($portfolios as $p)
                    <article class="pbmit-portfolio-style-3 swiper-slide">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    @if($p->image_cover_url)
                                        <img src="{{ asset(str_replace('public/', '', $p->image_cover_url)) }}" class="img-fluid" alt="{{ $p->title }}">
                                    @endif
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-titlebox">
                                    <div class="pbmit-port-cat">
                                        <a href="{{ route('portfolio') }}" rel="tag">Portfolio</a>
                                    </div>
                                    <h3 class="pbmit-portfolio-title">
                                        <a href="{{ route('portfolio-detail', $p->slug) }}">{{ $p->title }}</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="pbmit-portfolio-btn">
                                <a href="{{ route('portfolio-detail', $p->slug) }}">
                                    <i class="pbmit-atlaw-icon pbmit-base-icon-arrow-right"></i>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('portfolio-detail', $p->slug) }}"></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        <div class="pbmit-portfolio-bottom">
        <div class="swiper-slider pbmit-element-portfolio-style-3" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false" data-columns="4" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                @foreach($portfolios as $p)
                    <article class="pbmit-portfolio-style-3 swiper-slide">
                        <div class="pbminfotech-post-content">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    @if($p->image_cover_url)
                                        <img src="{{ asset(str_replace('public/', '', $p->image_cover_url)) }}" class="img-fluid" alt="{{ $p->title }}">
                                    @endif
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-titlebox">
                                    <div class="pbmit-port-cat">
                                        <a href="{{ route('portfolio') }}" rel="tag">Portfolio</a>
                                    </div>
                                    <h3 class="pbmit-portfolio-title">
                                        <a href="{{ route('portfolio-detail', $p->slug) }}">{{ $p->title }}</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="pbmit-portfolio-btn">
                                <a href="{{ route('portfolio-detail', $p->slug) }}">
                                    <i class="pbmit-atlaw-icon pbmit-base-icon-arrow-right"></i>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('portfolio-detail', $p->slug) }}"></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        </div>
        <div class="pbmit-portfolio-content">
            <div class="pbmit-heading animation-style4">
                <h2 class="pbmit-title">Proyek terbaru <br> yang telah kami kerjakan</h2>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio End -->

<!-- Testimonial Start -->
<section class="section-lg testimonial-three-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-7">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle">Testimonials</h4>
                    <h2 class="pbmit-title">Kepercayaan dari para pelanggan dan perusahaan</h2>
                </div>
            </div>
            <div class="col-md-4 col-lg-5 text-end">
                <div class="testimonial-swiper-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div>
            </div>
        </div>
        <div class="swiper-slider" data-arrows-class="testimonial-swiper-arrow" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="2" data-margin="40" data-effect="slide">
            <div class="swiper-wrapper">
                @foreach($testimonies as $t)
                    <article class="pbmit-testimonial-style-2 swiper-slide">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-desc">
                                <blockquote class="pbminfotech-testimonial-text">
                                    <p>{{ $t->desc }}</p>
                                </blockquote>
                            </div>
                            <div class="pbmit-auther-content">
                                <h3 class="pbminfotech-box-title">{{ $t->name }}</h3>
                                <div class="pbminfotech-testimonial-detail">{{ $t->position }}</div>
                            </div>
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    @if($t->image_url)
                                        <img src="{{ asset(str_replace('public/', '', $t->image_url)) }}" class="img-fluid" alt="{{ $t->name }}">
                                    @else
                                        <img src="{{ asset('assets/images/user2.png') }}" class="img-fluid" alt="{{ $t->name }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End -->

<!-- Faq Start -->
<section class="px-xl-4 px-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div class="faq-four-bg-img" style="background-image: url('{{ asset('assets/images/faq.jpg') }}');"></div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="faq-four-area pbmit-bg-color-light">
                    <div class="pbmit-heading-subheading animation-style4">
                        <h4 class="pbmit-subtitle">Pertanyaan Pelanggan</h4>
                        <h2 class="pbmit-title">Anda akan belajar lebih banyak dari FAQ kami.</h2>
                    </div>
                    <div class="accordion accordion-1" id="accordionExample1">
                        @if(isset($faqs) && $faqs->isNotEmpty())
                            @foreach($faqs as $faq)
                                <div class="accordion-item @if($loop->first) active @endif" id="heading{{ $loop->iteration }}1">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $loop->iteration }}1" aria-expanded="@if($loop->first)true @else false @endif" aria-controls="collapse{{ $loop->iteration }}1">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="fa fa-minus"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                {{ sprintf('%02d', $loop->iteration) }}. {{ $faq->question }}
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $loop->iteration }}1" class="accordion-collapse collapse @if($loop->first) show @endif" aria-labelledby="heading{{ $loop->iteration }}1"
                                        data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq End -->

<!-- Blog start -->
<section class="section-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <div class="pbmit-heading-subheading animation-style2">
                    <h4 class="pbmit-subtitle">Artikel Terbaru</h4>
                    <h2 class="pbmit-title">Artikel terbaru kami</h2>
                </div>
            </div>
            <div class="col-md-4 col-lg-6 text-md-end mb-md-0 mb-5">
                <a class="pbmit-btn pbmit-btn-global" href="{{ route('blog') }}">
                    <span class="pbmit-button-content-wrapper">
                        <span class="pbmit-button-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                <title>black-arrow</title>
                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                            </svg>
                        </span>
                        <span class="pbmit-button-text">Lihat Semua Post</span>
                    </span>
                </a>
            </div>
        </div>
        <div class="swiper-slider" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false" data-columns="3" data-margin="40" data-effect="slide">
            <div class="swiper-wrapper">
                @if(isset($blogs) && $blogs->isNotEmpty())
                    @foreach($blogs as $blog)
                        <article class="pbmit-blog-style-1 swiper-slide">
                            <div class="pbmit-post-item">
                                <div class="pbmit-featured-wrapper">
                                    <div class="pbmit-featured-container">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                @php($blogImage = $blog->thumbnail ? Storage::disk('public')->url($blog->thumbnail) : null)
                                                @if($blogImage)
                                                    <img src="{{ asset(str_replace('public/', '', $blogImage)) }}" class="img-fluid" alt="{{ $blog->title }}">
                                                @endif
                                            </div>
                                        </div>
                                        <a class="pbmit-link" href="{{ route('blog-detail', $blog->slug) }}"></a>
                                    </div>
                                    <div class="pbmit-meta-date pbmit-meta-line">
                                        <span class="pbmit-post-date">{{ ($blog->published_at ?? $blog->created_at)->format('j M Y') }}</span>
                                    </div>
                                </div>
                                <div class="pbmit-content-wrapper">
                                    <h3 class="pbmit-post-title">
                                        <a href="{{ route('blog-detail', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-category">
                                            @if($blog->category)
                                                <a href="{{ route('blog') }}" rel="category tag">{{ $blog->category->name }}</a>
                                            @endif
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
<!-- Blog End -->
@endsection
