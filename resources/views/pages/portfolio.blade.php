@extends('layouts.app2')
@section('title-bar')
<!-- Title Bar Start -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> Pekerjaan Kami Sebelumnya</h1>
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
                        <span><span class="post-root post post-post current-item"> Portofolio</span></span>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
<!-- Title Bar End -->
@endsection
@section('content')
<!-- Portfolio Grid Col 3 -->
<section class="section-xl">
    <div class="container">
        <div class="row pbmit-element-posts-wrapper">
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-01b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Disinfectant</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Deep Cleaning</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-02b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Shaking</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Window Cleaning</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-03b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Dusting</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Kitchen Cleaning</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-04b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Vacuum</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Dash Cleanup</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-05b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Sweeping</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Junk Removal</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-06b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Shaking</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Stephen House</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-07b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Moping</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Door Cleaning</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-08b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Dusting</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Bathroom Cleaning</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-portfolio-style-1 col-md-4">
                <div class="pbminfotech-post-content">
                    <div class="pbminfotech-image-wapper">
                        <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                                <img src="{{ asset('assets/images/portfolio/portfolio-09b.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a class="pbmit-link" href="{{ url('/portfolio/' . "test") }}"></a>
                    </div>
                    <div class="pbminfotech-box-content">
                        <div class="pbminfotech-titlebox">
                            <div class="pbmit-port-cat">
                                <a href="#" rel="tag">Disinfectant</a>
                            </div>
                            <h3 class="pbmit-portfolio-title">
                                <a href="{{ url('/portfolio/' . "test") }}">Apartment Cleaning</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- Portfolio Grid Col 3 End -->
@endsection
