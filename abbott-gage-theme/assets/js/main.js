/**
 * Main JavaScript for Abbott Gage Inc Theme
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

(function($) {
    'use strict';

    /**
     * Back to Top Button
     */
    function initBackToTop() {
        const backToTop = $('#back-to-top');
        
        if (backToTop.length) {
            // Show/hide button based on scroll position
            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 300) {
                    backToTop.addClass('visible');
                } else {
                    backToTop.removeClass('visible');
                }
            });

            // Smooth scroll to top
            backToTop.on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 600);
            });
        }
    }

    /**
     * Smooth Scrolling for Anchor Links
     */
    function initSmoothScrolling() {
        $('a[href*="#"]:not([href="#"])').on('click', function(e) {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && 
                location.hostname === this.hostname) {
                
                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                
                if (target.length) {
                    e.preventDefault();
                    const offset = 80; // Account for fixed header
                    const scrollTo = target.offset().top - offset;
                    
                    $('html, body').animate({
                        scrollTop: scrollTo
                    }, 800);
                    
                    // Update URL hash
                    if (history.pushState) {
                        history.pushState(null, null, this.hash);
                    }
                }
            }
        });
    }

    /**
     * Sticky Header on Scroll
     */
    function initStickyHeader() {
        const header = $('.header-main');
        let lastScroll = 0;

        $(window).on('scroll', function() {
            const currentScroll = $(this).scrollTop();
            
            if (currentScroll > 100) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }
            
            lastScroll = currentScroll;
        });
    }

    /**
     * Fade-in Animation on Scroll
     */
    function initScrollAnimations() {
        const animateElements = $('.service-card, .reason-card, .certification-card, .manufacturer-item');
        const isMobile = window.innerWidth <= 768;
        
        // Reduce animations on mobile
        const translateAmount = isMobile ? '10px' : '20px';
        const animationDuration = isMobile ? 300 : 500;
        
        function checkVisibility() {
            const windowHeight = $(window).height();
            const scrollTop = $(window).scrollTop();
            
            animateElements.each(function() {
                const element = $(this);
                const elementTop = element.offset().top;
                
                if (elementTop < (scrollTop + windowHeight - 100) && !element.hasClass('animated')) {
                    element.addClass('animated');
                    element.css({
                        'opacity': '0',
                        'transform': 'translateY(' + translateAmount + ')'
                    }).animate({
                        'opacity': '1'
                    }, animationDuration, function() {
                        element.css('transform', 'translateY(0)');
                    });
                }
            });
        }
        
        $(window).on('scroll', checkVisibility);
        checkVisibility(); // Check on page load
    }

    /**
     * Initialize all functions when document is ready
     */
    $(document).ready(function() {
        initBackToTop();
        initSmoothScrolling();
        initStickyHeader();
        initScrollAnimations();
    });

    /**
     * Handle window resize
     */
    $(window).on('resize', function() {
        // Add any resize handlers here if needed
    });

})(jQuery);

