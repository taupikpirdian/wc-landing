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
<!-- Services Start --> 
<section class="section-xl">
    <div class="container">
        <div class="pbmit-element-posts-wrapper row">
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('images/service/service-01.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'residential-cleaning') }}" title="Residential Cleaning">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'residential-cleaning') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">01</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Air Freshener</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'residential-cleaning') }}">Residential Cleaning</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-store"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('images/service/service-02.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'office-cleaning') }}" title="Office Cleaning">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'office-cleaning') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">02</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Cleaner</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'office-cleaning') }}">Office Cleaning</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-dusting"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('images/service/service-03.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'floor-cleaner') }}" title="Floor Cleaner">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'floor-cleaner') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">03</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Custodian</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'floor-cleaner') }}">Floor Cleaner</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-vaccum-cleaner"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/service/service-04.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'floor-cleaner') }}" title="Domestic Cleaning">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'floor-cleaner') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">04</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Disinfectant</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'floor-cleaner') }}">Domestic Cleaning</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-duster"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/service/service-05.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'floor-cleaner') }}" title="Pressure Washing">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'floor-cleaner') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">05</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Vacuum</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'floor-cleaner') }}">Pressure Washing</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-mop"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/service/service-06.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'floor-cleaner') }}" title="Window Cleaning">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'floor-cleaner') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">06</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Washroom</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'floor-cleaner') }}">Window Cleaning</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-cleaning-gloves"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/service/service-07.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'floor-cleaner') }}" title="Carpet Cleaning">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'floor-cleaner') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">07</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Vacuum</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'floor-cleaner') }}">Carpet Cleaning</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-store"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/service/service-08.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'floor-cleaner') }}" title="Commercial Cleaning">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'floor-cleaner') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">08</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Cleaner</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'floor-cleaner') }}">Commercial Cleaning</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-detergent"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pbmit-service-style-1 col-md-4">
                <div class="pbminfotech-post-item">
                    <div class="pbmit-box-content-wrap">
                        <div class="pbmit-service-image-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <img src="images/service/service-09.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbmit-service-btn-wrapper">
                                <a class="pbmit-service-btn" href="{{ route('service-detail', 'floor-cleaner') }}" title="Furniture Polish">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a class="pbmit-link" href="{{ route('service-detail', 'floor-cleaner') }}"></a>
                        </div>
                        <div class="pbmit-content-box">
                            <div class="pbminfotech-box-number">09</div>
                            <div class="pbmit-serv-cat">
                                <a href="#" rel="tag">Disinfectant</a>
                            </div>
                            <h3 class="pbmit-service-title">
                                <a href="{{ route('service-detail', 'floor-cleaner') }}">Furniture Polish</a>
                            </h3>
                            <div class="pbmit-service-description">
                                <p>We provide you the best service quality with best matter you’re looking for residential or commercial cleaning services</p>
                            </div>
                            <div class="pbmit-service-icon">
                                <i class="pbmit-xclean-icon pbmit-xclean-icon-wipe"></i>			
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- Services end --> 
@endsection