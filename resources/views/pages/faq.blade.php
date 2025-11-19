@extends('layouts.app2')

@section('title-bar')
<!-- Title Bar Start -->
<div class="pbmit-title-bar-wrapper">
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
            <h4 class="pbmit-subtitle">About</h4>
            <h2 class="pbmit-title">General Questions</h2>
            <div class="pbmit-heading-desc">You will find answers to about our various Game work and Game's service and more. Please feel <br>free to contact us if you don't get your question's answer in below.</div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div class="pe-xl-3">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                        <span class="pbmit-accordion-icon-closed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <span class="pbmit-accordion-icon-opened">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                    </span>
                                    <span class="pbmit-accordion-title">
                                        01. How much time will it take to deep clean my home?
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                        <span class="pbmit-accordion-icon-closed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <span class="pbmit-accordion-icon-opened">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                    </span>
                                    <span class="pbmit-accordion-title">
                                        02. I've never had a cleaning before, does that cost extra?
                                    </span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" 
                            data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                        <span class="pbmit-accordion-icon-closed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <span class="pbmit-accordion-icon-opened">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                    </span>
                                    <span class="pbmit-accordion-title">
                                        03. What to do when the cleaners arrive?
                                    </span>
                                </button>
                            </h2> 
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" 
                            data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                                </div>
                            </div>                         
                        </div>    
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                        <span class="pbmit-accordion-icon-closed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <span class="pbmit-accordion-icon-opened">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                    </span>
                                    <span class="pbmit-accordion-title">
                                        04. Is professional tile and grout cleaning expensive?
                                    </span>
                                </button>
                            </h2> 
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" 
                            data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                                </div>
                            </div>                         
                        </div>               
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="ps-xl-3">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item active">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                        <span class="pbmit-accordion-icon-closed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <span class="pbmit-accordion-icon-opened">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                    </span>
                                    <span class="pbmit-accordion-title">
                                        01. What domestic regular services do you provide?
                                    </span>
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" 
                            aria-labelledby="heading1" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                        <span class="pbmit-accordion-icon-closed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <span class="pbmit-accordion-icon-opened">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                    </span>
                                    <span class="pbmit-accordion-title">
                                        02. How much will it cost to clean my house?
                                    </span>
                                </button>
                            </h2> 
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" 
                            data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                                </div>
                            </div>                         
                        </div> 
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                        <span class="pbmit-accordion-icon-closed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <span class="pbmit-accordion-icon-opened">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                    </span>
                                    <span class="pbmit-accordion-title">
                                        03. Why do I need a professional cleaning service?
                                    </span>
                                </button>
                            </h2> 
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" 
                            data-bs-parent="#accordionExample1">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. We meet with you to learn about your team, your needs, and your goals. If you have a job profile available, we will use it. If not, we will help you write the job profile.
                                </div>
                            </div>                         
                        </div>    
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                        <span class="pbmit-accordion-icon-closed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <span class="pbmit-accordion-icon-opened">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                    </span>
                                    <span class="pbmit-accordion-title">
                                        04. What Cities/Areas Does Cleaning Serve?
                                    </span>
                                </button>
                            </h2> 
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" 
                            data-bs-parent="#accordionExample1">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. We meet with you to learn about your team, your needs, and your goals. If you have a job profile available, we will use it. If not, we will help you write the job profile.
                                </div>
                            </div>                         
                        </div>       
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
            <h2 class="pbmit-title">Frequently Asked <br>Questions</h2>
            <div class="pbmit-heading-desc">
                You will find answers to about our various construction work and constructor's  service and more. Please feel <br>  free to contact us if you don't get your question's answer in below.
            </div>
        </div>
        <div class="accordion" id="accordionExample2">
            <div class="accordion-item active">
                <h2 class="accordion-header" id="heading01">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                        <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                            <span class="pbmit-accordion-icon-closed">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="pbmit-accordion-icon-opened">
                                <i class="fa fa-minus"></i>
                            </span>
                        </span>
                        <span class="pbmit-accordion-title">
                            01. How long does it take to get the tile and grout at my business professionally cleaned?
                        </span>
                    </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse show" 
                aria-labelledby="heading01" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                        <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                            <span class="pbmit-accordion-icon-closed">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="pbmit-accordion-icon-opened">
                                <i class="fa fa-minus"></i>
                            </span>
                        </span>
                        <span class="pbmit-accordion-title">
                            02. Is there anything I need to do before house cleaners show up at my house?
                        </span>
                    </button>
                </h2> 
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02" 
                data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                    </div>
                </div>                         
            </div> 
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                        <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                            <span class="pbmit-accordion-icon-closed">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="pbmit-accordion-icon-opened">
                                <i class="fa fa-minus"></i>
                            </span>
                        </span>
                        <span class="pbmit-accordion-title">
                            03. Do I have to do anything to prepare for my cleaning service?
                        </span>
                    </button>
                </h2> 
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03" 
                data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                    </div>
                </div>                         
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                        <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                            <span class="pbmit-accordion-icon-closed">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="pbmit-accordion-icon-opened">
                                <i class="fa fa-minus"></i>
                            </span>
                        </span>
                        <span class="pbmit-accordion-title">
                            04. Are there any areas that you don't clean in a standard home deep cleaning package?
                        </span>
                    </button>
                </h2> 
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04" 
                data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                    </div>
                </div>                         
            </div>          
        </div>
    </div>
</section>
<!-- Faq End -->
@endsection
