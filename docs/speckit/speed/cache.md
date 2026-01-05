## Issue
Use efficient cache lifetimes Est savings of 1,838 KiB
A long cache lifetime can speed up repeat visits to your page. Learn more about caching.FCPLCPUnscored
Request
Cache TTL
Transfer Size
localhost 1st party
1,838 KiB
…images/faq.jpg(localhost)
None
408 KiB
…css/bootstrap.min.css(localhost)
None
189 KiB
…css/shortcode.css(localhost)
None
144 KiB
…js/swiper.min.js(localhost)
None
133 KiB
…images/user2.png(localhost)
None
112 KiB
…js/jquery.min.js(localhost)
None
88 KiB
…fonts/fontawesome-webfont.woff2?v=4.7.0(localhost)
None
75 KiB
…js/gsap.js(localhost)
None
64 KiB
…css/style.css(localhost)
None
61 KiB
…js/bootstrap.min.js(localhost)
None
59 KiB
…css/responsive.css(localhost)
None
53 KiB
…bg/footer-bg-img.png(localhost)
None
51 KiB
…js/ScrollTrigger.js(localhost)
None
37 KiB
…css/fontawesome.css(localhost)
None
36 KiB
…bg/about-bg-icon-01.png(localhost)
None
35 KiB
…css/aos.css(localhost)
None
26 KiB
…css/base.css(localhost)
None
24 KiB
…js/scripts.js(localhost)
None
21 KiB
…js/jquery.magnific-popup.min.js(localhost)
None
20 KiB
…fonts/pbminfotech-base-icons.woff2?49550181(localhost)
None
18 KiB
…js/popper.min.js(localhost)
None
18 KiB
…css/themify-icons.css(localhost)
None
16 KiB
…js/theia-sticky-sidebar.js(localhost)
None
16 KiB
…css/swiper.min.css(localhost)
None
15 KiB
…js/SplitText.js(localhost)
None
15 KiB
…js/circle-progress.js(localhost)
None
15 KiB
…js/aos.js(localhost)
None
14 KiB
…js/jquery.waypoints.min.js(localhost)
None
9 KiB
…css/pbminfotech-base-icons.css(localhost)
None
9 KiB
…bg/testimonial-bg-icon.png(localhost)
None
9 KiB
…floating-whatsapp-message-button-jquery/floating-wpp.min.js(localhost)
None
7 KiB
…css/magnific-popup.css(localhost)
None
7 KiB
…js/cursor.js(localhost)
None
5 KiB
…js/jquery.countdown.min.js(localhost)
None
5 KiB
…js/gsap-animation.js(localhost)
None
5 KiB
…bg/about-img-shape-01.png(localhost)
None
5 KiB
…css/flaticon.css(localhost)
None
5 KiB
…js/jquery.appear.js(localhost)
None
3 KiB
…js/numinate.min.js(localhost)
None
3 KiB
…floating-whatsapp-message-button-jquery/floating-wpp.min.css(localhost)
None
2 KiB
…js/magnetic.js(localhost)

## Detail
Ini warning cache paling “murah tapi berdampak besar” 🔥
Intinya: semua asset kamu TIDAK punya cache (TTL = None), jadi setiap reload browser download ulang ~1.8 MB.

## SOLUSI UTAMA
Tambahkan cache

## TARGET CACHE LIFETIME (BEST PRACTICE)
Tipe File	Cache TTL
Images	30 hari – 1 tahun
CSS	30 hari – 1 tahun
JS	30 hari – 1 tahun
Fonts	1 tahun (wajib)

## Httaccess Sekarang
<IfModule mod_rewrite.c>
    RewriteEngine on
    RewriteCond %{REQUEST_URI} !^/public($|/)
    RewriteRule ^(.*)$ public/$1 [L]
    Php_value memory_limit 256M;
</IfModule>