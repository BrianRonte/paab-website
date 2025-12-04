@extends('layouts.app')

@section('title', 'Our Mandate')
@section('meta_description', 'The legal mandate and functions of PAAB under the Public Accountants and Auditors Act')

@section('content')

@include('partials.page-header', [
    'title' => 'Our Mandate',
    'description' => 'Understanding PAAB\'s legal mandate and functions under the Public Accountants and Auditors Act.',
    'badge' => 'Legal Framework',
    'backgroundImage' => asset('images/headers/about-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'About', 'url' => url('/about/overview')],
        ['label' => 'Mandate']
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
                <span class="text-white text-sm font-medium">Our Purpose</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Our Mandate
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Understanding PAAB's role in regulating the accountancy profession and protecting public interest in Zimbabwe.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <a href="{{ url('/about/overview') }}" class="text-gray-400 hover:text-paab-gold transition-colors">About</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Our Mandate</span>
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
            <a href="{{ url('/about/mandate') }}" class="flex-shrink-0 px-6 py-4 text-paab-gold border-b-2 border-paab-gold font-semibold">
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

<!-- Primary Objective -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center text-paab-gold font-semibold mb-4">
                    <span class="w-12 h-0.5 bg-paab-gold mr-3"></span>
                    PRIMARY OBJECTIVE
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-paab-navy mb-6">
                    Protecting Public Interest
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    The primary objective of the PAAB, as established in terms of Section 4 of the 
                    Public Accountants and Auditors Act [Chapter 27:12], is to <strong class="text-paab-navy">protect 
                    the public interest</strong> through regulation of the accounting profession.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    In terms of Section 5(1)(f) of the Act, PAAB is mandated to take such steps as appear 
                    to the Board to be necessary or desirable to advance the standing and effectiveness 
                    of the accountancy profession in Zimbabwe.
                </p>
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/about/overview') }}" class="inline-flex items-center text-paab-gold font-semibold hover:text-paab-gold-light transition-colors group">
                        Learn more about PAAB
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="bg-paab-navy rounded-2xl p-8 text-white">
                    <div class="w-16 h-16 bg-paab-gold rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-paab-navy text-3xl"></i>
                    </div>
                    <h3 class="font-display text-2xl font-semibold mb-4">Our Mission</h3>
                    <p class="text-gray-300 leading-relaxed">
                        To promote transparency and integrity in business and to protect the financial 
                        interests of the people of Zimbabwe and that of other persons with interest in 
                        the Zimbabwean economy through effective regulation of the accountancy profession 
                        in accordance with internationally recognised standards.
                    </p>
                </div>
                <!-- Decorative -->
                <div class="absolute -z-10 -bottom-4 -right-4 w-full h-full bg-paab-gold/20 rounded-2xl"></div>
            </div>
        </div>
    </div>
</section>

<!-- Core Functions -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-flex items-center text-paab-gold font-semibold mb-4">
                <span class="w-12 h-0.5 bg-paab-gold mr-3"></span>
                STATUTORY FUNCTIONS
                <span class="w-12 h-0.5 bg-paab-gold ml-3"></span>
            </div>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-paab-navy mb-4">
                Core Functions of PAAB
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                As defined in the Public Accountants and Auditors Act [Chapter 27:12]
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Function 1 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-paab-gold">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                        <span class="font-display font-bold text-paab-gold text-xl">1</span>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">
                            Registration & Certification
                        </h3>
                        <p class="text-gray-600">
                            To consider and determine applications for registration and practising certificates 
                            by individuals and firms seeking to practice as accountants or auditors in Zimbabwe.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Function 2 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-paab-gold">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                        <span class="font-display font-bold text-paab-gold text-xl">2</span>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">
                            Maintain the Register
                        </h3>
                        <p class="text-gray-600">
                            To maintain comprehensive registers of all public accountants, public auditors, 
                            general accountants, and tax accountants in Zimbabwe.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Function 3 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-paab-gold">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                        <span class="font-display font-bold text-paab-gold text-xl">3</span>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">
                            Ethics & Discipline
                        </h3>
                        <p class="text-gray-600">
                            To define and enforce ethical practice and discipline among registered persons, 
                            ensuring the highest standards of professional conduct.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Function 4 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-paab-gold">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                        <span class="font-display font-bold text-paab-gold text-xl">4</span>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">
                            Standards Setting
                        </h3>
                        <p class="text-gray-600">
                            To prescribe auditing standards, accounting standards and accountancy reporting 
                            standards for use in Zimbabwe, including internationally recognised standards.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Function 5 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-paab-gold">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                        <span class="font-display font-bold text-paab-gold text-xl">5</span>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">
                            Education Oversight
                        </h3>
                        <p class="text-gray-600">
                            To evaluate and monitor the standards of qualifying examinations, courses and 
                            training set or offered by the constituent bodies.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Function 6 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-paab-gold">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                        <span class="font-display font-bold text-paab-gold text-xl">6</span>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">
                            Practice Reviews & Inspections
                        </h3>
                        <p class="text-gray-600">
                            To conduct audit quality monitoring, practice reviews and inspections to ensure 
                            compliance with applicable standards.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Function 7 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-paab-gold">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                        <span class="font-display font-bold text-paab-gold text-xl">7</span>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">
                            Constituent Body Cooperation
                        </h3>
                        <p class="text-gray-600">
                            To encourage cooperation between constituent bodies in matters of common interest 
                            affecting the accountancy profession.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Function 8 -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300 border-l-4 border-paab-gold">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                        <span class="font-display font-bold text-paab-gold text-xl">8</span>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">
                            Professional Representation
                        </h3>
                        <p class="text-gray-600">
                            To represent the views of the accountancy profession on national, regional and 
                            international issues affecting the profession.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regulatory Powers -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Standards Authority -->
            <div class="bg-white rounded-2xl shadow-sm p-8">
                <div class="w-14 h-14 bg-paab-navy rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-book text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-4">
                    Standards Authority
                </h3>
                <p class="text-gray-600 mb-4">
                    PAAB has statutory authority to prescribe:
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Auditing standards</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Accounting standards (IFRS)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Public sector standards (IPSAS)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Reporting standards</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Ethical requirements</span>
                    </li>
                </ul>
            </div>

            <!-- Education Mandate -->
            <div class="bg-white rounded-2xl shadow-sm p-8">
                <div class="w-14 h-14 bg-paab-navy rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-graduation-cap text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-4">
                    Education Mandate
                </h3>
                <p class="text-gray-600 mb-4">
                    PAAB's education responsibilities include:
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Setting minimum qualifications</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Competency standards</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Training programme accreditation</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">CPD requirements</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">IES implementation</span>
                    </li>
                </ul>
            </div>

            <!-- Disciplinary Powers -->
            <div class="bg-white rounded-2xl shadow-sm p-8">
                <div class="w-14 h-14 bg-paab-navy rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-balance-scale text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-4">
                    Disciplinary Powers
                </h3>
                <p class="text-gray-600 mb-4">
                    PAAB has authority to:
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Investigate complaints</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Conduct disciplinary hearings</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Impose sanctions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Suspend or revoke certificates</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-600">Remove from register</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PAAB's Duty -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-paab-navy rounded-3xl p-8 md:p-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-display text-3xl font-bold text-white mb-6">
                        PAAB's Duty to the Profession
                    </h2>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        The reputation, relevance and value of the accounting profession depend on the 
                        ability of its members to continually meet the expectations of stakeholders and 
                        provide a service appropriate to the needs of the Zimbabwean economy within the 
                        global context.
                    </p>
                    <p class="text-gray-300 leading-relaxed">
                        PAAB therefore has a duty to ensure that all general accountants, tax accountants, 
                        public accountants and public auditors:
                    </p>
                </div>
                <div class="space-y-4">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-user-graduate text-paab-navy"></i>
                            </div>
                            <p class="text-white">
                                Have the necessary professional competence on entering the accountancy profession
                            </p>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-chart-line text-paab-navy"></i>
                            </div>
                            <p class="text-white">
                                Further develop and maintain their professional competence after registration
                            </p>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-gavel text-paab-navy"></i>
                            </div>
                            <p class="text-white">
                                Are subject to appropriate ethical requirements and disciplined where appropriate
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- International Affiliations -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                International Affiliations
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                PAAB works with international bodies to ensure Zimbabwe's accountancy profession 
                meets global standards.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 text-center shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="w-20 h-20 bg-paab-light rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="font-display font-bold text-paab-navy text-xl">IFAC</span>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">IFAC Member</h3>
                <p class="text-gray-600 text-sm">
                    International Federation of Accountants - The global organization for the accountancy profession.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 text-center shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="w-20 h-20 bg-paab-light rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="font-display font-bold text-paab-navy text-xl">PAFA</span>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">PAFA Member</h3>
                <p class="text-gray-600 text-sm">
                    Pan African Federation of Accountants - Representing the African accountancy profession.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 text-center shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="w-20 h-20 bg-paab-light rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="font-display font-bold text-paab-navy text-xl">IASB</span>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">IFRS Adoption</h3>
                <p class="text-gray-600 text-sm">
                    PAAB has adopted all IFRS standards issued by the International Accounting Standards Board.
                </p>
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
                        Have Questions About Our Mandate?
                    </h2>
                    <p class="text-paab-navy/80">
                        Contact us to learn more about how PAAB regulates the accountancy profession in Zimbabwe.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 lg:justify-end">
                    <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-paab-navy hover:bg-paab-blue text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>
                    <a href="{{ url('/resources') }}" class="inline-flex items-center justify-center bg-white hover:bg-gray-100 text-paab-navy font-semibold px-8 py-4 rounded-lg transition-all duration-300">
                        <i class="fas fa-file-pdf mr-2"></i>
                        View Resources
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection