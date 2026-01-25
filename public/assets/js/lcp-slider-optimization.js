/**
 * LCP Optimization - Deferred Swiper Initialization
 *
 * This script defers Swiper slider initialization to improve LCP (Largest Contentful Paint)
 * The first slide is rendered immediately as static HTML/CSS
 * Swiper functionality is added after page load completes
 */

(function() {
    'use strict';

    // Wait for page to be fully loaded
    function initSwiperWhenIdle() {
        if ('requestIdleCallback' in window) {
            // Use requestIdleCallback for non-blocking initialization
            requestIdleCallback(initSwiperSlider, { timeout: 2000 });
        } else {
            // Fallback for browsers without requestIdleCallback
            setTimeout(initSwiperSlider, 2000);
        }
    }

    function initSwiperSlider() {
        // Check if Swiper is loaded
        if (typeof Swiper === 'undefined') {
            console.warn('Swiper not loaded yet, retrying...');
            setTimeout(initSwiperSlider, 500);
            return;
        }

        // Initialize all swiper sliders with data-init-delay attribute
        const swiperElements = document.querySelectorAll('.swiper-slider[data-init-delay]');

        swiperElements.forEach(function(element) {
            const delay = parseInt(element.getAttribute('data-init-delay')) || 2000;

            setTimeout(function() {
                // Get swiper configuration
                const autoplay = element.getAttribute('data-autoplay') === 'true';
                const loop = element.getAttribute('data-loop') === 'true';
                const dots = element.getAttribute('data-dots') === 'true';
                const arrows = element.getAttribute('data-arrows') === 'true';
                const columns = parseInt(element.getAttribute('data-columns')) || 1;
                const margin = parseInt(element.getAttribute('data-margin')) || 0;
                const effect = element.getAttribute('data-effect') || 'slide';

                const swiperConfig = {
                    loop: loop,
                    slidesPerView: columns,
                    spaceBetween: margin,
                    effect: effect,
                    fadeEffect: {
                        crossFade: true
                    },
                    autoplay: autoplay ? {
                        delay: 5000,
                        disableOnInteraction: false,
                    } : false,
                    pagination: dots ? {
                        el: element.querySelector('.swiper-pagination'),
                        clickable: true,
                    } : false,
                    navigation: arrows ? {
                        nextEl: element.querySelector('.swiper-button-next'),
                        prevEl: element.querySelector('.swiper-button-prev'),
                    } : false,
                    // Enable lazy loading for images after first slide
                    lazy: {
                        loadPrevNext: true,
                        loadPrevNextAmount: 2,
                    },
                    // Preload images
                    preloadImages: false,
                    // Watch for changes
                    observer: true,
                    observeParents: true,
                };

                // Initialize Swiper
                const swiper = new Swiper(element, swiperConfig);

                // Mark as initialized
                element.classList.add('swiper-initialized');
                element.classList.add('lcp-optimized');

                console.log('Swiper initialized after LCP:', element);
            }, delay);
        });

        // Also initialize any swiper sliders without data-init-delay
        const regularSwiperElements = document.querySelectorAll('.swiper-slider:not([data-init-delay]):not(.swiper-initialized)');

        regularSwiperElements.forEach(function(element) {
            // Get swiper configuration from data attributes
            const autoplay = element.getAttribute('data-autoplay') === 'true';
            const loop = element.getAttribute('data-loop') === 'true';
            const dots = element.getAttribute('data-dots') === 'true';
            const arrows = element.getAttribute('data-arrows') === 'true';
            const columns = parseInt(element.getAttribute('data-columns')) || 1;
            const margin = parseInt(element.getAttribute('data-margin')) || 0;
            const effect = element.getAttribute('data-effect') || 'slide';

            const swiperConfig = {
                loop: loop,
                slidesPerView: columns,
                spaceBetween: margin,
                effect: effect,
                autoplay: autoplay ? {
                    delay: 5000,
                    disableOnInteraction: false,
                } : false,
                pagination: dots ? {
                    el: element.querySelector('.swiper-pagination'),
                    clickable: true,
                } : false,
                navigation: arrows ? {
                    nextEl: element.querySelector('.swiper-button-next'),
                    prevEl: element.querySelector('.swiper-button-prev'),
                } : false,
                lazy: {
                    loadPrevNext: true,
                },
                preloadImages: false,
                observer: true,
                observeParents: true,
            };

            new Swiper(element, swiperConfig);
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSwiperWhenIdle);
    } else {
        initSwiperWhenIdle();
    }

    // Also initialize on window load as fallback
    window.addEventListener('load', function() {
        setTimeout(initSwiperSlider, 1000);
    });

})();
