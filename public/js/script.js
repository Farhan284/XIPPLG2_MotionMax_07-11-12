// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuButton = document.getElementById('menu');
    const navbar = document.querySelector('nav');
    
    menuButton.addEventListener('click', () => {
        navbar.classList.toggle('hidden');
        navbar.classList.toggle('flex');
        navbar.classList.toggle('flex-col');
        navbar.classList.toggle('absolute');
        navbar.classList.toggle('top-16');
        navbar.classList.toggle('left-0');
        navbar.classList.toggle('w-full');
        navbar.classList.toggle('bg-white');
        navbar.classList.toggle('p-4');
        navbar.classList.toggle('shadow-lg');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (event) => {
        if (!navbar.contains(event.target) && !menuButton.contains(event.target)) {
            navbar.classList.add('hidden');
            navbar.classList.remove('flex', 'flex-col', 'absolute', 'top-16', 'left-0', 'w-full', 'bg-white', 'p-4', 'shadow-lg');
        }
    });

    // Initialize Swiper
    const swiper = new Swiper('.best-sellers-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    // Smooth Scroll for Navigation Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                // Close mobile menu if open
                navbar.classList.add('hidden');
            }
        });
    });

    // Random Quotes System
    const quotes = [
        { text: "A good pair of shoes can take you great places.", author: "Audrey Hepburn" },
        { text: "Give a girl the right shoes, and she can conquer the world.", author: "Marilyn Monroe" },
        { text: "Life is short. Buy the shoes.", author: "Unknown" },
        { text: "Shoes transform your body language and attitude.", author: "Christian Louboutin" },
        { text: "You can never take too much care over the choice of your shoes.", author: "Hardy Amies" }
    ];

    function updateQuote() {
        const randomIndex = Math.floor(Math.random() * quotes.length);
        document.getElementById('quote').textContent = quotes[randomIndex].text;
        document.getElementById('author').textContent = `— ${quotes[randomIndex].author}`;
    }

    // Update quote every 5 seconds
    setInterval(updateQuote, 5000);

    // Add to Cart Functionality
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    let cartCount = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            cartCount++;
            // You can create a cart counter in the header
            // For now, we'll just show an alert
            alert('Product added to cart!');
            
            // Add animation to button
            button.classList.add('bg-green-600');
            button.textContent = 'Added!';
            
            setTimeout(() => {
                button.classList.remove('bg-green-600');
                button.textContent = 'Add to Cart';
            }, 1000);
        });
    });

    // Intersection Observer for Fade-In Animation
    const fadeElements = document.querySelectorAll('.fade-in');
    
    const fadeInObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, {
        threshold: 0.1
    });

    fadeElements.forEach(element => {
        element.classList.add('opacity-0', 'translate-y-10', 'transition', 'duration-500');
        fadeInObserver.observe(element);
    });

    // Header Scroll Effect
    const header = document.querySelector('header');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            header.classList.remove('shadow-lg');
            return;
        }

        if (currentScroll > lastScroll && !header.classList.contains('-translate-y-full')) {
            // Scroll Down -> Hide Header
            header.classList.add('-translate-y-full');
            header.classList.remove('shadow-lg');
        } else if (currentScroll < lastScroll && header.classList.contains('-translate-y-full')) {
            // Scroll Up -> Show Header
            header.classList.remove('-translate-y-full');
            header.classList.add('shadow-lg');
        }

        lastScroll = currentScroll;
    });

    // Initialize Swiper with enhanced features
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.best-sellers-slider', {
        // Essential Parameters
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        grabCursor: true,
        
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 1024px
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        },

        // Auto play
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true
        },

        // Effects
        effect: 'slide',
        speed: 800,

        // Keyboard Control
        keyboard: {
            enabled: true,
            onlyInViewport: true
        },

        // Accessibility
        a11y: {
            prevSlideMessage: 'Previous slide',
            nextSlideMessage: 'Next slide',
        }
    });

    // Add hover effect to pause autoplay
    const swiperContainer = document.querySelector('.best-sellers-slider');
    
    swiperContainer.addEventListener('mouseenter', () => {
        swiper.autoplay.stop();
    });

    swiperContainer.addEventListener('mouseleave', () => {
        swiper.autoplay.start();
    });

    // Add click handler for view details buttons
    const viewDetailsButtons = document.querySelectorAll('.best-sellers-slider .swiper-slide button');
    viewDetailsButtons.forEach(button => {
        button.addEventListener('click', function() {
            const slideName = this.closest('.swiper-slide').querySelector('h3').textContent;
            alert(`Viewing details for ${slideName}`); // Replace with your desired action
        });
    });
});
});