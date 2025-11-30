<header class="glass-header" id="mainHeader">
    <div class="container">
        <div class="header-content">
            <!-- LOGO -->
            <div class="logo">
                <span class="logo-text">
                    <i class="fa-solid fa-code"></i>
                    Ahmad Farooq
                </span>
            </div>

            <!-- DESKTOP NAVIGATION -->
            <nav class="nav-menu">
                <a href="{{ route('home') }}" class="nav-item {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('portfolio') }}" class="nav-item {{ request()->is('portfolio') ? 'active' : '' }}">Projects</a>
                <a href="{{ route('contact') }}" class="nav-item {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </nav>

            <!-- HIRE ME BUTTON -->
            <a href="{{ route('contact') }}" class="cta-btn">Hire Me</a>

            <!-- MOBILE MENU BUTTON -->
            <button class="mobile-btn" id="mobileBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-content">
            <div class="mobile-menu-header">
                <div class="logo">
                    <span class="logo-text">
                        <i class="fa-solid fa-code"></i>
                        Ahmad Farooq
                    </span>
                </div>
                <button class="mobile-close-btn" id="mobileCloseBtn">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <nav class="mobile-nav">
                <a href="{{ route('home') }}" class="mobile-nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>Home
                </a>
                <a href="{{ route('about') }}" class="mobile-nav-item {{ request()->is('about') ? 'active' : '' }}">
                    <i class="fas fa-user"></i>About
                </a>
                <a href="{{ route('portfolio') }}" class="mobile-nav-item {{ request()->is('portfolio') ? 'active' : '' }}">
                    <i class="fas fa-briefcase"></i>Projects
                </a>
                <a href="{{ route('contact') }}" class="mobile-nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <i class="fas fa-envelope"></i>Contact
                </a>
            </nav>

            <div class="mobile-menu-footer">
                <a href="{{ route('contact') }}" class="mobile-cta-btn">
                    <i class="fas fa-paper-plane"></i>Hire Me
                </a>
            </div>
        </div>
    </div>

    <!-- HEADER JAVASCRIPT -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('mainHeader');
        const mobileBtn = document.getElementById('mobileBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileCloseBtn = document.getElementById('mobileCloseBtn');
        const body = document.body;

        let lastScrollY = window.scrollY;

        // Scroll effect - header always show, no hide
        window.addEventListener('scroll', function() {
            // Header always visible rahega, koi hide effect nahi
            lastScrollY = window.scrollY;
        });

        // Mobile menu functionality
        if (mobileBtn && mobileMenu && mobileCloseBtn) {
            // Open mobile menu
            mobileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                mobileMenu.classList.add('active');
                body.style.overflow = 'hidden';
                this.classList.add('active');
            });

            // Close mobile menu
            mobileCloseBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                mobileMenu.classList.remove('active');
                body.style.overflow = '';
                mobileBtn.classList.remove('active');
            });

            // Close menu when clicking on navigation links
            const mobileLinks = mobileMenu.querySelectorAll('.mobile-nav-item');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = '';
                    mobileBtn.classList.remove('active');
                });
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (mobileMenu.classList.contains('active') &&
                    !mobileMenu.contains(e.target) &&
                    !mobileBtn.contains(e.target)) {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = '';
                    mobileBtn.classList.remove('active');
                }
            });

            // Close menu with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = '';
                    mobileBtn.classList.remove('active');
                }
            });
        }
    });
    </script>

    <!-- HEADER CSS STYLES -->
    <style>
    /* Base Header Styles - Dark Header */
    .glass-header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to right, #111827, #581c87, #111827)
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        z-index: 1000;
        transition: all 0.3s ease;
    }
    header{
        height: 70px;
    }

    /* Header Content */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;

    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;
        height: 40px;
    }

    /* Logo Styles */
    .logo-text {
        font-size: 1.5rem;
        font-weight: 900;
        color: #ffffff;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .logo-text i {
        color: #3b82f6;
    }

    /* Navigation Menu */
    .nav-menu {
        display: flex;
        gap: 2rem;
        align-items: center;
    }

    .nav-item {
        text-decoration: none;
        color: #cbd5e1;
        font-weight: 500;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-item:hover {
        color: #ffffff;
        background: rgba(59, 130, 246, 0.2);
    }

    .nav-item.active {
        color: #ffffff;
        background: rgba(59, 130, 246, 0.2);
    }

    .nav-item.active::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 6px;
        height: 6px;
        background: #3b82f6;
        border-radius: 50%;
    }

    /* CTA Button */
    .cta-btn {
        background: linear-gradient(135deg, #3b82f6, #8b5cf6);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.75rem;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
    }

    .cta-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
    }

    /* Mobile Button Styles */
    .mobile-btn {
        display: none;
        flex-direction: column;
        background: none;
        border: none;
        cursor: pointer;
        padding: 8px;
        width: 40px;
        height: 40px;
        justify-content: center;
        align-items: center;
        gap: 5px;
        transition: all 0.3s ease;
    }

    .mobile-btn span {
        display: block;
        width: 25px;
        height: 2px;
        background: #ffffff;
        border-radius: 2px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: center;
    }

    /* Mobile Button Active State (X icon) */
    .mobile-btn.active span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }

    .mobile-btn.active span:nth-child(2) {
        opacity: 0;
        transform: scale(0);
    }

    .mobile-btn.active span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Mobile Menu Styles */
    .mobile-menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: rgba(15, 23, 42, 0.98);
        backdrop-filter: blur(20px);
        z-index: 1000;
        transform: translateX(-100%);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        opacity: 0;
        visibility: hidden;
    }

    .mobile-menu.active {
        transform: translateX(0);
        opacity: 1;
        visibility: visible;
    }

    .mobile-menu-content {
        padding: 2rem;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .mobile-menu-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #334155;
    }

    .mobile-close-btn {
        background: none;
        border: none;
        font-size: 1.5rem;
        color: #ffffff;
        cursor: pointer;
        padding: 0.5rem;
        transition: all 0.3s ease;
        border-radius: 0.5rem;
    }

    .mobile-close-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: rotate(90deg);
    }

    .mobile-nav {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .mobile-nav-item {
        padding: 1rem 1.5rem;
        text-decoration: none;
        color: #cbd5e1;
        font-size: 1.1rem;
        font-weight: 500;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 1rem;
        border: 1px solid transparent;
    }

    .mobile-nav-item:hover,
    .mobile-nav-item.active {
        background: linear-gradient(135deg, #3B82F6, #8B5CF6);
        color: white;
        transform: translateX(10px);
        border-color: #3B82F6;
    }

    .mobile-nav-item i {
        width: 20px;
        text-align: center;
    }

    .mobile-menu-footer {
        padding-top: 2rem;
        border-top: 1px solid #334155;
    }

    .mobile-cta-btn {
        display: block;
        width: 100%;
        padding: 1rem 1.5rem;
        background: linear-gradient(135deg, #3B82F6, #8B5CF6);
        color: white;
        text-decoration: none;
        text-align: center;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .mobile-cta-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .mobile-btn {
            display: flex;
        }

        .nav-menu,
        .cta-btn {
            display: none;
        }

        .header-content {
            padding: 0.75rem 0;
        }
    }

    /* Prevent body scroll when menu is open */
    body.no-scroll {
        overflow: hidden;
    }
    </style>
</header>
