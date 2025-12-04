@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Contact the Public Accountants and Auditors Board (PAAB) Zimbabwe')

@section('content')

@include('partials.page-header', [
    'title' => 'Contact Us',
    'description' => 'Get in touch with PAAB. We\'re here to help with your inquiries.',
    'badge' => 'Get In Touch',
    'backgroundImage' => asset('images/headers/contact-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'Contact']
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
                <span class="text-white text-sm font-medium">Get In Touch</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Contact Us
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Have questions or need assistance? We're here to help. Reach out to us through any of the channels below.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Contact Us</span>
            </nav>
        </div>
    </div>
</section>

<!-- Contact Cards -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 -mt-32 relative z-10">
            <!-- Address Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-paab-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">Visit Us</h3>
                <p class="text-gray-600 text-sm">
                72 Harare Drive, Northwood<br> Mt Pleasant,<br>
                    Harare, Zimbabwe
                </p>
            </div>

            <!-- Phone Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-paab-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">Call Us</h3>
                <p class="text-gray-600 text-sm">
                    <a href="tel:+2634301063" class="hover:text-paab-gold transition-colors">+263 4 301 063</a><br>
                    <a href="tel:+2634301095" class="hover:text-paab-gold transition-colors">+263 4 301 095</a><br>
                    <a href="tel:+2638644106548" class="hover:text-paab-gold transition-colors">+263 8644 106 548</a>
                </p>
            </div>

            <!-- Email Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-paab-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">Email Us</h3>
                <p class="text-gray-600 text-sm">
                    <a href="mailto:info@paab.org.zw" class="hover:text-paab-gold transition-colors">info@paab.org.zw</a><br>
                    <a href="mailto:complaints@paab.org.zw" class="hover:text-paab-gold transition-colors">complaints@paab.org.zw</a>
                </p>
            </div>

            <!-- Hours Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-paab-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-paab-gold text-2xl"></i>
                </div>
                <h3 class="font-display font-semibold text-paab-navy mb-2">Office Hours</h3>
                <p class="text-gray-600 text-sm">
                    Monday - Friday<br>
                    8:00 AM - 4:30 PM
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">
                <h2 class="font-display text-2xl font-bold text-paab-navy mb-2">Send Us a Message</h2>
                <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>

                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-xl mb-6 flex items-center">
                        <i class="fas fa-check-circle text-green-500 text-xl mr-3"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-xl mb-6">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-exclamation-circle text-red-500 text-xl mr-3"></i>
                            <span class="font-semibold">Please correct the following errors:</span>
                        </div>
                        <ul class="list-disc list-inside text-sm ml-8">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    value="{{ old('name') }}"
                                    required 
                                    class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all duration-300 @error('name') border-red-500 @enderror"
                                    placeholder="John Doe"
                                >
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                    required 
                                    class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all duration-300 @error('email') border-red-500 @enderror"
                                    placeholder="john@example.com"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    name="phone" 
                                    value="{{ old('phone') }}"
                                    class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all duration-300"
                                    placeholder="+263 XX XXX XXXX"
                                >
                            </div>
                        </div>
                        <div>
                            <label for="inquiry_type" class="block text-sm font-medium text-gray-700 mb-2">
                                Inquiry Type <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-list text-gray-400"></i>
                                </div>
                                <select 
                                    id="inquiry_type" 
                                    name="inquiry_type" 
                                    required
                                    class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all duration-300 appearance-none bg-white"
                                >
                                    <option value="">Select an option</option>
                                    <option value="registration" {{ old('inquiry_type') == 'registration' ? 'selected' : '' }}>Registration</option>
                                    <option value="licensing" {{ old('inquiry_type') == 'licensing' ? 'selected' : '' }}>Licensing & Certificates</option>
                                    <option value="standards" {{ old('inquiry_type') == 'standards' ? 'selected' : '' }}>Standards & Compliance</option>
                                    <option value="complaints" {{ old('inquiry_type') == 'complaints' ? 'selected' : '' }}>Complaints</option>
                                    <option value="verification" {{ old('inquiry_type') == 'verification' ? 'selected' : '' }}>Practitioner Verification</option>
                                    <option value="general" {{ old('inquiry_type') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                                    <option value="other" {{ old('inquiry_type') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <i class="fas fa-chevron-down text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                            Subject <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-tag text-gray-400"></i>
                            </div>
                            <input 
                                type="text" 
                                id="subject" 
                                name="subject" 
                                value="{{ old('subject') }}"
                                required 
                                class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all duration-300 @error('subject') border-red-500 @enderror"
                                placeholder="How can we help you?"
                            >
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            Message <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="5" 
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all duration-300 resize-none @error('message') border-red-500 @enderror"
                                placeholder="Please describe your inquiry in detail..."
                            >{{ old('message') }}</textarea>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="privacy" 
                            name="privacy" 
                            required
                            class="mt-1 h-4 w-4 text-paab-gold border-gray-300 rounded focus:ring-paab-gold"
                        >
                        <label for="privacy" class="ml-3 text-sm text-gray-600">
                            I agree to the <a href="#" class="text-paab-gold hover:underline">Privacy Policy</a> and consent to PAAB processing my personal data.
                        </label>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold py-4 rounded-xl transition-all duration-300 hover:shadow-lg flex items-center justify-center"
                    >
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info & Map -->
            <div class="space-y-8">
                <!-- Info Box -->
                <div class="bg-paab-navy rounded-2xl p-8 text-white">
                    <h3 class="font-display text-xl font-semibold mb-6">Contact Information</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-paab-gold/20 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-building text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Head Office</h4>
                                <p class="text-gray-300">
                                72 Harare Drive, Northwood, Mt Pleasant<br>
                                    Harare, Zimbabwe
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-paab-gold/20 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-phone-alt text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Phone Numbers</h4>
                                <p class="text-gray-300">
                                    <a href="tel:+2634301063" class="hover:text-paab-gold transition-colors">+263 4 301 063</a><br>
                                    <a href="tel:+2634301095" class="hover:text-paab-gold transition-colors">+263 4 301 095</a><br>
                                    <a href="tel:+2638644106548" class="hover:text-paab-gold transition-colors">+263 8644 106 548</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-paab-gold/20 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-envelope text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Email Addresses</h4>
                                <p class="text-gray-300">
                                    General: <a href="mailto:info@paab.org.zw" class="hover:text-paab-gold transition-colors">info@paab.org.zw</a><br>
                                    Complaints: <a href="mailto:complaints@paab.org.zw" class="hover:text-paab-gold transition-colors">complaints@paab.org.zw</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-paab-gold/20 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                                <i class="fas fa-clock text-paab-gold"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Working Hours</h4>
                                <p class="text-gray-300">
                                    Monday - Friday: 8:00 AM - 4:30 PM<br>
                                    Saturday & Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="mt-8 pt-6 border-t border-white/20">
                        <h4 class="font-semibold mb-4">Follow Us</h4>
                        <div class="flex space-x-3">
                            <a href="#" class="w-10 h-10 bg-paab-gold/20 hover:bg-paab-gold rounded-lg flex items-center justify-center transition-colors duration-300 group">
                                <i class="fab fa-facebook-f text-paab-gold group-hover:text-paab-navy"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-paab-gold/20 hover:bg-paab-gold rounded-lg flex items-center justify-center transition-colors duration-300 group">
                                <i class="fab fa-twitter text-paab-gold group-hover:text-paab-navy"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-paab-gold/20 hover:bg-paab-gold rounded-lg flex items-center justify-center transition-colors duration-300 group">
                                <i class="fab fa-linkedin-in text-paab-gold group-hover:text-paab-navy"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-paab-gold/20 hover:bg-paab-gold rounded-lg flex items-center justify-center transition-colors duration-300 group">
                                <i class="fab fa-youtube text-paab-gold group-hover:text-paab-navy"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="p-4 border-b border-gray-100">
                        <h3 class="font-display font-semibold text-paab-navy flex items-center">
                            <i class="fas fa-map-marked-alt text-paab-gold mr-2"></i>
                            Our Location
                        </h3>
                    </div>
                    <div class="h-80">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.7661!2d31.0389!3d-17.8149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDQ4JzUzLjYiUyAzMcKwMDInMjAuMCJF!5e0!3m2!1sen!2szw!4v1234567890"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="grayscale hover:grayscale-0 transition-all duration-500"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Department Contacts -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                Department Contacts
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                For specific inquiries, please contact the relevant department directly.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Registration -->
            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300 border border-transparent hover:border-paab-gold">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-user-plus text-paab-gold text-xl"></i>
                    </div>
                    <h3 class="font-display font-semibold text-paab-navy">Registration</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">
                    For inquiries about registration, practising certificates, and membership.
                </p>
                <a href="mailto:registration@paab.org.zw" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-medium text-sm">
                    <i class="fas fa-envelope mr-2"></i>
                    registration@paab.org.zw
                </a>
            </div>

            <!-- Standards -->
            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300 border border-transparent hover:border-paab-gold">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-book text-paab-gold text-xl"></i>
                    </div>
                    <h3 class="font-display font-semibold text-paab-navy">Standards</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">
                    For inquiries about accounting and auditing standards, IFRS, and IPSAS.
                </p>
                <a href="mailto:standards@paab.org.zw" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-medium text-sm">
                    <i class="fas fa-envelope mr-2"></i>
                    standards@paab.org.zw
                </a>
            </div>

            <!-- Education -->
            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300 border border-transparent hover:border-paab-gold">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-graduation-cap text-paab-gold text-xl"></i>
                    </div>
                    <h3 class="font-display font-semibold text-paab-navy">Education</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">
                    For inquiries about ADP, education requirements, and CPD.
                </p>
                <a href="mailto:education@paab.org.zw" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-medium text-sm">
                    <i class="fas fa-envelope mr-2"></i>
                    education@paab.org.zw
                </a>
            </div>

            <!-- Practice Review -->
            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300 border border-transparent hover:border-paab-gold">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-clipboard-check text-paab-gold text-xl"></i>
                    </div>
                    <h3 class="font-display font-semibold text-paab-navy">Practice Review</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">
                    For inquiries about quality assurance, inspections, and practice reviews.
                </p>
                <a href="mailto:qa@paab.org.zw" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-medium text-sm">
                    <i class="fas fa-envelope mr-2"></i>
                    qa@paab.org.zw
                </a>
            </div>

            <!-- Complaints -->
            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300 border border-transparent hover:border-paab-gold">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-exclamation-triangle text-paab-gold text-xl"></i>
                    </div>
                    <h3 class="font-display font-semibold text-paab-navy">Complaints</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">
                    To lodge a complaint against a registered practitioner or firm.
                </p>
                <a href="mailto:complaints@paab.org.zw" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-medium text-sm">
                    <i class="fas fa-envelope mr-2"></i>
                    complaints@paab.org.zw
                </a>
            </div>

            <!-- General -->
            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300 border border-transparent hover:border-paab-gold">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-info-circle text-paab-gold text-xl"></i>
                    </div>
                    <h3 class="font-display font-semibold text-paab-navy">General Inquiries</h3>
                </div>
                <p class="text-gray-600 text-sm mb-4">
                    For all other inquiries and general information requests.
                </p>
                <a href="mailto:info@paab.org.zw" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-medium text-sm">
                    <i class="fas fa-envelope mr-2"></i>
                    info@paab.org.zw
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Find quick answers to common questions about PAAB services.
            </p>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                    <span class="font-semibold text-paab-navy">How do I register as a practitioner?</span>
                    <i class="fas fa-chevron-down text-paab-gold transition-transform faq-icon"></i>
                </button>
                <div class="faq-content hidden px-6 pb-4">
                    <p class="text-gray-600">
                        To register as a practitioner, you need to be a member of one of the constituent bodies 
                        and meet the requirements set out in the Public Accountants and Auditors Act. 
                        Visit our <a href="{{ url('/services/registration') }}" class="text-paab-gold hover:underline">Registration page</a> 
                        for detailed information and application forms.
                    </p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                    <span class="font-semibold text-paab-navy">How can I verify if an accountant is registered?</span>
                    <i class="fas fa-chevron-down text-paab-gold transition-transform faq-icon"></i>
                </button>
                <div class="faq-content hidden px-6 pb-4">
                    <p class="text-gray-600">
                        You can verify a practitioner's registration status using our 
                        <a href="{{ url('/services/verify-practitioner') }}" class="text-paab-gold hover:underline">Verification Service</a>. 
                        Simply enter the practitioner's name or registration number to check their current status.
                    </p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                    <span class="font-semibold text-paab-navy">How do I lodge a complaint against a practitioner?</span>
                    <i class="fas fa-chevron-down text-paab-gold transition-transform faq-icon"></i>
                </button>
                <div class="faq-content hidden px-6 pb-4">
                    <p class="text-gray-600">
                        Complaints against registered practitioners can be submitted via email to 
                        <a href="mailto:complaints@paab.org.zw" class="text-paab-gold hover:underline">complaints@paab.org.zw</a> 
                        or in writing to our office. Please provide detailed information about the complaint 
                        including relevant documents and evidence.
                    </p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-toggle">
                    <span class="font-semibold text-paab-navy">What are the office hours?</span>
                    <i class="fas fa-chevron-down text-paab-gold transition-transform faq-icon"></i>
                </button>
                <div class="faq-content hidden px-6 pb-4">
                    <p class="text-gray-600">
                        Our office is open Monday to Friday from 8:00 AM to 4:30 PM. We are closed on 
                        weekends and public holidays. For urgent matters outside office hours, please 
                        send an email and we will respond on the next business day.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // FAQ Toggle
    document.querySelectorAll('.faq-toggle').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');
            
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
</script>
@endpush