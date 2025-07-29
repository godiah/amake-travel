<nav id="navbar"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 transform -translate-y-full opacity-0">
    <!-- Glass Morphism Background -->
    <div class="absolute inset-0 navbar-blur"></div>

    <!-- Gradient Overlay for Better Contrast -->
    <div class="absolute inset-0 bg-gradient-to-r from-brand-coral/5 via-transparent to-brand-gold/5"></div>

    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image: 
            radial-gradient(circle at 20% 50%, var(--color-brand-coral) 1px, transparent 1px),
            radial-gradient(circle at 80% 50%, var(--color-brand-gold) 1px, transparent 1px);
            background-size: 60px 60px, 40px 40px;">
        </div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex items-center justify-between h-20">

            <!-- Logo Section -->
            <div class="flex items-center space-x-3">
                <a href="#home" class="flex items-center space-x-3 group">
                    <!-- Logo Icon -->
                    <div
                        class="w-32 h-32 flex items-center justify-center transition-transform duration-300">
                        <img src="{{ asset('images/logo_white_bg.png') }}" alt="AmakeTraveLite Logo"
                            class="w-full h-full object-contain">
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="#home"
                    class="nav-link font-body tracking-wide px-4 py-2 rounded-xl text-brand-forest hover:text-brand-coral font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Home</span>
                    <div
                        class="absolute inset-0 bg-brand-coral/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#adventures"
                    class="nav-link font-body tracking-wide px-4 py-2 rounded-xl text-brand-forest hover:text-brand-coral font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Adventures</span>
                    <div
                        class="absolute inset-0 bg-brand-coral/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#gallery"
                    class="nav-link font-body tracking-wide px-4 py-2 rounded-xl text-brand-forest hover:text-brand-coral font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Gallery</span>
                    <div
                        class="absolute inset-0 bg-brand-coral/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#testimonials"
                    class="nav-link font-body tracking-wide px-4 py-2 rounded-xl text-brand-forest hover:text-brand-coral font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Stories</span>
                    <div
                        class="absolute inset-0 bg-brand-coral/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#about"
                    class="nav-link font-body tracking-wide px-4 py-2 rounded-xl text-brand-forest hover:text-brand-coral font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">About</span>
                    <div
                        class="absolute inset-0 bg-brand-coral/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <a href="#contact"
                    class="nav-link font-body tracking-wide px-4 py-2 rounded-xl text-brand-forest hover:text-brand-coral font-medium transition-all duration-300 relative group">
                    <span class="relative z-10">Contact</span>
                    <div
                        class="absolute inset-0 bg-brand-coral/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <!-- CTA Button -->
                <div class="ml-4">
                    <a href="#contact"
                        class="bg-wanderlust-gradient hover:shadow-travel text-white px-6 py-2 rounded-xl text-sm font-medium hover-lift transition-all duration-300 shadow-forest">
                        Book Now
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button"
                    class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center hover:bg-brand-coral/20 transition-all duration-300 border border-brand-coral/20">
                    <svg class="w-6 h-6 text-brand-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Active Section Indicator -->
    <div class="absolute bottom-0 left-0 h-1 bg-wanderlust-gradient transition-all duration-500" id="nav-indicator">
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden transform translate-x-full transition-transform duration-300">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <!-- Menu Panel -->
    <div class="absolute right-0 top-0 h-full w-80 max-w-full mobile-menu-blur shadow-2xl overflow-scroll">
        <!-- Header -->
        <div class="flex items-center justify-between p-6 border-b border-brand-coral/20">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-wanderlust-gradient rounded-lg flex items-center justify-center">
                    <span class="text-white font-display font-bold text-sm">A</span>
                </div>
                <div>
                    <h2 class="font-display text-lg text-brand-forest">AmakeTraveLite</h2>
                    <p class="font-script text-xs text-brand-coral">Turning every dream into a safari</p>
                </div>
            </div>

            <button id="mobile-menu-close"
                class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center hover:bg-brand-coral/10 transition-colors duration-300">
                <svg class="w-5 h-5 text-brand-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <div class="p-6 space-y-2">
            <a href="#home"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-brand-coral/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-brand-coral/20 rounded-lg flex items-center justify-center group-hover:bg-brand-coral/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-brand-coral" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-display font-medium text-brand-forest group-hover:text-brand-coral transition-colors duration-300">Home</span>
                    <p class="font-body text-sm text-gray-500">Hero & Welcome</p>
                </div>
            </a>

            <a href="#adventures"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-brand-coral/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-brand-gold/20 rounded-lg flex items-center justify-center group-hover:bg-brand-gold/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-display font-medium text-brand-forest group-hover:text-brand-coral transition-colors duration-300">Adventures</span>
                    <p class="font-body text-sm text-gray-500">Tours & Expeditions</p>
                </div>
            </a>

            <a href="#testimonials"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-brand-coral/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-brand-ocean/20 rounded-lg flex items-center justify-center group-hover:bg-brand-ocean/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-brand-ocean" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-display font-medium text-brand-forest group-hover:text-brand-coral transition-colors duration-300">Stories</span>
                    <p class="font-body text-sm text-gray-500">Testimonials & Stories</p>
                </div>
            </a>

            <a href="#gallery"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-brand-coral/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-brand-forest-light/20 rounded-lg flex items-center justify-center group-hover:bg-brand-forest-light/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-brand-forest-light" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-display font-medium text-brand-forest group-hover:text-brand-coral transition-colors duration-300">Gallery</span>
                    <p class="font-body text-sm text-gray-500">Photos & Reviews</p>
                </div>
            </a>

            <a href="#about"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-brand-coral/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-brand-forest/20 rounded-lg flex items-center justify-center group-hover:bg-brand-forest/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-brand-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-display font-medium text-brand-forest group-hover:text-brand-coral transition-colors duration-300">About</span>
                    <p class="font-body text-sm text-gray-500">Our Story & Team</p>
                </div>
            </a>

            <a href="#contact"
                class="mobile-nav-link flex items-center space-x-4 p-4 rounded-xl hover:bg-brand-coral/10 transition-all duration-300 group">
                <div
                    class="w-10 h-10 bg-brand-coral/20 rounded-lg flex items-center justify-center group-hover:bg-brand-coral/30 transition-colors duration-300">
                    <svg class="w-5 h-5 text-brand-coral" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                </div>
                <div>
                    <span
                        class="font-display font-medium text-brand-forest group-hover:text-brand-coral transition-colors duration-300">Contact</span>
                    <p class="font-body text-sm text-gray-500">Get In Touch</p>
                </div>
            </a>
        </div>

        <!-- CTA Section -->
        <div class="p-6 border-t border-brand-coral/20">
            <a href="#contact"
                class="w-full bg-wanderlust-gradient text-white py-3 rounded-xl text-center block font-medium hover-lift transition-all duration-300 shadow-travel">
                Book Your Adventure
            </a>

            <!-- Emergency Contact -->
            <div class="mt-4 p-4 bg-brand-gold/10 rounded-xl border border-brand-gold/20">
                <div class="flex items-center space-x-2 mb-2">
                    <svg class="w-4 h-4 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-brand-gold">24/7 Emergency</span>
                </div>
                <a href="tel:+254700123456"
                    class="text-sm text-brand-forest hover:text-brand-coral transition-colors duration-300">+254
                    70000000
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const navIndicator = document.getElementById('nav-indicator');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        let lastScrollY = 0;
        let navbarVisible = false;
        const scrollThreshold = 50; // Pixels from top to trigger navbar visibility

        // Sections to track - Updated to include testimonials
        const sections = [{
                id: 'home',
                element: document.getElementById('home')
            },
            {
                id: 'adventures',
                element: document.getElementById('adventures')
            },
            {
                id: 'gallery',
                element: document.getElementById('gallery')
            },
            {
                id: 'testimonials',
                element: document.getElementById('testimonials')
            },
            {
                id: 'about',
                element: document.getElementById('about')
            },
            {
                id: 'contact',
                element: document.getElementById('contact')
            }
        ].filter(section => section.element);

        // Show navbar with smooth animation
        function showNavbar() {
            if (!navbarVisible) {
                navbar.classList.remove('-translate-y-full', 'opacity-0');
                navbar.classList.add('translate-y-0', 'opacity-100');
                navbarVisible = true;
            }
        }

        // Hide navbar with smooth animation
        function hideNavbar() {
            if (navbarVisible) {
                navbar.classList.add('-translate-y-full', 'opacity-0');
                navbar.classList.remove('translate-y-0', 'opacity-100');
                navbarVisible = false;
            }
        }

        // Enhanced scroll handler with brand color transitions
        function handleScroll() {
            const currentScrollY = window.scrollY;

            // Simple logic: hide only at top, show everywhere else
            if (currentScrollY <= scrollThreshold) {
                hideNavbar();
            } else {
                showNavbar();
            }

            lastScrollY = currentScrollY;
            updateActiveSection();
        }

        // Update Active Section with enhanced brand styling
        function updateActiveSection() {
            const scrollPosition = window.scrollY + 120; // Offset for navbar height
            let activeSection = sections[0];

            // Find the current section with better detection
            for (let i = sections.length - 1; i >= 0; i--) {
                const section = sections[i];
                if (section.element && scrollPosition >= section.element.offsetTop) {
                    activeSection = section;
                    break;
                }
            }

            // Update nav links with brand color styling
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === `#${activeSection.id}`) {
                    // Active link styling with brand colors
                    link.classList.add('text-brand-coral');
                    link.classList.remove('text-brand-forest');

                    // Add subtle background glow
                    const bgDiv = link.querySelector('div');
                    if (bgDiv) {
                        bgDiv.classList.add('opacity-100', 'bg-brand-coral/15');
                        bgDiv.classList.remove('opacity-0');
                    }

                    // Update indicator position with smooth animation
                    if (navIndicator) {
                        requestAnimationFrame(() => {
                            const linkRect = link.getBoundingClientRect();
                            const navRect = navbar.getBoundingClientRect();
                            const indicatorLeft = linkRect.left - navRect.left;
                            const indicatorWidth = linkRect.width;

                            navIndicator.style.left = `${indicatorLeft}px`;
                            navIndicator.style.width = `${indicatorWidth}px`;
                            navIndicator.style.opacity = '1';
                        });
                    }
                } else {
                    // Inactive link styling
                    link.classList.remove('text-brand-coral');
                    link.classList.add('text-brand-forest');

                    // Remove background glow
                    const bgDiv = link.querySelector('div');
                    if (bgDiv) {
                        bgDiv.classList.remove('opacity-100', 'bg-brand-coral/15');
                        bgDiv.classList.add('opacity-0');
                    }
                }
            });

            // Update mobile nav links with brand styling
            mobileNavLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === `#${activeSection.id}`) {
                    link.classList.add('bg-brand-coral/10', 'border-l-4', 'border-brand-coral');

                    // Update text color for active mobile link
                    const textSpan = link.querySelector('span');
                    if (textSpan) {
                        textSpan.classList.add('text-brand-coral');
                        textSpan.classList.remove('text-brand-forest');
                    }

                    // Update icon background
                    const iconDiv = link.querySelector('div');
                    if (iconDiv) {
                        iconDiv.classList.add('bg-brand-coral/30');
                    }
                } else {
                    link.classList.remove('bg-brand-coral/10', 'border-l-4', 'border-brand-coral');

                    // Reset text color for inactive mobile link
                    const textSpan = link.querySelector('span');
                    if (textSpan) {
                        textSpan.classList.remove('text-brand-coral');
                        textSpan.classList.add('text-brand-forest');
                    }

                    // Reset icon background
                    const iconDiv = link.querySelector('div');
                    if (iconDiv) {
                        iconDiv.classList.remove('bg-brand-coral/30');
                    }
                }
            });
        }

        // Enhanced smooth scroll with improved offset calculation
        function scrollToSection(targetId) {
            const targetElement = document.getElementById(targetId.replace('#', ''));
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 100; // Account for navbar height
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });

                // Add subtle animation feedback
                targetElement.classList.add('animate-fade-in');
                setTimeout(() => {
                    targetElement.classList.remove('animate-fade-in');
                }, 500);
            }
        }

        // Mobile menu toggle with enhanced animations and brand styling
        function toggleMobileMenu() {
            if (mobileMenu) {
                const isOpen = !mobileMenu.classList.contains('translate-x-full');

                if (isOpen) {
                    // Closing menu
                    mobileMenu.classList.add('translate-x-full');
                    document.body.classList.remove('overflow-hidden');

                    // Update button icon to hamburger
                    mobileMenuButton.innerHTML = `
                    <svg class="w-6 h-6 text-brand-forest" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                `;
                } else {
                    // Opening menu
                    mobileMenu.classList.remove('translate-x-full');
                    document.body.classList.add('overflow-hidden');

                    // Update button icon to X
                    mobileMenuButton.innerHTML = `
                    <svg class="w-6 h-6 text-brand-coral" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                `;
                }
            }
        }

        // Optimized scroll event listener with performance improvements
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        }, {
            passive: true
        });

        // Enhanced navigation link clicks with improved UX
        [...navLinks, ...mobileNavLinks].forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');

                // Add loading state to clicked link
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);

                scrollToSection(targetId);

                // Close mobile menu if open with delay for better UX
                if (mobileMenu && !mobileMenu.classList.contains('translate-x-full')) {
                    setTimeout(() => {
                        toggleMobileMenu();
                    }, 300);
                }
            });

            // Add hover effects for better interactivity
            link.addEventListener('mouseenter', function() {
                if (!this.classList.contains('text-brand-coral')) {
                    this.style.transform = 'translateY(-1px)';
                }
            });

            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Mobile menu controls with enhanced feedback
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', function(e) {
                e.preventDefault();
                toggleMobileMenu();

                // Add haptic feedback simulation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 100);
            });
        }

        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function(e) {
                e.preventDefault();
                toggleMobileMenu();
            });
        }

        // Enhanced backdrop click handling
        if (mobileMenu) {
            mobileMenu.addEventListener('click', function(e) {
                if (e.target === this) {
                    toggleMobileMenu();
                }
            });
        }

        // Keyboard controls with accessibility improvements
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu && !mobileMenu.classList.contains(
                    'translate-x-full')) {
                toggleMobileMenu();
            }

            // Add keyboard navigation for nav links
            if (e.key === 'Tab') {
                const focusedElement = document.activeElement;
                if (focusedElement && focusedElement.classList.contains('nav-link')) {
                    focusedElement.style.outline = '2px solid var(--color-brand-coral)';
                    focusedElement.style.outlineOffset = '2px';
                }
            }
        });

        // Enhanced mouse hover near top - show navbar temporarily
        document.addEventListener('mousemove', function(e) {
            if (e.clientY < 100 && window.scrollY <= scrollThreshold) {
                showNavbar();

                // Hide after 3 seconds if still at top
                setTimeout(() => {
                    if (window.scrollY <= scrollThreshold) {
                        hideNavbar();
                    }
                }, 3000);
            }
        });

        // Handle window resize to recalculate positions with debouncing
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                updateActiveSection();

                // Recalculate mobile menu width on resize
                if (mobileMenu) {
                    const menuPanel = mobileMenu.querySelector('.w-80');
                    if (window.innerWidth < 320) {
                        menuPanel.classList.remove('w-80');
                        menuPanel.classList.add('w-full');
                    } else {
                        menuPanel.classList.remove('w-full');
                        menuPanel.classList.add('w-80');
                    }
                }
            }, 150);
        });

        // Enhanced initialization function
        function initializeNavbar() {
            const currentScrollY = window.scrollY;

            if (currentScrollY <= scrollThreshold) {
                hideNavbar();
            } else {
                showNavbar();
            }

            updateActiveSection();

            // Initialize indicator
            if (navIndicator) {
                navIndicator.style.opacity = '0';
            }

            // Add subtle entrance animation
            setTimeout(() => {
                navbar.style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
            }, 100);
        }

        // Initialize on page load with improved timing
        initializeNavbar();

        // Handle browser back/forward navigation
        window.addEventListener('popstate', () => {
            setTimeout(initializeNavbar, 100);
        });

        // Handle page visibility change (when user returns to tab)
        document.addEventListener('visibilitychange', () => {
            if (!document.hidden) {
                initializeNavbar();
            }
        });

        // Add intersection observer for better section detection (optional enhancement)
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -70% 0px',
                threshold: 0
            };

            const sectionObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const sectionId = entry.target.id;

                        // Update URL hash without scrolling
                        if (history.replaceState) {
                            history.replaceState(null, null, `#${sectionId}`);
                        }
                    }
                });
            }, observerOptions);

            // Observe all sections
            sections.forEach(section => {
                if (section.element) {
                    sectionObserver.observe(section.element);
                }
            });
        }

        // Performance monitoring (can be removed in production)
        if (window.performance && window.performance.mark) {
            window.performance.mark('navbar-script-loaded');
        }

        // Add smooth scrolling polyfill for older browsers
        if (!('scrollBehavior' in document.documentElement.style)) {
            // Fallback smooth scroll implementation
            function smoothScrollPolyfill(target, duration = 500) {
                const targetElement = document.getElementById(target.replace('#', ''));
                if (!targetElement) return;

                const targetPosition = targetElement.offsetTop - 100;
                const startPosition = window.pageYOffset;
                const distance = targetPosition - startPosition;
                let startTime = null;

                function ease(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                }

                function animation(currentTime) {
                    if (startTime === null) startTime = currentTime;
                    const timeElapsed = currentTime - startTime;
                    const run = ease(timeElapsed, startPosition, distance, duration);
                    window.scrollTo(0, run);
                    if (timeElapsed < duration) requestAnimationFrame(animation);
                }

                requestAnimationFrame(animation);
            }

            // Override the scrollToSection function for older browsers
            const originalScrollToSection = scrollToSection;
            scrollToSection = function(targetId) {
                smoothScrollPolyfill(targetId);
            };
        }        
    });
</script>
