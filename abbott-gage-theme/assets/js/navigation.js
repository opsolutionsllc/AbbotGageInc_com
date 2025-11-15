/**
 * Navigation JavaScript for Abbott Gage Inc Theme
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

(function() {
    'use strict';

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const toggle = document.querySelector('.mobile-menu-toggle');
        const navigation = document.querySelector('.main-navigation');
        const body = document.body;
        
        if (!toggle || !navigation) {
            return;
        }

        // Toggle menu on button click
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            navigation.classList.toggle('active');
            body.classList.toggle('menu-open');
            
            // Update ARIA attributes
            const expanded = toggle.getAttribute('aria-expanded') === 'true' || false;
            toggle.setAttribute('aria-expanded', !expanded);
            
            // Animate hamburger icon
            this.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            const isClickInsideMenu = navigation.contains(e.target);
            const isClickOnToggle = toggle.contains(e.target);
            
            if (!isClickInsideMenu && !isClickOnToggle && navigation.classList.contains('active')) {
                navigation.classList.remove('active');
                body.classList.remove('menu-open');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && navigation.classList.contains('active')) {
                navigation.classList.remove('active');
                body.classList.remove('menu-open');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu when window is resized to desktop size
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768 && navigation.classList.contains('active')) {
                navigation.classList.remove('active');
                body.classList.remove('menu-open');
                toggle.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /**
     * Dropdown Menu Keyboard Navigation
     */
    function initDropdownKeyboardNav() {
        const menuItems = document.querySelectorAll('.primary-menu > li');
        
        menuItems.forEach(function(item) {
            const link = item.querySelector('a');
            const submenu = item.querySelector('.sub-menu');
            
            if (!link || !submenu) {
                return;
            }

            // Handle Enter and Space keys
            link.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    if (submenu) {
                        e.preventDefault();
                        item.classList.toggle('focus');
                    }
                }
            });

            // Handle Escape key to close submenu
            submenu.querySelectorAll('a').forEach(function(subLink) {
                subLink.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        item.classList.remove('focus');
                        link.focus();
                    }
                });
            });
        });
    }

    /**
     * Add touch support for dropdown menus on mobile
     */
    function initTouchDropdowns() {
        if ('ontouchstart' in window) {
            const menuItems = document.querySelectorAll('.primary-menu > li');
            
            menuItems.forEach(function(item) {
                const link = item.querySelector('a');
                const submenu = item.querySelector('.sub-menu');
                
                if (!link || !submenu) {
                    return;
                }

                link.addEventListener('touchstart', function(e) {
                    const hasDropdown = item.querySelector('.sub-menu');
                    
                    if (hasDropdown && !item.classList.contains('touch-open')) {
                        e.preventDefault();
                        
                        // Close other open menus
                        document.querySelectorAll('.primary-menu > li.touch-open').forEach(function(openItem) {
                            if (openItem !== item) {
                                openItem.classList.remove('touch-open');
                            }
                        });
                        
                        item.classList.add('touch-open');
                    }
                });
            });

            // Close menus when touching outside
            document.addEventListener('touchstart', function(e) {
                if (!e.target.closest('.primary-menu')) {
                    document.querySelectorAll('.primary-menu > li.touch-open').forEach(function(item) {
                        item.classList.remove('touch-open');
                    });
                }
            });
        }
    }

    /**
     * Initialize all navigation functions when DOM is ready
     */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initMobileMenu();
            initDropdownKeyboardNav();
            initTouchDropdowns();
        });
    } else {
        initMobileMenu();
        initDropdownKeyboardNav();
        initTouchDropdowns();
    }

})();

