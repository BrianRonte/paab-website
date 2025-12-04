@extends('layouts.app')

@section('title', 'Standards')
@section('meta_description', 'Accounting, Auditing, Public Sector, and Sustainability Reporting Standards adopted by PAAB Zimbabwe')

@section('content')

@include('partials.page-header', [
    'title' => 'Standards',
    'description' => 'Accounting, auditing, and reporting standards adopted for use in Zimbabwe.',
    'badge' => 'Professional Standards',
    'backgroundImage' => asset('images/headers/standards-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'Standards']
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
                <span class="text-white text-sm font-medium">Technical Standards</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Standards & Frameworks
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                PAAB prescribes accounting, auditing, and reporting standards for use in Zimbabwe, 
                including internationally recognised standards.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Standards</span>
            </nav>
        </div>
    </div>
</section>

<!-- Standards Navigation -->
<section class="bg-white border-b sticky top-[73px] z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto scrollbar-hide -mb-px">
            <a href="#accounting" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Accounting (IFRS)
            </a>
            <a href="#auditing" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Auditing (ISA)
            </a>
            <a href="#public-sector" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Public Sector (IPSAS)
            </a>
            <a href="#sustainability" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Sustainability
            </a>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="font-display text-3xl font-bold text-paab-navy mb-6">
                    Setting Standards for Excellence
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    PAAB has statutory responsibility to prescribe accounting standards, auditing standards, 
                    and other accountancy reporting standards including the use of internationally recognised 
                    standards in Zimbabwe for both the public and private sectors.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Through various technical committees, PAAB evaluates, adopts, and monitors the implementation 
                    of standards to ensure financial reporting quality and audit excellence across Zimbabwe.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="bg-paab-gold/10 text-paab-navy px-4 py-2 rounded-full text-sm font-medium">
                        <i class="fas fa-check-circle text-paab-gold mr-2"></i>IFRS Adopted
                    </span>
                    <span class="bg-paab-gold/10 text-paab-navy px-4 py-2 rounded-full text-sm font-medium">
                        <i class="fas fa-check-circle text-paab-gold mr-2"></i>ISA Compliant
                    </span>
                    <span class="bg-paab-gold/10 text-paab-navy px-4 py-2 rounded-full text-sm font-medium">
                        <i class="fas fa-check-circle text-paab-gold mr-2"></i>IPSAS Aligned
                    </span>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
                    <div class="w-14 h-14 bg-paab-navy rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book text-paab-gold text-xl"></i>
                    </div>
                    <h4 class="font-display font-semibold text-paab-navy mb-1">IFRS</h4>
                    <p class="text-gray-500 text-xs">Financial Reporting</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
                    <div class="w-14 h-14 bg-paab-navy rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search-dollar text-paab-gold text-xl"></i>
                    </div>
                    <h4 class="font-display font-semibold text-paab-navy mb-1">ISA</h4>
                    <p class="text-gray-500 text-xs">Auditing Standards</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
                    <div class="w-14 h-14 bg-paab-navy rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-landmark text-paab-gold text-xl"></i>
                    </div>
                    <h4 class="font-display font-semibold text-paab-navy mb-1">IPSAS</h4>
                    <p class="text-gray-500 text-xs">Public Sector</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
                    <div class="w-14 h-14 bg-paab-navy rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-paab-gold text-xl"></i>
                    </div>
                    <h4 class="font-display font-semibold text-paab-navy mb-1">ISSB</h4>
                    <p class="text-gray-500 text-xs">Sustainability</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Accounting Standards Section -->
<section id="accounting" class="py-16 bg-white scroll-mt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-book text-blue-600 text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="font-display text-2xl font-bold text-paab-navy">Accounting Standards</h2>
                        <p class="text-gray-500">International Financial Reporting Standards (IFRS)</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                    <p class="text-gray-600 leading-relaxed mb-6">
                        The Accounting Standards Committee deals with all technical matters relating to accounting. 
                        PAAB has adopted all IFRS and other pronouncements as issued by the International Accounting 
                        Standards Board (IASB) as the financial reporting framework applicable in Zimbabwe through 
                        Statutory Instrument 62 of 1996.
                    </p>
                    
                    <h4 class="font-semibold text-paab-navy mb-4">Committee Responsibilities:</h4>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Recommending IFRS standards for adoption by the PAAB</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Developing and recommending local pronouncements/guidance to PAAB</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Responding to exposure drafts and other standard-setting projects</p>
                        </div>
                    </div>
                </div>

                <!-- IFRS for SMEs -->
                <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6 mb-8">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-building text-blue-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-blue-800 mb-2">IFRS for SMEs</h4>
                            <p class="text-blue-700 text-sm">
                                PAAB adopted IFRS for SMEs in January 2010, effective for periods commencing on or 
                                after January 1, 2011. This simplified standard is available for qualifying small 
                                and medium-sized entities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Key Standards Table -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden">
                    <div class="bg-paab-navy px-6 py-4">
                        <h4 class="font-semibold text-white">Key Accounting Standards</h4>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                            <div>
                                <p class="font-medium text-paab-navy">Full IFRS Standards</p>
                                <p class="text-gray-500 text-sm">For public interest entities and large companies</p>
                            </div>
                            <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Adopted</span>
                        </div>
                        <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                            <div>
                                <p class="font-medium text-paab-navy">IFRS for SMEs</p>
                                <p class="text-gray-500 text-sm">For small and medium-sized entities</p>
                            </div>
                            <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Adopted</span>
                        </div>
                        <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                            <div>
                                <p class="font-medium text-paab-navy">IAS 29 - Hyperinflation</p>
                                <p class="text-gray-500 text-sm">Financial reporting in hyperinflationary economies</p>
                            </div>
                            <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Applicable</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-paab-navy rounded-2xl p-6 mb-6 text-white sticky top-40">
                    <h4 class="font-display font-semibold mb-4">
                        <i class="fas fa-external-link-alt text-paab-gold mr-2"></i>
                        Resources
                    </h4>
                    <div class="space-y-3">
                        <a href="https://www.ifrs.org" target="_blank" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">IFRS Foundation</span>
                            <i class="fas fa-arrow-right text-paab-gold"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">Reporting Expectations</span>
                            <i class="fas fa-download text-paab-gold"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">PAAB Comment Letters</span>
                            <i class="fas fa-download text-paab-gold"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Auditing Standards Section -->
<section id="auditing" class="py-16 bg-gray-50 scroll-mt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-search-dollar text-purple-600 text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="font-display text-2xl font-bold text-paab-navy">Auditing Standards</h2>
                        <p class="text-gray-500">International Standards on Auditing (ISA)</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-sm mb-8">
                    <p class="text-gray-600 leading-relaxed mb-6">
                        The Committee for Audit Standards deals with all technical matters relating to auditing. 
                        All registered auditors in Zimbabwe are required to apply International Standards on Auditing (ISA) 
                        as mandated by law.
                    </p>
                    
                    <h4 class="font-semibold text-paab-navy mb-4">Committee Responsibilities:</h4>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-purple-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Recommending audit standards for adoption by the PAAB</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-purple-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Developing and recommending local pronouncements/guidance</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-purple-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Responding to exposure drafts from international auditing standards boards</p>
                        </div>
                    </div>
                </div>

                <!-- ISA Categories -->
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-purple-500">
                        <h4 class="font-semibold text-paab-navy mb-3">ISA 200-299</h4>
                        <p class="text-gray-600 text-sm">General Principles & Responsibilities</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-purple-500">
                        <h4 class="font-semibold text-paab-navy mb-3">ISA 300-499</h4>
                        <p class="text-gray-600 text-sm">Risk Assessment & Response</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-purple-500">
                        <h4 class="font-semibold text-paab-navy mb-3">ISA 500-599</h4>
                        <p class="text-gray-600 text-sm">Audit Evidence</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-purple-500">
                        <h4 class="font-semibold text-paab-navy mb-3">ISA 600-699</h4>
                        <p class="text-gray-600 text-sm">Using Work of Others</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-purple-500">
                        <h4 class="font-semibold text-paab-navy mb-3">ISA 700-799</h4>
                        <p class="text-gray-600 text-sm">Audit Conclusions & Reporting</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-purple-500">
                        <h4 class="font-semibold text-paab-navy mb-3">ISA 800-899</h4>
                        <p class="text-gray-600 text-sm">Specialized Areas</p>
                    </div>
                </div>

                <!-- Current Projects -->
                <div class="bg-purple-50 border border-purple-200 rounded-2xl p-6">
                    <h4 class="font-semibold text-purple-800 mb-4">
                        <i class="fas fa-tasks mr-2"></i>
                        Current Projects & Publications
                    </h4>
                    <div class="space-y-4">
                        <a href="#" class="flex items-center justify-between p-4 bg-white rounded-xl hover:shadow-md transition-shadow group">
                            <div>
                                <p class="font-medium text-paab-navy group-hover:text-purple-600">Audit Expectations 2021/2022</p>
                                <p class="text-gray-500 text-sm">Reporting cycle requirements and expectations</p>
                            </div>
                            <i class="fas fa-download text-purple-500"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-4 bg-white rounded-xl hover:shadow-md transition-shadow group">
                            <div>
                                <p class="font-medium text-paab-navy group-hover:text-purple-600">PAAB Comment on LCE Audit</p>
                                <p class="text-gray-500 text-sm">IAASB Exposure Draft on Less Complex Entities</p>
                            </div>
                            <i class="fas fa-download text-purple-500"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-purple-600 rounded-2xl p-6 mb-6 text-white sticky top-40">
                    <h4 class="font-display font-semibold mb-4">
                        <i class="fas fa-external-link-alt text-purple-200 mr-2"></i>
                        Resources
                    </h4>
                    <div class="space-y-3">
                        <a href="https://www.iaasb.org" target="_blank" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">IAASB Website</span>
                            <i class="fas fa-arrow-right text-purple-200"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">Quality Control Standards</span>
                            <i class="fas fa-download text-purple-200"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">Ethical Standards</span>
                            <i class="fas fa-download text-purple-200"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-sm">
                    <h4 class="font-semibold text-paab-navy mb-4">Related Standards</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-purple-500 mr-3"></i>
                            ISQM 1 & 2 - Quality Management
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-purple-500 mr-3"></i>
                            ISRE - Review Engagements
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-purple-500 mr-3"></i>
                            ISAE - Assurance Engagements
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-purple-500 mr-3"></i>
                            ISRS - Related Services
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Public Sector Standards Section -->
<section id="public-sector" class="py-16 bg-white scroll-mt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-landmark text-green-600 text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="font-display text-2xl font-bold text-paab-navy">Public Sector Accounting Standards</h2>
                        <p class="text-gray-500">International Public Sector Accounting Standards (IPSAS)</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                    <p class="text-gray-600 leading-relaxed mb-6">
                        The Public Sector Accounting Standards Committee deals with all technical matters relating 
                        to public sector accounting. PAAB works with government entities to promote the adoption 
                        and implementation of IPSAS standards for improved public financial management.
                    </p>
                    
                    <h4 class="font-semibold text-paab-navy mb-4">Committee Responsibilities:</h4>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Recommending IPSAS standards for adoption by the PAAB</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Developing and recommending local pronouncements/guidance</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Responding to exposure drafts from IPSASB</p>
                        </div>
                    </div>
                </div>

                <!-- PAAB Comment Letters -->
                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden mb-8">
                    <div class="bg-green-600 px-6 py-4">
                        <h4 class="font-semibold text-white">
                            <i class="fas fa-file-alt mr-2"></i>
                            PAAB Comment Letters & Exposure Drafts
                        </h4>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <a href="#" class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors group">
                            <div>
                                <p class="font-medium text-paab-navy group-hover:text-green-600">ED 77 - Measurement</p>
                                <p class="text-gray-500 text-sm">PAAB response to exposure draft</p>
                            </div>
                            <i class="fas fa-download text-green-500"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors group">
                            <div>
                                <p class="font-medium text-paab-navy group-hover:text-green-600">ED 76 - Conceptual Framework Update</p>
                                <p class="text-gray-500 text-sm">Chapter 7: Measurement of Assets and Liabilities</p>
                            </div>
                            <i class="fas fa-download text-green-500"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors group">
                            <div>
                                <p class="font-medium text-paab-navy group-hover:text-green-600">ED 78 - Property, Plant, and Equipment</p>
                                <p class="text-gray-500 text-sm">Proposed IPSAS standard</p>
                            </div>
                            <i class="fas fa-download text-green-500"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors group">
                            <div>
                                <p class="font-medium text-paab-navy group-hover:text-green-600">ED 79 - Non-current Assets Held for Sale</p>
                                <p class="text-gray-500 text-sm">And Discontinued Operations</p>
                            </div>
                            <i class="fas fa-download text-green-500"></i>
                        </a>
                    </div>
                </div>

                <!-- IPSAS Benefits -->
                <div class="bg-green-50 border border-green-200 rounded-2xl p-6">
                    <h4 class="font-semibold text-green-800 mb-4">Benefits of IPSAS Adoption</h4>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <i class="fas fa-chart-line text-green-600 mt-1 mr-3"></i>
                            <p class="text-green-700 text-sm">Improved financial transparency</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-balance-scale text-green-600 mt-1 mr-3"></i>
                            <p class="text-green-700 text-sm">Better accountability</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-globe text-green-600 mt-1 mr-3"></i>
                            <p class="text-green-700 text-sm">International comparability</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-users text-green-600 mt-1 mr-3"></i>
                            <p class="text-green-700 text-sm">Enhanced stakeholder confidence</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-green-600 rounded-2xl p-6 mb-6 text-white sticky top-40">
                    <h4 class="font-display font-semibold mb-4">
                        <i class="fas fa-external-link-alt text-green-200 mr-2"></i>
                        Resources
                    </h4>
                    <div class="space-y-3">
                        <a href="https://www.ipsasb.org" target="_blank" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">IPSASB Website</span>
                            <i class="fas fa-arrow-right text-green-200"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">IPSAS Handbook</span>
                            <i class="fas fa-download text-green-200"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">Implementation Guide</span>
                            <i class="fas fa-download text-green-200"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Reporting Section -->
<section id="sustainability" class="py-16 bg-gray-50 scroll-mt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 bg-teal-100 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-leaf text-teal-600 text-2xl"></i>
                    </div>
                    <div>
                        <h2 class="font-display text-2xl font-bold text-paab-navy">Sustainability Reporting Standards</h2>
                        <p class="text-gray-500">IFRS Sustainability Disclosure Standards</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-sm mb-8">
                    <p class="text-gray-600 leading-relaxed mb-6">
                        The Sustainability Reporting Standards Committee deals with all technical matters relating 
                        to integrated and sustainability standards. PAAB is working on adopting the IFRS Sustainability 
                        Disclosure Standards (IFRS S1 and IFRS S2) for Zimbabwe.
                    </p>
                    
                    <h4 class="font-semibold text-paab-navy mb-4">Committee Responsibilities:</h4>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Recommending sustainability standards for adoption by PAAB</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Developing and recommending local pronouncements/guidance</p>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                            <p class="text-gray-600">Responding to exposure drafts from international standards boards</p>
                        </div>
                    </div>
                </div>

                <!-- Implementation Roadmap -->
                <div class="bg-gradient-to-r from-teal-500 to-teal-600 rounded-2xl p-8 text-white mb-8">
                    <div class="flex items-start mb-6">
                        <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                            <i class="fas fa-road text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-display text-xl font-semibold mb-2">
                                Sustainability Reporting Implementation Roadmap
                            </h3>
                            <p class="text-teal-100 text-sm">Draft for Consultation</p>
                        </div>
                    </div>
                    
                    <p class="text-teal-50 mb-6">
                        The Sustainability Reporting Implementation Roadmap outlines Zimbabwe's proposed approach 
                        for adopting the IFRS Sustainability Disclosure Standards. This draft is published for 
                        market consultation to gather feedback from stakeholders before finalisation.
                    </p>

                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-white/10 rounded-xl p-4">
                            <i class="fas fa-layer-group text-teal-200 mb-2"></i>
                            <p class="text-sm">Phased implementation for different entity categories</p>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4">
                            <i class="fas fa-chart-line text-teal-200 mb-2"></i>
                            <p class="text-sm">Progressive transition to full compliance</p>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4">
                            <i class="fas fa-clipboard-check text-teal-200 mb-2"></i>
                            <p class="text-sm">Guidance on disclosure and assurance requirements</p>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4">
                            <i class="fas fa-globe-africa text-teal-200 mb-2"></i>
                            <p class="text-sm">Alignment with national and global standards</p>
                        </div>
                    </div>

                    <a href="#" class="inline-flex items-center bg-white text-teal-600 font-semibold px-6 py-3 rounded-xl hover:bg-teal-50 transition-colors">
                        <i class="fas fa-download mr-2"></i>
                        Download Roadmap (PDF)
                    </a>
                </div>

                <!-- IFRS S1 & S2 -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm border-t-4 border-teal-500">
                        <h4 class="font-semibold text-paab-navy mb-3">IFRS S1</h4>
                        <p class="text-gray-500 text-sm mb-3">General Requirements for Disclosure of Sustainability-related Financial Information</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Governance disclosures</li>
                            <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Strategy requirements</li>
                            <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Risk management</li>
                            <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Metrics and targets</li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border-t-4 border-teal-500">
                        <h4 class="font-semibold text-paab-navy mb-3">IFRS S2</h4>
                        <p class="text-gray-500 text-sm mb-3">Climate-related Disclosures</p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Climate-related risks</li>
                            <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Climate opportunities</li>
                            <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>Transition plans</li>
                            <li class="flex items-center"><i class="fas fa-check text-teal-500 mr-2"></i>GHG emissions</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-teal-600 rounded-2xl p-6 mb-6 text-white sticky top-40">
                    <h4 class="font-display font-semibold mb-4">
                        <i class="fas fa-external-link-alt text-teal-200 mr-2"></i>
                        Resources
                    </h4>
                    <div class="space-y-3">
                        <a href="https://www.ifrs.org/groups/international-sustainability-standards-board/" target="_blank" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">ISSB Website</span>
                            <i class="fas fa-arrow-right text-teal-200"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">Implementation Roadmap</span>
                            <i class="fas fa-download text-teal-200"></i>
                        </a>
                        <a href="#" class="flex items-center justify-between p-3 bg-white/10 hover:bg-white/20 rounded-xl transition-colors">
                            <span class="text-sm">Consultation Timeline</span>
                            <i class="fas fa-calendar text-teal-200"></i>
                        </a>
                    </div>
                </div>

                <!-- Consultation Notice -->
                <div class="bg-amber-50 border border-amber-200 rounded-2xl p-6">
                    <div class="flex items-start">
                        <i class="fas fa-bullhorn text-amber-500 mt-1 mr-3"></i>
                        <div>
                            <h4 class="font-semibold text-amber-800 mb-2">Open for Consultation</h4>
                            <p class="text-amber-700 text-sm mb-3">
                                We welcome feedback from preparers, auditors, regulators, investors and other stakeholders.
                            </p>
                            <a href="mailto:standards@paab.org.zw" class="text-amber-600 text-sm font-medium hover:underline">
                                Submit feedback →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ethics Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-paab-navy rounded-3xl p-8 md:p-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center bg-paab-gold/20 text-paab-gold font-semibold px-4 py-2 rounded-full text-sm mb-4">
                        <i class="fas fa-shield-alt mr-2"></i>
                        Professional Ethics
                    </div>
                    <h2 class="font-display text-3xl font-bold text-white mb-6">
                        International Code of Ethics
                    </h2>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        All registered practitioners are required to comply with the International Code of Ethics 
                        for Professional Accountants issued by the International Ethics Standards Board for 
                        Accountants (IESBA).
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://www.ethicsboard.org" target="_blank" class="inline-flex items-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            IESBA Website
                        </a>
                        <a href="#" class="inline-flex items-center bg-white/10 hover:bg-white/20 text-white font-semibold px-6 py-3 rounded-xl transition-colors">
                            <i class="fas fa-download mr-2"></i>
                            Ethics Code
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/10 rounded-xl p-5 text-center">
                        <i class="fas fa-balance-scale text-paab-gold text-2xl mb-3"></i>
                        <h4 class="font-semibold text-white text-sm">Integrity</h4>
                    </div>
                    <div class="bg-white/10 rounded-xl p-5 text-center">
                        <i class="fas fa-eye text-paab-gold text-2xl mb-3"></i>
                        <h4 class="font-semibold text-white text-sm">Objectivity</h4>
                    </div>
                    <div class="bg-white/10 rounded-xl p-5 text-center">
                        <i class="fas fa-graduation-cap text-paab-gold text-2xl mb-3"></i>
                        <h4 class="font-semibold text-white text-sm">Competence</h4>
                    </div>
                    <div class="bg-white/10 rounded-xl p-5 text-center">
                        <i class="fas fa-lock text-paab-gold text-2xl mb-3"></i>
                        <h4 class="font-semibold text-white text-sm">Confidentiality</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-paab-gold to-paab-gold-light rounded-3xl p-12">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                        Questions About Standards?
                    </h2>
                    <p class="text-paab-navy/80">
                        Contact our technical team for guidance on applying standards in Zimbabwe.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 lg:justify-end">
                    <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-paab-navy hover:bg-paab-blue text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>
                    <a href="{{ url('/resources') }}" class="inline-flex items-center justify-center bg-white hover:bg-gray-100 text-paab-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                        <i class="fas fa-folder-open mr-2"></i>
                        View Resources
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection