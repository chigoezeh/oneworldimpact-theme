/**
 * News Carousel JavaScript
 * Handles carousel navigation, auto-advance, and swipe support
 * 
 * @package OneWorldImpact
 * @since 1.0.0
 */

jQuery(document).ready(function($) {
    'use strict';
    
    // Initialize carousel
    function initCarousel() {
        const $carousel = $('.news-grid');
        if ($carousel.length === 0) return;
        
        const $cards = $carousel.find('.news-card');
        const $dots = $('.dots span');
        const $prevArrow = $carousel.find('.arrow').first();
        const $nextArrow = $carousel.find('.arrow').last();
        
        let currentIndex = 0;
        const totalCards = $cards.length;
        let autoAdvanceInterval;
        
        // Only proceed if there are news cards
        if (totalCards === 0) return;
        
        // Update carousel state
        function updateCarousel(index) {
            currentIndex = index;
            
            // Update dots
            $dots.removeClass('active');
            $dots.eq(index).addClass('active');
            
            // On mobile, scroll to the card
            if ($(window).width() <= 1100) {
                $cards.eq(index)[0].scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                    inline: 'center'
                });
            }
        }
        
        // Navigate to specific index
        function goToSlide(index) {
            if (index < 0) {
                index = totalCards - 1;
            } else if (index >= totalCards) {
                index = 0;
            }
            updateCarousel(index);
        }
        
        // Previous slide
        function prevSlide() {
            goToSlide(currentIndex - 1);
        }
        
        // Next slide
        function nextSlide() {
            goToSlide(currentIndex + 1);
        }
        
        // Auto-advance carousel
        function startAutoAdvance() {
            stopAutoAdvance();
            autoAdvanceInterval = setInterval(function() {
                nextSlide();
            }, 5000); // Advance every 5 seconds
        }
        
        // Stop auto-advance
        function stopAutoAdvance() {
            if (autoAdvanceInterval) {
                clearInterval(autoAdvanceInterval);
            }
        }
        
        // Event: Previous arrow click
        $prevArrow.on('click', function() {
            prevSlide();
            stopAutoAdvance();
            startAutoAdvance();
        });
        
        // Event: Next arrow click
        $nextArrow.on('click', function() {
            nextSlide();
            stopAutoAdvance();
            startAutoAdvance();
        });
        
        // Event: Dot click
        $dots.on('click', function() {
            const index = $(this).index();
            goToSlide(index);
            stopAutoAdvance();
            startAutoAdvance();
        });
        
        // Event: Keyboard navigation
        $(document).on('keydown', function(e) {
            if ($carousel.is(':visible')) {
                if (e.keyCode === 37) { // Left arrow
                    prevSlide();
                    stopAutoAdvance();
                    startAutoAdvance();
                } else if (e.keyCode === 39) { // Right arrow
                    nextSlide();
                    stopAutoAdvance();
                    startAutoAdvance();
                }
            }
        });
        
        // Event: Pause on hover
        $carousel.on('mouseenter', function() {
            stopAutoAdvance();
        });
        
        $carousel.on('mouseleave', function() {
            startAutoAdvance();
        });
        
        // Touch/swipe support for mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        $carousel.on('touchstart', function(e) {
            touchStartX = e.originalEvent.changedTouches[0].screenX;
        });
        
        $carousel.on('touchend', function(e) {
            touchEndX = e.originalEvent.changedTouches[0].screenX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swiped left - go to next
                    nextSlide();
                } else {
                    // Swiped right - go to previous
                    prevSlide();
                }
                stopAutoAdvance();
                startAutoAdvance();
            }
        }
        
        // Initialize
        updateCarousel(0);
        startAutoAdvance();
        
        // Handle window resize
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                updateCarousel(currentIndex);
            }, 250);
        });
    }
    
    // Initialize on document ready
    initCarousel();
    
    // Re-initialize after AJAX loads (if applicable)
    $(document).on('carousel:refresh', function() {
        initCarousel();
    });
});
