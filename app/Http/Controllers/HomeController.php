<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Testimony;
use App\Models\AboutUs;
use App\Models\OurAdvantage;
use App\Models\OurTeam;
use App\Models\ContactUs;
use App\Models\ServiceArea;
use App\Services\SeoService;

class HomeController extends Controller
{
    public function index()
    {
        $seoService = SeoService::forHome();
        $sliders = Slider::latest()->limit(3)->get();
        $services = Service::latest()->limit(6)->get();
        $portfolios = Portfolio::latest()->limit(9)->get();
        $testimonies = Testimony::latest()->limit(6)->get();
        $faqs = Faq::where('is_show_home', true)->latest()->limit(3)->get();
        $blogs = Blog::where('is_publish', true)->orderByDesc('published_at')->limit(9)->get();
        $contactUs = ContactUs::first();
        $ourAdvantages = OurAdvantage::orderBy('number')->get();
        $aboutUs = AboutUs::first();
        return view('welcome', compact('seoService', 'sliders', 'services', 'portfolios', 'testimonies', 'faqs', 'blogs', 'contactUs', 'ourAdvantages', 'aboutUs'));
    }

    public function services()
    {
        $seoService = SeoService::forServices();
        $services = Service::latest()->paginate(9);
        return view('pages.services', compact('seoService', 'services'));
    }

    public function serviceArea()
    {
        $seoService = SeoService::forServiceArea();
        $serviceAreas = ServiceArea::all();
        return view('pages.service-area', compact('seoService', 'serviceAreas'));
    }

    public function portfolio()
    {
        $seoService = SeoService::forPortfolio();
        $portfolios = Portfolio::latest()->paginate(9);
        return view('pages.portfolio', compact('seoService', 'portfolios'));
    }

    public function blog()
    {
        $seoService = SeoService::forBlog();
        $request = request();

        $search = $request->query('s');
        $categorySlug = $request->query('category');

        $query = Blog::with('category')
            ->where('is_publish', true);

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                  ->orWhere('summary', 'like', "%$search%")
                  ->orWhere('content', 'like', "%$search%");
            });
        }

        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        $blogs = $query->orderByDesc('published_at')
            ->paginate(9)
            ->withQueryString();

        $categories = Category::withCount(['blogs' => function ($q) {
            $q->where('is_publish', true);
        }])->orderBy('name')->get();

        $recentBlogs = Blog::where('is_publish', true)
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        return view('pages.blog', compact('seoService', 'blogs', 'categories', 'recentBlogs', 'search', 'categorySlug'));
    }

    public function faq()
    {
        $seoService = SeoService::forFaq();
        $generalFaqs = Faq::where('is_general', true)->orderBy('id')->get();
        $splitIndex = (int) ceil($generalFaqs->count() / 2);
        $faqsLeft = $generalFaqs->slice(0, $splitIndex);
        $faqsRight = $generalFaqs->slice($splitIndex);

        $specificFaqs = Faq::where('is_general', false)->orderBy('id')->get();

        return view('pages.faq', compact('seoService', 'faqsLeft', 'faqsRight', 'specificFaqs'));
    }

    public function aboutUs()
    {
        $seoService = SeoService::forAbout();
        $aboutUs = AboutUs::first();
        $ourAdvantages = OurAdvantage::orderBy('number')->get();
        $ourTeams = OurTeam::orderBy('id')->get();
        $testimonies = Testimony::latest()->limit(6)->get();
        $contactUs = ContactUs::with('workingTimes')->first();

        return view('pages.about-us', compact('seoService', 'aboutUs', 'ourAdvantages', 'ourTeams', 'testimonies', 'contactUs'));
    }

    public function contactUs()
    {
        $seoService = SeoService::forContact();
        $contactUs = ContactUs::with('workingTimes')->first();
        $workingTimes = $contactUs ? $contactUs->workingTimes()->orderBy('id')->get() : collect();
        return view('pages.contact-us', compact('seoService', 'contactUs', 'workingTimes'));
    }

    public function blogDetail($slug)
    {
        $seoService = SeoService::forBlogDetail($slug);
        $blog = Blog::with('category')
            ->where('slug', $slug)
            ->where('is_publish', true)
            ->firstOrFail();

        // Increment views count safely
        $blog->increment('views');

        $prev = Blog::where('is_publish', true)
            ->where('published_at', '<', $blog->published_at ?? $blog->created_at)
            ->orderByDesc('published_at')
            ->first();

        $next = Blog::where('is_publish', true)
            ->where('published_at', '>', $blog->published_at ?? $blog->created_at)
            ->orderBy('published_at')
            ->first();

        $categories = Category::withCount(['blogs' => function ($q) {
            $q->where('is_publish', true);
        }])->orderBy('name')->get();

        $recentBlogs = Blog::where('is_publish', true)
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        return view('pages.blog-detail', compact('seoService', 'blog', 'prev', 'next', 'categories', 'recentBlogs'));
    }

    public function portfolioDetail($slug)
    {
        $seoService = SeoService::forPortfolioDetail($slug);
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('pages.portfolio-detail', compact('seoService', 'portfolio'));
    }

    public function serviceDetail($slug)
    {
        $seoService = SeoService::forServiceDetail($slug);
        $service = Service::where('slug', $slug)->firstOrFail();
        $allServices = Service::orderBy('title')->get();
        return view('pages.services-detail', compact('seoService', 'service', 'allServices'));
    }

    public function promo()
    {
        $seoService = SeoService::forPromo();
        $contactUs = ContactUs::first();
        return view('promo', compact('contactUs', 'seoService'));
    }
}
