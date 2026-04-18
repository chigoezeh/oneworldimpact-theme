/**
 * Team Carousel
 * 
 * Handles the team members carousel with left/right navigation arrows
 */
(function($) {
    'use strict';
    
    $(document).ready(function() {
        const carousel = $('.team-carousel');
        const leftArrow = $('.team-arrow-left');
        const rightArrow = $('.team-arrow-right');
        
        if (!carousel.length) return;
        
        let currentIndex = 0;
        const slides = carousel.find('.team-slide');
        const totalSlides = slides.length;
        
        // Determine slides to show based on screen width
        function getSlidesToShow() {
            if (window.innerWidth > 1100) {
                return 3; // Desktop: show 3 team members
            } else if (window.innerWidth > 768) {
                return 2; // Tablet: show 2 team members
            } else {
                return 1; // Mobile: show 1 team member
            }
        }
        
        // Update carousel position
        function updateCarousel() {
            const slidesToShow = getSlidesToShow();
            const slideWidth = 100 / slidesToShow;
            const maxIndex = Math.max(0, totalSlides - slidesToShow);
            
            // Constrain currentIndex
            currentIndex = Math.max(0, Math.min(currentIndex, maxIndex));
            
            // Calculate transform
            const offset = -(currentIndex * slideWidth);
            carousel.css('transform', `translateX(${offset}%)`);
            
            // Update arrow visibility
            updateArrows();
        }
        
        // Update arrow button states
        function updateArrows() {
            const slidesToShow = getSlidesToShow();
            const maxIndex = Math.max(0, totalSlides - slidesToShow);
            
            // Hide arrows if all slides fit on screen
            if (totalSlides <= slidesToShow) {
                leftArrow.hide();
                rightArrow.hide();
            } else {
                leftArrow.show();
                rightArrow.show();
                
                // Disable left arrow at start
                if (currentIndex <= 0) {
                    leftArrow.addClass('disabled').attr('disabled', true);
                } else {
                    leftArrow.removeClass('disabled').attr('disabled', false);
                }
                
                // Disable right arrow at end
                if (currentIndex >= maxIndex) {
                    rightArrow.addClass('disabled').attr('disabled', true);
                } else {
                    rightArrow.removeClass('disabled').attr('disabled', false);
                }
            }
        }
        
        // Navigate left
        leftArrow.on('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });
        
        // Navigate right
        rightArrow.on('click', function() {
            const slidesToShow = getSlidesToShow();
            const maxIndex = Math.max(0, totalSlides - slidesToShow);
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateCarousel();
            }
        });
        
        // Keyboard navigation
        $(document).on('keydown', function(e) {
            if (!carousel.is(':visible')) return;
            
            if (e.key === 'ArrowLeft') {
                leftArrow.trigger('click');
            } else if (e.key === 'ArrowRight') {
                rightArrow.trigger('click');
            }
        });
        
        // Handle window resize
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                updateCarousel();
            }, 250);
        });
        
        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;
        
        carousel.on('touchstart', function(e) {
            touchStartX = e.originalEvent.touches[0].clientX;
        });
        
        carousel.on('touchend', function(e) {
            touchEndX = e.originalEvent.changedTouches[0].clientX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left - go to next
                    rightArrow.trigger('click');
                } else {
                    // Swipe right - go to previous
                    leftArrow.trigger('click');
                }
            }
        }
        
        // Initialize
        updateCarousel();
    });
})(jQuery);
