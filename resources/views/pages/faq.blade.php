@extends('layouts.app2')

@section('title-bar')
<!-- Title Bar Start -->
@php($banner = \App\Models\BannerSetting::where('page', 'faq')->first())
@php($bannerImage = $banner && $banner->image_url ? asset(str_replace('public/', '', $banner->image_url)) : null)
<div class="pbmit-title-bar-wrapper" @if($bannerImage) style="background-image:url('{{ $bannerImage }}');background-size:cover;background-position:center;" @endif>
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> Pertanyaan Umum (FAQ)</h1>
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
                        <span><span class="post-root post post-post current-item"> FAQ</span></span>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
<!-- Title Bar End -->
@endsection

@section('content')
<!-- Faq Start -->
<section class="section-lg">
    <div class="container">
        <div class="pbmit-heading-subheading text-center animation-style2">
            <h4 class="pbmit-subtitle">Informasi Umum</h4>
            <h2 class="pbmit-title">Pertanyaan Umum</h2>
            <div class="pbmit-heading-desc">Temukan jawaban cepat untuk layanan sedot WC, pengelolaan limbah, dan layanan darurat kami. Kalau tidak menemukan jawaban, silakan hubungi kami — siap 24/7.</div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div class="pe-xl-3">
                    <div class="accordion" id="accordionExample">
                        @if(isset($faqsLeft) && $faqsLeft->count())
                            @foreach($faqsLeft as $faq)
                                <div class="accordion-item @if($loop->first) active @endif">
                                    <h2 class="accordion-header" id="headingLeft{{ $loop->iteration }}">
                                        <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse" 
                                        data-bs-target="#collapseLeft{{ $loop->iteration }}" aria-expanded="@if($loop->first)true @else false @endif" aria-controls="collapseLeft{{ $loop->iteration }}">
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
                                    <div id="collapseLeft{{ $loop->iteration }}" class="accordion-collapse collapse @if($loop->first) show @endif" aria-labelledby="headingLeft{{ $loop->iteration }}" data-bs-parent="#accordionExample">
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
            <div class="col-md-12 col-xl-6">
                <div class="ps-xl-3">
                    <div class="accordion" id="accordionExample1">
                        @if(isset($faqsRight) && $faqsRight->count())
                            @foreach($faqsRight as $faq)
                                <div class="accordion-item @if($loop->first) active @endif">
                                    <h2 class="accordion-header" id="headingRight{{ $loop->iteration }}">
                                        <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse" 
                                        data-bs-target="#collapseRight{{ $loop->iteration }}" aria-expanded="@if($loop->first)true @else false @endif" aria-controls="collapseRight{{ $loop->iteration }}">
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
                                    <div id="collapseRight{{ $loop->iteration }}" class="accordion-collapse collapse @if($loop->first) show @endif" aria-labelledby="headingRight{{ $loop->iteration }}" data-bs-parent="#accordionExample1">
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

<!-- Faq Start -->
<section class="section-lgb">
    <div class="container">
        <div class="pbmit-heading-subheading text-center animation-style2">
            <h4 class="pbmit-subtitle">Information</h4>
            <h2 class="pbmit-title">Pertanyaan yang Sering <br>Diajukan</h2>
            <div class="pbmit-heading-desc">
                Cari jawaban tentang layanan sedot WC dan pengelolaan limbah? 
                Silakan baca pertanyaan umum berikut. Jika masih belum jelas, 
                tinggal hubungi kami — kami siap bantu.
            </div>
        </div>
        <div class="accordion" id="accordionExample2">
            @if(isset($specificFaqs) && $specificFaqs->count())
                @foreach($specificFaqs as $faq)
                    <div class="accordion-item @if($loop->first) active @endif">
                        <h2 class="accordion-header" id="headingSpecific{{ $loop->iteration }}">
                            <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse" 
                            data-bs-target="#collapseSpecific{{ $loop->iteration }}" aria-expanded="@if($loop->first)true @else false @endif" aria-controls="collapseSpecific{{ $loop->iteration }}">
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
                        <div id="collapseSpecific{{ $loop->iteration }}" class="accordion-collapse collapse @if($loop->first) show @endif" aria-labelledby="headingSpecific{{ $loop->iteration }}" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- Faq End -->
@endsection
