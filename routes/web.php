<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


// Main web routes with SEO handled in controllers
Route::middleware(['web'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/layanan-kami', [HomeController::class, 'services'])->name('services');
    Route::get('/area-layanan', [HomeController::class, 'serviceArea'])->name('service-area');
    Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/tentang-kami', [HomeController::class, 'aboutUs'])->name('about-us');
    Route::get('/hubungi-kami', [HomeController::class, 'contactUs'])->name('contact-us');
    Route::get('/promo', [HomeController::class, 'promo'])->name('promo');

    Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog-detail');
    Route::get('/portfolio/{slug}', [HomeController::class, 'portfolioDetail'])->name('portfolio-detail');
    Route::get('/layanan-kami/{slug}', [HomeController::class, 'serviceDetail'])->name('service-detail');
});

// SEO Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [RobotsController::class, 'index'])->name('robots');

Auth::routes();

Route::get('/file/{path}', function ($path) {
    return Storage::disk('public')->response($path);
})->where('path', '.*')->name('file');

Route::get('/generate', function(){
   \Illuminate\Support\Facades\Artisan::call('storage:link');
   echo 'ok';
});