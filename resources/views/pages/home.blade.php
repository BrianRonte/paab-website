@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Public Accountants and Auditors Board (PAAB) - Regulating the Accountancy Profession in Zimbabwe')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-[85vh] flex items-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        @if(file_exists(public_path('images/headers/hero-bg.jpg')))
            <img src="{{ asset('images/headers/hero-bg.jpg') }}" alt="" class="w-full h-full object-cover">
        @endif
        <div class="absolute inset-0 bg-gradient-to-br from-paab-navy/95 via-paab-blue/90 to-paab-navy/95"></div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-paab-gold rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-paab-gold rounded-full filter blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-paab-gold rounded-full filter blur-3xl opacity-5"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <span class="w-2 h-2 bg-paab-gold rounded-full mr-2 animate-pulse"></span>
                    <span class="text-white text-sm font-medium">Regulating Excellence Since 1996</span>
                </div>
                
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Public Accountants & 
                    <span class="text-paab-gold">Auditors Board</span>
                </h1>
                
                <p class="text-gray-300 text-lg md:text-xl mb-8 leading-relaxed">
                    Regulating the accountancy profession in Zimbabwe, ensuring the highest standards of professional practice and ethical conduct for the protection of the public interest.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('services.verify-practitioner') }}" class="inline-flex items-center justify-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg shadow-paab-gold/25">
                        <i class="fas fa-search mr-2"></i>
                        Verify Practitioner
                    </a>
                    <a href="{{ url('/about/overview') }}" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300 border border-white/20">
                        Learn More
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-white/10">
                    <div>
                        <div class="text-3xl font-bold text-paab-gold">2,500+</div>
                        <div class="text-gray-400 text-sm">Registered Practitioners</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-paab-gold">150+</div>
                        <div class="text-gray-400 text-sm">Registered Firms</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-paab-gold">28+</div>
                        <div class="text-gray-400 text-sm">Years of Service</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Logo/Image -->
            <div class="hidden lg:flex justify-center items-center">
                <div class="relative">
                    <!-- Decorative rings -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-80 h-80 border border-paab-gold/20 rounded-full animate-spin" style="animation-duration: 20s;"></div>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-96 h-96 border border-paab-gold/10 rounded-full animate-spin" style="animation-duration: 30s; animation-direction: reverse;"></div>
                    </div>
                    
                    <!-- Logo Container -->
                    <div class="relative w-64 h-64 bg-white/5 backdrop-blur-sm rounded-3xl flex items-center justify-center border border-white/10 shadow-2xl">
                        @if(file_exists(public_path('images/logo/paab-logo-white.png')))
                            <img src="{{ asset('images/logo/paab-logo-white.png') }}" alt="PAAB Logo" class="w-40 h-auto">
                        @else
                            <div class="text-center">
                                <span class="text-paab-gold font-display font-bold text-6xl">PAAB</span>
                                <p class="text-white/50 text-sm mt-2">Zimbabwe</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#services" class="text-white/50 hover:text-paab-gold transition-colors">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

<!-- Quick Services Section -->
<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-flex items-center bg-paab-gold/10 rounded-full px-4 py-2 mb-4">
                <span class="w-2 h-2 bg-paab-gold rounded-full mr-2"></span>
                <span class="text-paab-navy text-sm font-medium">Our Services</span>
            </div>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-paab-navy mb-4">
                How Can We Help You?
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                PAAB provides essential services for accountants, auditors, and the public in Zimbabwe.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Service Card 1 -->
            <a href="{{ url('/services/registration') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-paab-gold/30">
                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-paab-gold group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-user-plus text-paab-gold text-xl group-hover:text-white"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Registration</h3>
                <p class="text-gray-600 text-sm">Register as a practitioner with PAAB</p>
            </a>

            <!-- Service Card 2 -->
            <a href="{{ url('/services/licensing') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-paab-gold/30">
                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-paab-gold group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-id-card text-paab-gold text-xl group-hover:text-white"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Licensing</h3>
                <p class="text-gray-600 text-sm">Renew your practising certificate</p>
            </a>

            <!-- Service Card 3 -->
            <a href="{{ route('services.verify-practitioner') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-paab-gold/30">
                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-paab-gold group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-search text-paab-gold text-xl group-hover:text-white"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Verify</h3>
                <p class="text-gray-600 text-sm">Verify a practitioner or firm</p>
            </a>

            <!-- Service Card 4 -->
            <a href="{{ url('/standards') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-paab-gold/30">
                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-paab-gold group-hover:scale-110 transition-all duration-300">
                    <i class="fas fa-book text-paab-gold text-xl group-hover:text-white"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Standards</h3>
                <p class="text-gray-600 text-sm">View accounting & auditing standards</p>
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Image/Visual -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    @if(file_exists(public_path('images/about-preview.jpg')))
                        <img src="{{ asset('images/about-preview.jpg') }}" alt="PAAB Office" class="w-full h-auto">
                    @else
                        <div class="aspect-video bg-gradient-to-br from-paab-navy to-paab-blue flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="fas fa-building text-6xl text-paab-gold/50 mb-4"></i>
                                <p class="text-white/50">PAAB Headquarters</p>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 max-w-xs hidden md:block">
                    <div class="flex items-center mb-3">
                        <div class="w-12 h-12 bg-paab-gold rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-award text-white text-xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-paab-navy">IFAC Member</p>
                            <p class="text-gray-500 text-sm">Since 1996</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <div class="inline-flex items-center bg-paab-gold/10 rounded-full px-4 py-2 mb-4">
                    <span class="w-2 h-2 bg-paab-gold rounded-full mr-2"></span>
                    <span class="text-paab-navy text-sm font-medium">About PAAB</span>
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-paab-navy mb-6">
                    Regulating the Accountancy Profession in Zimbabwe
                </h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    The Public Accountants and Auditors Board (PAAB) is a statutory body established in terms of the Public Accountants and Auditors Act [Chapter 27:12] to regulate the accountancy profession in Zimbabwe.
                </p>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Our mandate includes registration and licensing of practitioners, setting and enforcing professional standards, and protecting the public interest through effective regulation.
                </p>

                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">Registration & Licensing</span>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">Standards Setting</span>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">Practice Reviews</span>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">Public Protection</span>
                    </div>
                </div>

                <a href="{{ url('/about/overview') }}" class="inline-flex items-center bg-paab-navy hover:bg-paab-blue text-white font-semibold px-6 py-3 rounded-xl transition-colors">
                    Learn More About Us
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-12">
            <div>
                <div class="inline-flex items-center bg-paab-gold/10 rounded-full px-4 py-2 mb-4">
                    <span class="w-2 h-2 bg-paab-gold rounded-full mr-2"></span>
                    <span class="text-paab-navy text-sm font-medium">Stay Informed</span>
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-paab-navy">
                    Updates & Announcements
                </h2>
            </div>
            <a href="{{ route('news') }}" class="mt-4 md:mt-0 inline-flex items-center text-paab-gold hover:text-paab-gold-light font-semibold transition-colors">
                View All News
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        @if($latestNews->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($latestNews as $article)
                    <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100">
                        <!-- Image -->
                        <a href="{{ route('news.show', $article->slug) }}" class="block relative h-48 overflow-hidden">
                            @if($article->featured_image)
                                <img src="{{ asset('storage/news/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-paab-navy to-paab-blue flex items-center justify-center">
                                    <i class="fas fa-newspaper text-paab-gold text-4xl opacity-50"></i>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="{{ $article->category_color }} text-xs font-semibold px-3 py-1 rounded-full">
                                    {{ $article->category_label }}
                                </span>
                            </div>
                        </a>

                        <!-- Content -->
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ $article->short_date }}
                            </div>
                            
                            <a href="{{ route('news.show', $article->slug) }}">
                                <h3 class="font-display text-lg font-bold text-paab-navy mb-3 group-hover:text-paab-gold transition-colors line-clamp-2">
                                    {{ $article->title }}
                                </h3>
                            </a>
                            
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                {{ $article->excerpt }}
                            </p>
                            
                            <a href="{{ route('news.show', $article->slug) }}" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-semibold text-sm">
                                Read More
                                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="bg-gray-50 rounded-2xl p-12 text-center">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-newspaper text-gray-400 text-2xl"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-2">No News Yet</h3>
                <p class="text-gray-500">Check back soon for updates and announcements.</p>
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative bg-gradient-to-r from-paab-navy to-paab-blue rounded-3xl overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 right-0 w-96 h-96 bg-paab-gold rounded-full filter blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 left-0 w-72 h-72 bg-paab-gold rounded-full filter blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
            </div>
            
            <div class="relative p-8 md:p-12 lg:p-16">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-4">
                            Need to Verify a Practitioner?
                        </h2>
                        <p class="text-gray-300 text-lg mb-6">
                            Search our register to confirm if an individual or firm is registered with PAAB and authorized to provide accounting or auditing services in Zimbabwe.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('services.verify-practitioner') }}" class="inline-flex items-center justify-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                                <i class="fas fa-search mr-2"></i>
                                Verify Now
                            </a>
                            <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300 border border-white/20">
                                <i class="fas fa-envelope mr-2"></i>
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="hidden lg:flex justify-center">
                        <div class="w-48 h-48 bg-white/10 backdrop-blur-sm rounded-3xl flex items-center justify-center">
                            <i class="fas fa-user-check text-paab-gold text-6xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection