@extends('layouts.app2')

@section('title-bar')
<!-- Title Bar Start -->
@php($banner = \App\Models\BannerSetting::where('page', 'layanan-kami')->first())
@php($bannerImage = $banner && $banner->image_url ? asset(str_replace('public/', '', $banner->image_url)) : null)
<div class="pbmit-title-bar-wrapper" @if($bannerImage) style="background-image:url('{{ $bannerImage }}');background-size:cover;background-position:center;" @endif>
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> Layanan Kami</h1>
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
                        <span><span class="post-root post post-post current-item"> Layanan Kami</span></span>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
<!-- Title Bar End -->
@endsection

@section('content')
<!-- Services Start --> 
<section class="section-xl">
    <div class="container">
        <div class="pbmit-element-posts-wrapper row">
            @if(isset($services) && $services->count())
                @foreach($services as $service)
                    <article class="pbmit-service-style-1 col-md-4">
                        <div class="pbminfotech-post-item">
                            <div class="pbmit-box-content-wrap">
                                <div class="pbmit-service-image-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            @php($imageUrl = $service->image_cover_url)
                                            @if($imageUrl)
                                                <img src="{{ $imageUrl }}" class="img-fluid" alt="{{ $service->title }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="pbmit-service-btn-wrapper">
                                        <a class="pbmit-service-btn" href="{{ route('service-detail', $service->slug) }}" title="{{ $service->title }}">
                                            <span class="pbmit-button-icon">
                                                <i class="pbmit-base-icon-angle-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <a class="pbmit-link" href="{{ route('service-detail', $service->slug) }}"></a>
                                </div>
                                <div class="pbmit-content-box">
                                    <div class="pbminfotech-box-number">{{ sprintf('%02d', $loop->iteration) }}</div>
                                    <div class="pbmit-serv-cat">
                                        @if($service->label)
                                            <a href="#" rel="tag">{{ $service->label }}</a>
                                        @endif
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="{{ route('service-detail', $service->slug) }}">{{ $service->title }}</a>
                                    </h3>
                                    <div class="pbmit-service-description">
                                        <p>{{ \Illuminate\Support\Str::limit($service->desc, 160) }}</p>
                                    </div>
                                    @php($iconUrl = $service->image_icon_url)
                                    @php($iconClass = $service->icon_class)
                                    <div class="pbmit-service-icon">
                                        @if($iconUrl)
                                            <img src="{{ $iconUrl }}" alt="{{ $service->title }}" style="width:32px;height:32px;object-fit:contain;">
                                        @elseif($iconClass)
                                            <i class="{{ $iconClass }}" style="font-size:28px;"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                <div class="col-12 mt-4">
                    {{ $services->links() }}
                </div>
            @else
                <div class="col-12">Tidak ada layanan.</div>
            @endif
        </div>
    </div>
</section>
<!-- Services end --> 
@endsection
