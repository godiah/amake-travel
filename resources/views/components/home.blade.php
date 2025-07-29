<!-- Hero Section -->
<section class="hero-bg flex items-center justify-center relative py-10">    
    <!-- Main content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center text-white relative z-10">
        
        <!-- Trust badge -->
        <div class="fade-in-up mb-2">
            <div class="inline-flex items-center glass-card px-6 py-3 rounded-full">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse mr-3"></div>
                <span class="font-body text-xs font-medium">
                    Trusted by 2,500+ adventurers across Kenya
                </span>
            </div>
        </div>
        
        <!-- Main headline -->
        <div class="fade-in-up-delay mb-8">
            <h1 class="font-display font-bold text-white leading-tight mb-2 text-xl sm:text-2xl md:text-3xl lg:text-4xl">
                Experience Kenya's
            </h1>
            <div class="relative">
                <span class="text-sand-500 font-script block transform mb-4 text-5xl sm:text-6xl md:text-7xl lg:text-8xl">
                    Sacred Wilderness
                </span>
                <div class="absolute -top-2 -right-4 text-shadow-orange-800-500 text-6xl opacity-20 hidden lg:block">✦</div>
            </div>
            <h2 class="font-display font-bold text-white opacity-90 text-3xl sm:text-4xl md:text-5xl lg:text-6xl">
                with AmakeTraveLite
            </h2>
            <p class="hidden md:block font-script text-xl sm:text-2xl md:text-3xl text-gray-200 max-w-4xl mx-auto leading-relaxed mt-6">
                where every adventure transforms ordinary moments into extraordinary memories
            </p>
        </div>

        
        <!-- Call-to-action buttons -->
        <div class="fade-in-up-delay-3 mb-16">
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center">
                <a href="#adventures" class="cta-primary px-8 py-4 rounded-2xl font-body font-semibold text-white min-w-[220px] relative z-10">
                    <span class="relative z-10 flex items-center justify-center">                        
                        Explore Adventures
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>                        
                    </span>
                </a>
            </div>
        </div>
        
        <!-- Stats showcase -->
        <div class="fade-in-up-delay-3">
            <div class="glass-intense rounded-3xl p-8 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="font-display text-3xl md:text-4xl font-bold text-wanderlust-300 mb-2">2,500+</div>
                        <div class="font-body text-sm text-gray-200">Happy Adventurers</div>
                    </div>
                    <div class="text-center">
                        <div class="font-display text-3xl md:text-4xl font-bold text-sand-400 mb-2">47</div>
                        <div class="font-body text-sm text-gray-200">Destinations</div>
                    </div>
                    <div class="text-center">
                        <div class="font-display text-3xl md:text-4xl font-bold text-forest-400 mb-2">98%</div>
                        <div class="font-body text-sm text-gray-200">Satisfaction Rate</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 scroll-indicator">
            <div class="flex flex-col items-center cursor-pointer">
                <span class="font-body text-xs text-gray-300 mb-2">Explore More</span>
                <div class="w-6 h-10 border-2 border-white/60 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom brand colors and typography */
    :root {
            --color-wanderlust-50: #fff5f3;
            --color-wanderlust-100: #ffe8e4;
            --color-wanderlust-200: #ffcfc7;
            --color-wanderlust-300: #ffb4ab;
            --color-wanderlust-400: #ff8a7a;
            --color-wanderlust-500: #ff6b5a;
            --color-wanderlust-600: #e55a4a;
            --color-wanderlust-700: #cc4a3a;
            --color-wanderlust-800: #b23a2a;
            --color-wanderlust-900: #991f0f;
            
            --color-forest-50: #ecfdf5;
            --color-forest-100: #d1fae5;
            --color-forest-200: #a7f3d0;
            --color-forest-300: #6ee7b7;
            --color-forest-400: #34d399;
            --color-forest-500: #10b981;
            --color-forest-600: #059669;
            --color-forest-700: #047857;
            --color-forest-800: #065f46;
            --color-forest-900: #064e3b;
            
            --color-ocean-50: #eff6ff;
            --color-ocean-100: #dbeafe;
            --color-ocean-200: #bfdbfe;
            --color-ocean-300: #93c5fd;
            --color-ocean-400: #60a5fa;
            --color-ocean-500: #3b82f6;
            --color-ocean-600: #2563eb;
            --color-ocean-700: #1d4ed8;
            --color-ocean-800: #1e40af;
            --color-ocean-900: #1e3a8a;
            
            --color-sand-50: #fffbeb;
            --color-sand-100: #fef3c7;
            --color-sand-200: #fde68a;
            --color-sand-300: #fcd34d;
            --color-sand-400: #fbbf24;
            --color-sand-500: #f59e0b;
            --color-sand-600: #d97706;
            --color-sand-700: #b45309;
            --color-sand-800: #92400e;
            --color-sand-900: #78350f;
            
            --font-display: "Playfair Display", ui-serif, Georgia, serif;
            --font-script: "Dancing Script", ui-serif, Georgia, serif;
            --font-body: "Lato", ui-sans-serif, system-ui, sans-serif;
        }
        
        .font-display { font-family: var(--font-display); }
        .font-script { font-family: var(--font-script); }
        .font-body { font-family: var(--font-body); }
        
        /* Brand colors */
        .text-wanderlust-500 { color: var(--color-wanderlust-500); }
        .text-forest-900 { color: var(--color-forest-900); }
        .text-forest-500 { color: var(--color-forest-500); }
        .text-ocean-500 { color: var(--color-ocean-500); }
        .text-sand-500 { color: var(--color-sand-500); }
        
        .bg-wanderlust-500 { background-color: var(--color-wanderlust-500); }
        .bg-forest-500 { background-color: var(--color-forest-500); }
        .bg-ocean-500 { background-color: var(--color-ocean-500); }
        .bg-sand-500 { background-color: var(--color-sand-500); }
        
        /* Hero-specific styles */
        .hero-bg {
            background: linear-gradient(135deg, 
        rgba(6, 78, 59, 0.3) 0%,     /* Lighter - changed from 0.7 to 0.3 */
        rgba(255, 107, 90, 0.2) 35%, /* Lighter - changed from 0.6 to 0.2 */
        rgba(30, 58, 138, 0.3) 65%,  /* Lighter - changed from 0.7 to 0.3 */
        rgba(6, 78, 59, 0.4) 100%    /* Lighter - changed from 0.8 to 0.4 */
    );

            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }
        
        .hero-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
            animation: subtleZoom 20s ease-in-out infinite;
        }
        
        @keyframes subtleZoom {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        /* Floating elements */
        .floating-element {
            animation: gentleFloat 8s ease-in-out infinite;
        }
        
        .floating-element:nth-child(2) { animation-delay: -2s; }
        .floating-element:nth-child(3) { animation-delay: -4s; }
        .floating-element:nth-child(4) { animation-delay: -6s; }
        
        @keyframes gentleFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.6; }
            50% { transform: translateY(-20px) rotate(180deg); opacity: 1; }
        }
        
        /* Glass morphism effects */
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .glass-intense {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        /* Enhanced animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out forwards;
        }
        
        .fade-in-up-delay {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out 0.3s forwards;
        }
        
        .fade-in-up-delay-2 {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out 0.6s forwards;
        }
        
        .fade-in-up-delay-3 {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out 0.9s forwards;
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* CTA button effects */
        .cta-primary {
            background: linear-gradient(135deg, var(--color-wanderlust-500) 0%, var(--color-sand-500) 100%);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        
        .cta-primary::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--color-wanderlust-600) 0%, var(--color-sand-600) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .cta-primary:hover::before {
            opacity: 1;
        }
        
        .cta-primary:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 20px 40px rgba(255, 107, 90, 0.4);
        }
        
        .cta-secondary {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        
        .cta-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--color-wanderlust-500);
            transform: translateY(-2px);
        }
        
        /* Feature icons animation */
        .feature-icon {
            transition: all 0.3s ease;
        }
        
        .feature-icon:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        /* Scroll indicator */
        .scroll-indicator {
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 53%, 80%, 100% { transform: translate(-50%, 0); }
            40%, 43% { transform: translate(-50%, -10px); }
            70% { transform: translate(-50%, -5px); }
            90% { transform: translate(-50%, -2px); }
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-bg {
                min-height: 100vh;
            }
            
            .floating-element {
                display: none;
            }
        }
        
        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            .floating-element,
            .scroll-indicator,
            .hero-bg::before {
                animation: none !important;
            }
            
            .cta-primary,
            .cta-secondary,
            .feature-icon {
                transition: none !important;
            }
        }
</style>