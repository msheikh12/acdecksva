@extends('layouts.app')

@section('title', 'Premium Deck Building in Virginia')

@section('content')

{{-- B) Hero Section --}}
<section class="relative min-h-[420px] md:min-h-[520px] lg:max-h-[700px] flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="/images/hero/hero-deck.jpg" alt="Beautiful custom deck" class="w-full h-full object-cover">
        <!-- Dark Overlay Gradient -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/60"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20 md:py-32 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Crafting decks for a lifetime of memories.<br>
                <span class="text-amber-400">And then some!</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Transform your backyard into an outdoor oasis with custom-built decks designed for beauty, durability, and your lifestyle.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#quote" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-amber-500 hover:bg-amber-600 text-white text-lg font-semibold rounded-lg shadow-lg transition-all duration-200 hover:shadow-xl hover:scale-105">
                    Get a Quote
                </a>
                <a href="#gallery" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white text-lg font-semibold rounded-lg border-2 border-white/30 transition-all duration-200 hover:border-white/50">
                    See Our Work
                </a>
            </div>
        </div>
    </div>
</section>

{{-- C) Trust/Info Bar --}}
<section class="relative -mt-12 z-20">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <!-- Trust Item 1 -->
                <div class="flex items-center justify-center md:justify-start space-x-3">
                    <div class="flex-shrink-0">
                        <svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Licensed & Insured</p>
                        <p class="text-xs text-gray-600">Fully certified professionals</p>
                    </div>
                </div>

                <!-- Trust Item 2 -->
                <div class="flex items-center justify-center md:justify-start space-x-3">
                    <div class="flex-shrink-0">
                        <svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-900">10+ Years Experience</p>
                        <p class="text-xs text-gray-600">Trusted by hundreds</p>
                    </div>
                </div>

                <!-- Trust Item 3 -->
                <div class="flex items-center justify-center md:justify-start space-x-3">
                    <div class="flex-shrink-0">
                        <svg class="w-10 h-10 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Quality Guarantee</p>
                        <p class="text-xs text-gray-600">Built to last decades</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- D) Feature Callout Section --}}
<section class="py-16 md:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center text-gray-900 mb-12">
            Outdoor spaces built for <span class="text-amber-600">you!</span>
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Left: Image Card -->
            <div class="order-2 lg:order-1">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <div class="aspect-[4/3] max-h-[360px]">
                        <img src="/images/feature/feature-night.jpg" alt="Beautiful deck at night" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Right: Dark Card with Content -->
            <div class="order-1 lg:order-2">
                <div class="bg-slate-800 rounded-2xl p-8 md:p-10 shadow-xl">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-6">
                        Why Choose ACDecksVA?
                    </h3>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        We don't just build decks—we create outdoor living experiences tailored to your vision and lifestyle.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start text-gray-200">
                            <svg class="w-6 h-6 text-amber-400 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Premium materials built to withstand Virginia weather</span>
                        </li>
                        <li class="flex items-start text-gray-200">
                            <svg class="w-6 h-6 text-amber-400 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Custom designs that match your home's architecture</span>
                        </li>
                        <li class="flex items-start text-gray-200">
                            <svg class="w-6 h-6 text-amber-400 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Expert craftsmanship with attention to every detail</span>
                        </li>
                        <li class="flex items-start text-gray-200">
                            <svg class="w-6 h-6 text-amber-400 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Transparent pricing and timely project completion</span>
                        </li>
                    </ul>
                    <a href="#services" class="inline-flex items-center px-6 py-3 bg-amber-500 hover:bg-amber-600 text-white font-semibold rounded-lg shadow-md transition-all duration-200 hover:shadow-lg">
                        Learn More
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- E) "The Difference" Section --}}
<section class="py-16 md:py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif italic text-amber-600 mb-3">
                The Difference
            </h2>
            <p class="text-lg md:text-xl text-gray-700 font-semibold">
                Built to Stand Out, Never to Blend In!
            </p>
        </div>

        <!-- Staggered Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Top Left: Large Image -->
            <div class="lg:row-span-1">
                <div class="relative rounded-2xl overflow-hidden shadow-xl h-full">
                    <div class="aspect-[16/10]">
                        <img src="/images/difference/difference-1.jpg" alt="Quality craftsmanship" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Top Right: Quality Text Block -->
            <div class="flex items-center">
                <div class="bg-stone-50 rounded-2xl p-8 md:p-10 shadow-lg">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                        Quality
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Premium-grade materials sourced from trusted suppliers</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Structural integrity that exceeds building codes</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Weather-resistant finishes for long-lasting beauty</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Meticulous attention to every joint and fastener</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Backed by our comprehensive warranty</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Left: Customization Text Block -->
            <div class="flex items-center lg:order-3">
                <div class="bg-stone-50 rounded-2xl p-8 md:p-10 shadow-lg">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                        Built-in Customization
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Tailored designs to complement your home's style</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Multiple decking material options: wood, composite, PVC</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Custom railings, stairs, and built-in seating</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Integrated lighting and electrical options</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-500 mr-3 text-xl">•</span>
                            <span>Pergolas, privacy screens, and shade structures</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Right: Tall Image -->
            <div class="lg:order-4">
                <div class="relative rounded-2xl overflow-hidden shadow-xl h-full">
                    <div class="aspect-[4/5]">
                        <img src="/images/difference/difference-2.jpg" alt="Custom deck features" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- F) "The Possibilities" Section - Big Yellow Band --}}
<section class="py-16 md:py-24 bg-gradient-to-br from-amber-400 via-amber-500 to-orange-500" id="gallery">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif italic text-white text-center mb-12 md:mb-16">
            The Possibilities
        </h2>

        <!-- Project Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-8">
            <!-- Project Card 1: Deck & Stairs -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="aspect-[4/3]">
                    <img src="/images/projects/project-1.jpg" alt="Deck and Stairs" class="w-full h-full object-cover">
                </div>
                <div class="bg-slate-800 p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Deck & Stairs</h3>
                    <p class="text-gray-300 text-sm">Multi-level deck with custom staircase and integrated lighting for evening ambiance.</p>
                </div>
            </div>

            <!-- Project Card 2: Privacy Wall -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="aspect-[4/3]">
                    <img src="/images/projects/project-2.jpg" alt="Privacy Wall" class="w-full h-full object-cover">
                </div>
                <div class="bg-slate-800 p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Privacy Wall</h3>
                    <p class="text-gray-300 text-sm">Stylish privacy screening with modern slat design, perfect for urban backyards.</p>
                </div>
            </div>

            <!-- Project Card 3: Multi-Level Deck -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="aspect-[4/3]">
                    <img src="/images/projects/project-3.jpg" alt="Multi-Level Deck" class="w-full h-full object-cover">
                </div>
                <div class="bg-slate-800 p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Multi-Level Deck</h3>
                    <p class="text-gray-300 text-sm">Expansive tiered deck design creating distinct zones for dining and relaxation.</p>
                </div>
            </div>

            <!-- Project Card 4: Board Replacement -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="aspect-[4/3]">
                    <img src="/images/projects/project-4.jpg" alt="Board Replacement" class="w-full h-full object-cover">
                </div>
                <div class="bg-slate-800 p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Board Replacement</h3>
                    <p class="text-gray-300 text-sm">Expert restoration and board replacement to bring your existing deck back to life.</p>
                </div>
            </div>

            <!-- Project Card 5: Pool Deck -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="aspect-[4/3]">
                    <img src="/images/projects/project-5.jpg" alt="Pool Deck" class="w-full h-full object-cover">
                </div>
                <div class="bg-slate-800 p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Pool Deck</h3>
                    <p class="text-gray-300 text-sm">Slip-resistant composite decking surrounding pool with built-in seating areas.</p>
                </div>
            </div>

            <!-- Project Card 6: Custom Rail -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="aspect-[4/3]">
                    <img src="/images/projects/project-6.jpg" alt="Custom Rail" class="w-full h-full object-cover">
                </div>
                <div class="bg-slate-800 p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Custom Rail</h3>
                    <p class="text-gray-300 text-sm">Elegant cable railing system with metal posts for unobstructed views.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- G) "Love From our customers" Section Heading --}}
<section class="py-12 md:py-16 bg-stone-50">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif italic text-gray-800 mb-4">
            Love From our customers
        </h2>
        <div class="w-24 h-1 bg-amber-500 mx-auto rounded-full"></div>
    </div>
</section>

{{-- H) Frequently Asked Questions Section --}}
<section class="py-16 md:py-24 bg-white" id="faq">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center text-gray-900 mb-12 md:mb-16">
            Frequently Asked Questions
        </h2>

        <!-- FAQ Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <!-- FAQ 1 -->
            <div class="bg-stone-50 rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-lg font-bold text-gray-900 mb-3">How long does it take to build a deck?</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Most standard decks take 1-2 weeks from start to finish. Complex multi-level designs or custom features may take 3-4 weeks. We'll provide a detailed timeline during your consultation.
                </p>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-stone-50 rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-lg font-bold text-gray-900 mb-3">What materials do you recommend?</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    We offer pressure-treated wood, cedar, composite (Trex, TimberTech), and PVC decking. Each has unique benefits—we'll help you choose based on your budget, maintenance preferences, and aesthetic goals.
                </p>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-stone-50 rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Do I need a permit?</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    In most Virginia localities, yes. We handle all permit applications and ensure your deck meets local building codes. Our team is familiar with requirements across Northern Virginia.
                </p>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-stone-50 rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-lg font-bold text-gray-900 mb-3">What's included in your warranty?</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    We provide a comprehensive warranty covering workmanship and structural integrity. Material warranties vary by manufacturer—composite decking often includes 25-50 year coverage.
                </p>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-stone-50 rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-lg font-bold text-gray-900 mb-3">Can you work with my existing deck?</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Absolutely! We offer deck repair, board replacement, refinishing, and expansion services. We'll assess your current structure and recommend the most cost-effective solution.
                </p>
            </div>

            <!-- FAQ 6 -->
            <div class="bg-stone-50 rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-lg font-bold text-gray-900 mb-3">How much does a new deck cost?</h3>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Costs vary based on size, materials, and features. A basic 12x16 deck starts around $8,000-$12,000. Premium composite multi-level decks can range $20,000-$40,000+. Request a free quote for accurate pricing.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- I) Final CTA Section --}}
<section class="py-16 md:py-24 bg-gradient-to-br from-slate-800 to-slate-900" id="quote">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
            Ready to build your backyard getaway?
        </h2>
        <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
            Let's turn your outdoor space into the deck of your dreams. Get a free consultation and quote today.
        </p>
        <a href="#contact" class="inline-flex items-center px-10 py-4 bg-amber-500 hover:bg-amber-600 text-white text-lg font-semibold rounded-lg shadow-xl transition-all duration-200 hover:shadow-2xl hover:scale-105">
            Let's Talk
            <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</section>

@endsection

