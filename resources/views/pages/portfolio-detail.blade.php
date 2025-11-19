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
                    <h3 class="pbmit-title mb-4">Description of After Renovation Work</h3>
                </div>
                <p class="pbmit-firstletter">My Project-based cleaning is a one-time deep cleaning of a facility or a specialty service, such as window washing and carpet cleaning. This is done when a facility or space needs to cleaned before routine maintenance. Many times it’s needed when there has been an event or a mishap that calls for more extensive cleaning in-between (or before) regular visits from a janitorial team. Our be professionals are prepared to meet your cleaning needs. Contact us for a customized deep clean for a safe and healthy work environment for all. Oftentimes, people will hire out a the crew for one-time commercial cleaning if they are having a large event. They may hire a crew to prepare before the event or for both before and after. Helping businesses as they move into a new building is another sets common project that involves a single visit.</p>
                <p>We do! We provide post-construction cleanup to help businesses who are moving into new building or who have recently upgraded their facilities. We can ensure your space is ready for by eliminating dust and debris left behind by the contractor. We will sweep, vacuum, and wipe down walls, floors and surfaces so your new space is comfortable and inviting from day one.</p>
                <div class="row mb-5">
                    <div class="col-md-6 pe-md-4 text-center">
                        <div class="pbmit-animation-style1">
                            <img src="images/portfolio/portfolio-single-02.jpg" class="rounded-5 img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 ps-md-4 text-center mt-md-0 mt-4">
                        <div class="pbmit-animation-style2">
                            <img src="images/portfolio/portfolio-single-03.jpg" class="rounded-5 img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="pbmit-heading animation-style2 mt-3">
                    <h3 class="pbmit-title">Our Client Review</h3>
                </div>
                <p>The most common type of massage is Swedish massage therapy. It involves soft, long, kneading strokes, as well light, rhythmic, tapping strokes, on topmost layers of muscles. This is also combined with the movement of joints. By relieving muscle tension, Swedish therapy be both relaxing and energizing. And it may even help after an injury.</p>
                <div class="ihbox-style-area pbmit-bg-color-light">
                    <div class="pbmit-ihbox-style-9">
                        <div class="pbmit-ihbox-headingicon">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                    <i class="pbmit-xclean-icon pbmit-xclean-icon-straight-quotes"></i>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">“A massage is just like a movie, really relaxing and a total escape, except in a  information the power innovation 
                                    that a reader will be distracte massage you’re the star. And you don’t miss anything by falling asleep!”
                                </h2>
                                <div class="pbmit-heading-desc">Satisfied Client</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
@endsection
