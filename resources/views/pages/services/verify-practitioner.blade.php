@extends('layouts.app')

@section('title', 'Verify Practitioner')
@section('meta_description', 'Verify if an individual or firm is registered with PAAB Zimbabwe')

@section('content')

<!-- Page Header -->
<section class="relative bg-gradient-to-br from-paab-navy via-paab-blue to-paab-navy py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-paab-gold rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-paab-gold rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                <span class="w-2 h-2 bg-paab-gold rounded-full mr-2"></span>
                <span class="text-white text-sm font-medium">Public Register</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                Verify a Practitioner
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Search our register to verify if an individual or firm is registered with PAAB and authorized to practice.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <a href="{{ url('/services/registration') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Services</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">Verify Practitioner</span>
            </nav>
        </div>
    </div>
</section>

<!-- Search Section -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Search Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden -mt-20 relative z-10">
            <div class="p-8">
                <form method="GET" action="{{ route('services.verify-practitioner') }}" id="searchForm">
                    <!-- Search Type Tabs -->
                    <div class="flex bg-gray-100 rounded-xl p-1 mb-6">
                        <button 
                            type="button"
                            onclick="setSearchType('individual')"
                            id="tab-individual"
                            class="flex-1 py-3 px-4 rounded-lg font-medium transition-all {{ $searchType === 'individual' ? 'bg-white text-paab-navy shadow-sm' : 'text-gray-500 hover:text-paab-navy' }}"
                        >
                            <i class="fas fa-user mr-2"></i>
                            Individual
                        </button>
                        <button 
                            type="button"
                            onclick="setSearchType('firm')"
                            id="tab-firm"
                            class="flex-1 py-3 px-4 rounded-lg font-medium transition-all {{ $searchType === 'firm' ? 'bg-white text-paab-navy shadow-sm' : 'text-gray-500 hover:text-paab-navy' }}"
                        >
                            <i class="fas fa-building mr-2"></i>
                            Firm
                        </button>
                    </div>
                    
                    <input type="hidden" name="type" id="searchType" value="{{ $searchType }}">

                    <div class="grid md:grid-cols-4 gap-4">
                        <!-- Search Input -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Search by Name or Registration Number
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    name="query"
                                    id="searchQuery"
                                    value="{{ $query ?? '' }}"
                                    class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                                    placeholder="{{ $searchType === 'firm' ? 'Enter firm name or registration number...' : 'Enter name or registration number...' }}"
                                >
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-search text-gray-400"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Category Filter -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Category
                            </label>
                            <select 
                                name="category" 
                                id="categoryFilter"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                            >
                                <option value="all" {{ ($category ?? 'all') === 'all' ? 'selected' : '' }}>All Categories</option>
                                
                                <!-- Individual Categories -->
                                <optgroup label="Individual" id="individualCategories" class="{{ $searchType === 'firm' ? 'hidden' : '' }}">
                                    <option value="public_auditor" {{ ($category ?? '') === 'public_auditor' ? 'selected' : '' }}>Public Auditor</option>
                                    <option value="public_accountant" {{ ($category ?? '') === 'public_accountant' ? 'selected' : '' }}>Public Accountant</option>
                                    <option value="general_accountant" {{ ($category ?? '') === 'general_accountant' ? 'selected' : '' }}>General Accountant</option>
                                    <option value="tax_accountant" {{ ($category ?? '') === 'tax_accountant' ? 'selected' : '' }}>Tax Accountant</option>
                                </optgroup>
                                
                                <!-- Firm Categories -->
                                <optgroup label="Firm" id="firmCategories" class="{{ $searchType === 'individual' ? 'hidden' : '' }}">
                                    <option value="audit" {{ ($category ?? '') === 'audit' ? 'selected' : '' }}>Audit Firm</option>
                                    <option value="accounting" {{ ($category ?? '') === 'accounting' ? 'selected' : '' }}>Accounting Firm</option>
                                    <option value="tax" {{ ($category ?? '') === 'tax' ? 'selected' : '' }}>Tax Firm</option>
                                </optgroup>
                            </select>
                        </div>

                        <!-- Search Button -->
                        <div class="flex items-end">
                            <button 
                                type="submit"
                                class="w-full bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold py-3 px-6 rounded-xl transition-all duration-300"
                            >
                                <i class="fas fa-search mr-2"></i>
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($query)
            <!-- Results Header -->
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="font-display text-xl font-bold text-paab-navy">
                        Search Results
                    </h2>
                    <p class="text-gray-500 text-sm">
                        @if($results && $results->count() > 0)
                            Found {{ $results->count() }} {{ $results->count() === 1 ? 'result' : 'results' }} for "{{ $query }}"
                        @else
                            No results found for "{{ $query }}"
                        @endif
                    </p>
                </div>
                <a href="{{ route('services.verify-practitioner') }}" class="text-paab-gold hover:text-paab-gold-light font-medium text-sm">
                    <i class="fas fa-times mr-1"></i>
                    Clear Search
                </a>
            </div>

            @if($results && $results->count() > 0)
                <div class="space-y-4">
                    @foreach($results as $result)
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                            <div class="p-6">
                                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                                    <!-- Left: Info -->
                                    <div class="flex items-start space-x-4">
                                        <div class="w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0 {{ $searchType === 'firm' ? 'bg-purple-100' : 'bg-blue-100' }}">
                                            @if($searchType === 'firm')
                                                @if($result->logo)
                                                    <img src="{{ asset('storage/' . $result->logo) }}" alt="" class="w-full h-full object-cover rounded-xl">
                                                @else
                                                    <i class="fas fa-building text-purple-600 text-xl"></i>
                                                @endif
                                            @else
                                                <i class="fas fa-user text-blue-600 text-xl"></i>
                                            @endif
                                        </div>
                                        <div>
                                            <h3 class="font-display text-lg font-bold text-paab-navy">
                                                {{ $result->name }}
                                            </h3>
                                            <p class="text-gray-500 font-mono text-sm">
                                                {{ $result->registration_number }}
                                            </p>
                                            <div class="flex flex-wrap gap-2 mt-2">
                                                <span class="{{ $result->category_color }} text-xs font-semibold px-2 py-1 rounded-full">
                                                    {{ $result->category_label }}
                                                </span>
                                                <span class="{{ $result->status_color }} text-xs font-semibold px-2 py-1 rounded-full">
                                                    {{ $result->status_label }}
                                                </span>
                                                @if($result->expiry_date && !$result->is_valid)
                                                    <span class="bg-red-100 text-red-700 text-xs font-semibold px-2 py-1 rounded-full">
                                                        <i class="fas fa-exclamation-triangle mr-1"></i>
                                                        Expired
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right: Details -->
                                    <div class="flex flex-col lg:items-end gap-2 text-sm">
                                        @if($searchType === 'firm')
                                            @if($result->city)
                                                <div class="text-gray-600">
                                                    <i class="fas fa-map-marker-alt text-gray-400 mr-2"></i>
                                                    {{ $result->city }}
                                                </div>
                                            @endif
                                            @if($result->partners_count)
                                                <div class="text-gray-600">
                                                    <i class="fas fa-users text-gray-400 mr-2"></i>
                                                    {{ $result->partners_count }} {{ $result->partners_count === 1 ? 'Partner' : 'Partners' }}
                                                </div>
                                            @endif
                                            @if($result->managing_partner)
                                                <div class="text-gray-600">
                                                    <i class="fas fa-user-tie text-gray-400 mr-2"></i>
                                                    {{ $result->managing_partner }}
                                                </div>
                                            @endif
                                        @else
                                            @if($result->constituent_body)
                                                <div class="text-gray-600">
                                                    <i class="fas fa-certificate text-gray-400 mr-2"></i>
                                                    {{ $result->constituent_body }}
                                                </div>
                                            @endif
                                            <div class="text-gray-600">
                                                <i class="fas fa-building text-gray-400 mr-2"></i>
                                                {{ $result->display_firm }}
                                            </div>
                                        @endif
                                        @if($result->expiry_date)
                                            <div class="{{ $result->is_valid ? 'text-gray-600' : 'text-red-600 font-semibold' }}">
                                                <i class="fas fa-calendar text-gray-400 mr-2"></i>
                                                Expires: {{ $result->expiry_date->format('M d, Y') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Status Warning -->
                                @if($result->status !== 'active')
                                    <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-xl">
                                        <div class="flex items-start">
                                            <i class="fas fa-exclamation-triangle text-yellow-600 mt-0.5 mr-3"></i>
                                            <div>
                                                <p class="font-semibold text-yellow-800">Registration Status: {{ $result->status_label }}</p>
                                                <p class="text-yellow-700 text-sm">
                                                    @if($result->status === 'suspended')
                                                        This {{ $searchType === 'firm' ? 'firm' : 'practitioner' }} is currently suspended and may not be authorized to practice.
                                                    @elseif($result->status === 'cancelled')
                                                        This registration has been cancelled. The {{ $searchType === 'firm' ? 'firm' : 'practitioner' }} is not authorized to practice.
                                                    @elseif($result->status === 'retired')
                                                        This practitioner has retired from practice.
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($result->expiry_date && !$result->is_valid)
                                    <div class="mt-4 p-4 bg-red-50 border border-red-200 rounded-xl">
                                        <div class="flex items-start">
                                            <i class="fas fa-times-circle text-red-600 mt-0.5 mr-3"></i>
                                            <div>
                                                <p class="font-semibold text-red-800">Certificate Expired</p>
                                                <p class="text-red-700 text-sm">
                                                    The practising certificate expired on {{ $result->expiry_date->format('F d, Y') }}. Please verify current status with PAAB.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="mt-4 p-4 bg-green-50 border border-green-200 rounded-xl">
                                        <div class="flex items-start">
                                            <i class="fas fa-check-circle text-green-600 mt-0.5 mr-3"></i>
                                            <div>
                                                <p class="font-semibold text-green-800">Verified & Active</p>
                                                <p class="text-green-700 text-sm">
                                                    This {{ $searchType === 'firm' ? 'firm' : 'practitioner' }} is registered with PAAB and authorized to practice.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- No Results -->
                <div class="bg-white rounded-2xl shadow-sm p-12 text-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search text-gray-400 text-3xl"></i>
                    </div>
                    <h3 class="font-display text-xl font-semibold text-paab-navy mb-2">No Results Found</h3>
                    <p class="text-gray-600 mb-6 max-w-md mx-auto">
                        We couldn't find any registered {{ $searchType === 'firm' ? 'firms' : 'practitioners' }} matching "{{ $query }}". 
                        Please check the spelling or try a different search term.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('services.verify-practitioner') }}" class="inline-flex items-center justify-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
                            <i class="fas fa-redo mr-2"></i>
                            Try Again
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-6 py-3 rounded-xl transition-colors">
                            <i class="fas fa-envelope mr-2"></i>
                            Contact PAAB
                        </a>
                    </div>
                </div>
            @endif
        @else
            <!-- Initial State - No Search Yet -->
            <div class="bg-white rounded-2xl shadow-sm p-12 text-center">
                <div class="w-20 h-20 bg-paab-gold/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-user-check text-paab-gold text-3xl"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-2">Search the Register</h3>
                <p class="text-gray-600 max-w-md mx-auto">
                    Enter a name or registration number above to verify if an individual or firm is registered with PAAB.
                </p>
            </div>
        @endif
    </div>
</section>

<!-- Information Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Why Verify -->
            <div class="bg-gradient-to-br from-paab-navy to-paab-blue rounded-2xl p-8 text-white">
                <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-xl font-bold mb-4">Why Verify?</h3>
                <ul class="space-y-3 text-gray-300">
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mr-3 mt-1"></i>
                        <span>Ensure you're dealing with qualified professionals</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mr-3 mt-1"></i>
                        <span>Protect yourself from unregistered practitioners</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mr-3 mt-1"></i>
                        <span>Verify compliance with professional standards</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-paab-gold mr-3 mt-1"></i>
                        <span>Access to complaints process if needed</span>
                    </li>
                </ul>
            </div>

            <!-- Registration Categories -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-list-alt text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-xl font-bold text-paab-navy mb-4">Registration Categories</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-white rounded-lg">
                        <span class="text-gray-700">Public Auditor</span>
                        <span class="bg-purple-100 text-purple-700 text-xs font-semibold px-2 py-1 rounded-full">PA</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-white rounded-lg">
                        <span class="text-gray-700">Public Accountant</span>
                        <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded-full">PAcc</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-white rounded-lg">
                        <span class="text-gray-700">General Accountant</span>
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">GA</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-white rounded-lg">
                        <span class="text-gray-700">Tax Accountant</span>
                        <span class="bg-orange-100 text-orange-700 text-xs font-semibold px-2 py-1 rounded-full">TA</span>
                    </div>
                </div>
            </div>

            <!-- Need Help -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-question-circle text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-xl font-bold text-paab-navy mb-4">Need Help?</h3>
                <p class="text-gray-600 mb-6">
                    If you can't find a practitioner or need to report someone practicing without registration, please contact us.
                </p>
                <div class="space-y-3">
                    <a href="tel:+2632427957687" class="flex items-center text-gray-700 hover:text-paab-gold transition-colors">
                        <i class="fas fa-phone text-paab-gold mr-3"></i>
                        +263 24 2795767/8
                    </a>
                    <a href="mailto:info@paab.org.zw" class="flex items-center text-gray-700 hover:text-paab-gold transition-colors">
                        <i class="fas fa-envelope text-paab-gold mr-3"></i>
                        info@paab.org.zw
                    </a>
                    <a href="{{ route('contact') }}" class="flex items-center text-gray-700 hover:text-paab-gold transition-colors">
                        <i class="fas fa-comment-alt text-paab-gold mr-3"></i>
                        Contact Form
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Notice -->
<section class="py-8 bg-red-50 border-y border-red-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-start md:items-center">
            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center flex-shrink-0 mr-4">
                <i class="fas fa-exclamation-triangle text-red-600"></i>
            </div>
            <div>
                <h4 class="font-semibold text-red-800">Important Notice</h4>
                <p class="text-red-700 text-sm">
                    It is a criminal offence for any person to practice as an accountant or auditor without being registered with PAAB. 
                    If you suspect someone is practicing illegally, please report them to 
                    <a href="mailto:complaints@paab.org.zw" class="underline font-semibold">complaints@paab.org.zw</a>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    function setSearchType(type) {
        document.getElementById('searchType').value = type;
        
        // Update tabs
        const tabIndividual = document.getElementById('tab-individual');
        const tabFirm = document.getElementById('tab-firm');
        
        if (type === 'individual') {
            tabIndividual.classList.add('bg-white', 'text-paab-navy', 'shadow-sm');
            tabIndividual.classList.remove('text-gray-500');
            tabFirm.classList.remove('bg-white', 'text-paab-navy', 'shadow-sm');
            tabFirm.classList.add('text-gray-500');
        } else {
            tabFirm.classList.add('bg-white', 'text-paab-navy', 'shadow-sm');
            tabFirm.classList.remove('text-gray-500');
            tabIndividual.classList.remove('bg-white', 'text-paab-navy', 'shadow-sm');
            tabIndividual.classList.add('text-gray-500');
        }
        
        // Update placeholder
        const searchInput = document.getElementById('searchQuery');
        searchInput.placeholder = type === 'firm' 
            ? 'Enter firm name or registration number...' 
            : 'Enter name or registration number...';
        
        // Update category options visibility
        const categorySelect = document.getElementById('categoryFilter');
        categorySelect.value = 'all'; // Reset to all
        
        // Show/hide appropriate option groups
        const individualOptions = document.getElementById('individualCategories');
        const firmOptions = document.getElementById('firmCategories');
        
        if (type === 'individual') {
            individualOptions.style.display = '';
            firmOptions.style.display = 'none';
        } else {
            individualOptions.style.display = 'none';
            firmOptions.style.display = '';
        }
    }
</script>
@endpush