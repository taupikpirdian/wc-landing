<?php

namespace App\Services;

use App\Models\SeoSetting;
use Illuminate\Support\Str;

class SeoService
{
    private string $title;
    private string $description;
    private string $canonical;
    private string $keywords;
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
        $this->keywords = 'sedot wc, jasa sedot wc, sedot wc profesional, limbah WC, toilet service';

        $this->openGraph = [
            'title' => $this->title,
            'type' => 'website',
            'site_name' => $siteName,
            'description' => $this->description,
            'url' => $this->canonical,
            'image' => asset('images/fevicon.png'),
            'image:alt' => $this->title,
            'image:width' => 1200,
            'image:height' => 630,
            'locale' => 'id_ID',
        ];

        $this->twitter = [
            'card' => 'summary_large_image',
            'site' => '@sedotwcofficial',
            'title' => $this->title,
            'description' => $this->description,
            'image' => asset('images/fevicon.png'),
            'image:alt' => $this->title,
        ];

        $this->jsonLd = [
            [
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => $siteName,
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
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'WebSite',
                'name' => $siteName,
                'url' => config('app.url', url('/')),
                'description' => $this->description,
                'potentialAction' => [
                    '@type' => 'SearchAction',
                    'target' => url('/search?q={search_term_string}'),
                    'query-input' => 'required name=search_term_string'
                ]
            ]
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
            $instance->keywords = $record->meta_keywords;

            $instance->openGraph = [
                'title' => $record->og_title ?: $instance->title,
                'type' => $record->og_type ?: 'website',
                'site_name' => $record->og_site_name ?: config('app.name', 'Sedot WC Resmi'),
                'description' => $record->og_description ?: $instance->description,
                'url' => $record->og_url ?: url()->current(),
                'image' => $record->og_image ? route('file', ['path' => $record->og_image]) : null,
                'image:alt' => $record->og_image_alt ?: $instance->title,
                'image:width' => $record->og_image_width ?: 1200,
                'image:height' => $record->og_image_height ?: 630,
                'locale' => $record->og_locale ?: 'id_ID',
            ];

            // for twitter
            $instance->twitter = [
                'card' => $record->twitter_card ?: 'summary_large_image',
                'site' => $record->twitter_site ?: '@sedotwcofficial',
                'title' => $record->twitter_title ?: $instance->title,
                'description' => $record->twitter_description ?: $instance->description,
                'image' => $record->twitter_image ? route('file', ['path' => $record->twitter_image]) : null,
                'image:alt' => $record->twitter_image_alt ?: $instance->title,
            ];

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

    public static function forPortfolio(): self
    {
        return self::fromDb('portfolio');
    }

    public static function forFaq(): self
    {
        return self::fromDb('faq');
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
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'robots' => $this->robots,
            'author' => $this->author,
            'image' => $this->imageUrl,
            'openGraph' => $this->openGraph,
            'twitter' => $this->twitter,
            'jsonLd' => $this->jsonLd,
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
        return self::fromDb('portfolio-detail');
    }

    public static function forBlogDetail(string $slug): self
    {
        return self::fromDb('blog-detail');
    }

    public static function forServiceDetail(string $slug): self
    {
        return self::fromDb('service-detail');
    }  

}
