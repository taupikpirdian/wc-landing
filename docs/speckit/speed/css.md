## Issue
Requests are blocking the page's initial render, which may delay LCP. Deferring or inlining can move these network requests out of the critical path.LCPFCPUnscored
URL
Transfer Size
Duration
sedotwcresmi.id 1st party
53.3 KiB	7,490 ms
…css/responsive.css(sedotwcresmi.id)
8.2 KiB
370 ms
…css/fontawesome.css(sedotwcresmi.id)
7.3 KiB
1,050 ms
…css/aos.css(sedotwcresmi.id)
2.1 KiB
370 ms
…floating-whatsapp-message-button-jquery/floating-wpp.min.css(sedotwcresmi.id)
1.1 KiB
370 ms
…css/swiper.min.css(sedotwcresmi.id)
4.5 KiB
370 ms
…css/pbminfotech-base-icons.css(sedotwcresmi.id)
2.4 KiB
1,050 ms
…css/shortcode.css(sedotwcresmi.id)
15.9 KiB
1,050 ms
…css/magnific-popup.css(sedotwcresmi.id)
2.1 KiB
370 ms
…css/base.css(sedotwcresmi.id)
5.3 KiB
370 ms
…css/flaticon.css(sedotwcresmi.id)
1.3 KiB
1,050 ms
…css/themify-icons.css(sedotwcresmi.id)
3.1 KiB
1,050 ms
Google Fonts cdn 
6.7 KiB	2,260 ms
/css2?family=…(fonts.googleapis.com)
3.1 KiB
750 ms
/css2?family=…(fonts.googleapis.com)
1.2 KiB
750 ms
/css2?family=…(fonts.googleapis.com)
2.4 KiB
750 ms

## Detail
Ini warning Lighthouse klasik soal render-blocking CSS. Artinya: CSS terlalu banyak dimuat di awal, sehingga HTML belum bisa “paint” → LCP & FCP jadi lambat.

## Inti Masalahnya
Semua file ini dimuat sinkron di <head>:
- responsive.css
- fontawesome.css
- aos.css
- swiper.min.css
- magnific-popup.css
- floating-wpp.min.css
- icon fonts (flaticon, themify, pbminfotech)
- Google Fonts

Prinsip Perbaikannya
✅ Critical CSS → load langsung
⏳ Non-critical CSS → defer / async
🚫 Jangan load CSS fitur yang belum dipakai di above-the-fold