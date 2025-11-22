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
            @foreach($portfolios as $portfolio)
                <article class="pbmit-portfolio-style-1 col-md-4">
                    <div class="pbminfotech-post-content">
                        <div class="pbminfotech-image-wapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ route('portfolio-detail', $portfolio->slug) }}">
                                        @php($imageUrl = $portfolio->image_cover_url)
                                        @if($imageUrl)
                                            <img src="{{ asset(str_replace('public/', '', $imageUrl)) }}" class="img-fluid" alt="{{ $portfolio->title }}">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <a class="pbmit-link" href="{{ route('portfolio-detail', $portfolio->slug) }}"></a>
                        </div>
                        <div class="pbminfotech-box-content">
                            <div class="pbminfotech-titlebox">
                                <h3 class="pbmit-portfolio-title">
                                    <a href="{{ route('portfolio-detail', $portfolio->slug) }}">{{ $portfolio->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
            <div class="col-12 mt-4">
                {{ $portfolios->links() }}
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Grid Col 3 End -->
@endsection
