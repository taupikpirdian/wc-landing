<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SeoService;

class HomeController extends Controller
{
    public function index()
    {
        $seoService = SeoService::forHome();
        return view('welcome', compact('seoService'));
    }

    public function services()
    {
        $seoService = SeoService::forServices();
        return view('pages.services', compact('seoService'));
    }

    public function portfolio()
    {
        $seoService = SeoService::forPage(
            'Portfolio - Proyek Sedot WC Berhasil | Sedot WC Resmi',
            'Lihat portfolio proyek jasa sedot WC yang telah kami kerjakan. Dokumentasi pekerjaan profesional dan hasil terbaik.',
            [
                'keywords' => ['portfolio sedot wc', 'proyek sedot wc', 'dokumentasi pekerjaan'],
                'image' => asset('assets/images/og-portfolio.jpg'),
            ]
        );
        return view('pages.portfolio', compact('seoService'));
    }

    public function blog()
    {
        $seoService = SeoService::forBlog();
        return view('pages.blog', compact('seoService'));
    }

    public function faq()
    {
        $seoService = SeoService::forPage(
            'FAQ - Pertanyaan Umum Jasa Sedot WC | Sedot WC Resmi',
            'Temukan jawaban pertanyaan umum seputar jasa sedot WC. Panduan lengkap untuk layanan profesional kami.',
            [
                'keywords' => ['faq sedot wc', 'pertanyaan sedot wc', 'jawaban sedot wc'],
                'image' => asset('assets/images/og-faq.jpg'),
            ]
        );
        return view('pages.faq', compact('seoService'));
    }

    public function aboutUs()
    {
        $seoService = SeoService::forAbout();
        return view('pages.about-us', compact('seoService'));
    }

    public function contactUs()
    {
        $seoService = SeoService::forContact();
        return view('pages.contact-us', compact('seoService'));
    }
}
