@extends('layouts.app2')

@section('title-bar')
<!-- Title Bar Start -->
<div class="pbmit-title-bar-wrapper">
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
 <section class="site-content service-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-9 service-left-col">
                <div class="pbmit-service-feature-image">
                    @php($coverUrl = $service->image_cover_url)
                    @if($coverUrl)
                        <img src="{{ asset(str_replace('public/', '', $coverUrl)) }}" class="img-fluid w-100" alt="{{ $service->title }}">
                    @endif
                </div>
                <div class="pbmit-entry-content">
                    <div class="pbmit-service_content">
                        <div class="pbmit-heading animation-style2">
                            <h3 class="pbmit-title mb-3">{{ $service->title }}</h3>
                        </div>
                        <p class="pbmit-firstletter">{!! $service->desc !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3 service-right-col sidebar">
                <aside class="service-sidebar">
                    <aside class="widget post-list">
                        <h2 class="widget-title">Our Services</h2>
                        <div class="all-post-list">
                            <ul>
                                @if(isset($allServices) && $allServices->count())
                                    @foreach($allServices as $s)
                                        <li class="@if($s->slug === $service->slug) post-active @endif">
                                            <a href="{{ route('service-detail', $s->slug) }}"> {{ $s->title }} </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </aside>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
