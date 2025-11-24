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
                                                @php($blogImage = $blog->image ? Storage::disk('public')->url($blog->image) : null)
                                                @if($blogImage)
                                                    <img src="{{ asset(str_replace('public/', '', $blogImage)) }}" class="img-fluid" alt="{{ $blog->title }}">
                                                @endif
                                            </div>
                                        </div>  
                                    </div>  
                                    <span class="pbmit-meta pbmit-meta-date">
                                        <i class="pbmit-base-icon-calendar-3"></i>
                                        <a href="{{ route('blog-detail', $blog->slug) }}" rel="bookmark">
                                            <time class="entry-date published">{{ ($blog->published_at ?? $blog->created_at)->format('d M Y') }}</time>
                                        </a>
                                    </span>
                                </div>
                                <div class="pbmit-blog-classic-inner">
                                    <div class="pbmit-blog-meta pbmit-blog-meta-top">
                                        <div class="pbmit-meta pbmit-meta-cat">
                                            <ul class="post-categories">
                                                @if($blog->category)
                                                    <li><a href="{{ route('blog', ['category' => $blog->category->slug]) }}" rel="category tag">{{ $blog->category->name }}</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                        <span class="pbmit-meta pbmit-meta-date">
                                            <i class="pbmit-base-icon-calendar-3"></i>
                                            <a href="{{ route('blog-detail', $blog->slug) }}" rel="bookmark">
                                                <time class="entry-date published">{{ ($blog->published_at ?? $blog->created_at)->format('d M Y') }}</time>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="pbmit-entry-content">
                                        {!! $blog->content !!}
                                    </div>
                                    <div class="pbmit-blog-meta-bottom"></div>
                                </div>   
                            </div> 
                            <nav class="navigation post-navigation" aria-label="Posts">
                                <div class="nav-links">
                                    @if(isset($prev))
                                    <div class="nav-previous">
                                        <a href="{{ route('blog-detail', $prev->slug) }}" rel="prev">
                                            <span class="pbmit-post-nav-icon">
                                                <i class="pbmit-base-icon-angle-left"></i>
                                                <span class="pbmit-post-nav-head">Previous Post</span>
                                            </span>
                                            <span class="pbmit-post-nav-wrapper">
                                                <span class="pbmit-post-nav nav-title">{{ $prev->title }}</span> 
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                    @if(isset($next))
                                    <div class="nav-next">
                                        <a href="{{ route('blog-detail', $next->slug) }}" rel="next">
                                            <span class="pbmit-post-nav-icon">
                                                <span class="pbmit-post-nav-head">Next Post</span>
                                                <i class="pbmit-base-icon-angle-right"></i>
                                            </span>
                                            <span class="pbmit-post-nav-wrapper">
                                                <span class="pbmit-post-nav nav-title">{{ $next->title }}</span> 
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </nav>
                        </article>
                        {{-- <div class="comments-area">
                            <h2 class="comments-title">3 Replies to “{{ $blog->title }}”</h2>
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
                        </div> --}}
                    </div> 
                </div>
            </div>
            <div class="col-md- col-xl-3 blog-right-col">
                <aside class="sidebar">
                    <aside class="widget widget-categories">
                        <h2 class="widget-title">Kategori</h2>
                        <ul>
                            @if(isset($categories))
                                @foreach($categories as $cat)
                                    <li>
                                        <span class="pbmit-cat-li">
                                            <a href="{{ route('blog', ['category' => $cat->slug]) }}">{{ $cat->name }}</a>
                                            <span class="pbmit-brackets">( {{ $cat->blogs_count }} )</span>
                                        </span>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </aside>
                    <aside class="widget widget-recent-post">
                        <h2 class="widget-title">Postingan Terbaru</h2>
                        <ul class="recent-post-list">
                            @if(isset($recentBlogs))
                                @foreach($recentBlogs as $rb)
                                    <li class="recent-post-list-li"> 
                                        <a class="recent-post-thum" href="{{ route('blog-detail', $rb->slug) }}">
                                            @php($rbImage = $rb->image ? Storage::disk('public')->url($rb->image) : null)
                                            @if($rbImage)
                                                <img src="{{ asset(str_replace('public/', '', $rbImage)) }}" class="img-fluid" alt="{{ $rb->title }}">
                                            @endif
                                        </a>
                                        <div class="pbmit-rpw-content">
                                            <span class="pbmit-rpw-title">
                                                <a href="{{ route('blog-detail', $rb->slug) }}">{{ $rb->title }}</a>
                                            </span>
                                            <span class="pbmit-rpw-date">
                                                <a href="{{ route('blog-detail', $rb->slug) }}">{{ ($rb->published_at ?? $rb->created_at)->format('d M Y') }}</a>
                                            </span>
                                        </div> 
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </aside>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
