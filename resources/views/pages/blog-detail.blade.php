@extends('layouts.app2')

@section('title-bar')
<!-- Title Bar Start -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> Blog</h1>
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
                        <span><span class="post-root post post-post current-item"> Blog Detail</span></span>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</div>
<!-- Title Bar End -->
@endsection

@section('content')
<section class="site-content blog-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-9 blog-left-col">
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <div class="post blog-classic"> 
                                <div class="pbmit-img-wrapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="{{ asset('assets/images/blog/blog-02.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                        </div>  
                                    </div>  
                                    <span class="pbmit-meta pbmit-meta-date">
                                        <i class="pbmit-base-icon-calendar-3"></i>
                                        <a href="blog-details.html" rel="bookmark">
                                            <time class="entry-date published" datetime="2024-08-07T11:15:26+00:00">07 Aug 2024</time>
                                            <time class="updated pbmit-hide" datetime="2024-09-04T10:15:23+00:00">04 Sep 2024</time>
                                        </a>
                                    </span>
                                </div>
                                <div class="pbmit-blog-classic-inner">
                                    <div class="pbmit-blog-meta pbmit-blog-meta-top">	
                                        <div class="pbmit-meta pbmit-meta-cat">
                                            <ul class="post-categories">
                                                <li><a href="blog-classic.html" rel="category tag">Cleaner</a></li>
                                                <li><a href="blog-classic.html" rel="category tag">Sweeping</a></li>
                                            </ul>
                                        </div>
                                        <span class="pbmit-meta pbmit-meta-date">
                                            <i class="pbmit-base-icon-calendar-3"></i>
                                            <a href="blog-details.html" rel="bookmark">
                                                <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                                <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                            </a>
                                        </span>
                                        <span class="pbmit-meta pbmit-meta-author">
                                            <i class="pbmit-base-icon-user-3"></i>by
                                            <a class="pbmit-author-link" href="blog-details.html">xcleanpbm</a>
                                        </span>		
                                        <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                            <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                        </span>
                                    </div>
                                    <div class="pbmit-entry-content">
                                        <p class="pbmit-firstletter">
                                            Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are looking for your home, cleaning service of unparalleled quality office or business premises to be cleaned or need water damage restoration or mold remediation in a exceptionally high standard.
                                        </p>
                                        <p>When it comes to your business premises, cleanliness and hygiene are important for several reasons. As well as the wanting to provide the most comfortable and safe environment for you and your staff to work efficiently, if you are a client customers facing business and welcome visitors to your office or workplace regularly, you will want to ensure the place cleaned to a high standard. The last thing you want to give any interested customers and clients, contractors, or even shareholders a bad mpression of who you are and what you are all about. </p>
                                        <blockquote>
                                            <p>“A massage is just like a movie, really relaxing and a total escape, except in a massage you’re the star. And you don’t miss anything by falling asleep!” <cite>Carolyn Ortiz</cite></p>
                                        </blockquote> 
                                        <h3 class="mb-3">Start a house cleaning business and get real!</h3>
                                        <p>Our expertise lies on crafting captivating and engrossing multiplayer gaming environments. Our team of professionals is committed to developing excellent, personalized social gaming solutions that meet your demands. From massively multiplayer online role-playing games (MMORPGs) to social network games and online board games, we create new platforms or improve ones that already exist.Although it is beginner friendly, the Unity Game Engine falls in the middle.</p>
                                        <div class="pbmit-block-columns row">
                                            <div class="pbmit-block-column col-md-12 col-xl-6">
                                                <figure>
                                                    <img src="{{ asset('assets/images/blog/blog-detail-img-01.jpg') }}" class="img-fluid w-100" alt="">
                                                </figure>
                                            </div>
                                            <div class="pbmit-block-column col-md-12 col-xl-6">
                                                <figure>
                                                    <img src="{{ asset('assets/images/blog/blog-detail-img-02.jpg') }}" class="img-fluid w-100" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="pbmit-base-icon-tick-1"></i>						
                                                </span>
                                                <span class="pbmit-icon-list-text">It takes excessive electricity loaded on the body and provides relaxation.</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="pbmit-base-icon-tick-1"></i>						
                                                </span>
                                                <span class="pbmit-icon-list-text">It reveals visible differences in getting the body in shape, eliminating cellulite and beautification.</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="pbmit-base-icon-tick-1"></i>						
                                                </span>
                                                <span class="pbmit-icon-list-text">If you experience tension or have problems sleeping at night, it eliminates these problems with its healing effect.</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="pbmit-icon-list-icon">
                                                    <i aria-hidden="true" class="pbmit-base-icon-tick-1"></i>						
                                                </span>
                                                <span class="pbmit-icon-list-text">It provides softening and relaxation of muscles. It helps to relieve muscle spasms that get tired and harden.</span>
                                            </li>
                                        </ul>
                                        <p class="mt-3">If there is an important point you should pay attention to in terms of your health, you should definitely inform the SPA specialist before the massage. Any wrong application to any part of the body. you can get help from the staff before going to the SPA center.</p>
                                    </div>
                                    <div class="pbmit-blog-meta-bottom">
                                        <div class="pbmit-blog-meta-bottom-left">
                                            <span class="pbmit-meta-tags">
                                                <a href="blog-classic.html" rel="tag">Dusting</a>
                                                <a href="blog-classic.html" rel="tag">Sweeping</a>
                                                <a href="blog-classic.html" rel="tag">Vacuum</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>   
                            </div> 
                            <nav class="navigation post-navigation" aria-label="Posts">
                                <div class="nav-links">
                                    <div class="nav-previous">
                                        <a href="blog-details.html" rel="prev">
                                            <span class="pbmit-post-nav-icon">
                                                <i class="pbmit-base-icon-angle-left"></i>
                                                <span class="pbmit-post-nav-head">Previous Post</span>
                                            </span>
                                            <span class="pbmit-post-nav-wrapper">
                                                <span class="pbmit-post-nav nav-title">How You Typically Do Your Cleaning Process</span> 
                                            </span>
                                        </a>
                                    </div>
                                    <div class="nav-next">
                                        <a href="#" rel="next">
                                            <span class="pbmit-post-nav-icon">
                                                <span class="pbmit-post-nav-head">Next Post</span>
                                                <i class="pbmit-base-icon-angle-right"></i>
                                            </span>
                                            <span class="pbmit-post-nav-wrapper">
                                                <span class="pbmit-post-nav nav-title">Things to know choosing a cleaning service.</span> 
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </article>
                        <div class="comments-area">
                            <h2 class="comments-title">3 Replies to “Step by step guide to clean your carpets.”</h2>
                            <ul class="comment-list">
                                <li class="comment depth-1">
                                    <div class="pbmit-comment">
                                        <div class="pbmit-comment-avatar">
                                            <img src="{{ asset('assets/images/avtar/img-01.jpeg') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="pbmit-comment-content">
                                            <div class="pbmit-comment-meta">
                                                <span class="pbmit-comment-author">by
                                                    <span class="pbmit-comment-author-inner">
                                                        <a href="#">John Doe</a>
                                                    </span>
                                                </span>
                                                <span class="pbmit-comment-date">
                                                    <a href="#">2 months ago</a>
                                                </span>
                                            </div>
                                            <p>Faucibus nisl tincidunt eget nullam non nisi est. Duis ut diam quam nulla porttittor massa. Iaculis eu non diam phasellus Imperdiet  dui accumsan sit amet nulla facilisi morbi tempus iaculis.</p>
                                            <div class="reply">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li>
                                            <div class="pbmit-comment">
                                                <div class="pbmit-comment-avatar">
                                                    <img src="{{ asset('assets/images/avtar/img-02.jpeg') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="pbmit-comment-content">
                                                    <div class="pbmit-comment-meta">
                                                        <span class="pbmit-comment-author">by
                                                            <span class="pbmit-comment-author-inner">
                                                                <a href="#">Leona Spencer</a>
                                                            </span>
                                                        </span>
                                                        <span class="pbmit-comment-date">
                                                            <a href="#">2 months ago</a>
                                                        </span>
                                                    </div>
                                                    <p>Faucibus nisl tincidunt eget nullam non nisi est. Duis ut diam quam nulla porttittor massa. Iaculis eu non diam phasellus Imperdiet  dui accumsan sit amet nulla facilisi morbi tempus iaculis.</p>
                                                    <div class="reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="pbmit-comment">
                                        <div class="pbmit-comment">
                                            <div class="pbmit-comment-avatar">
                                                <img src="{{ asset('assets/images/avtar/img-01.jpeg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="pbmit-comment-content">
                                                <div class="pbmit-comment-meta">
                                                    <span class="pbmit-comment-author">by
                                                        <span class="pbmit-comment-author-inner">
                                                            <a href="#">John Doe</a>
                                                        </span>
                                                    </span>
                                                    <span class="pbmit-comment-date">
                                                        <a href="#">2 months ago</a>
                                                    </span>
                                                </div>
                                                <p>Faucibus nisl tincidunt eget nullam non nisi est. Duis ut diam quam nulla porttittor massa. Iaculis eu non diam phasellus Imperdiet  dui accumsan sit amet nulla facilisi morbi tempus iaculis.</p>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply </h3>
                                <div class="comment-form">
                                    <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label for="comment">Comment <span class="required">*</span></label>
                                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                            </div>
                                            <div class="col-sm-12"> 
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input id="author" type="text" class="form-control" name="author">
                                            </div>
                                            <div class="col-sm-12"> 
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input id="email" class="form-control" name="email" type="email" value="">
                                            </div>
                                            <div class="col-sm-12"> 
                                                <button type="submit" class="pbmit-btn pbmit-btn-global">Post Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-md- col-xl-3 blog-right-col">
                <aside class="sidebar">
                    <aside class="widget widget-search">
                        <h2 class="widget-title">Search</h2>
                        <form class="search-form">
                            <input type="search" class="search-field" placeholder="Search …" value="">
                            <button type="submit" class="search-submit"></button>
                        </form>
                    </aside>
                    <aside class="widget widget-categories">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            <li>
                                <span class="pbmit-cat-li">
                                    <a href="blog-classic.html">Cleaner</a>
                                    <span class="pbmit-brackets">( 3 )</span>
                                </span>
                            </li>
                            <li>
                                <span class="pbmit-cat-li">
                                    <a href="blog-classic.html">Custodian</a>
                                    <span class="pbmit-brackets">( 3 )</span>
                                </span>
                            </li>
                            <li>
                                <span class="pbmit-cat-li">
                                    <a href="blog-classic.html">Domestic</a>
                                    <span class="pbmit-brackets">( 3 )</span>
                                </span>
                            </li>
                            <li>
                                <span class="pbmit-cat-li">
                                    <a href="blog-classic.html">Furniture</a>
                                    <span class="pbmit-brackets">( 3 )</span>
                                </span>
                            </li>
                            <li>
                                <span class="pbmit-cat-li">
                                    <a href="blog-classic.html">Residential</a>
                                    <span class="pbmit-brackets">( 2 )</span>
                                </span>
                            </li>
                            <li>
                                <span class="pbmit-cat-li">
                                    <a href="blog-classic.html">Sweeping</a>
                                    <span class="pbmit-brackets">( 4 )</span>
                                </span>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget-recent-post">
                        <h2 class="widget-title">Recent Post </h2>
                        <ul class="recent-post-list">
                            <li class="recent-post-list-li"> 
                                <a class="recent-post-thum" href="blog-details.html">
                                    <img src="{{ asset('assets/images/recent-post/blog-01.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <div class="pbmit-rpw-content">
                                    <span class="pbmit-rpw-title">
                                        <a href="blog-details.html">Things to know choosing a cleaning service.</a>
                                    </span>
                                    <span class="pbmit-rpw-date">
                                        <a href="blog-details.html">07 Aug 2024</a>
                                    </span>
                                </div> 
                            </li>
                            <li class="recent-post-list-li"> 
                                <a class="recent-post-thum" href="blog-details.html">
                                    <img src="{{ asset('assets/images/recent-post/blog-02.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <div class="pbmit-rpw-content">
                                    <span class="pbmit-rpw-title">
                                        <a href="blog-details.html">Step by step guide to clean your carpets.</a>
                                    </span>
                                    <span class="pbmit-rpw-date">
                                        <a href="blog-details.html">07 Aug 2024</a>
                                    </span>
                                </div> 
                            </li>
                            <li class="recent-post-list-li"> 
                                <a class="recent-post-thum" href="blog-details.html">
                                    <img src="{{ asset('assets/images/recent-post/blog-03.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <div class="pbmit-rpw-content">
                                    <span class="pbmit-rpw-title">
                                        <a href="blog-details.html">How You Typically Do Your Cleaning Process</a>
                                    </span>
                                    <span class="pbmit-rpw-date">
                                        <a href="blog-details.html">07 Aug 2024</a>
                                    </span>
                                </div> 
                            </li>
                        </ul>
                    </aside> 
                    <aside class="widget pbmit-service-ad">
                        <div class="textwidget">
                            <div class="pbmit-service-ads">
                                <div class="pbmit-ads-call">Call 123 234-567-890</div>
                                <h4 class="pbmit-ads-subtitle">We Provide</h4>
                                <h3 class="pbmit-ads-title">Best Services</h3>
                                <a class="pbmit-btn pbmit-btn-global" href="tel:123-234-567-890">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Contact us Now</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-tag-cloud">
                        <h3 class="widget-title">Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="blog-classic.html" class="tag-cloud-link">Cleaning</a>
                            <a href="blog-classic.html" class="tag-cloud-link">Disinfectant</a>
                            <a href="blog-classic.html" class="tag-cloud-link">Dusting</a>
                            <a href="blog-classic.html" class="tag-cloud-link">Moping</a>
                            <a href="blog-classic.html" class="tag-cloud-link">Sweeping</a>
                            <a href="blog-classic.html" class="tag-cloud-link">Vacuum</a>
                        </div>
                    </aside> 
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection