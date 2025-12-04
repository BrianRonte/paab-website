@extends('layouts.app')

@section('title', 'Resources')
@section('meta_description', 'Download PAAB forms, documents, guidelines, and resources')

@section('content')

@include('partials.page-header', [
    'title' => 'Resources',
    'description' => 'Access forms, guidelines, publications, and other resources for practitioners and the public.',
    'badge' => 'Downloads & Documents',
    'backgroundImage' => asset('images/headers/resources-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'Resources']
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
                <span class="text-white text-sm font-medium">Downloads & Documents</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Resources
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Access forms, guidelines, publications, and other resources for practitioners and the public.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Resources</span>
            </nav>
        </div>
    </div>
</section>

<!-- Quick Filter -->
<section class="bg-white border-b sticky top-[73px] z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto scrollbar-hide -mb-px">
            <button class="resource-filter active flex-shrink-0 px-6 py-4 text-paab-gold border-b-2 border-paab-gold font-semibold" data-filter="all">
                All Resources
            </button>
            <button class="resource-filter flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors" data-filter="forms">
                Forms
            </button>
            <button class="resource-filter flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors" data-filter="legislation">
                Legislation
            </button>
            <button class="resource-filter flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors" data-filter="guidelines">
                Guidelines
            </button>
            <button class="resource-filter flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors" data-filter="publications">
                Publications
            </button>
        </div>
    </div>
</section>

<!-- Search Section -->
<section class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <div class="relative">
                <input 
                    type="text" 
                    id="resourceSearch" 
                    class="w-full pl-12 pr-4 py-4 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all shadow-sm"
                    placeholder="Search resources..."
                >
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration Forms Section -->
<section class="py-12 bg-gray-50" data-category="forms">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mr-4">
                <i class="fas fa-file-alt text-paab-gold text-xl"></i>
            </div>
            <div>
                <h2 class="font-display text-2xl font-bold text-paab-navy">Registration Forms</h2>
                <p class="text-gray-500">Application forms for registration with PAAB</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Form PAAB 1 -->
            <div class="resource-item bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group" data-tags="forms registration public accountant">
                <div class="p-6">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Form PAAB 1</h3>
                    <p class="text-gray-500 text-sm mb-4">Application for Registration as a Public Accountant</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">PDF • 245 KB</span>
                        <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Form PAAB 2 -->
            <div class="resource-item bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group" data-tags="forms registration public auditor">
                <div class="p-6">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Form PAAB 2</h3>
                    <p class="text-gray-500 text-sm mb-4">Application for Registration as a Public Auditor</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">PDF • 256 KB</span>
                        <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Form PAAB 3 -->
            <div class="resource-item bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group" data-tags="forms registration general accountant">
                <div class="p-6">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Form PAAB 3</h3>
                    <p class="text-gray-500 text-sm mb-4">Application for Registration as a General Accountant</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">PDF • 238 KB</span>
                        <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Form PAAB 4 -->
            <div class="resource-item bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group" data-tags="forms registration tax accountant">
                <div class="p-6">
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Form PAAB 4</h3>
                    <p class="text-gray-500 text-sm mb-4">Application for Registration as a Tax Accountant</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">PDF • 241 KB</span>
                        <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Licensing & Renewal Forms -->
<section class="py-12 bg-white" data-category="forms">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                <i class="fas fa-id-card text-blue-500 text-xl"></i>
            </div>
            <div>
                <h2 class="font-display text-2xl font-bold text-paab-navy">Licensing & Renewal Forms</h2>
                <p class="text-gray-500">Forms for practising certificates and annual renewals</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Individual Renewal -->
            <div class="resource-item bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="forms licensing renewal individual">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Individual Renewal Form</h3>
                <p class="text-gray-500 text-sm mb-4">Annual practising certificate renewal for individuals</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 198 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- Firm Renewal -->
            <div class="resource-item bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="forms licensing renewal firm">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Firm Renewal Form</h3>
                <p class="text-gray-500 text-sm mb-4">Annual practising certificate renewal for firms</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 215 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- CPD Declaration -->
            <div class="resource-item bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="forms cpd declaration">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">CPD Declaration Form</h3>
                <p class="text-gray-500 text-sm mb-4">Continuing Professional Development declaration</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 156 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- Fee Schedule -->
            <div class="resource-item bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="forms fees schedule">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Fee Schedule 2025</h3>
                <p class="text-gray-500 text-sm mb-4">Current registration and renewal fee structure</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 124 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADP Forms -->
<section class="py-12 bg-gray-50" data-category="forms">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                <i class="fas fa-graduation-cap text-purple-500 text-xl"></i>
            </div>
            <div>
                <h2 class="font-display text-2xl font-bold text-paab-navy">Audit Development Programme (ADP)</h2>
                <p class="text-gray-500">Resources for the ADP programme</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- ADP Application Form -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="forms adp application registration">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">ADP RCA Registration Form</h3>
                <p class="text-gray-500 text-sm mb-4">Application for registration as Registered Candidate Auditor</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 312 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- ADP Booklet -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="guidelines adp booklet programme">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">ADP Programme Booklet</h3>
                <p class="text-gray-500 text-sm mb-4">Comprehensive guide to the Audit Development Programme</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 1.2 MB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- ADP At A Glance -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="guidelines adp overview summary">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">ADP At A Glance</h3>
                <p class="text-gray-500 text-sm mb-4">Quick overview of the ADP programme requirements</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 456 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Legislation Section -->
<section class="py-12 bg-white" data-category="legislation">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                <i class="fas fa-gavel text-green-600 text-xl"></i>
            </div>
            <div>
                <h2 class="font-display text-2xl font-bold text-paab-navy">Legislation & Legal Framework</h2>
                <p class="text-gray-500">Acts, statutory instruments and legal documents</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <!-- PAA Act -->
            <div class="resource-item bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="legislation act paa chapter">
                <div class="flex items-start">
                    <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                        <i class="fas fa-balance-scale text-green-600 text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">
                            Public Accountants and Auditors Act
                        </h3>
                        <p class="text-gray-500 text-sm mb-3">Chapter 27:12 - The principal legislation governing the accountancy profession in Zimbabwe</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">PDF • 856 KB</span>
                            <a href="#" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light text-sm font-medium">
                                <i class="fas fa-download mr-2"></i>
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SI 41 of 2019 -->
            <div class="resource-item bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="legislation statutory instrument si">
                <div class="flex items-start">
                    <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                        <i class="fas fa-file-contract text-green-600 text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">
                            Statutory Instrument 41 of 2019
                        </h3>
                        <p class="text-gray-500 text-sm mb-3">Public Accountants and Auditors (General) Regulations</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">PDF • 324 KB</span>
                            <a href="#" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light text-sm font-medium">
                                <i class="fas fa-download mr-2"></i>
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SI 62 of 1996 -->
            <div class="resource-item bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="legislation statutory instrument ifrs standards">
                <div class="flex items-start">
                    <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                        <i class="fas fa-file-contract text-green-600 text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">
                            Statutory Instrument 62 of 1996
                        </h3>
                        <p class="text-gray-500 text-sm mb-3">Adoption of IFRS as the financial reporting framework</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">PDF • 156 KB</span>
                            <a href="#" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light text-sm font-medium">
                                <i class="fas fa-download mr-2"></i>
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Companies Act -->
            <div class="resource-item bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="legislation act companies">
                <div class="flex items-start">
                    <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                        <i class="fas fa-building text-green-600 text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">
                            Companies and Other Business Entities Act
                        </h3>
                        <p class="text-gray-500 text-sm mb-3">Chapter 24:31 - Requirements for accounting and auditing</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-400">PDF • 2.1 MB</span>
                            <a href="#" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light text-sm font-medium">
                                <i class="fas fa-download mr-2"></i>
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guidelines & Policies Section -->
<section class="py-12 bg-gray-50" data-category="guidelines">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mr-4">
                <i class="fas fa-clipboard-list text-orange-500 text-xl"></i>
            </div>
            <div>
                <h2 class="font-display text-2xl font-bold text-paab-navy">Guidelines & Policies</h2>
                <p class="text-gray-500">Policy documents and guidance notes</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Institutional Accreditation -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="guidelines policy accreditation institutional">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Institutional Accreditation Policy</h3>
                <p class="text-gray-500 text-sm mb-4">Policy for accreditation of professional accountancy bodies</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 524 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- Sustainability Roadmap -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="guidelines sustainability reporting roadmap">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Sustainability Reporting Roadmap</h3>
                <p class="text-gray-500 text-sm mb-4">Implementation roadmap for IFRS S1 & S2 adoption</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 1.8 MB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- CPD Policy -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="guidelines cpd policy continuing education">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">CPD Policy Document</h3>
                <p class="text-gray-500 text-sm mb-4">Continuing Professional Development requirements</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 312 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- Ethics Code -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="guidelines ethics code professional conduct">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Code of Professional Ethics</h3>
                <p class="text-gray-500 text-sm mb-4">Ethical requirements for registered practitioners</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 856 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- Practice Review Manual -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="guidelines practice review quality manual">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Practice Review Manual</h3>
                <p class="text-gray-500 text-sm mb-4">Guidelines for audit quality inspections</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 645 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>

            <!-- Complaints Procedure -->
            <div class="resource-item bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group" data-tags="guidelines complaints procedure disciplinary">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-file-pdf text-red-500 text-xl"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Complaints Procedure Guide</h3>
                <p class="text-gray-500 text-sm mb-4">How to lodge and process complaints</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-400">PDF • 234 KB</span>
                    <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Publications Section -->
<section class="py-12 bg-white" data-category="publications">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mr-4">
                <i class="fas fa-newspaper text-teal-600 text-xl"></i>
            </div>
            <div>
                <h2 class="font-display text-2xl font-bold text-paab-navy">Publications & Reports</h2>
                <p class="text-gray-500">Annual reports, newsletters, and other publications</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Annual Report -->
            <div class="resource-item bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 group" data-tags="publications annual report">
                <div class="h-40 bg-gradient-to-br from-paab-navy to-paab-blue flex items-center justify-center">
                    <i class="fas fa-book text-paab-gold text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Annual Report 2024</h3>
                    <p class="text-gray-500 text-sm mb-4">PAAB's activities and financial statements</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">PDF • 4.2 MB</span>
                        <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Audit Expectations -->
            <div class="resource-item bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 group" data-tags="publications audit expectations report">
                <div class="h-40 bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center">
                    <i class="fas fa-chart-bar text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Audit Expectations Report</h3>
                    <p class="text-gray-500 text-sm mb-4">2021/2022 audit cycle expectations and findings</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">PDF • 1.8 MB</span>
                        <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Registered Firms List -->
            <div class="resource-item bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 group" data-tags="publications registered firms list directory">
                <div class="h-40 bg-gradient-to-br from-green-600 to-green-800 flex items-center justify-center">
                    <i class="fas fa-list-alt text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-semibold text-paab-navy mb-2 group-hover:text-paab-gold transition-colors">Registered Firms Directory</h3>
                    <p class="text-gray-500 text-sm mb-4">List of all PAAB registered audit firms</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-400">PDF • 567 KB</span>
                        <a href="#" class="text-paab-gold hover:text-paab-gold-light">
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- External Links Section -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center mb-8">
            <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mr-4">
                <i class="fas fa-external-link-alt text-indigo-600 text-xl"></i>
            </div>
            <div>
                <h2 class="font-display text-2xl font-bold text-paab-navy">Useful External Links</h2>
                <p class="text-gray-500">Links to relevant organisations and resources</p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="https://www.ifrs.org" target="_blank" class="bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-500 transition-colors">
                    <i class="fas fa-globe text-blue-500 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-1 group-hover:text-paab-gold transition-colors">IFRS Foundation</h3>
                <p class="text-gray-500 text-xs">International Financial Reporting Standards</p>
            </a>

            <a href="https://www.ifac.org" target="_blank" class="bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500 transition-colors">
                    <i class="fas fa-globe text-purple-500 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-1 group-hover:text-paab-gold transition-colors">IFAC</h3>
                <p class="text-gray-500 text-xs">International Federation of Accountants</p>
            </a>

            <a href="https://www.iaasb.org" target="_blank" class="bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors">
                    <i class="fas fa-globe text-green-500 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-1 group-hover:text-paab-gold transition-colors">IAASB</h3>
                <p class="text-gray-500 text-xs">Auditing & Assurance Standards Board</p>
            </a>

            <a href="https://www.ipsasb.org" target="_blank" class="bg-white rounded-xl p-6 hover:shadow-lg transition-all duration-300 group text-center">
                <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-teal-500 transition-colors">
                    <i class="fas fa-globe text-teal-500 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="font-semibold text-paab-navy mb-1 group-hover:text-paab-gold transition-colors">IPSASB</h3>
                <p class="text-gray-500 text-xs">Public Sector Accounting Standards Board</p>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-paab-navy to-paab-blue rounded-3xl p-12">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="font-display text-3xl font-bold text-white mb-4">
                        Can't Find What You're Looking For?
                    </h2>
                    <p class="text-gray-300">
                        Contact us if you need a specific document or have questions about our resources.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 lg:justify-end">
                    <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>
                    <a href="mailto:info@paab.org.zw" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Email Request
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Filter functionality
    const filterButtons = document.querySelectorAll('.resource-filter');
    const sections = document.querySelectorAll('section[data-category]');
    const resourceItems = document.querySelectorAll('.resource-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'text-paab-gold', 'border-paab-gold', 'font-semibold');
                btn.classList.add('text-gray-500', 'border-transparent');
            });
            button.classList.add('active', 'text-paab-gold', 'border-paab-gold', 'font-semibold');
            button.classList.remove('text-gray-500', 'border-transparent');

            const filter = button.dataset.filter;

            if (filter === 'all') {
                sections.forEach(section => section.style.display = 'block');
                resourceItems.forEach(item => item.style.display = 'block');
            } else {
                sections.forEach(section => {
                    if (section.dataset.category === filter) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });

                resourceItems.forEach(item => {
                    if (item.dataset.tags.includes(filter)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        });
    });

    // Search functionality
    const searchInput = document.getElementById('resourceSearch');
    
    searchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase();

        // Reset filter buttons
        filterButtons.forEach(btn => {
            btn.classList.remove('active', 'text-paab-gold', 'border-paab-gold', 'font-semibold');
            btn.classList.add('text-gray-500', 'border-transparent');
        });
        filterButtons[0].classList.add('active', 'text-paab-gold', 'border-paab-gold', 'font-semibold');
        filterButtons[0].classList.remove('text-gray-500', 'border-transparent');

        // Show all sections
        sections.forEach(section => section.style.display = 'block');

        // Filter items
        resourceItems.forEach(item => {
            const tags = item.dataset.tags.toLowerCase();
            const title = item.querySelector('h3').textContent.toLowerCase();
            const desc = item.querySelector('p').textContent.toLowerCase();

            if (tags.includes(query) || title.includes(query) || desc.includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>
@endpush