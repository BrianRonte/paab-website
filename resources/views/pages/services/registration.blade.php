@extends('layouts.app')

@section('title', 'Registration')
@section('meta_description', 'Register as a practitioner with PAAB Zimbabwe - requirements, process, and application forms')

@section('content')

@include('partials.page-header', [
    'title' => 'Registration',
    'description' => 'Register as a Public Auditor, Public Accountant, General Accountant, or Tax Accountant with PAAB.',
    'badge' => 'Services',
    'backgroundImage' => asset('images/headers/services-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'Services'],
        ['label' => 'Registration']
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
                Registration
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Register as an accountancy professional with PAAB and join the regulated profession in Zimbabwe.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-gray-400">Services</span>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Registration</span>
            </nav>
        </div>
    </div>
</section>

<!-- Services Navigation -->
<section class="bg-white border-b sticky top-[73px] z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto scrollbar-hide -mb-px">
            <a href="{{ url('/services/registration') }}" class="flex-shrink-0 px-6 py-4 text-paab-gold border-b-2 border-paab-gold font-semibold">
                Registration
            </a>
            <a href="{{ url('/services/licensing') }}" class="flex-shrink-0 px-6 py-4 text-gray-500 hover:text-paab-navy border-b-2 border-transparent hover:border-gray-300 transition-colors">
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

<!-- Introduction -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        Registration with PAAB
                    </h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p class="mb-4">
                            The Public Accountants and Auditors Board (PAAB) is responsible for considering and 
                            determining applications for registration and practising certificates by individuals 
                            and firms in Zimbabwe.
                        </p>
                        <p class="mb-4">
                            To be registered with PAAB, you must be a member in good standing of one of the 
                            <a href="{{ url('/about/constituent-bodies') }}" class="text-paab-gold hover:underline">constituent bodies</a> 
                            recognized by PAAB and meet the requirements set out in the Public Accountants and 
                            Auditors Act [Chapter 27:12].
                        </p>
                        <p>
                            PAAB maintains separate registers for Public Auditors, Public Accountants, General 
                            Accountants, and Tax Accountants, each with specific qualifications and practice rights.
                        </p>
                    </div>
                </div>

                <!-- Registration Categories -->
                <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        Registration Categories
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Public Auditor -->
                        <div class="border border-gray-200 rounded-xl p-6 hover:border-paab-gold transition-colors duration-300">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                    <i class="fas fa-user-tie text-paab-gold text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">Public Auditor</h3>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Authorized to perform statutory audits, express audit opinions, and provide assurance services. 
                                        Must complete the Audit Development Programme (ADP) after qualifying as a Public Accountant.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Statutory Audits</span>
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Audit Opinions</span>
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Assurance Services</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Public Accountant -->
                        <div class="border border-gray-200 rounded-xl p-6 hover:border-paab-gold transition-colors duration-300">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                    <i class="fas fa-calculator text-paab-gold text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">Public Accountant</h3>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Certified to provide public accounting services including financial reporting, advisory, 
                                        and compilation services (excluding statutory audits).
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Financial Reporting</span>
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Advisory Services</span>
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Compilation</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- General Accountant -->
                        <div class="border border-gray-200 rounded-xl p-6 hover:border-paab-gold transition-colors duration-300">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                    <i class="fas fa-file-invoice text-paab-gold text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">General Accountant</h3>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Qualified to provide general accounting and bookkeeping services, maintain financial 
                                        records, and prepare management accounts.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Bookkeeping</span>
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Financial Records</span>
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Management Accounts</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tax Accountant -->
                        <div class="border border-gray-200 rounded-xl p-6 hover:border-paab-gold transition-colors duration-300">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-paab-gold/10 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                    <i class="fas fa-receipt text-paab-gold text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-display font-semibold text-paab-navy text-lg mb-2">Tax Accountant</h3>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Specialized in tax compliance, planning, and advisory services including ZIMRA 
                                        submissions and tax dispute resolution.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Tax Compliance</span>
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">Tax Planning</span>
                                        <span class="bg-paab-light text-paab-navy text-xs px-3 py-1 rounded-full">ZIMRA Submissions</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Requirements -->
                <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        General Requirements
                    </h2>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                                <span class="text-paab-navy font-bold text-sm">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Constituent Body Membership</h4>
                                <p class="text-gray-600 text-sm">Be a member in good standing of a PAAB-recognized constituent body</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                                <span class="text-paab-navy font-bold text-sm">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Professional Qualification</h4>
                                <p class="text-gray-600 text-sm">Hold the required professional qualification for your category</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                                <span class="text-paab-navy font-bold text-sm">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Good Character</h4>
                                <p class="text-gray-600 text-sm">Demonstrate good character and fitness to practice</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                                <span class="text-paab-navy font-bold text-sm">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Application Fee</h4>
                                <p class="text-gray-600 text-sm">Pay the prescribed registration and application fees</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                                <span class="text-paab-navy font-bold text-sm">5</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">Required Documents</h4>
                                <p class="text-gray-600 text-sm">Submit all required documentation with your application</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-paab-gold rounded-full flex items-center justify-center flex-shrink-0 mr-3 mt-1">
                                <span class="text-paab-navy font-bold text-sm">6</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-paab-navy mb-1">CPD Commitment</h4>
                                <p class="text-gray-600 text-sm">Commit to ongoing continuing professional development</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Application Process -->
                <div class="bg-white rounded-2xl shadow-sm p-8">
                    <h2 class="font-display text-2xl font-bold text-paab-navy mb-6">
                        Application Process
                    </h2>
                    
                    <div class="relative">
                        <!-- Timeline -->
                        <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-paab-gold/30"></div>
                        
                        <div class="space-y-8">
                            <div class="relative flex items-start ml-12">
                                <div class="absolute -left-12 w-12 h-12 bg-paab-gold rounded-full flex items-center justify-center">
                                    <span class="text-paab-navy font-bold">1</span>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-6 flex-1">
                                    <h4 class="font-semibold text-paab-navy mb-2">Obtain Application Form</h4>
                                    <p class="text-gray-600 text-sm">
                                        Download the appropriate application form from our website or request one from our office.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex items-start ml-12">
                                <div class="absolute -left-12 w-12 h-12 bg-paab-gold rounded-full flex items-center justify-center">
                                    <span class="text-paab-navy font-bold">2</span>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-6 flex-1">
                                    <h4 class="font-semibold text-paab-navy mb-2">Complete Application</h4>
                                    <p class="text-gray-600 text-sm">
                                        Fill out the application form completely and accurately. Ensure all sections are completed.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex items-start ml-12">
                                <div class="absolute -left-12 w-12 h-12 bg-paab-gold rounded-full flex items-center justify-center">
                                    <span class="text-paab-navy font-bold">3</span>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-6 flex-1">
                                    <h4 class="font-semibold text-paab-navy mb-2">Gather Supporting Documents</h4>
                                    <p class="text-gray-600 text-sm">
                                        Collect all required supporting documents including ID, qualifications, and PAO letter of good standing.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex items-start ml-12">
                                <div class="absolute -left-12 w-12 h-12 bg-paab-gold rounded-full flex items-center justify-center">
                                    <span class="text-paab-navy font-bold">4</span>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-6 flex-1">
                                    <h4 class="font-semibold text-paab-navy mb-2">Submit & Pay</h4>
                                    <p class="text-gray-600 text-sm">
                                        Submit your application with all documents and pay the required fees. Keep proof of payment.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex items-start ml-12">
                                <div class="absolute -left-12 w-12 h-12 bg-paab-gold rounded-full flex items-center justify-center">
                                    <span class="text-paab-navy font-bold">5</span>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-6 flex-1">
                                    <h4 class="font-semibold text-paab-navy mb-2">Processing & Approval</h4>
                                    <p class="text-gray-600 text-sm">
                                        Applications are processed within 5-7 working days. You'll receive confirmation upon approval.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Quick Actions -->
                <div class="bg-paab-navy rounded-2xl p-6 mb-8 text-white">
                    <h3 class="font-display text-lg font-semibold mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <a href="#" class="flex items-center justify-between bg-white/10 hover:bg-white/20 rounded-xl p-4 transition-colors duration-300">
                            <span class="flex items-center">
                                <i class="fas fa-download text-paab-gold mr-3"></i>
                                Application Forms
                            </span>
                            <i class="fas fa-arrow-right text-paab-gold"></i>
                        </a>
                        <a href="{{ url('/services/verify-practitioner') }}" class="flex items-center justify-between bg-white/10 hover:bg-white/20 rounded-xl p-4 transition-colors duration-300">
                            <span class="flex items-center">
                                <i class="fas fa-search text-paab-gold mr-3"></i>
                                Verify Practitioner
                            </span>
                            <i class="fas fa-arrow-right text-paab-gold"></i>
                        </a>
                        <a href="{{ url('/about/constituent-bodies') }}" class="flex items-center justify-between bg-white/10 hover:bg-white/20 rounded-xl p-4 transition-colors duration-300">
                            <span class="flex items-center">
                                <i class="fas fa-building text-paab-gold mr-3"></i>
                                Constituent Bodies
                            </span>
                            <i class="fas fa-arrow-right text-paab-gold"></i>
                        </a>
                    </div>
                </div>

                <!-- Fees Card -->
                <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
                    <h3 class="font-display text-lg font-semibold text-paab-navy mb-4">Registration Fees</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Contact our office for the current fee schedule or download our fees document.
                    </p>
                    <a href="#" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-medium text-sm">
                        <i class="fas fa-file-pdf mr-2"></i>
                        Download Fee Schedule
                    </a>
                </div>

                <!-- Contact Card -->
                <div class="bg-gradient-to-br from-paab-gold to-paab-gold-light rounded-2xl p-6 mb-8">
                    <h3 class="font-display text-lg font-semibold text-paab-navy mb-4">Need Help?</h3>
                    <p class="text-paab-navy/80 text-sm mb-4">
                        Contact our registration department for assistance with your application.
                    </p>
                    <div class="space-y-2 text-sm text-paab-navy/80">
                        <p><i class="fas fa-envelope mr-2"></i>registration@paab.org.zw</p>
                        <p><i class="fas fa-phone mr-2"></i>+263 24 2795767</p>
                    </div>
                </div>

                <!-- Important Notice -->
                <div class="bg-red-50 border border-red-200 rounded-2xl p-6">
                    <div class="flex items-start">
                        <i class="fas fa-exclamation-circle text-red-500 mt-1 mr-3"></i>
                        <div>
                            <h4 class="font-semibold text-red-700 mb-2">Important</h4>
                            <p class="text-red-600 text-sm">
                                Practice without registration is illegal. Ensure you are properly registered before 
                                offering accountancy services to the public.
                            </p>
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
        <div class="bg-paab-navy rounded-3xl p-12 text-center">
            <h2 class="font-display text-3xl font-bold text-white mb-4">
                Ready to Register?
            </h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                Download the application form and start your registration process today.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center justify-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                    <i class="fas fa-download mr-2"></i>
                    Download Application Form
                </a>
                <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                    <i class="fas fa-phone mr-2"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

@endsection