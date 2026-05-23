/**
 * Mobile Menu Toggle
 * 
 * Handles the hamburger menu functionality for mobile devices
 */
(function($) {
    'use strict';
    
    $(document).ready(function() {
        const hamburger = $('.hamburger');
        const menu = $('.menu');
        const body = $('body');
        
        // Toggle menu when hamburger is clicked
        hamburger.on('click', function() {
            const isExpanded = $(this).attr('aria-expanded') === 'true';
            
            $(this).toggleClass('active');
            menu.toggleClass('mobile-active');
            body.toggleClass('menu-open');
            
            // Update ARIA attribute
            $(this).attr('aria-expanded', !isExpanded);
        });
        
        // Close menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.nav').length && menu.hasClass('mobile-active')) {
                hamburger.removeClass('active');
                menu.removeClass('mobile-active');
                body.removeClass('menu-open');
                hamburger.attr('aria-expanded', 'false');
            }
        });
        
        // Close menu when a menu item is clicked (for single-page navigation)
        menu.find('a').on('click', function() {
            if (window.innerWidth <= 768) {
                hamburger.removeClass('active');
                menu.removeClass('mobile-active');
                body.removeClass('menu-open');
                hamburger.attr('aria-expanded', 'false');
            }
        });
        
        // Close menu on ESC key
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && menu.hasClass('mobile-active')) {
                hamburger.removeClass('active');
                menu.removeClass('mobile-active');
                body.removeClass('menu-open');
                hamburger.attr('aria-expanded', 'false');
            }
        });
    });
})(jQuery);
