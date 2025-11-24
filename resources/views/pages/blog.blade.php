@extends('layouts.app2')

@section('title-bar')
<!-- Title Bar Start -->
@php($banner = \App\Models\BannerSetting::where('page', 'blog')->first())
@php($bannerImage = $banner && $banner->image_url ? asset(str_replace('public/', '', $banner->image_url)) : null)
<div class="pbmit-title-bar-wrapper" @if($bannerImage) style="background-image:url('{{ $bannerImage }}');background-size:cover;background-position:center;" @endif>
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
                    @foreach($blogs as $blog)
                        <article class="post blog-classic">
                            <div class="pbmit-img-wrapper">
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <a href="{{ route('blog-detail', $blog->slug) }}">
                                            @php($blogImage = $blog->image ? Storage::disk('public')->url($blog->image) : null)
                                            @if($blogImage)
                                                <img src="{{ asset(str_replace('public/', '', $blogImage)) }}" class="img-fluid" alt="{{ $blog->title }}">
                                            @endif
                                        </a>
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
                                <h3 class="pbmit-post-title">
                                    <a href="{{ route('blog-detail', $blog->slug) }}">{{ $blog->title }}</a>
                                </h3>
                                <div class="pbmit-entry-content">
                                    <div class="pbmit-firstletter-blog">
                                        <p>{{ \Illuminate\Support\Str::limit($blog->summary, 180) }}</p>
                                    </div>
                                    <a class="pbmit-btn pbmit-btn-global" href="{{ route('blog-detail', $blog->slug) }}">
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
                    @endforeach
                    <div class="mt-4">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-3 blog-right-col">
                <aside class="sidebar">
                    <aside class="widget widget-search">
                        <h2 class="widget-title">Cari</h2>
                        <form class="search-form" action="{{ route('blog') }}" method="get">
                            <input type="search" class="search-field" name="s" placeholder="Judul postingan …" value="{{ request('s') }}">
                            <button type="submit" class="search-submit"></button>
                        </form>
                    </aside>
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
