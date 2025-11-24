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
                        <span><span class="post-root post post-post current-item"> Portofolio Detail</span></span>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
<!-- Title Bar End -->
@endsection
@section('content')
<section class="site-content">
    <div class="container">
        <article class="pbmit-portfolio-single">
            <div class="pbmit-entry-content">
                <div class="pbmit-heading animation-style2">
                    <h3 class="pbmit-title mb-4">{{ $portfolio->title }}</h3>
                </div>
                <p class="pbmit-firstletter">{!! $portfolio->desc !!}</p>
                <div class="row mb-5">
                    @php($imageUrl = $portfolio->image_cover_url)
                    @if($imageUrl)
                        <div class="col-md-6 pe-md-4 text-center">
                            <div class="pbmit-animation-style1">
                                <img src="{{ asset(str_replace('public/', '', $imageUrl)) }}" class="rounded-5 img-fluid" alt="{{ $portfolio->title }}">
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-4 text-center mt-md-0 mt-4">
                            <div class="pbmit-animation-style2">
                                <img src="{{ asset(str_replace('public/', '', $imageUrl)) }}" class="rounded-5 img-fluid" alt="{{ $portfolio->title }}">
                            </div>
                        </div>
                    @endif
                </div>
                @if(!empty($portfolio->client_review))
                    <div class="pbmit-heading animation-style2 mt-3">
                        <h3 class="pbmit-title">Testimoni Klien</h3>
                    </div>
                    <div class="ihbox-style-area pbmit-bg-color-light">
                        <div class="pbmit-ihbox-style-9">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-xclean-icon pbmit-xclean-icon-straight-quotes"></i>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">{{ $portfolio->client_review }}</h2>
                                    <div class="pbmit-heading-desc">Satisfied Client</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </article>
    </div>
</section>
@endsection
