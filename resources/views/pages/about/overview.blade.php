@extends('layouts.app')

@section('title', 'About PAAB')
@section('meta_description', 'Learn about the Public Accountants and Auditors Board (PAAB) Zimbabwe - our history, mission, and role in regulating the accountancy profession.')

@section('content')

@include('partials.page-header', [
    'title' => 'About PAAB',
    'description' => 'Learn about our history, mission, and role in regulating the accountancy profession in Zimbabwe.',
    'badge' => 'Who We Are',
    'backgroundImage' => asset('images/headers/about-header.jpg'),
    'showLogo' => true,
    'breadcrumbs' => [
        ['label' => 'About']
    ]
])

    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-paab-gold rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-paab-gold rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                <span class="w-2 h-2 bg-paab-gold rounded-full mr-2"></span>
                <span class="text-white text-sm font-medium">About PAAB</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Who We Are
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                The statutory regulatory body for the accountancy profession in Zimbabwe, 
                protecting public interest since 1995.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">About Us</span>
            </nav>
        </div>
    </div>
</section>

<!-- Quick Navigation Tabs -->
<section class="bg-white border-b sticky top-[73px] z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto scrollbar-hide -mb-px">
            <a href="{{ url('/about/overview') }}" class="flex-shrink-0 px-6 py-4 text-paab-gold border-b-2 border-paab-gold font-semibold">
                Overview
            </a>
            <a href="{{ url('/about/mandate') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Our Mandate
            </a>
            <a href="{{ url('/about/board') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Board Members
            </a>
            <a href="{{ url('/about/constituent-bodies') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Constituent Bodies
            </a>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            
            <!-- Main Content Column -->
            <div class="lg:col-span-2">
                <!-- Introduction -->
                <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        About the Public Accountants and Auditors Board
                    </h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p class="mb-4">
                            The Public Accountants and Auditors Board (PAAB) is the statutory regulatory and oversight 
                            body for the accountancy profession in Zimbabwe, established by the 
                            <strong class="text-paab-navy">Public Accountants and Auditors Act [Chapter 27:12] of 1995</strong>.
                        </p>
                        <p class="mb-4">
                            In order to protect the public interest and that of investors, the PAAB has oversight over 
                            the accountancy profession in Zimbabwe through setting high standards of corporate governance, 
                            reporting and audit, and by holding to account those responsible for delivering them.
                        </p>
                        <p>
                            In support of our mission, we also conduct economic research and risk analysis, engage with 
                            our stakeholders and other domestic and international regulators, and manage a talented 
                            workforce and the technology and resources we need to perform our duties.
                        </p>
                    </div>
                </div>

                <!-- Mission & Vision -->
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-paab-navy rounded-2xl p-8 text-white">
                        <div class="w-14 h-14 bg-paab-gold rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-bullseye text-paab-navy text-2xl"></i>
                        </div>
                        <h3 class="font-display text-xl font-semibold mb-4">Our Mission</h3>
                        <p class="text-gray-300 leading-relaxed">
                            To promote transparency and integrity in business and to protect the financial interests 
                            of the people of Zimbabwe and that of other persons with interest in the Zimbabwean economy 
                            through effective regulation of the accountancy profession in accordance with internationally 
                            recognised standards.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm p-8 border-2 border-paab-gold">
                        <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-eye text-paab-gold text-2xl"></i>
                        </div>
                        <h3 class="font-display text-xl font-semibold text-paab-navy mb-4">Our Vision</h3>
                        <p class="text-gray-600 leading-relaxed">
                            To be a leading regulatory authority that ensures the highest standards of professional 
                            excellence, ethics, and accountability in the accountancy profession, contributing to 
                            Zimbabwe's economic growth and development.
                        </p>
                    </div>
                </div>

                <!-- Key Functions -->
                <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        Functions of PAAB
                    </h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-user-check text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Registration</h4>
                                <p class="text-gray-600 text-sm">Consider and determine applications for registration and practising certificates</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-clipboard-list text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Maintain Register</h4>
                                <p class="text-gray-600 text-sm">Maintain the register of all accountancy professionals</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-balance-scale text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Ethics & Discipline</h4>
                                <p class="text-gray-600 text-sm">Define and enforce ethical practice and discipline among registered persons</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-handshake text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Cooperation</h4>
                                <p class="text-gray-600 text-sm">Encourage cooperation between constituent bodies in matters of common interest</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-book text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Standards Setting</h4>
                                <p class="text-gray-600 text-sm">Prescribe auditing, accounting and reporting standards for Zimbabwe</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-graduation-cap text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Education Oversight</h4>
                                <p class="text-gray-600 text-sm">Evaluate and monitor standards of qualifying examinations and training</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-search text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Practice Reviews</h4>
                                <p class="text-gray-600 text-sm">Conduct audit quality monitoring, practice reviews and inspections</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-globe text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Representation</h4>
                                <p class="text-gray-600 text-sm">Represent views of the profession on national, regional and international issues</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Legal Framework -->
                <div class="bg-white rounded-2xl shadow-sm p-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        Legal Framework
                    </h2>
                    <p class="text-gray-600 mb-6">
                        PAAB was established and operates through the provisions of the Public Accountants and 
                        Auditors Act [Chapter 27:12]. Key legislation includes:
                    </p>
                    <div class="space-y-4">
                        <a href="#" class="flex items-center justify-between bg-gray-50 hover:bg-paab-light rounded-xl p-4 transition-colors duration-300 group">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-paab-navy rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-file-pdf text-paab-gold"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-paab-navy group-hover:text-paab-gold transition-colors">Public Accountants and Auditors Act [Chapter 27:12]</h4>
                                    <p class="text-gray-500 text-sm">Primary legislation governing PAAB</p>
                                </div>
                            </div>
                            <i class="fas fa-download text-paab-gold"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between bg-gray-50 hover:bg-paab-light rounded-xl p-4 transition-colors duration-300 group">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-paab-navy rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-file-pdf text-paab-gold"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-paab-navy group-hover:text-paab-gold transition-colors">Statutory Instrument 41 of 2019</h4>
                                    <p class="text-gray-500 text-sm">Public Accountants and Auditors Amendment</p>
                                </div>
                            </div>
                            <i class="fas fa-download text-paab-gold"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Stats Card -->
                <div class="bg-paab-navy rounded-2xl p-8 text-white mb-8">
                    <h3 class="font-display text-xl font-semibold mb-6">PAAB at a Glance</h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between pb-4 border-b border-white/20">
                            <span class="text-gray-300">Established</span>
                            <span class="font-display text-2xl font-bold text-paab-gold">1995</span>
                        </div>
                        <div class="flex items-center justify-between pb-4 border-b border-white/20">
                            <span class="text-gray-300">Registered Firms</span>
                            <span class="font-display text-2xl font-bold text-paab-gold">80+</span>
                        </div>
                        <div class="flex items-center justify-between pb-4 border-b border-white/20">
                            <span class="text-gray-300">Constituent Bodies</span>
                            <span class="font-display text-2xl font-bold text-paab-gold">9</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-300">Years of Service</span>
                            <span class="font-display text-2xl font-bold text-paab-gold">30+</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
                    <h3 class="font-display text-lg font-semibold text-paab-navy mb-4">Quick Links</h3>
                    <div class="space-y-3">
                        <a href="{{ url('/about/board') }}" class="flex items-center text-gray-600 hover:text-paab-gold transition-colors">
                            <i class="fas fa-users text-paab-gold mr-3"></i>
                            Meet the Board
                        </a>
                        <a href="{{ url('/about/constituent-bodies') }}" class="flex items-center text-gray-600 hover:text-paab-gold transition-colors">
                            <i class="fas fa-building text-paab-gold mr-3"></i>
                            Constituent Bodies
                        </a>
                        <a href="{{ url('/services/registration') }}" class="flex items-center text-gray-600 hover:text-paab-gold transition-colors">
                            <i class="fas fa-user-plus text-paab-gold mr-3"></i>
                            Registration
                        </a>
                        <a href="{{ url('/standards') }}" class="flex items-center text-gray-600 hover:text-paab-gold transition-colors">
                            <i class="fas fa-book text-paab-gold mr-3"></i>
                            Standards
                        </a>
                        <a href="{{ url('/contact') }}" class="flex items-center text-gray-600 hover:text-paab-gold transition-colors">
                            <i class="fas fa-envelope text-paab-gold mr-3"></i>
                            Contact Us
                        </a>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="bg-gradient-to-br from-paab-gold to-paab-gold-light rounded-2xl p-6">
                    <h3 class="font-display text-lg font-semibold text-paab-navy mb-4">Need Help?</h3>
                    <p class="text-paab-navy/80 text-sm mb-4">
                        Have questions about PAAB or the accountancy profession in Zimbabwe?
                    </p>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center bg-paab-navy text-white font-semibold px-6 py-3 rounded-lg hover:bg-paab-blue transition-colors duration-300">
                        <i class="fas fa-phone mr-2"></i>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-paab-navy rounded-3xl p-12 text-center">
            <h2 class="font-display text-3xl font-bold text-white mb-4">
                Ready to Learn More?
            </h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                Explore our mandate, meet our board members, or learn about our constituent bodies.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/about/mandate') }}" class="inline-flex items-center justify-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                    <i class="fas fa-bullseye mr-2"></i>
                    Our Mandate
                </a>
                <a href="{{ url('/about/board') }}" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                    <i class="fas fa-users mr-2"></i>
                    Board Members
                </a>
            </div>
        </div>
    </div>
</section>

@endsection