@extends('layouts.app')

@section('title', 'Practice Review')
@section('meta_description', 'PAAB Practice Review units - AQMU, FRMU, and ERMO')

@section('content')

@include('partials.page-header', [
    'title' => 'Practice Review',
    'description' => 'Quality assurance and monitoring of registered practitioners and firms.',
    'badge' => 'Services',
    'backgroundImage' => asset('images/headers/services-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'Services'],
        ['label' => 'Practice Review']
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
                <span class="text-white text-sm font-medium">Operations</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Practice Review & Monitoring
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Ensuring quality, compliance, and professional excellence through comprehensive monitoring and review programs.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-gray-400">Services</span>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Practice Review</span>
            </nav>
        </div>
    </div>
</section>

<!-- Services Navigation -->
<section class="bg-white border-b sticky top-[73px] z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto scrollbar-hide -mb-px">
            <a href="{{ url('/services/registration') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Registration
            </a>
            <a href="{{ url('/services/licensing') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Licensing
            </a>
            <a href="{{ url('/services/practice-review') }}" class="flex-shrink-0 px-6 py-4 text-paab-gold border-b-2 border-paab-gold font-semibold">
                Practice Review
            </a>
            <a href="{{ url('/services/verify-practitioner') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Verify Practitioner
            </a>
        </div>
    </div>
</section>

<!-- Overview Cards -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- AQMU Card -->
            <a href="#aqmu" class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 group border-t-4 border-paab-gold">
                <div class="w-16 h-16 bg-paab-gold/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-paab-gold transition-colors duration-300">
                    <i class="fas fa-search-dollar text-paab-gold text-2xl group-hover:text-paab-navy transition-colors duration-300"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">Audit Quality Monitoring</h3>
                <p class="text-gray-600 text-sm mb-4">
                    Inspection and review of audit firms to ensure quality and compliance with auditing standards.
                </p>
                <span class="inline-flex items-center text-paab-gold font-semibold text-sm">
                    Learn more <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </span>
            </a>

            <!-- FRMU Card -->
            <a href="#frmu" class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 group border-t-4 border-paab-blue">
                <div class="w-16 h-16 bg-paab-blue/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-paab-blue transition-colors duration-300">
                    <i class="fas fa-file-invoice-dollar text-paab-blue text-2xl group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">Financial Reporting Monitoring</h3>
                <p class="text-gray-600 text-sm mb-4">
                    Examination of financial reports to ensure compliance with applicable accounting standards.
                </p>
                <span class="inline-flex items-center text-paab-gold font-semibold text-sm">
                    Learn more <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </span>
            </a>

            <!-- ERMO Card -->
            <a href="#ermo" class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 group border-t-4 border-green-500">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-green-500 transition-colors duration-300">
                    <i class="fas fa-graduation-cap text-green-500 text-2xl group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-3">Education Regulation & Monitoring</h3>
                <p class="text-gray-600 text-sm mb-4">
                    Oversight of education standards, training programs, and constituent body compliance.
                </p>
                <span class="inline-flex items-center text-paab-gold font-semibold text-sm">
                    Learn more <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- AQMU Section -->
<section id="aqmu" class="py-16 bg-white scroll-mt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center bg-paab-gold/10 text-paab-gold font-semibold px-4 py-2 rounded-full text-sm mb-4">
                    <i class="fas fa-search-dollar mr-2"></i>
                    AQMU
                </div>
                <h2 class="font-display text-3xl font-bold text-paab-navy mb-6">
                    Audit Quality Monitoring Unit
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    The Audit Quality Monitoring Unit (AQMU) is responsible for ensuring that registered 
                    audit firms maintain the highest standards of audit quality. Through regular inspections 
                    and reviews, we promote excellence in audit practice across Zimbabwe.
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                            <i class="fas fa-check text-paab-gold text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-paab-navy">Quality Inspections</h4>
                            <p class="text-gray-600 text-sm">Carry out audit quality inspections of registered audit firms and audit engagements</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                            <i class="fas fa-check text-paab-gold text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-paab-navy">Partner Rotation</h4>
                            <p class="text-gray-600 text-sm">Examine mechanisms for rotation of engagement partners for PIE clients</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                            <i class="fas fa-check text-paab-gold text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-paab-navy">Auditor Transitions</h4>
                            <p class="text-gray-600 text-sm">Ensure compliance with requirements for granting access to incoming auditors</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                            <i class="fas fa-check text-paab-gold text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-paab-navy">International Cooperation</h4>
                            <p class="text-gray-600 text-sm">Liaise and cooperate with African and international auditing regulations enforcement bodies</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-paab-gold/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                            <i class="fas fa-check text-paab-gold text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-paab-navy">Ministerial Advisory</h4>
                            <p class="text-gray-600 text-sm">Advise the Minister on auditing matters affecting the profession</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-paab-navy rounded-2xl p-8">
                <h3 class="font-display text-xl font-semibold text-white mb-6">
                    <i class="fas fa-clipboard-list text-paab-gold mr-3"></i>
                    Inspection Process
                </h3>
                <div class="space-y-4">
                    <div class="bg-white/10 rounded-xl p-4">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 bg-paab-gold rounded-lg flex items-center justify-center mr-3">
                                <span class="text-paab-navy font-bold text-sm">1</span>
                            </div>
                            <h4 class="font-semibold text-white">Selection</h4>
                        </div>
                        <p class="text-gray-300 text-sm ml-11">Firms selected based on risk assessment and inspection cycle</p>
                    </div>

                    <div class="bg-white/10 rounded-xl p-4">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 bg-paab-gold rounded-lg flex items-center justify-center mr-3">
                                <span class="text-paab-navy font-bold text-sm">2</span>
                            </div>
                            <h4 class="font-semibold text-white">Notification</h4>
                        </div>
                        <p class="text-gray-300 text-sm ml-11">Firm notified of upcoming inspection and documentation required</p>
                    </div>

                    <div class="bg-white/10 rounded-xl p-4">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 bg-paab-gold rounded-lg flex items-center justify-center mr-3">
                                <span class="text-paab-navy font-bold text-sm">3</span>
                            </div>
                            <h4 class="font-semibold text-white">On-Site Review</h4>
                        </div>
                        <p class="text-gray-300 text-sm ml-11">Review of audit files, quality control systems, and firm policies</p>
                    </div>

                    <div class="bg-white/10 rounded-xl p-4">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 bg-paab-gold rounded-lg flex items-center justify-center mr-3">
                                <span class="text-paab-navy font-bold text-sm">4</span>
                            </div>
                            <h4 class="font-semibold text-white">Reporting</h4>
                        </div>
                        <p class="text-gray-300 text-sm ml-11">Draft report issued with findings and recommendations</p>
                    </div>

                    <div class="bg-white/10 rounded-xl p-4">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 bg-paab-gold rounded-lg flex items-center justify-center mr-3">
                                <span class="text-paab-navy font-bold text-sm">5</span>
                            </div>
                            <h4 class="font-semibold text-white">Follow-Up</h4>
                        </div>
                        <p class="text-gray-300 text-sm ml-11">Monitor implementation of remedial actions by the firm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FRMU Section -->
<section id="frmu" class="py-16 bg-gray-50 scroll-mt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="font-display text-xl font-semibold text-paab-navy mb-6">
                        <i class="fas fa-tasks text-paab-blue mr-3"></i>
                        FRMU Key Functions
                    </h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start p-4 bg-paab-light rounded-xl">
                            <div class="w-12 h-12 bg-paab-blue rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-search text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Compliance Monitoring</h4>
                                <p class="text-gray-600 text-sm">Monitor compliance with applicable reporting requirements prescribed by the Board</p>
                            </div>
                        </div>

                        <div class="flex items-start p-4 bg-paab-light rounded-xl">
                            <div class="w-12 h-12 bg-paab-blue rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Financial Report Examination</h4>
                                <p class="text-gray-600 text-sm">Examine public entities' annual and half-yearly financial reports for compliance</p>
                            </div>
                        </div>

                        <div class="flex items-start p-4 bg-paab-light rounded-xl">
                            <div class="w-12 h-12 bg-paab-blue rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-handshake text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Sector Regulator Liaison</h4>
                                <p class="text-gray-600 text-sm">Liaison and cooperation with other sector regulators</p>
                            </div>
                        </div>

                        <div class="flex items-start p-4 bg-paab-light rounded-xl">
                            <div class="w-12 h-12 bg-paab-blue rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-globe text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">International Cooperation</h4>
                                <p class="text-gray-600 text-sm">Liaison with national, regional and international accounting enforcement bodies</p>
                            </div>
                        </div>

                        <div class="flex items-start p-4 bg-paab-light rounded-xl">
                            <div class="w-12 h-12 bg-paab-blue rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-user-tie text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Ministerial Advisory</h4>
                                <p class="text-gray-600 text-sm">Advise the Minister on accounting matters</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center bg-paab-blue/10 text-paab-blue font-semibold px-4 py-2 rounded-full text-sm mb-4">
                    <i class="fas fa-file-invoice-dollar mr-2"></i>
                    FRMU
                </div>
                <h2 class="font-display text-3xl font-bold text-paab-navy mb-6">
                    Financial Reporting Monitoring Unit
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    The Financial Reporting Monitoring Unit (FRMU) ensures that public entities in Zimbabwe 
                    comply with applicable financial reporting requirements. By examining financial reports 
                    and taking appropriate action in instances of non-compliance, we protect investors and 
                    maintain confidence in financial reporting.
                </p>
                
                <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mb-6">
                    <h4 class="font-semibold text-blue-800 mb-3">
                        <i class="fas fa-building mr-2"></i>
                        Entities Subject to Review
                    </h4>
                    <ul class="space-y-2 text-blue-700 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            Listed companies on the Zimbabwe Stock Exchange
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            Banking and financial institutions
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            Insurance companies
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            Public interest entities
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-2"></i>
                            State-owned enterprises
                        </li>
                    </ul>
                </div>

                <a href="{{ url('/standards') }}" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-semibold">
                    View Applicable Standards
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ERMO Section -->
<section id="ermo" class="py-16 bg-white scroll-mt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-flex items-center bg-green-100 text-green-600 font-semibold px-4 py-2 rounded-full text-sm mb-4">
                <i class="fas fa-graduation-cap mr-2"></i>
                ERMO
            </div>
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                Education Regulation & Monitoring Oversight Unit
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                The ERMO Unit provides independent and effective oversight over the constituent bodies' 
                regulatory obligations and promotes professional conduct among accountancy professionals.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-eye text-green-600 text-xl"></i>
                </div>
                <h4 class="font-semibold text-paab-navy mb-2">Independent Oversight</h4>
                <p class="text-gray-600 text-sm">
                    Deliver independent and effective oversight over constituent bodies' regulatory obligations
                </p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-clipboard-check text-green-600 text-xl"></i>
                </div>
                <h4 class="font-semibold text-paab-navy mb-2">Accreditation Monitoring</h4>
                <p class="text-gray-600 text-sm">
                    Monitor constituent bodies' compliance with accreditation requirements annually
                </p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-user-shield text-green-600 text-xl"></i>
                </div>
                <h4 class="font-semibold text-paab-navy mb-2">Professional Conduct</h4>
                <p class="text-gray-600 text-sm">
                    Promote adherence to high standards of professional conduct by accountancy professionals
                </p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-book-open text-green-600 text-xl"></i>
                </div>
                <h4 class="font-semibold text-paab-navy mb-2">Examination Standards</h4>
                <p class="text-gray-600 text-sm">
                    Evaluate and monitor standards of qualifying examinations, courses and training
                </p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-sync-alt text-green-600 text-xl"></i>
                </div>
                <h4 class="font-semibold text-paab-navy mb-2">CPD Monitoring</h4>
                <p class="text-gray-600 text-sm">
                    Monitor continuing education programmes offered by constituent bodies
                </p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-globe-africa text-green-600 text-xl"></i>
                </div>
                <h4 class="font-semibold text-paab-navy mb-2">International Liaison</h4>
                <p class="text-gray-600 text-sm">
                    Cooperate with local, regional and international bodies on education and licensing
                </p>
            </div>
        </div>

        <!-- IES Section -->
        <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl p-8 mb-8">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="font-display text-2xl font-bold text-paab-navy mb-4">
                        International Education Standards (IES)
                    </h3>
                    <p class="text-gray-600 mb-4">
                        PAAB is a member of the International Federation of Accountants (IFAC) and supports the 
                        adoption and implementation of International Education Standards (IES), bringing quality 
                        of professional education to an internationally recognized benchmark.
                    </p>
                    <p class="text-gray-600 mb-6">
                        The IES provide a comprehensive and integrated approach to accountancy education developed 
                        by the International Accountancy Education Standards Board (IAESB).
                    </p>
                    <a href="https://education.ifac.org/index.html" target="_blank" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors">
                        <i class="fas fa-external-link-alt mr-2"></i>
                        Learn More About IES
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                        <div class="font-display text-3xl font-bold text-green-600 mb-1">IES 1-4</div>
                        <p class="text-gray-600 text-xs">Entry Requirements</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                        <div class="font-display text-3xl font-bold text-green-600 mb-1">IES 5</div>
                        <p class="text-gray-600 text-xs">Practical Experience</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                        <div class="font-display text-3xl font-bold text-green-600 mb-1">IES 6</div>
                        <p class="text-gray-600 text-xs">Assessment</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 text-center shadow-sm">
                        <div class="font-display text-3xl font-bold text-green-600 mb-1">IES 7-8</div>
                        <p class="text-gray-600 text-xs">CPD Requirements</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ADP Section -->
        <div class="bg-paab-navy rounded-2xl p-8">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="inline-flex items-center bg-paab-gold/20 text-paab-gold font-semibold px-4 py-2 rounded-full text-sm mb-4">
                        <i class="fas fa-award mr-2"></i>
                        ADP
                    </div>
                    <h3 class="font-display text-2xl font-bold text-white mb-4">
                        Audit Development Programme
                    </h3>
                    <p class="text-gray-300 mb-4">
                        The Audit Development Programme (ADP) is a period of specialization undertaken by professional 
                        accountants who want to become Registered Auditors. It focuses on practical training for 
                        candidates who have qualified under constituent body exams.
                    </p>
                    <p class="text-gray-300 mb-6">
                        PAAB currently recognizes ICAZ, ACCA, and ICPAZ to provide the ADP qualification. The programme 
                        also provides a route for professional accountants to re-enter public practice after a period of absence.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="inline-flex items-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
                            <i class="fas fa-download mr-2"></i>
                            ADP Application Form
                        </a>
                        <a href="#" class="inline-flex items-center bg-white/10 hover:bg-white/20 text-white font-semibold px-6 py-3 rounded-xl transition-colors">
                            <i class="fas fa-book mr-2"></i>
                            ADP Booklet
                        </a>
                    </div>
                </div>
                <div class="bg-white/10 rounded-xl p-6">
                    <h4 class="font-semibold text-white mb-4">ADP Requirements</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start text-gray-300 text-sm">
                            <i class="fas fa-check-circle text-paab-gold mr-3 mt-1"></i>
                            Qualified under constituent body examination
                        </li>
                        <li class="flex items-start text-gray-300 text-sm">
                            <i class="fas fa-check-circle text-paab-gold mr-3 mt-1"></i>
                            Registered Public Accountant with PAAB
                        </li>
                        <li class="flex items-start text-gray-300 text-sm">
                            <i class="fas fa-check-circle text-paab-gold mr-3 mt-1"></i>
                            Operating at audit executive level
                        </li>
                        <li class="flex items-start text-gray-300 text-sm">
                            <i class="fas fa-check-circle text-paab-gold mr-3 mt-1"></i>
                            PAO letter of good standing
                        </li>
                        <li class="flex items-start text-gray-300 text-sm">
                            <i class="fas fa-check-circle text-paab-gold mr-3 mt-1"></i>
                            Oversight Registered Public Auditor (ORPA)
                        </li>
                    </ul>
                    <div class="mt-6 pt-4 border-t border-white/20">
                        <p class="text-gray-400 text-xs">
                            <i class="fas fa-envelope mr-2"></i>
                            For inquiries: adp@paab.org.zw
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Complaints Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid lg:grid-cols-2">
                <div class="p-8 lg:p-12">
                    <div class="inline-flex items-center bg-red-100 text-red-600 font-semibold px-4 py-2 rounded-full text-sm mb-4">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        Complaints
                    </div>
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-4">
                        How to Lodge a Complaint
                    </h2>
                    <p class="text-gray-600 mb-6">
                        Any member of the public, organisation, or association may lodge a complaint against an 
                        individual registered with PAAB if they feel that the registered member is guilty of 
                        improper conduct.
                    </p>
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 mb-6">
                        <p class="text-amber-800 text-sm">
                            <strong>Note:</strong> Each constituent body is responsible, in the first instance, 
                            for the professional conduct of its members who are registered persons, as per 
                            Section 34 of the PAA Act.
                        </p>
                    </div>
                    <div class="space-y-3">
                        <p class="flex items-center text-gray-600">
                            <i class="fas fa-envelope text-paab-gold mr-3 w-5"></i>
                            complaints@paab.org.zw
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fas fa-phone text-paab-gold mr-3 w-5"></i>
                            +263 24 2795767
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fas fa-map-marker-alt text-paab-gold mr-3 w-5"></i>
                            4 Cork Road, Belgravia, Harare
                        </p>
                    </div>
                </div>
                <div class="bg-paab-navy p-8 lg:p-12 text-white">
                    <h3 class="font-display text-xl font-semibold mb-6">Complaint Process</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                                <span class="text-paab-navy font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Submit Complaint</h4>
                                <p class="text-gray-300 text-sm">Submit written complaint with supporting evidence</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                                <span class="text-paab-navy font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Initial Review</h4>
                                <p class="text-gray-300 text-sm">PAAB reviews complaint and refers to relevant constituent body</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                                <span class="text-paab-navy font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Investigation</h4>
                                <p class="text-gray-300 text-sm">Constituent body investigates and conducts disciplinary proceedings</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4">
                                <span class="text-paab-navy font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Resolution</h4>
                                <p class="text-gray-300 text-sm">Outcome communicated to complainant and appropriate action taken</p>
                            </div>
                        </div>
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
                        Questions About Practice Reviews?
                    </h2>
                    <p class="text-paab-navy/80">
                        Contact our operations team for more information about audit quality monitoring, 
                        financial reporting reviews, or education oversight.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 lg:justify-end">
                    <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-paab-navy hover:bg-paab-blue text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>
                    <a href="{{ url('/resources') }}" class="inline-flex items-center justify-center bg-white hover:bg-gray-100 text-paab-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                        <i class="fas fa-file-pdf mr-2"></i>
                        View Resources
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection