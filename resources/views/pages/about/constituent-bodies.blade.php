@extends('layouts.app')

@section('title', 'Constituent Bodies')
@section('meta_description', 'Professional Accountancy Organizations recognized by PAAB Zimbabwe')

@section('content')

@include('partials.page-header', [
    'title' => 'Constituent Bodies',
    'description' => 'Professional Accountancy Organizations (PAOs) recognized by PAAB.',
    'badge' => 'Our Partners',
    'backgroundImage' => asset('images/headers/about-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'About', 'url' => url('/about/overview')],
        ['label' => 'Constituent Bodies']
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
                <span class="text-white text-sm font-medium">Our Partners</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Constituent Bodies
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                PAAB works with 9 professional bodies to regulate the accountancy profession in Zimbabwe.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <a href="{{ url('/about/overview') }}" class="text-gray-400 hover:text-paab-gold transition-colors">About</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Constituent Bodies</span>
            </nav>
        </div>
    </div>
</section>

<!-- Quick Navigation Tabs -->
<section class="bg-white border-b sticky top-[73px] z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto scrollbar-hide -mb-px">
            <a href="{{ url('/about/overview') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Overview
            </a>
            <a href="{{ url('/about/mandate') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Our Mandate
            </a>
            <a href="{{ url('/about/board') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Board Members
            </a>
            <a href="{{ url('/about/constituent-bodies') }}" class="flex-shrink-0 px-6 py-4 text-paab-gold border-b-2 border-paab-gold font-semibold">
                Constituent Bodies
            </a>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-6">
                Professional Bodies Working Together
            </h2>
            <p class="text-gray-600 leading-relaxed">
                The PAAB has 9 Constituent Bodies of which 5 are Principal Constituent Bodies and 
                4 are Associate Constituent Bodies. These bodies work together with PAAB to regulate 
                the accountancy profession, set standards, and maintain professional excellence in Zimbabwe.
            </p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <div class="font-display text-4xl font-bold text-paab-gold mb-2">9</div>
                <p class="text-gray-600 text-sm">Total Constituent Bodies</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <div class="font-display text-4xl font-bold text-paab-gold mb-2">5</div>
                <p class="text-gray-600 text-sm">Principal Bodies</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <div class="font-display text-4xl font-bold text-paab-gold mb-2">4</div>
                <p class="text-gray-600 text-sm">Associate Bodies</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-sm">
                <div class="font-display text-4xl font-bold text-paab-gold mb-2">80+</div>
                <p class="text-gray-600 text-sm">Registered Firms</p>
            </div>
        </div>
    </div>
</section>

<!-- Principal Constituent Bodies -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-flex items-center bg-paab-gold/10 text-paab-gold font-semibold px-4 py-2 rounded-full text-sm mb-4">
                <i class="fas fa-star mr-2"></i>
                Principal Constituent Bodies
            </div>
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                5 Principal Bodies
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                These are the primary professional bodies representing public accountants and auditors in Zimbabwe.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- ICAZ -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group border border-transparent hover:border-paab-gold">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-navy rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-paab-gold text-xl">ICAZ</span>
                    </div>
                    <span class="bg-paab-gold/10 text-paab-gold text-xs font-semibold px-3 py-1 rounded-full">Principal</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Institute of Chartered Accountants of Zimbabwe
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Established by the Chartered Accountants Act [Chapter 27:02]. ICAZ is the premier 
                    professional body for chartered accountants in Zimbabwe.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-map-marker-alt text-paab-gold mr-2"></i>
                        <span>Harare, Zimbabwe</span>
                    </div>
                </div>
            </div>

            <!-- ACCA -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group border border-transparent hover:border-paab-gold">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-navy rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-paab-gold text-xl">ACCA</span>
                    </div>
                    <span class="bg-paab-gold/10 text-paab-gold text-xs font-semibold px-3 py-1 rounded-full">Principal</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Association of Chartered Certified Accountants
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    The Zimbabwe branch of ACCA, incorporated by Royal Charter in the United Kingdom. 
                    A global body for professional accountants.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-globe text-paab-gold mr-2"></i>
                        <span>International (UK Royal Charter)</span>
                    </div>
                </div>
            </div>

            <!-- CIMA -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group border border-transparent hover:border-paab-gold">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-navy rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-paab-gold text-xl">CIMA</span>
                    </div>
                    <span class="bg-paab-gold/10 text-paab-gold text-xs font-semibold px-3 py-1 rounded-full">Principal</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Chartered Institute of Management Accountants
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    The Zimbabwe branch of CIMA, incorporated by Royal Charter in the United Kingdom. 
                    The world's leading body for management accountants.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-globe text-paab-gold mr-2"></i>
                        <span>International (UK Royal Charter)</span>
                    </div>
                </div>
            </div>

            <!-- ICSAZ -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group border border-transparent hover:border-paab-gold">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-navy rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-paab-gold text-lg">ICSAZ</span>
                    </div>
                    <span class="bg-paab-gold/10 text-paab-gold text-xs font-semibold px-3 py-1 rounded-full">Principal</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Institute of Chartered Secretaries and Administrators in Zimbabwe
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Established by the Chartered Secretaries (Private) Act [Chapter 27:03]. 
                    Representing governance professionals in Zimbabwe.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-map-marker-alt text-paab-gold mr-2"></i>
                        <span>Harare, Zimbabwe</span>
                    </div>
                </div>
            </div>

            <!-- ICPAZ -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 group border border-transparent hover:border-paab-gold">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-navy rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-paab-gold text-lg">ICPAZ</span>
                    </div>
                    <span class="bg-paab-gold/10 text-paab-gold text-xs font-semibold px-3 py-1 rounded-full">Principal</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Institute of Certified Public Accountants of Zimbabwe
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    A locally incorporated company limited by guarantee. Successor to a body 
                    that specialized in public sector finance and accounting.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-map-marker-alt text-paab-gold mr-2"></i>
                        <span>Harare, Zimbabwe</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Associate Constituent Bodies -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-flex items-center bg-paab-navy/10 text-paab-navy font-semibold px-4 py-2 rounded-full text-sm mb-4">
                <i class="fas fa-handshake mr-2"></i>
                Associate Constituent Bodies
            </div>
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                4 Associate Bodies
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                These bodies represent general accountants and tax accountants, complementing the principal bodies.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- ICTAZ -->
            <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-paab-blue">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-blue rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-white text-lg">ICTAZ</span>
                    </div>
                    <span class="bg-paab-blue/10 text-paab-blue text-xs font-semibold px-3 py-1 rounded-full">Associate</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Institute of Certified Tax Accountants of Zimbabwe
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    A locally incorporated company limited by guarantee. Represents tax accountants 
                    and promotes excellence in tax practice and compliance.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calculator text-paab-blue mr-2"></i>
                        <span>Tax Accountants</span>
                    </div>
                </div>
            </div>

            <!-- SAAA -->
            <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-paab-blue">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-blue rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-white text-lg">SAAA</span>
                    </div>
                    <span class="bg-paab-blue/10 text-paab-blue text-xs font-semibold px-3 py-1 rounded-full">Associate</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Southern Africa Association of Accountants
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    A locally incorporated company limited by guarantee. Represents accountants 
                    across the Southern African region with a focus on professional development.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-globe-africa text-paab-blue mr-2"></i>
                        <span>Regional Body</span>
                    </div>
                </div>
            </div>

            <!-- IACZ -->
            <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-paab-blue">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-blue rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-white text-lg">IACZ</span>
                    </div>
                    <span class="bg-paab-blue/10 text-paab-blue text-xs font-semibold px-3 py-1 rounded-full">Associate</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Institute of Administration and Commerce of Zimbabwe
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    A locally incorporated company limited by guarantee. Focuses on administration 
                    and commerce professionals in the accountancy field.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-briefcase text-paab-blue mr-2"></i>
                        <span>Administration & Commerce</span>
                    </div>
                </div>
            </div>

            <!-- ZITA -->
            <div class="bg-white rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-paab-blue">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-paab-blue rounded-xl flex items-center justify-center">
                        <span class="font-display font-bold text-white text-lg">ZITA</span>
                    </div>
                    <span class="bg-paab-blue/10 text-paab-blue text-xs font-semibold px-3 py-1 rounded-full">Associate</span>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">
                    Zimbabwe Institute of Tax Accountants
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    A locally incorporated company limited by guarantee. Dedicated to advancing 
                    tax accounting practice and education in Zimbabwe.
                </p>
                <div class="pt-4 border-t border-gray-200">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-file-invoice-dollar text-paab-blue mr-2"></i>
                        <span>Tax Accountants</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Role of Constituent Bodies -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                Role of Constituent Bodies
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Constituent bodies play a vital role in the regulation and development of the accountancy profession.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-graduation-cap text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">Setting Examinations</h3>
                <p class="text-gray-600 text-sm">
                    Developing and administering professional qualifying examinations for members.
                </p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-book-open text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">Professional Standards</h3>
                <p class="text-gray-600 text-sm">
                    Establishing and maintaining professional standards for their respective members.
                </p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">Member Representation</h3>
                <p class="text-gray-600 text-sm">
                    Representing members' interests and advocating for the profession.
                </p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-gavel text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">Disciplinary Action</h3>
                <p class="text-gray-600 text-sm">
                    Taking disciplinary action against members who breach professional conduct.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Membership Categories -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-paab-navy rounded-3xl p-8 md:p-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-display text-3xl font-bold text-white mb-6">
                        Accountancy Profession Categories
                    </h2>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        The accountancy profession in Zimbabwe is organized into distinct categories, 
                        each with specific qualifications and responsibilities:
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5">
                        <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-user-tie text-paab-navy"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-1">Public Auditors</h4>
                        <p class="text-gray-400 text-sm">Licensed to perform statutory audits</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5">
                        <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-calculator text-paab-navy"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-1">Public Accountants</h4>
                        <p class="text-gray-400 text-sm">Certified for public accounting practice</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5">
                        <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-file-invoice text-paab-navy"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-1">General Accountants</h4>
                        <p class="text-gray-400 text-sm">General accounting services</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5">
                        <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-receipt text-paab-navy"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-1">Tax Accountants</h4>
                        <p class="text-gray-400 text-sm">Specialized in tax services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-paab-gold to-paab-gold-light rounded-3xl p-12">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                        Want to Join a Constituent Body?
                    </h2>
                    <p class="text-paab-navy/80">
                        Learn about registration requirements and how to become a registered professional.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 lg:justify-end">
                    <a href="{{ url('/services/registration') }}" class="inline-flex items-center justify-center bg-paab-navy hover:bg-paab-blue text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                        <i class="fas fa-user-plus mr-2"></i>
                        Registration Info
                    </a>
                    <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-white hover:bg-gray-100 text-paab-navy font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection