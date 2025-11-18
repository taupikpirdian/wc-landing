<?php

return [
    /*
    |--------------------------------------------------------------------------
    | SEO Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may specify your SEO settings for your application.
    |
    */

    'default' => [
        'title' => env('APP_NAME', 'Sedot WC Resmi'),
        'description' => 'Jasa profesional sedot WC terpercaya dengan layanan cepat, bersih, dan terjangkau.',
        'keywords' => ['sedot wc', 'jasa sedot wc', 'sedot wc profesional', 'limbah WC', 'toilet service'],
        'author' => env('APP_NAME', 'Sedot WC Resmi'),
        'url' => env('APP_URL'),
        'image' => '/images/og-default.jpg',
    ],

    'opengraph' => [
        'site_name' => env('APP_NAME', 'Sedot WC Resmi'),
        'type' => 'website',
        'locale' => 'id_ID',
    ],

    'twitter' => [
        'card' => 'summary_large_image',
        'site' => '@sedotwcofficial',
        'creator' => '@sedotwcofficial',
    ],

    'json-ld' => [
        'organization' => [
            'name' => env('APP_NAME', 'Sedot WC Resmi'),
            'url' => env('APP_URL'),
            'logo' => '/images/fevicon.png',
            'description' => 'Jasa profesional sedot WC terpercaya dengan layanan cepat, bersih, dan terjangkau.',
            'telephone' => '+62-812-3456-7890',
            'address' => [
                'addressCountry' => 'ID',
                'addressRegion' => 'Indonesia'
            ],
            'sameAs' => [
                'https://facebook.com/sedotwcofficial',
                'https://instagram.com/sedotwcofficial',
                'https://twitter.com/sedotwcofficial'
            ]
        ]
    ],

    'sitemap' => [
        'enabled' => true,
        'cache' => [
            'enabled' => true,
            'ttl' => 3600, // 1 hour
        ],
        'routes' => [
            '/' => [
                'priority' => 1.0,
                'changefreq' => 'daily'
            ],
            '/services' => [
                'priority' => 0.8,
                'changefreq' => 'weekly'
            ],
            '/about-us' => [
                'priority' => 0.8,
                'changefreq' => 'monthly'
            ],
            '/contact-us' => [
                'priority' => 0.7,
                'changefreq' => 'monthly'
            ],
            '/portfolio' => [
                'priority' => 0.6,
                'changefreq' => 'weekly'
            ],
            '/blog' => [
                'priority' => 0.9,
                'changefreq' => 'daily'
            ],
            '/faq' => [
                'priority' => 0.6,
                'changefreq' => 'monthly'
            ],
        ]
    ],

    'performance' => [
        'minify_html' => env('SEO_MINIFY_HTML', true),
        'compress_images' => env('SEO_COMPRESS_IMAGES', true),
        'lazy_load_images' => env('SEO_LAZY_LOAD_IMAGES', true),
        'preload_critical_css' => env('SEO_PRELOAD_CRITICAL_CSS', true),
        'resource_hints' => env('SEO_RESOURCE_HINTS', true),
    ],

    'analytics' => [
        'google_analytics_id' => env('GOOGLE_ANALYTICS_ID'),
        'google_tag_manager_id' => env('GOOGLE_TAG_MANAGER_ID'),
        'facebook_pixel_id' => env('FACEBOOK_PIXEL_ID'),
    ],

    'verification' => [
        'google_site_verification' => env('GOOGLE_SITE_VERIFICATION'),
        'bing_site_verification' => env('BING_SITE_VERIFICATION'),
        'yandex_verification' => env('YANDEX_VERIFICATION'),
    ],
];