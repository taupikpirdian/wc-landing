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
                        <span><span class="post-root post post-post current-item"> Blog</span></span>
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
        <div class="row">
            <div class="col-md-12 col-xl-9 blog-left-col">
                <div class="row pbmit-element-posts-wrapper">
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-01.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                    <time class="entry-date published" datetime="2024-08-07T11:15:26+00:00">07 Aug 2024</time>
                                    <time class="updated pbmit-hide" datetime="2024-09-04T10:15:23+00:00">04 Sep 2024</time>
                                </a>
                            </span>
                        </div>
                        <div class="pbmit-blog-classic-inner">
                            <div class="pbmit-blog-meta pbmit-blog-meta-top">	
                                <div class="pbmit-meta pbmit-meta-cat">
                                    <ul class="post-categories">
                                        <li><a href="#" rel="category tag">Domestic</a></li>
                                        <li><a href="#" rel="category tag">Sweeping</a></li>
                                    </ul>
                                </div>
                                <span class="pbmit-meta pbmit-meta-date">
                                    <i class="pbmit-base-icon-calendar-3"></i>
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">Things to know choosing a cleaning service.</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-02.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
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
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">Step by step guide to clean your carpets.</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-03.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                    <time class="entry-date published" datetime="2024-08-07T11:15:26+00:00">07 Aug 2024</time>
                                    <time class="updated pbmit-hide" datetime="2024-09-04T10:15:23+00:00">04 Sep 2024</time>
                                </a>
                            </span>
                        </div>
                        <div class="pbmit-blog-classic-inner">
                            <div class="pbmit-blog-meta pbmit-blog-meta-top">	
                                <div class="pbmit-meta pbmit-meta-cat">
                                    <ul class="post-categories">
                                        <li><a href="blog-classic.html" rel="category tag">Custodian</a></li>
                                        <li><a href="blog-classic.html" rel="category tag">Furniture</a></li>
                                    </ul>
                                </div>
                                <span class="pbmit-meta pbmit-meta-date">
                                    <i class="pbmit-base-icon-calendar-3"></i>
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">How You Typically Do Your Cleaning Process</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-04.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
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
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">Cleaning Business history and evolution over time</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-05.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                    <time class="entry-date published" datetime="2024-08-07T11:15:26+00:00">07 Aug 2024</time>
                                    <time class="updated pbmit-hide" datetime="2024-09-04T10:15:23+00:00">04 Sep 2024</time>
                                </a>
                            </span>
                        </div>
                        <div class="pbmit-blog-classic-inner">
                            <div class="pbmit-blog-meta pbmit-blog-meta-top">	
                                <div class="pbmit-meta pbmit-meta-cat">
                                    <ul class="post-categories">
                                        <li><a href="blog-classic.html" rel="category tag">Residential</a></li>
                                        <li><a href="blog-classic.html" rel="category tag">Sweeping</a></li>
                                    </ul>
                                </div>
                                <span class="pbmit-meta pbmit-meta-date">
                                    <i class="pbmit-base-icon-calendar-3"></i>
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">Create a helpful checklist for customers.</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-06.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                    <time class="entry-date published" datetime="2024-08-07T11:15:26+00:00">07 Aug 2024</time>
                                    <time class="updated pbmit-hide" datetime="2024-09-04T10:15:23+00:00">04 Sep 2024</time>
                                </a>
                            </span>
                        </div>
                        <div class="pbmit-blog-classic-inner">
                            <div class="pbmit-blog-meta pbmit-blog-meta-top">	
                                <div class="pbmit-meta pbmit-meta-cat">
                                    <ul class="post-categories">
                                        <li><a href="blog-classic.html" rel="category tag">Furniture</a></li>
                                        <li><a href="blog-classic.html" rel="category tag">Residential</a></li>
                                    </ul>
                                </div>
                                <span class="pbmit-meta pbmit-meta-date">
                                    <i class="pbmit-base-icon-calendar-3"></i>
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">How to use cleaning equipment properly</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-07.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                    <time class="entry-date published" datetime="2024-08-07T11:15:26+00:00">07 Aug 2024</time>
                                    <time class="updated pbmit-hide" datetime="2024-09-04T10:15:23+00:00">04 Sep 2024</time>
                                </a>
                            </span>
                        </div>
                        <div class="pbmit-blog-classic-inner">
                            <div class="pbmit-blog-meta pbmit-blog-meta-top">	
                                <div class="pbmit-meta pbmit-meta-cat">
                                    <ul class="post-categories">
                                        <li><a href="blog-classic.html" rel="category tag">Domestic</a></li>
                                        <li><a href="blog-classic.html" rel="category tag">Furniture</a></li>
                                    </ul>
                                </div>
                                <span class="pbmit-meta pbmit-meta-date">
                                    <i class="pbmit-base-icon-calendar-3"></i>
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">The benefits of using a cleaning service</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-08.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                    <time class="entry-date published" datetime="2024-08-07T11:15:26+00:00">07 Aug 2024</time>
                                    <time class="updated pbmit-hide" datetime="2024-09-04T10:15:23+00:00">04 Sep 2024</time>
                                </a>
                            </span>
                        </div>
                        <div class="pbmit-blog-classic-inner">
                            <div class="pbmit-blog-meta pbmit-blog-meta-top">	
                                <div class="pbmit-meta pbmit-meta-cat">
                                    <ul class="post-categories">
                                        <li><a href="blog-classic.html" rel="category tag">Custodian</a></li>
                                        <li><a href="blog-classic.html" rel="category tag">Domestic</a></li>
                                    </ul>
                                </div>
                                <span class="pbmit-meta pbmit-meta-date">
                                    <i class="pbmit-base-icon-calendar-3"></i>
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">Complete Guide to Air Duct Cleaning for Your Home</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                    <article class="post blog-classic">   
                        <div class="pbmit-img-wrapper">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <a href="{{ url('/blog/' . "test") }}">
                                        <img src="{{ asset('assets/images/blog/blog-09.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>  
                            <span class="pbmit-meta pbmit-meta-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
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
                                        <li><a href="blog-classic.html" rel="category tag">Custodian</a></li>
                                    </ul>
                                </div>
                                <span class="pbmit-meta pbmit-meta-date">
                                    <i class="pbmit-base-icon-calendar-3"></i>
                                    <a href="{{ url('/blog/' . "test") }}" rel="bookmark">
                                        <time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">June 13, 2024</time>
                                        <time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">July 9, 2024</time>
                                    </a>
                                </span>
                                <span class="pbmit-meta pbmit-meta-author">
                                    <i class="pbmit-base-icon-user-3"></i>by
                                    <a class="pbmit-author-link" href="{{ url('/blog/' . "test") }}">xcleanpbm</a>
                                </span>		
                                <span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
                                    <i class="pbmit-base-icon-comment-empty"></i>3 Comments
                                </span>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="{{ url('/blog/' . "test") }}">The best cleaning process homeowners can use</a>
                            </h3>
                            <div class="pbmit-entry-content">
                                <div class="pbmit-firstletter-blog">
                                    <p>Meticulosity Cleaning is the company you should contact. One of the best cleaning teams in the city, offer affordable professional cleaning services to both homeowners and businesses. Whether you are…</p>
                                </div>
                                <a class="pbmit-btn pbmit-btn-global" href="{{ url('/blog/' . "test") }}">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                                <title>black-arrow</title>
                                                <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                                <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                            </svg>
                                        </span>
                                        <span class="pbmit-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div> 
                    </article>
                </div>
            </div>
            <div class="col-md-12 col-xl-3 blog-right-col">
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
                                <a class="recent-post-thum" href="{{ url('/blog/' . "test") }}">
                                    <img src="{{ asset('assets/images/recent-post/blog-01.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <div class="pbmit-rpw-content">
                                    <span class="pbmit-rpw-title">
                                        <a href="{{ url('/blog/' . "test") }}">Things to know choosing a cleaning service.</a>
                                    </span>
                                    <span class="pbmit-rpw-date">
                                        <a href="{{ url('/blog/' . "test") }}">07 Aug 2024</a>
                                    </span>
                                </div> 
                            </li>
                            <li class="recent-post-list-li"> 
                                <a class="recent-post-thum" href="{{ url('/blog/' . "test") }}">
                                    <img src="{{ asset('assets/images/recent-post/blog-02.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <div class="pbmit-rpw-content">
                                    <span class="pbmit-rpw-title">
                                        <a href="{{ url('/blog/' . "test") }}">Step by step guide to clean your carpets.</a>
                                    </span>
                                    <span class="pbmit-rpw-date">
                                        <a href="{{ url('/blog/' . "test") }}">07 Aug 2024</a>
                                    </span>
                                </div> 
                            </li>
                            <li class="recent-post-list-li"> 
                                <a class="recent-post-thum" href="{{ url('/blog/' . "test") }}">
                                    <img src="{{ asset('assets/images/recent-post/blog-03.jpg') }}" class="img-fluid" alt="">
                                </a>
                                <div class="pbmit-rpw-content">
                                    <span class="pbmit-rpw-title">
                                        <a href="{{ url('/blog/' . "test") }}">How You Typically Do Your Cleaning Process</a>
                                    </span>
                                    <span class="pbmit-rpw-date">
                                        <a href="{{ url('/blog/' . "test") }}">07 Aug 2024</a>
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
                                        <span class="pbmit-button-text">Hubungi Kami Sekarang</span>
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