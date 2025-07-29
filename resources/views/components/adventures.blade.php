 <!-- Adventures Section -->
 <section class="py-20 adventures-bg relative overflow-hidden">
        
    <!-- Enhanced Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Floating Orbs -->
        <div class="floating-orb absolute top-20 left-10 w-32 h-32 bg-forest-500 rounded-full opacity-20"></div>
        <div class="floating-orb absolute top-40 right-20 w-24 h-24 bg-wanderlust-500 rounded-full opacity-25"></div>
        <div class="floating-orb absolute bottom-40 left-1/4 w-20 h-20 bg-sand-500 rounded-full opacity-30"></div>
        <div class="floating-orb absolute bottom-20 right-1/3 w-36 h-36 bg-ocean-500 rounded-full opacity-15"></div>
        
        <!-- Geometric shapes -->
        <div class="geometric-shape absolute top-1/3 left-1/2 w-16 h-16 bg-gradient-to-br from-wanderlust-300 to-sand-300 transform rotate-45"></div>
        <div class="geometric-shape absolute top-2/3 right-1/4 w-12 h-12 bg-sand-300 rounded-full"></div>
        <div class="geometric-shape absolute top-1/4 left-1/4 w-8 h-8 bg-ocean-300 transform rotate-45"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl md:text-5xl lg:text-6xl text-forest-900 font-bold mb-4 animate-fade-in">
                Adventures Waiting for You
            </h2>
            <p class="font-script text-2xl md:text-3xl text-wanderlust-500 mb-8 animate-slide-up delay-300">
                curated experiences for every type of adventurer
            </p>
            <div class="w-24 h-1 bg-wanderlust-gradient mx-auto rounded-full animate-slide-up animation-delay-500"
             ></div>
        </div>

        <!-- Adventure Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mb-16" id="adventures-grid">
            
            <!-- Adventure Card 1: Mountain Sunrise Hike -->
            <div class="adventure-card glass-effect rounded-3xl overflow-hidden relative border-4 border-forest-200">
                <div class="card-image-container">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                         alt="Mountain Sunrise Hike"
                         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                    
                    <!-- Enhanced Overlay Stats -->
                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="bg-forest-500 glass-effect px-3 py-1 text-xs font-semibold rounded-full text-forest-700">3 Days</span>
                        <span class="bg-sand-500 glass-effect px-3 py-1 text-xs font-semibold rounded-full text-sand-500">Moderate</span>
                    </div>

                    <!-- Enhanced Rating Badge -->
                    <div class="glass-effect px-3 py-1 rounded-full flex items-center absolute top-4 right-4">
                        <span class="star-rating">★</span>
                        <span class="text-xs ml-1 font-semibold text-forest-900">4.9</span>
                    </div>
                </div>

                <div class="card-content">
                    <h3 class="font-display text-xl font-bold text-forest-900 mb-3">
                        Mountain Sunrise Hike
                    </h3>

                    <p class="font-body text-sm leading-relaxed text-gray-600 mb-4">
                        Experience breathtaking sunrise views from 2,000m peaks in the Aberdare Mountains.
                        Perfect for photographers and nature lovers seeking that perfect golden hour moment.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="card-tag-forest px-3 py-1 text-xs rounded-full font-medium">Expert Guide</span>
                        <span class="card-tag-forest px-3 py-1 text-xs rounded-full font-medium">All Meals</span>
                        <span class="card-tag-forest px-3 py-1 text-xs rounded-full font-medium">Transport</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xl font-bold text-wanderlust-500">From KSh 12,500</span>
                        </div>
                        <button class="btn-gradient px-6 py-2 rounded-xl text-white font-semibold relative z-10">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Adventure Card 2: Maasai Cultural Experience -->
            <div class="adventure-card glass-effect rounded-3xl overflow-hidden relative border-4 border-wanderlust-200">
                <div class="card-image-container">
                    <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Maasai Cultural Experience"
                         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">

                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="bg-wanderlust-500 glass-effect px-3 py-1 text-xs font-semibold rounded-full text-forest-700">1 Day</span>
                        <span class="bg-sand-500 glass-effect px-3 py-1 text-xs font-semibold rounded-full text-sand-500">Easy</span>
                    </div>

                    <div class="glass-effect px-3 py-1 rounded-full flex items-center absolute top-4 right-4">
                        <span class="star-rating">★</span>
                        <span class="text-xs ml-1 font-semibold text-forest-900">4.8</span>
                    </div>
                </div>

                <div class="card-content">
                    <h3 class="font-display text-xl font-bold text-forest-900 mb-3">
                        Maasai Cultural Immersion
                    </h3>

                    <p class="font-body text-sm leading-relaxed text-gray-600 mb-4">
                        Live with the Maasai community, learn traditional crafts, participate in ceremonies,
                        and gain authentic insights into Kenya's rich cultural heritage.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="card-tag-coral px-3 py-1 text-xs rounded-full font-medium">Cultural Guide</span>
                        <span class="card-tag-coral px-3 py-1 text-xs rounded-full font-medium">Traditional Lunch</span>
                        <span class="card-tag-coral px-3 py-1 text-xs rounded-full font-medium">Craft Workshop</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xl font-bold text-wanderlust-500">From KSh 8,500</span>
                        </div>
                        <button class="btn-gradient px-6 py-2 rounded-xl text-white font-semibold relative z-10">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>

            <!-- Adventure Card 3: Lake Nakuru Safari -->
            <div class="adventure-card glass-effect rounded-3xl overflow-hidden relative border-4 border-ocean-200">
                <div class="card-image-container">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Lake Nakuru Safari"
                         class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">

                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="bg-ocean-500 glass-effect px-3 py-1 text-xs font-semibold rounded-full text-forest-700">2 Days</span>
                        <span class="bg-sand-500 glass-effect px-3 py-1 text-xs font-semibold rounded-full text-sand-500">Easy</span>
                    </div>

                    <div class="glass-effect px-3 py-1 rounded-full flex items-center absolute top-4 right-4">
                        <span class="star-rating">★</span>
                        <span class="text-xs ml-1 font-semibold text-forest-900">4.7</span>
                    </div>
                </div>

                <div class="card-content">
                    <h3 class="font-display text-xl font-bold text-forest-900 mb-3">
                        Lake Nakuru Wildlife Safari
                    </h3>

                    <p class="font-body text-sm leading-relaxed text-gray-600 mb-4">
                        Witness millions of flamingos, rare white rhinos, and diverse wildlife in this UNESCO
                        World Heritage site. Perfect for photography enthusiasts and nature lovers.
                    </p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="card-tag-ocean px-3 py-1 text-xs rounded-full font-medium">Game Drive</span>
                        <span class="card-tag-ocean px-3 py-1 text-xs rounded-full font-medium">Park Fees</span>
                        <span class="card-tag-ocean px-3 py-1 text-xs rounded-full font-medium">Accommodation</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xl font-bold text-wanderlust-500">From KSh 18,000</span>
                        </div>
                        <button class="btn-gradient px-6 py-2 rounded-xl text-white font-semibold relative z-10">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enhanced scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.animate-fade-in, .animate-slide-up').forEach(el => {
            observer.observe(el);
        });

        // Enhanced card hover effects with 3D tilt
        document.querySelectorAll('.adventure-card').forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 10;
                const rotateY = -(x - centerX) / 10;
                
                this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-12px) scale(1.03)`;
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0) scale(1)';
            });
        });

        // Lazy load images with enhanced fade effect
        const images = document.querySelectorAll('img[src]');
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.style.transition = 'opacity 0.6s ease-in-out';
                    img.style.opacity = '1';
                    imageObserver.unobserve(img);
                }
            });
        });

        images.forEach(img => {
            img.style.opacity = '0';
            imageObserver.observe(img);
        });
        
        // Add floating animation to geometric shapes
        const geometricShapes = document.querySelectorAll('.geometric-shape');
        geometricShapes.forEach((shape, index) => {
            shape.style.animationDelay = `${index * 2}s`;
        });
        
        // Enhanced button interactions
        document.querySelectorAll('.btn-gradient').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.05)';
                this.style.boxShadow = '0 15px 35px rgba(255, 107, 90, 0.4)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '0 5px 15px rgba(255, 107, 90, 0.2)';
            });
            
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.5);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s ease-out;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
        
        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
        
        // Stagger card animations on load
        const cards = document.querySelectorAll('.adventure-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.2}s`;
            card.classList.add('animate-fade-in');
        });
        
        // Add parallax effect to floating orbs
        let ticking = false;
        
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const orbs = document.querySelectorAll('.floating-orb');
            
            orbs.forEach((orb, index) => {
                const speed = (index + 1) * 0.3;
                const yPos = -(scrolled * speed);
                orb.style.transform = `translateY(${yPos}px)`;
            });
            
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick);
    });
</script>

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
    .text-forest-800 { color: var(--color-forest-800); }
    .text-ocean-500 { color: var(--color-ocean-500); }
    .text-sand-500 { color: var(--color-sand-500); }
    
    .bg-wanderlust-100 { background-color: var(--color-wanderlust-100); }
    .bg-wanderlust-500 { background-color: var(--color-wanderlust-500); }
    .bg-forest-50 { background-color: var(--color-forest-50); }
    .bg-forest-100 { background-color: var(--color-forest-100); }
    .bg-forest-500 { background-color: var(--color-forest-500); }
    .bg-forest-900 { background-color: var(--color-forest-900); }
    .bg-ocean-100 { background-color: var(--color-ocean-100); }
    .bg-ocean-500 { background-color: var(--color-ocean-500); }
    .bg-sand-300 { background-color: var(--color-sand-300); }
    .bg-sand-500 { background-color: var(--color-sand-500); }
    
    /* Dynamic geometric background */
    .adventures-bg {
        background: 
            linear-gradient(135deg, #ffffff 0%, var(--color-forest-50) 20%, var(--color-wanderlust-50) 40%, var(--color-ocean-50) 60%, var(--color-sand-50) 80%, #ffffff 100%);
        position: relative;
        overflow: hidden;
    }
    
    .adventures-bg::before {
        content: '';
        position: absolute;
        inset: 0;
        background: 
            radial-gradient(circle at 10% 20%, rgba(255, 107, 90, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 90% 80%, rgba(6, 78, 59, 0.06) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(30, 58, 138, 0.04) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.05) 0%, transparent 50%);
        pointer-events: none;
    }
    
    /* Floating geometric shapes */
    .floating-orb {
        animation: floatOrb 15s ease-in-out infinite;
        filter: blur(40px);
    }
    
    .floating-orb:nth-child(2) { animation-delay: -5s; }
    .floating-orb:nth-child(3) { animation-delay: -10s; }
    .floating-orb:nth-child(4) { animation-delay: -7s; }
    
    @keyframes floatOrb {
        0%, 100% { 
            transform: translateY(0px) translateX(0px) scale(1);
            opacity: 0.2;
        }
        33% { 
            transform: translateY(-30px) translateX(20px) scale(1.1);
            opacity: 0.3;
        }
        66% { 
            transform: translateY(15px) translateX(-15px) scale(0.9);
            opacity: 0.25;
        }
    }
    
    .geometric-shape {
        position: absolute;
        opacity: 0.1;
        animation: rotateShape 20s linear infinite;
    }
    
    .geometric-shape:nth-child(even) {
        animation-direction: reverse;
    }
    
    @keyframes rotateShape {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    /* Enhanced card animations */
    .adventure-card {
        backdrop-filter: blur(10px);
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }
    
    .adventure-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        transform: rotate(45deg);
        transition: all 0.6s;
        opacity: 0;
    }
    
    .adventure-card:hover::before {
        opacity: 1;
        transform: rotate(45deg) translate(50%, 50%);
    }
    
    .adventure-card:hover {
        transform: translateY(-12px) scale(1.03);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
    }
    
    /* Card image effects */
    .card-image-container {
        height: 250px;
        position: relative;
        overflow: hidden;
    }
    
    .card-image-container::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, transparent 0%, rgba(0, 0, 0, 0.1) 50%, transparent 100%);
        pointer-events: none;
    }
    
    /* Enhanced gradient buttons */
    .btn-gradient {
        background: linear-gradient(135deg, var(--color-wanderlust-500) 0%, var(--color-sand-500) 100%);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    /* .btn-gradient::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, var(--color-wanderlust-600) 0%, var(--color-sand-600) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .btn-gradient:hover::before {
        opacity: 1;
    }
    
    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(255, 107, 90, 0.3);
    } */
    
    /* Card content styling */
    .card-content {
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.95);
    }
    
    .card-tag {
        background: rgba(255, 255, 255, 0.9);
        color: var(--color-forest-900);
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .card-tag:hover {
        transform: scale(1.05);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    
    .card-tag-forest {
        background: linear-gradient(135deg, var(--color-forest-100) 0%, var(--color-forest-200) 100%);
        color: var(--color-forest-800);
    }
    
    .card-tag-coral {
        background: linear-gradient(135deg, var(--color-wanderlust-100) 0%, var(--color-wanderlust-200) 100%);
        color: var(--color-wanderlust-800);
    }
    
    .card-tag-ocean {
        background: linear-gradient(135deg, var(--color-ocean-100) 0%, var(--color-ocean-200) 100%);
        color: var(--color-ocean-800);
    }
    
    /* Enhanced glass effect */
    .glass-effect {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    /* Safety banner styling */
    .safety-banner {
        background: linear-gradient(135deg, var(--color-forest-900) 0%, var(--color-forest-800) 30%, var(--color-ocean-900) 70%, var(--color-forest-900) 100%);
        position: relative;
        overflow: hidden;
    }
    
    .safety-banner::before {
        content: '';
        position: absolute;
        inset: 0;
        background: 
            radial-gradient(circle at 20% 30%, rgba(255, 107, 90, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(245, 158, 11, 0.08) 0%, transparent 50%);
        pointer-events: none;
    }
    
    /* Enhanced animations */
    .animate-fade-in {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease-out forwards;
    }
    
    .animate-slide-up {
        opacity: 0;
        transform: translateY(40px);
        animation: slideUp 1s ease-out forwards;
    }
    
    .delay-300 { animation-delay: 0.3s; }
    .delay-500 { animation-delay: 0.5s; }
    
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Pulse glow effect */
    .pulse-glow {
        background: linear-gradient(90deg, var(--color-wanderlust-500), var(--color-sand-500));
        animation: pulseGlow 2s ease-in-out infinite;
    }
    
    @keyframes pulseGlow {
        0%, 100% { 
            box-shadow: 0 0 0 0 rgba(255, 107, 90, 0.4);
            transform: scale(1);
        }
        50% { 
            box-shadow: 0 0 0 8px rgba(255, 107, 90, 0);
            transform: scale(1.05);
        }
    }
    
    /* Star rating styling */
    .star-rating {
        color: var(--color-sand-500);
        font-size: 0.875rem;
    }
</style>