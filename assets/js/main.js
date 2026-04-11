/**
 * SpiderWebUG - Main JavaScript
 * Handles all interactive features and animations
 */

(function() {
    'use strict';

    // ====================================
    // 1. INITIALIZE AOS (Animate On Scroll)
    // ====================================
    AOS.init({
        duration: 1000,
        easing: 'ease-out-cubic',
        once: true,
        offset: 100,
        delay: 100
    });

    // ====================================
    // 2. NAVBAR SCROLL EFFECT
    // ====================================
    const navbar = document.getElementById('mainNav');
    
    function handleNavbarScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
    
    window.addEventListener('scroll', handleNavbarScroll);

    // ====================================
    // 3. SMOOTH SCROLLING FOR ANCHOR LINKS
    // ====================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Only prevent default for actual anchor links (not empty or just #)
            if (href && href !== '#' && href.length > 1) {
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    const navbarHeight = navbar.offsetHeight;
                    const targetPosition = target.offsetTop - navbarHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        const navbarToggler = document.querySelector('.navbar-toggler');
                        navbarToggler.click();
                    }
                }
            }
        });
    });

    // ====================================
    // 4. SCROLL TO TOP BUTTON
    // ====================================
    const scrollTopBtn = document.getElementById('scrollTop');
    
    function handleScrollTopButton() {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.add('active');
        } else {
            scrollTopBtn.classList.remove('active');
        }
    }
    
    window.addEventListener('scroll', handleScrollTopButton);
    
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // ====================================
    // 5. ACTIVE NAV LINK HIGHLIGHTING
    // ====================================
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
    function highlightActiveNavLink() {
        const scrollPosition = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
    
    window.addEventListener('scroll', highlightActiveNavLink);

    // ====================================
    // 6. CONTACT FORM HANDLING
    // ====================================
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;
            
            // Basic validation
            if (!name || !email || !service || !message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // Here you would typically send the form data to a server
            // For now, we'll just show a success message
            alert('Thank you for your message! We will get back to you soon.');
            
            // Reset form
            contactForm.reset();
        });
    }

    // ====================================
    // 7. NEWSLETTER FORM HANDLING
    // ====================================
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value;
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // Here you would typically send the email to a server
            alert('Thank you for subscribing to our newsletter!');
            
            // Reset form
            this.reset();
        });
    });

    // ====================================
    // 8. TYPING EFFECT FOR HERO TITLE (Optional)
    // ====================================
    function createTypingEffect() {
        const gradientText = document.querySelector('.gradient-text');
        if (!gradientText) return;
        
        const originalText = gradientText.textContent;
        gradientText.textContent = '';
        
        let index = 0;
        const typingSpeed = 100;
        
        function type() {
            if (index < originalText.length) {
                gradientText.textContent += originalText.charAt(index);
                index++;
                setTimeout(type, typingSpeed);
            }
        }
        
        // Start typing after a short delay
        setTimeout(type, 500);
    }
    
    // Uncomment to enable typing effect
    // createTypingEffect();

    // ====================================
    // 9. COUNTER ANIMATION FOR STATS
    // ====================================
    function animateCounters() {
        const counters = document.querySelectorAll('.hero-stats h3');
        
        counters.forEach(counter => {
            const target = parseInt(counter.textContent);
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60 FPS
            
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.textContent = counter.textContent; // Keep original format
                    clearInterval(timer);
                } else {
                    if (counter.textContent.includes('%')) {
                        counter.textContent = Math.floor(current) + '%';
                    } else if (counter.textContent.includes('+')) {
                        counter.textContent = Math.floor(current) + '+';
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }
            }, 16);
        });
    }
    
    // Trigger counter animation when hero section is in view
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(heroSection);
    }

    // ====================================
    // 10. PARALLAX EFFECT FOR HERO SECTION
    // ====================================
    function handleParallax() {
        const heroContent = document.querySelector('.hero-content');
        const heroIllustration = document.querySelector('.hero-illustration');
        
        if (heroContent && window.scrollY < window.innerHeight) {
            const scrolled = window.scrollY;
            heroContent.style.transform = `translateY(${scrolled * 0.3}px)`;
            if (heroIllustration) {
                heroIllustration.style.transform = `translateY(${scrolled * 0.15}px)`;
            }
        }
    }
    
    window.addEventListener('scroll', handleParallax);

    // ====================================
    // 11. ADD LOADING ANIMATION
    // ====================================
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        setTimeout(() => {
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            document.body.style.opacity = '1';
        }, 100);
    });

    // ====================================
    // 12. RESPONSIVE NAVBAR CLOSE ON RESIZE
    // ====================================
    let windowWidth = window.innerWidth;
    
    window.addEventListener('resize', function() {
        if (window.innerWidth !== windowWidth) {
            windowWidth = window.innerWidth;
            
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show') && window.innerWidth >= 992) {
                const navbarToggler = document.querySelector('.navbar-toggler');
                navbarToggler.click();
            }
        }
    });

    // ====================================
    // 13. LAZY LOADING FOR IMAGES
    // ====================================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    observer.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // ====================================
    // 14. FORM INPUT ANIMATION
    // ====================================
    const formInputs = document.querySelectorAll('.form-control');
    
    formInputs.forEach(input => {
        // Add focus class
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        // Remove focus class if empty
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
        
        // Check if already has value on page load
        if (input.value) {
            input.parentElement.classList.add('focused');
        }
    });

    // ====================================
    // 15. PREVENT EMPTY HREF NAVIGATION
    // ====================================
    document.querySelectorAll('a[href="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
        });
    });

    // ====================================
    // 16. ADD CUSTOM CURSOR EFFECT (Optional)
    // ====================================
    function createCustomCursor() {
        const cursor = document.createElement('div');
        cursor.classList.add('custom-cursor');
        document.body.appendChild(cursor);
        
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });
        
        // Add hover effect for interactive elements
        const interactiveElements = document.querySelectorAll('a, button, .service-card, .portfolio-item');
        
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('cursor-hover'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('cursor-hover'));
        });
    }
    
    // Uncomment to enable custom cursor
    // if (window.innerWidth > 768) {
    //     createCustomCursor();
    // }

    // ====================================
    // 17. CONSOLE MESSAGE
    // ====================================
    console.log('%c🕷️ SpiderWebUG - Weaving Digital Excellence', 
        'color: #1976D2; font-size: 20px; font-weight: bold; font-family: "Orbitron", sans-serif;');
    console.log('%cLooking for a web developer? Visit us at spiderwebug.com', 
        'color: #42A5F5; font-size: 14px;');

})();
