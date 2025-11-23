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
        const closeBtn = document.querySelector('.mobile-menu-close');
        const navigation = document.querySelector('.main-navigation');
        const overlay = document.querySelector('.mobile-menu-overlay');
        const body = document.body;
        
        if (!toggle || !navigation) {
            return;
        }

        // Function to close menu
        function closeMenu() {
            navigation.classList.remove('active');
            body.classList.remove('menu-open');
            toggle.classList.remove('active');
            toggle.setAttribute('aria-expanded', 'false');
        }

        // Function to open menu
        function openMenu() {
            navigation.classList.add('active');
            body.classList.add('menu-open');
            toggle.classList.add('active');
            toggle.setAttribute('aria-expanded', 'true');
        }

        // Toggle menu on button click
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            if (navigation.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Close menu when clicking close button
        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                closeMenu();
            });
        }

        // Close menu when clicking overlay
        if (overlay) {
            overlay.addEventListener('click', closeMenu);
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            const isClickInsideMenu = navigation.contains(e.target);
            const isClickOnToggle = toggle.contains(e.target);
            
            if (!isClickInsideMenu && !isClickOnToggle && navigation.classList.contains('active')) {
                closeMenu();
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && navigation.classList.contains('active')) {
                closeMenu();
            }
        });

        // Close menu when window is resized to desktop size
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth > 768 && navigation.classList.contains('active')) {
                    closeMenu();
                }
            }, 250);
        });

        // Close menu when clicking on a menu link (for better UX on single-page sections)
        const menuLinks = navigation.querySelectorAll('a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Small delay to allow navigation to occur
                setTimeout(closeMenu, 300);
            });
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

