<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\RobotsController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

// Main web routes with SEO handled in controllers
Route::middleware(['web'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/layanan-kami', [HomeController::class, 'services'])->name('services');
    Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/tentang-kami', [HomeController::class, 'aboutUs'])->name('about-us');
    Route::get('/hubungi-kami', [HomeController::class, 'contactUs'])->name('contact-us');

    Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog-detail');
    Route::get('/portfolio/{slug}', [HomeController::class, 'portfolioDetail'])->name('portfolio-detail');
    Route::get('/layanan-kami/{slug}', [HomeController::class, 'serviceDetail'])->name('service-detail');
});

// SEO Routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [RobotsController::class, 'index'])->name('robots');

Auth::routes();

Route::get('file/{path}', function ($path) {
    // Sanitasi input untuk mencegah path traversal
    // example $path = 'public/portfolio/1.jpg';
    $path = str_replace(['../', './'], '', $path);

    // Path dasar yang diizinkan
    $allowedBasePath = storage_path('app');
    $fullPath = $allowedBasePath . '/' . $path;

    // Resolve path dan validasi bahwa file berada dalam direktori yang diizinkan
    $realPath = realpath($fullPath);
    if (!$realPath || !str_starts_with($realPath, realpath($allowedBasePath))) {
        abort(403, 'Access denied - path outside allowed directory');
    }

    if (!File::exists($realPath)) {
        abort(404);
    }

    // Validasi extension file yang diizinkan
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'pdf', 'doc', 'docx', 'txt', 'csv'];
    $extension = strtolower(pathinfo($realPath, PATHINFO_EXTENSION));

    if (!in_array($extension, $allowedExtensions)) {
        abort(403, 'File type not allowed');
    }

    // Validasi ukuran file (maksimal 10MB)
    if (filesize($realPath) > 10 * 1024 * 1024) {
        abort(413, 'File too large');
    }

    $file = File::get($realPath);
    $type = File::mimeType($realPath);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    $response->header("Content-Disposition", "inline; filename=\"" . basename($realPath) . "\"");
    $response->header("X-Content-Type-Options", "nosniff");
    return $response;
})->where('path', '.*')->name('file');

Route::get('/generate', function(){
   \Illuminate\Support\Facades\Artisan::call('storage:link');
   echo 'ok';
});