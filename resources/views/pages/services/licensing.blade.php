@extends('layouts.app')

@section('title', 'Licensing')
@section('meta_description', 'Practising certificate renewal and licensing information for PAAB registered practitioners')

@section('content')

@include('partials.page-header', [
    'title' => 'Licensing',
    'description' => 'Annual practising certificate renewal for registered practitioners and firms.',
    'badge' => 'Services',
    'backgroundImage' => asset('images/headers/services-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'Services'],
        ['label' => 'Licensing']
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
                <span class="text-white text-sm font-medium">Services</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Licensing & Practising Certificates
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Obtain and renew your practising certificate to legally offer accountancy services in Zimbabwe.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-gray-400">Services</span>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Licensing</span>
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
            <a href="{{ url('/services/licensing') }}" class="flex-shrink-0 px-6 py-4 text-paab-gold border-b-2 border-paab-gold font-semibold">
                Licensing
            </a>
            <a href="{{ url('/services/practice-review') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Practice Review
            </a>
            <a href="{{ url('/services/verify-practitioner') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
                Verify Practitioner
            </a>
        </div>
    </div>
</section>

<!-- Licence Types -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                Types of Practising Certificates
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                PAAB issues practising certificates that authorize registered professionals to offer services to the public.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Individual Certificate -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                <div class="bg-paab-navy p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-14 h-14 bg-paab-gold rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-user-tie text-paab-navy text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-display text-xl font-semibold text-white">Individual Certificate</h3>
                                <p class="text-gray-300 text-sm">For registered practitioners</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-6">
                        Issued to individual registered practitioners authorizing them to offer accountancy 
                        services in their personal capacity or as employees of registered firms.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-600">Valid for one calendar year</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-600">Renewable annually</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-600">Requires CPD compliance</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-600">PAO good standing required</span>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-semibold">
                        Apply Now
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Firm Certificate -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                <div class="bg-paab-blue p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-14 h-14 bg-paab-gold rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-building text-paab-navy text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-display text-xl font-semibold text-white">Firm Certificate</h3>
                                <p class="text-gray-300 text-sm">For accounting & audit firms</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-6">
                        Issued to registered firms authorizing them to offer accountancy and/or audit 
                        services to the public under the firm's name.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-600">Valid for one calendar year</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-600">Partners must be registered</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-600">Subject to practice reviews</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-600">Professional indemnity required</span>
                        </div>
                    </div>
                    <a href="#" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-semibold">
                        Apply Now
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Renewal Process -->
                <div class="bg-gray-50 rounded-2xl p-8 mb-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        <i class="fas fa-sync-alt text-paab-gold mr-3"></i>
                        Annual Renewal Process
                    </h2>
                    
                    <div class="bg-white rounded-xl p-6 mb-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-calendar-alt text-red-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy">Renewal Deadline</h4>
                                <p class="text-gray-600 text-sm">31st December each year</p>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm">
                            All practising certificates expire on 31st December and must be renewed before this date 
                            to continue practicing in the new year. Late renewals may attract penalties.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                                <span class="text-paab-navy font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Complete Renewal Form</h4>
                                <p class="text-gray-600 text-sm">Download and complete the annual renewal form available on our website.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                                <span class="text-paab-navy font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Obtain PAO Letter</h4>
                                <p class="text-gray-600 text-sm">Get a current letter of good standing from your constituent body.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                                <span class="text-paab-navy font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">CPD Declaration</h4>
                                <p class="text-gray-600 text-sm">Submit your CPD declaration confirming completion of required hours.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                                <span class="text-paab-navy font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Pay Renewal Fee</h4>
                                <p class="text-gray-600 text-sm">Make payment of the prescribed annual fee and retain proof of payment.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                                <span class="text-paab-navy font-bold text-sm">5</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Submit Application</h4>
                                <p class="text-gray-600 text-sm">Submit all documents to PAAB for processing. New certificate will be issued upon approval.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Requirements Table -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden mb-8">
                    <div class="bg-paab-navy p-6">
                        <h2 class="font-display text-xl font-semibold text-white">
                            <i class="fas fa-clipboard-list text-paab-gold mr-3"></i>
                            Licensing Requirements by Category
                        </h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-paab-navy">Requirement</th>
                                    <th class="px-6 py-4 text-center text-sm font-semibold text-paab-navy">Public Auditor</th>
                                    <th class="px-6 py-4 text-center text-sm font-semibold text-paab-navy">Public Accountant</th>
                                    <th class="px-6 py-4 text-center text-sm font-semibold text-paab-navy">General/Tax</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-600">PAO Membership</td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-600">ADP Completion</td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-minus text-gray-400"></i></td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-minus text-gray-400"></i></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-600">Professional Indemnity</td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                                    <td class="px-6 py-4 text-center">Recommended</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-600">Annual CPD Hours</td>
                                    <td class="px-6 py-4 text-center">40 hours</td>
                                    <td class="px-6 py-4 text-center">40 hours</td>
                                    <td class="px-6 py-4 text-center">20 hours</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-600">Practice Review</td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                                    <td class="px-6 py-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                                    <td class="px-6 py-4 text-center">As required</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- CPD Requirements -->
                <div class="bg-white rounded-2xl shadow-sm p-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        <i class="fas fa-graduation-cap text-paab-gold mr-3"></i>
                        Continuing Professional Development (CPD)
                    </h2>
                    
                    <p class="text-gray-600 mb-6">
                        All registered practitioners must complete a minimum number of CPD hours annually to 
                        maintain their practising certificates. CPD ensures practitioners stay current with 
                        developments in the profession.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-paab-light rounded-xl p-6">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mr-3">
                                    <span class="font-bold text-paab-navy">40</span>
                                </div>
                                <h4 class="font-semibold text-paab-navy">Public Auditors & Accountants</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Minimum 40 hours per year, of which at least 20 hours must be verifiable/structured learning.</p>
                        </div>

                        <div class="bg-paab-light rounded-xl p-6">
                            <div class="flex items-center mb-3">
                                <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mr-3">
                                    <span class="font-bold text-paab-navy">20</span>
                                </div>
                                <h4 class="font-semibold text-paab-navy">General & Tax Accountants</h4>
                            </div>
                            <p class="text-gray-600 text-sm">Minimum 20 hours per year, of which at least 10 hours must be verifiable/structured learning.</p>
                        </div>
                    </div>

                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                            <p class="text-blue-700 text-sm">
                                <strong>Note:</strong> CPD activities include seminars, workshops, conferences, online courses, 
                                self-study, and other learning activities relevant to the profession. Records must be maintained 
                                for at least 3 years.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Renewal Reminder -->
                <div class="bg-gradient-to-br from-paab-gold to-paab-gold-light rounded-2xl p-6 mb-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-paab-navy rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-bell text-paab-gold"></i>
                        </div>
                        <h3 class="font-display font-semibold text-paab-navy">Renewal Reminder</h3>
                    </div>
                    <p class="text-paab-navy/80 text-sm mb-4">
                        2025 renewals are now open. Don't wait until the deadline - renew early to avoid penalties.
                    </p>
                    <a href="#" class="inline-flex items-center bg-paab-navy text-white font-semibold px-6 py-3 rounded-xl hover:bg-paab-blue transition-colors w-full justify-center">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Renew Now
                    </a>
                </div>

                <!-- Downloads -->
                <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
                    <h3 class="font-display text-lg font-semibold text-paab-navy mb-4">
                        <i class="fas fa-download text-paab-gold mr-2"></i>
                        Downloads
                    </h3>
                    <div class="space-y-3">
                        <a href="#" class="flex items-center p-3 bg-gray-50 hover:bg-paab-light rounded-xl transition-colors group">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-file-pdf text-red-500"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-paab-navy group-hover:text-paab-gold">Individual Renewal Form</p>
                                <p class="text-xs text-gray-500">PDF, 245 KB</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-paab-gold"></i>
                        </a>

                        <a href="#" class="flex items-center p-3 bg-gray-50 hover:bg-paab-light rounded-xl transition-colors group">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-file-pdf text-red-500"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-paab-navy group-hover:text-paab-gold">Firm Renewal Form</p>
                                <p class="text-xs text-gray-500">PDF, 312 KB</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-paab-gold"></i>
                        </a>

                        <a href="#" class="flex items-center p-3 bg-gray-50 hover:bg-paab-light rounded-xl transition-colors group">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-file-pdf text-red-500"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-paab-navy group-hover:text-paab-gold">CPD Declaration Form</p>
                                <p class="text-xs text-gray-500">PDF, 128 KB</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-paab-gold"></i>
                        </a>

                        <a href="#" class="flex items-center p-3 bg-gray-50 hover:bg-paab-light rounded-xl transition-colors group">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-file-pdf text-red-500"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-paab-navy group-hover:text-paab-gold">Fee Schedule 2025</p>
                                <p class="text-xs text-gray-500">PDF, 98 KB</p>
                            </div>
                            <i class="fas fa-download text-gray-400 group-hover:text-paab-gold"></i>
                        </a>
                    </div>
                </div>

                <!-- Payment Details -->
                <div class="bg-paab-navy rounded-2xl p-6 mb-8 text-white">
                    <h3 class="font-display text-lg font-semibold mb-4">
                        <i class="fas fa-credit-card text-paab-gold mr-2"></i>
                        Payment Details
                    </h3>
                    <div class="space-y-3 text-sm">
                        <div>
                            <p class="text-gray-400">Account Name</p>
                            <p class="font-medium">Public Accountants and Auditors Board</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Bank</p>
                            <p class="font-medium">FBC Bank</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Branch</p>
                            <p class="font-medium">Africa Unity Square</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Account Number</p>
                            <p class="font-medium">0100208495000</p>
                        </div>
                        <div>
                            <p class="text-gray-400">Swift Code</p>
                            <p class="font-medium">SCBLZWHXXXX</p>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <h3 class="font-display text-lg font-semibold text-paab-navy mb-4">
                        <i class="fas fa-headset text-paab-gold mr-2"></i>
                        Need Assistance?
                    </h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Contact our licensing department for help with your renewal.
                    </p>
                    <div class="space-y-2 text-sm">
                        <p class="flex items-center text-gray-600">
                            <i class="fas fa-envelope text-paab-gold mr-3 w-4"></i>
                            licensing@paab.org.zw
                        </p>
                        <p class="flex items-center text-gray-600">
                            <i class="fas fa-phone text-paab-gold mr-3 w-4"></i>
                            +263 24 2795767
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Late Renewal Warning -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-red-50 border border-red-200 rounded-2xl p-8">
            <div class="grid md:grid-cols-3 gap-8 items-center">
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mr-4">
                        <i class="fas fa-exclamation-triangle text-red-500 text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-display font-semibold text-red-700">Late Renewal Penalties</h3>
                        <p class="text-red-600 text-sm">Avoid additional costs</p>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <p class="text-red-700 mb-4">
                        Renewals submitted after 31st December will attract late payment penalties. Additionally, 
                        practitioners who fail to renew on time will be removed from the register and will not be 
                        authorized to practice until their certificates are renewed.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <span class="bg-red-100 text-red-700 text-sm px-4 py-2 rounded-lg">
                            <i class="fas fa-calendar-times mr-2"></i>January: 10% penalty
                        </span>
                        <span class="bg-red-100 text-red-700 text-sm px-4 py-2 rounded-lg">
                            <i class="fas fa-calendar-times mr-2"></i>February: 20% penalty
                        </span>
                        <span class="bg-red-100 text-red-700 text-sm px-4 py-2 rounded-lg">
                            <i class="fas fa-calendar-times mr-2"></i>March onwards: 30% penalty
                        </span>
                    </div>
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
                Keep Your Practice Legal
            </h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                Ensure you have a valid practising certificate before offering accountancy services to the public.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center justify-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                    <i class="fas fa-sync-alt mr-2"></i>
                    Renew Certificate
                </a>
                <a href="{{ url('/services/verify-practitioner') }}" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                    <i class="fas fa-search mr-2"></i>
                    Verify Your Status
                </a>
            </div>
        </div>
    </div>
</section>

@endsection