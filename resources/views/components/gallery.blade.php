<!-- resources/views/components/gallery.blade.php -->
<section class="py-20 bg-gradient-to-b from-brand-light-gray to-white relative overflow-hidden">

    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-10 w-40 h-40 bg-wanderlust-100 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 right-10 w-32 h-32 bg-forest-100 rounded-full blur-2xl"></div>
        <div class="absolute bottom-20 left-1/3 w-36 h-36 bg-ocean-100 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="font-display text-display text-forest-900 mb-4 animate-fade-in">
                Real Adventures, Real Transformations
            </h2>
            <p class="font-cursive text-cursive text-brand-coral mb-8 animate-slide-up animation-delay-300">
                see what awaits you through our travelers' eyes
            </p>
            <div class="w-24 h-1 bg-wanderlust-gradient mx-auto rounded-full animate-slide-up animation-delay-500"></div>
        </div>

        <!-- Masonry Gallery Grid -->
        <div class="gallery-grid columns-1 md:columns-2 lg:columns-3 xl:columns-4 gap-6 mb-16" id="gallery-grid">

            <!-- Gallery Item 1: Mountain Summit -->
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer" data-category="nature adventure"
                data-image="https://images.unsplash.com/photo-1539650116574-75c0c6d73f6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                data-title="Mount Kenya Summit Victory"
                data-description="Sarah's incredible moment reaching Point Lenana at sunrise. A life-changing achievement!"
                data-location="Mount Kenya National Park" data-date="March 2024">
                <div
                    class="relative overflow-hidden rounded-xl shadow-forest hover:shadow-travel-lg transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Mount Kenya Summit"
                        class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">

                    <!-- Overlay Info -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="font-ui text-button mb-1">📍 Mount Kenya National Park</p>
                            <p class="font-body text-body-sm text-brand-cream">March 2024 • Sarah's Summit Victory</p>
                        </div>
                    </div>

                    <!-- Photo Stats -->
                    <div
                        class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        245
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2: Maasai Culture -->
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer" data-category="culture testimonials"
                data-image="https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                data-title="Maasai Cultural Connection"
                data-description="Tom learning traditional fire-making techniques from Maasai elder Joseph. Pure authentic magic!"
                data-location="Maasai Mara" data-date="April 2024">
                <div
                    class="relative overflow-hidden rounded-xl shadow-forest hover:shadow-travel-lg transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Maasai Cultural Experience"
                        class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="font-ui text-button mb-1">📍 Maasai Mara</p>
                            <p class="font-body text-body-sm text-brand-cream">April 2024 • Cultural Connection</p>
                        </div>
                    </div>

                    <div
                        class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        182
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3: Wildlife Safari -->
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer" data-category="nature"
                data-image="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                data-title="Lake Nakuru Flamingo Spectacle"
                data-description="Over 2 million flamingos creating a pink carpet across the lake - absolutely breathtaking!"
                data-location="Lake Nakuru National Park" data-date="February 2024">
                <div
                    class="relative overflow-hidden rounded-xl shadow-forest hover:shadow-travel-lg transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Lake Nakuru Flamingos"
                        class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="font-ui text-button mb-1">📍 Lake Nakuru National Park</p>
                            <p class="font-body text-body-sm text-brand-cream">February 2024 • Flamingo Spectacle</p>
                        </div>
                    </div>

                    <div
                        class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        398
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4: Happy Traveler -->
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer"
                data-category="testimonials adventure"
                data-image="https://images.unsplash.com/photo-1539650116574-75c0c6d73f6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                data-title="Pure Joy After Conquering Fears"
                data-description="Maria's face says it all - she just completed her first rock climbing experience at Hell's Gate!"
                data-location="Hell's Gate National Park" data-date="January 2024">
                <div
                    class="relative overflow-hidden rounded-xl shadow-forest hover:shadow-travel-lg transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Happy Adventure Traveler"
                        class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="font-ui text-button mb-1">📍 Hell's Gate National Park</p>
                            <p class="font-body text-body-sm text-brand-cream">January 2024 • Conquering Fears</p>
                        </div>
                    </div>

                    <div
                        class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        456
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5: Tea Plantation -->
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer" data-category="culture nature"
                data-image="https://images.unsplash.com/photo-1563281577-a7be47e20db9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                data-title="Kericho Tea Gardens Serenity"
                data-description="Rolling green hills as far as the eye can see. The morning mist created pure magic during our tea tour."
                data-location="Kericho Tea Plantations" data-date="March 2024">
                <div
                    class="relative overflow-hidden rounded-xl shadow-forest hover:shadow-travel-lg transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1563281577-a7be47e20db9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Tea Plantation Landscape"
                        class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="font-ui text-button mb-1">📍 Kericho Tea Plantations</p>
                            <p class="font-body text-body-sm text-brand-cream">March 2024 • Serene Landscapes</p>
                        </div>
                    </div>

                    <div
                        class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        327
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6: Cycling Adventure -->
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer" data-category="adventure"
                data-image="https://images.unsplash.com/photo-1544191696-15693072e5ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                data-title="Hell's Gate Cycling Thrills"
                data-description="The adrenaline rush of cycling through dramatic gorges where lions once roamed. Pure adventure!"
                data-location="Hell's Gate National Park" data-date="April 2024">
                <div
                    class="relative overflow-hidden rounded-xl shadow-forest hover:shadow-travel-lg transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Cycling Adventure"
                        class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="font-ui text-button mb-1">📍 Hell's Gate National Park</p>
                            <p class="font-body text-body-sm text-brand-cream">April 2024 • Cycling Thrills</p>
                        </div>
                    </div>

                    <div
                        class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        289
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7: Photography Workshop -->
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer" data-category="nature testimonials"
                data-image="https://images.unsplash.com/photo-1502920917128-1aa500764cbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                data-title="Capturing the Perfect Shot"
                data-description="Photography workshop participants getting that golden hour shot. The concentration and passion is incredible!"
                data-location="Amboseli National Park" data-date="February 2024">
                <div
                    class="relative overflow-hidden rounded-xl shadow-forest hover:shadow-travel-lg transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1502920917128-1aa500764cbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Photography Workshop"
                        class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="font-ui text-button mb-1">📍 Amboseli National Park</p>
                            <p class="font-body text-body-sm text-brand-cream">February 2024 • Golden Hour Magic</p>
                        </div>
                    </div>

                    <div
                        class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        512
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8: Group Celebration -->
            <div class="gallery-item break-inside-avoid mb-6 group cursor-pointer"
                data-category="testimonials adventure"
                data-image="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                data-title="Summit Success Squad"
                data-description="The whole team celebrating after reaching the summit together. Friendships forged in adventure last forever!"
                data-location="Mount Longonot" data-date="March 2024">
                <div
                    class="relative overflow-hidden rounded-xl shadow-forest hover:shadow-travel-lg transition-all duration-500">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Group Adventure Success"
                        class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-500">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                        <div class="p-4 text-white w-full">
                            <p class="font-ui text-button mb-1">📍 Mount Longonot</p>
                            <p class="font-body text-body-sm text-brand-cream">March 2024 • Team Victory</p>
                        </div>
                    </div>

                    <div
                        class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                        678
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>


/* Masonry Grid Layout */
.gallery-grid {
    column-fill: balance;
}

/* Gallery Item Hover Effects */
.gallery-item {
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.gallery-item:hover {
    transform: translateY(-5px);
}


/* Instagram Stories Styling */
.story-item {
    transition: transform 0.3s ease;
}

.story-item:hover {
    transform: scale(1.05);
}

/* Lightbox Modal Styling */
#lightbox-modal {
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

/* Counter Animation */
.counter {
    font-variant-numeric: tabular-nums;
    transition: all 0.3s ease;
}

/* Animation Delays */
.animation-delay-300 {
    animation-delay: 0.3s;
    animation-fill-mode: both;
}

.animation-delay-500 {
    animation-delay: 0.5s;
    animation-fill-mode: both;
}

.animation-delay-700 {
    animation-delay: 0.7s;
    animation-fill-mode: both;
}

.animation-delay-900 {
    animation-delay: 0.9s;
    animation-fill-mode: both;
}

/* Image Fade-in Effect */
.fade-in {
    animation: fadeInImage 0.5s ease-in-out;
}

@keyframes fadeInImage {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Responsive Masonry Adjustments */
@media (max-width: 768px) {
    .gallery-grid {
        columns: 2;
        gap: 1rem;
    }
    
    .gallery-filter {
        font-size: 0.875rem;
        padding: 0.5rem 1rem;
    }
    
    .gallery-item {
        transform: none !important;
    }
    
    .gallery-item:hover {
        transform: translateY(-2px) !important;
    }
    
    /* Stories horizontal scroll */
    #stories-container {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    
    #stories-container::-webkit-scrollbar {
        display: none;
    }
}

@media (max-width: 640px) {
    .gallery-grid {
        columns: 1;
    }
    
    .grid-cols-2 {
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }
    
    .px-8 {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    
    /* Lightbox adjustments */
    #lightbox-modal .p-6 {
        padding: 1rem;
    }
    
    #lightbox-modal .flex.items-start {
        flex-direction: column;
        align-items: stretch;
    }
    
    #lightbox-modal .ml-4 {
        margin-left: 0;
        margin-top: 1rem;
    }
}

/* Play Button Pulse Effect */
#featured-video .w-20.h-20 {
    animation: gentle-pulse 3s infinite;
}

@keyframes gentle-pulse {
    0%, 100% {
        box-shadow: 0 0 0 0 rgba(255, 107, 90, 0.4);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(255, 107, 90, 0);
    }
}

/* Lightbox Navigation Arrows */
#prev-image,
#next-image {
    transition: all 0.3s ease;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    padding: 0.5rem;
}

#prev-image:hover,
#next-image:hover {
    background: rgba(0, 0, 0, 0.6);
    transform: scale(1.1);
}

/* Social Media Integration Styling */
.bg-wanderlust-gradient {
    background: linear-gradient(135deg, var(--color-wanderlust-500) 0%, var(--color-sand-500) 100%);
}

/* Like Button Animation */
.like-btn svg {
    transition: all 0.3s ease;
}

.like-btn:hover svg {
    transform: scale(1.1);
}

/* Share Button Ripple Effect */
.share-btn {
    position: relative;
    overflow: hidden;
}

.share-btn::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 107, 90, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.3s ease, height 0.3s ease;
}

.share-btn:active::after {
    width: 100px;
    height: 100px;
}

/* Download Button States */
.download-btn {
    position: relative;
    overflow: hidden;
}

.download-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.download-btn:hover::before {
    left: 100%;
}

/* Stories Gradient Borders */
.story-item .bg-gradient-to-tr {
    background: linear-gradient(45deg, var(--color-brand-coral), var(--color-sand-500));
}

.story-item:nth-child(2) .bg-gradient-to-tr {
    background: linear-gradient(45deg, var(--color-forest-500), var(--color-forest-300));
}

.story-item:nth-child(3) .bg-gradient-to-tr {
    background: linear-gradient(45deg, var(--color-ocean-500), var(--color-ocean-300));
}

.story-item:nth-child(4) .bg-gradient-to-tr {
    background: linear-gradient(45deg, #a855f7, #ec4899);
}

.story-item:nth-child(5) .bg-gradient-to-tr {
    background: linear-gradient(45deg, #eab308, #f97316);
}

/* Image Overlay Gradients */
.bg-gradient-to-t {
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
}

/* Stats Counter Styling */
.counter {
    background: linear-gradient(45deg, var(--color-brand-coral), var(--color-sand-500));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Accessibility Improvements */
@media (prefers-reduced-motion: reduce) {
    .gallery-item,
    .gallery-filter,
    .story-item,
    .like-btn,
    .share-btn,
    .download-btn {
        transition: none !important;
        animation: none !important;
    }
    
    .gallery-item:hover {
        transform: none !important;
    }
    
    #featured-video .w-20.h-20 {
        animation: none !important;
    }
}

/* High Contrast Mode */
@media (prefers-contrast: high) {
    .gallery-item {
        border: 2px solid var(--color-forest-900);
    }
    
    .gallery-filter.active {
        border: 3px solid var(--color-brand-coral);
    }
    
    #lightbox-modal {
        background: rgba(0, 0, 0, 0.95);
    }
}

/* Focus States for Accessibility */
.gallery-item:focus,
.gallery-filter:focus,
.story-item:focus,
.like-btn:focus,
.share-btn:focus,
.download-btn:focus {
    outline: 3px solid var(--color-brand-coral);
    outline-offset: 2px;
}

/* Print Styles */
@media print {
    .gallery-filter,
    .story-item,
    #lightbox-modal,
    .like-btn,
    .share-btn,
    .download-btn {
        display: none;
    }
    
    .gallery-item {
        break-inside: avoid;
        margin-bottom: 1rem;
    }
    
    .gallery-grid {
        columns: 2;
        column-gap: 1rem;
    }
}

/* Loading States */
.loading-skeleton {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% {
        background-position: 200% 0;
    }
    100% {
        background-position: -200% 0;
    }
}

/* Notification Animations */
.notification-enter {
    animation: slideInRight 0.3s ease-out;
}

.notification-exit {
    animation: slideOutRight 0.3s ease-in;
}

@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideOutRight {
    from {
        transform: translateX(0);
        opacity: 1;
    }
    to {
        transform: translateX(100%);
        opacity: 0;
    }
}

/* Custom Scrollbar for Stories */
#stories-container {
    scrollbar-width: thin;
    scrollbar-color: var(--color-brand-coral) var(--color-brand-light-gray);
}

#stories-container::-webkit-scrollbar {
    height: 4px;
}

#stories-container::-webkit-scrollbar-track {
    background: var(--color-brand-light-gray);
    border-radius: 2px;
}

#stories-container::-webkit-scrollbar-thumb {
    background: var(--color-brand-coral);
    border-radius: 2px;
}

#stories-container::-webkit-scrollbar-thumb:hover {
    background: var(--color-wanderlust-600);
}

/* Image Lazy Loading */
img[loading="lazy"] {
    opacity: 0;
    transition: opacity 0.3s ease;
}

img[loading="lazy"].loaded {
    opacity: 1;
}

/* Masonry Grid Responsive Breakpoints */
@media (min-width: 1024px) {
    .gallery-grid {
        columns: 3;
        gap: 1.5rem;
    }
}

@media (min-width: 1280px) {
    .gallery-grid {
        columns: 4;
        gap: 2rem;
    }
}

/* Social Media Button Hover Effects */
.bg-white\/20:hover {
    background-color: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Featured Video Play Button */
.w-20.h-20.bg-brand-coral {
    transition: all 0.3s ease;
}

.w-20.h-20.bg-brand-coral:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(255, 107, 90, 0.4);
}

/* Gallery Stats Animation */
.bg-white.rounded-2xl.shadow-forest {
    transition: all 0.3s ease;
}

.bg-white.rounded-2xl.shadow-forest:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}
</style>
