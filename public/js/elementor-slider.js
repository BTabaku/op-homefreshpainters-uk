// Elementor Slider Initialization
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper slider for Elementor
    const swiperContainers = document.querySelectorAll('.swiper-container');
    
    swiperContainers.forEach(function(container) {
        if (container.swiper) return; // Already initialized
        
        const swiper = new Swiper(container, {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 600,
            navigation: {
                nextEl: '.elementor-swiper-button-next',
                prevEl: '.elementor-swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            simulateTouch: true,
            allowTouchMove: true
        });
        
        // Add Ken Burns effect to slides
        const slides = container.querySelectorAll('.swiper-slide');
        slides.forEach(function(slide) {
            const bgElement = slide.querySelector('.swiper-slide-bg');
            if (bgElement) {
                bgElement.classList.add('elementor-ken-burns--active');
            }
        });
    });
    
    // Initialize Elementor animations
    const animatedElements = document.querySelectorAll('.elementor-invisible');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const animationObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                const element = entry.target;
                const animationClass = element.classList.contains('elementor-invisible') ? 
                    element.getAttribute('data-settings')?.match(/_animation":"([^"]+)"/)?.[1] : null;
                
                if (animationClass) {
                    element.classList.remove('elementor-invisible');
                    element.classList.add('elementor-animation-' + animationClass);
                    
                    // Remove animation class after completion
                    setTimeout(function() {
                        element.classList.remove('elementor-animation-' + animationClass);
                    }, 1000);
                }
            }
        });
    }, observerOptions);
    
    animatedElements.forEach(function(element) {
        animationObserver.observe(element);
    });
    
    // Add hover effects to buttons
    const buttons = document.querySelectorAll('.elementor-button');
    buttons.forEach(function(button) {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Add smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Elementor compatibility functions
window.elementorFrontend = window.elementorFrontend || {
    hooks: {
        addAction: function() {},
        addFilter: function() {},
        doAction: function() {},
        applyFilters: function() { return arguments[1]; }
    },
    elementsHandler: {
        addHandler: function() {}
    },
    utils: {
        scrollToElement: function(target, duration) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    }
};
