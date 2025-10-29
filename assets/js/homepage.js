/**
 * KM Personal - Homepage JavaScript
 * Handles testimonials slider and smooth scrolling
 */

(function() {
  'use strict';

  /**
   * Testimonials Slider
   */
  function initTestimonialsSlider() {
    const slider = document.querySelector('.testimonials-slider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.slider-dots .dot');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');

    if (slides.length === 0) return;

    let currentSlide = 0;
    let autoplayInterval;

    /**
     * Show specific slide
     */
    function showSlide(index) {
      // Remove active class from all slides and dots
      slides.forEach(slide => slide.classList.remove('active'));
      dots.forEach(dot => dot.classList.remove('active'));

      // Add active class to current slide and dot
      slides[index].classList.add('active');
      if (dots[index]) {
        dots[index].classList.add('active');
      }
    }

    /**
     * Go to next slide
     */
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    /**
     * Go to previous slide
     */
    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }

    /**
     * Start autoplay
     */
    function startAutoplay() {
      autoplayInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }

    /**
     * Stop autoplay
     */
    function stopAutoplay() {
      if (autoplayInterval) {
        clearInterval(autoplayInterval);
      }
    }

    /**
     * Reset autoplay
     */
    function resetAutoplay() {
      stopAutoplay();
      startAutoplay();
    }

    // Initialize first slide
    showSlide(0);

    // Next button
    if (nextBtn) {
      nextBtn.addEventListener('click', function() {
        nextSlide();
        resetAutoplay();
      });
    }

    // Previous button
    if (prevBtn) {
      prevBtn.addEventListener('click', function() {
        prevSlide();
        resetAutoplay();
      });
    }

    // Dot navigation
    dots.forEach((dot, index) => {
      dot.addEventListener('click', function() {
        currentSlide = index;
        showSlide(currentSlide);
        resetAutoplay();
      });
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
      if (e.key === 'ArrowLeft') {
        prevSlide();
        resetAutoplay();
      } else if (e.key === 'ArrowRight') {
        nextSlide();
        resetAutoplay();
      }
    });

    // Pause autoplay on hover
    slider.addEventListener('mouseenter', stopAutoplay);
    slider.addEventListener('mouseleave', startAutoplay);

    // Touch/swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    slider.addEventListener('touchstart', function(e) {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    slider.addEventListener('touchend', function(e) {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, { passive: true });

    function handleSwipe() {
      const swipeThreshold = 50;
      if (touchEndX < touchStartX - swipeThreshold) {
        // Swipe left - go to next slide
        nextSlide();
        resetAutoplay();
      }
      if (touchEndX > touchStartX + swipeThreshold) {
        // Swipe right - go to previous slide
        prevSlide();
        resetAutoplay();
      }
    }

    // Start autoplay
    startAutoplay();
  }

  /**
   * Smooth Scrolling for Anchor Links
   */
  function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');

        // Skip if href is just "#"
        if (href === '#') return;

        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          const headerOffset = 100; // Adjust for fixed header height
          const elementPosition = target.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  /**
   * Add animation on scroll
   */
  function initScrollAnimations() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-in');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe service cards
    document.querySelectorAll('.service-card').forEach(card => {
      observer.observe(card);
    });

    // Observe value cards
    document.querySelectorAll('.value-card').forEach(card => {
      observer.observe(card);
    });
  }

  /**
   * Hide/Show Header on Scroll
   */
  function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    let lastScrollTop = 0;
    const scrollThreshold = 5; // Minimum scroll to detect direction

    window.addEventListener('scroll', function() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      // Scrolling down - hide header
      if (scrollTop > lastScrollTop + scrollThreshold && scrollTop > 100) {
        header.classList.add('header-hidden');
      }
      // Scrolling up - show header
      else if (scrollTop < lastScrollTop - scrollThreshold) {
        header.classList.remove('header-hidden');
      }

      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }, false);
  }

  /**
   * Initialize all functions when DOM is ready
   */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  function init() {
    initTestimonialsSlider();
    initSmoothScrolling();
    initScrollAnimations();
    initHeaderScroll();
  }

})();
