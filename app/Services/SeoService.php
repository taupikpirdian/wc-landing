<?php

namespace App\Services;

use App\Models\SeoSetting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SeoService
{
    private string $title;
    private string $description;
    private string $canonical;
    private array $keywords = [];
    private array $openGraph = [];
    private array $twitter = [];
    private array $jsonLd = [];
    private string $robots = 'index, follow';
    private ?string $imageUrl = null;
    private ?string $author = null;

    public function __construct()
    {
        $this->setDefaultSettings();
    }

    private function setDefaultSettings(): void
    {
        $siteName = config('app.name', 'Sedot WC Resmi');
        $this->title = $siteName;
        $this->description = 'Jasa profesional sedot WC terpercaya dengan layanan cepat, bersih, dan terjangkau. Tersedia 24/7 untuk wilayah Anda.';
        $this->canonical = url()->current();
        $this->keywords = ['sedot wc', 'jasa sedot wc', 'sedot wc profesional', 'limbah WC', 'toilet service'];

        $this->openGraph = [
            'site_name' => $siteName,
            'type' => 'website',
            'locale' => 'id_ID',
        ];

        $this->twitter = [
            'card' => 'summary_large_image',
            'site' => '@sedotwcofficial',
        ];
    }

    public static function forPage(string $title, string $description, array $options = []): self
    {
        $instance = new self();
        $instance->title = $title;
        $instance->description = $description;

        if (isset($options['keywords'])) {
            $instance->keywords = $options['keywords'];
        }

        if (isset($options['image'])) {
            $instance->imageUrl = $options['image'];
        }

        if (isset($options['author'])) {
            $instance->author = $options['author'];
        }

        if (isset($options['robots'])) {
            $instance->robots = $options['robots'];
        }

        return $instance;
    }

    private static function fromDb(string $page): self
    {
        $instance = new self();
        $record = SeoSetting::where('page', $page)->first();
        if ($record) {
            $instance->title = $record->title ?: ($record->meta_title ?: ($record->og_title ?: $instance->title));
            $instance->description = $record->meta_description ?: ($record->og_description ?: $instance->description);
            $instance->canonical = $record->canonical_url ?: url()->current();

            $keywords = $record->meta_keywords ? array_map('trim', explode(',', $record->meta_keywords)) : [];
            if (!empty($keywords)) {
                $instance->keywords = $keywords;
            }

            if ($record->og_image) {
                $path = str_starts_with($record->og_image, 'public/') ? substr($record->og_image, 7) : $record->og_image;
                $instance->imageUrl = route('file', ['path' => $path]);
            }

            if ($record->json_ld) {
                $decoded = json_decode($record->json_ld, true);
                if (is_array($decoded)) {
                    $instance->addJsonLd($decoded);
                }
            }
        }

        return $instance;
    }

    public static function forHome(): self
    {
        return self::fromDb('home');
    }

    public static function forServices(): self
    {
        return self::fromDb('services');
    }

    public static function forAbout(): self
    {
        return self::fromDb('about-us');
    }

    public static function forContact(): self
    {
        return self::fromDb('contact-us');
    }

    public static function forBlog(): self
    {
        return self::fromDb('blog');
    }

    public function addJsonLd(array $data): self
    {
        $this->jsonLd[] = $data;
        return $this;
    }

    public function getMetaTags(): array
    {
        $fullTitle = $this->title;
        if (!str_contains(strtolower($this->title), strtolower(config('app.name', 'Sedot WC Resmi')))) {
            $fullTitle .= ' | ' . config('app.name', 'Sedot WC Resmi');
        }

        return [
            'title' => Str::limit($fullTitle, 60),
            'description' => Str::limit($this->description, 160),
            'keywords' => implode(', ', $this->keywords),
            'canonical' => $this->canonical,
            'robots' => $this->robots,
            'author' => $this->author,
            'image' => $this->imageUrl,
            'published_time' => now()->format('Y-m-d\TH:i:s\Z'),
            'modified_time' => now()->format('Y-m-d\TH:i:s\Z'),
        ];
    }

    public function getOpenGraph(): array
    {
        return array_merge([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->canonical,
            'image' => $this->imageUrl ?: asset('images/fevicon.png'),
            'image:alt' => $this->title,
            'image:width' => '1200',
            'image:height' => '630',
        ], $this->openGraph);
    }

    public function getTwitter(): array
    {
        return array_merge([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->imageUrl ?: asset('images/fevicon.png'),
            'image:alt' => $this->title,
        ], $this->twitter);
    }

    public function getJsonLd(): array
    {
        $jsonLd = [];

        // Default Organization JSON-LD
        $jsonLd[] = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => config('app.name', 'Sedot WC Resmi'),
            'url' => config('app.url', url('/')),
            'logo' => asset('images/fevicon.png'),
            'description' => $this->description,
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'ID',
                'addressRegion' => 'Indonesia'
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+62-812-3456-7890',
                'contactType' => 'customer service',
                'availableLanguage' => 'Indonesian'
            ],
            'sameAs' => [
                'https://facebook.com/sedotwcofficial',
                'https://instagram.com/sedotwcofficial',
                'https://twitter.com/sedotwcofficial'
            ]
        ];

        // Website JSON-LD
        $jsonLd[] = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => config('app.name', 'Sedot WC Resmi'),
            'url' => config('app.url', url('/')),
            'description' => $this->description,
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => url('/search?q={search_term_string}'),
                'query-input' => 'required name=search_term_string'
            ]
        ];

        // Add custom JSON-LD
        $jsonLd = array_merge($jsonLd, $this->jsonLd);

        return $jsonLd;
    }

    public function getBreadcrumbs(array $breadcrumbs = []): array
    {
        $baseBreadcrumbs = [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Beranda',
                'item' => url('/')
            ]
        ];

        foreach ($breadcrumbs as $index => $crumb) {
            $baseBreadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => $index + 2,
                'name' => $crumb['name'],
                'item' => $crumb['url'] ?? null
            ];
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $baseBreadcrumbs
        ];
    }

    public function generateSlug(string $text): string
    {
        return Str::slug($text, '-', 'id');
    }

    public function generateMetaKeywords(array $keywords): string
    {
        return implode(', ', array_unique($keywords));
    }

    public static function forPortfolioDetail(string $slug): self
    {
        // $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

        // return $this->forPage(
        //     $portfolio->title . ' - Proyek Sedot WC Berhasil | Sedot WC Resmi',
        //     $portfolio->description,
        //     [
        //         'keywords' => $this->generateMetaKeywords($portfolio->keywords),
        //         'image' => $portfolio->image ? asset('assets/images/portfolio/' . $portfolio->image) : asset('assets/images/og-portfolio.jpg'),
        //     ]
        // );

        return self::forPage(
            'Blog - Tips & Informasi Seputar Sedot WC | Sedot WC Resmi',
            'Dapatkan informasi berguna seputar jasa sedot WC, tips perawatan, dan solusi masalah WC dari para ahli berpengalaman.',
            [
                'keywords' => ['blog sedot wc', 'tips perawatan wc', 'masalah wc', 'solusi wc'],
                'image' => asset('assets/images/og-blog.jpg'),
                'robots' => 'index, follow'
            ]
        );
    }

    public static function forBlogDetail(string $slug): self
    {
        // $blog = Blog::where('slug', $slug)->firstOrFail();

        // return $this->forPage(
        //     $blog->title . ' - Blog Sedot WC | Sedot WC Resmi',
        //     $blog->description,
        //     [
        //         'keywords' => $this->generateMetaKeywords($blog->keywords),
        //         'image' => $blog->image ? asset('assets/images/blog/' . $blog->image) : asset('assets/images/og-blog.jpg'),
        //     ]
        // );

        return self::forPage(
            'Blog - Tips & Informasi Seputar Sedot WC | Sedot WC Resmi',
            'Dapatkan informasi berguna seputar jasa sedot WC, tips perawatan, dan solusi masalah WC dari para ahli berpengalaman.',
            [
                'keywords' => ['blog sedot wc', 'tips perawatan wc', 'masalah wc', 'solusi wc'],
                'image' => asset('assets/images/og-blog.jpg'),
                'robots' => 'index, follow'
            ]
        );
    }

    public static function forServiceDetail(string $slug): self
    {
        // $service = Service::where('slug', $slug)->firstOrFail();

        // return $this->forPage(
        //     $service->title . ' - Layanan Sedot WC | Sedot WC Resmi',
        //     $service->description,
        //     [
        //         'keywords' => $this->generateMetaKeywords($service->keywords),
        //         'image' => $service->image ? asset('assets/images/service/' . $service->image) : asset('assets/images/og-service.jpg'),
        //     ]
        // );

        return self::forPage(
            'Layanan - Jasa Sedot WC | Sedot WC Resmi',
            'Jasa sedot WC terbaik dengan kualitas terbaik dan harga terjangkau.',
            [
                'keywords' => ['layanan sedot wc', 'jasa sedot wc', 'kualitas wc', 'harga wc'],
                'image' => asset('assets/images/og-service.jpg'),
                'robots' => 'index, follow'
            ]
        );
    }  

}
