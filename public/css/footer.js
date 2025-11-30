// Footer functionality
class FooterManager {
    constructor() {
        this.init();
    }

    init() {
        this.initBackToTop();
        this.initFooterAnimations();
        this.initSmoothScroll();
        this.initNewsletterForm();
        this.initDropdowns();
    }

    // Back to Top functionality
    initBackToTop() {
        const backToTopBtn = document.querySelector('.back-to-top');

        if (backToTopBtn) {
            // Scroll event to show/hide button
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTopBtn.style.opacity = '1';
                    backToTopBtn.style.transform = 'translateY(0)';
                    backToTopBtn.style.visibility = 'visible';
                } else {
                    backToTopBtn.style.opacity = '0';
                    backToTopBtn.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        backToTopBtn.style.visibility = 'hidden';
                    }, 300);
                }
            });

            // Click event
            backToTopBtn.addEventListener('click', this.scrollToTop);
        }
    }

    // Scroll to top function
    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Footer animations on scroll
    initFooterAnimations() {
        const footerObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.style.visibility = 'visible';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Animate footer sections
        const footerSections = document.querySelectorAll('footer .grid > div');
        footerSections.forEach((section, index) => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.visibility = 'hidden';
            section.style.transition = `all 0.6s ease ${index * 0.1}s`;
            footerObserver.observe(section);
        });

        // Animate bottom footer
        const bottomFooter = document.querySelector('footer .py-6');
        if (bottomFooter) {
            bottomFooter.style.opacity = '0';
            bottomFooter.style.transform = 'translateY(20px)';
            bottomFooter.style.transition = 'all 0.6s ease 0.4s';
            footerObserver.observe(bottomFooter);
        }
    }

    // Smooth scroll for anchor links
    initSmoothScroll() {
        document.querySelectorAll('footer a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);

                if (target) {
                    const headerHeight = document.querySelector('header')?.offsetHeight || 80;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Newsletter form interactions
    initNewsletterForm() {
        const newsletterInput = document.querySelector('footer input[type="email"]');
        const newsletterBtn = document.querySelector('footer button[type="submit"]');

        if (newsletterInput && newsletterBtn) {
            // Focus effects
            newsletterInput.addEventListener('focus', () => {
                newsletterInput.parentElement.classList.add('ring-2', 'ring-blue-500', 'ring-opacity-50');
            });

            newsletterInput.addEventListener('blur', () => {
                newsletterInput.parentElement.classList.remove('ring-2', 'ring-blue-500', 'ring-opacity-50');
            });

            // Simple validation and submission
            newsletterBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.handleNewsletterSubmit(newsletterInput.value);
            });

            // Enter key support
            newsletterInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.handleNewsletterSubmit(newsletterInput.value);
                }
            });
        }
    }

    // Handle newsletter submission
    handleNewsletterSubmit(email) {
        if (!email || !this.isValidEmail(email)) {
            this.showNewsletterMessage('Please enter a valid email address.', 'error');
            return;
        }

        // Simulate API call
        this.showNewsletterMessage('Subscribing...', 'loading');

        setTimeout(() => {
            this.showNewsletterMessage('Thank you for subscribing!', 'success');
            document.querySelector('footer input[type="email"]').value = '';
        }, 1500);
    }

    // Email validation
    isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Show newsletter messages
    showNewsletterMessage(message, type) {
        // Remove existing messages
        const existingMessage = document.querySelector('.newsletter-message');
        if (existingMessage) {
            existingMessage.remove();
        }

        // Create new message
        const messageDiv = document.createElement('div');
        messageDiv.className = `newsletter-message mt-2 p-2 rounded text-sm ${
            type === 'error' ? 'bg-red-500 text-white' :
            type === 'success' ? 'bg-green-500 text-white' :
            'bg-blue-500 text-white'
        }`;
        messageDiv.textContent = message;

        // Add to DOM
        const newsletterContainer = document.querySelector('footer input[type="email"]').parentElement;
        newsletterContainer.appendChild(messageDiv);

        // Auto remove after 5 seconds
        if (type !== 'loading') {
            setTimeout(() => {
                messageDiv.remove();
            }, 5000);
        }
    }

    // Dropdown functionality for language/currency
    initDropdowns() {
        const selects = document.querySelectorAll('footer select');

        selects.forEach(select => {
            select.addEventListener('change', (e) => {
                // You can add functionality here for language/currency change
                console.log(`${select.previousElementSibling.textContent.trim()} changed to:`, e.target.value);
            });

            // Custom styling
            select.addEventListener('focus', () => {
                select.parentElement.classList.add('bg-gray-700', 'rounded');
            });

            select.addEventListener('blur', () => {
                select.parentElement.classList.remove('bg-gray-700', 'rounded');
            });
        });
    }
}

// Initialize footer when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new FooterManager();
});

// Export for potential module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = FooterManager;
}
