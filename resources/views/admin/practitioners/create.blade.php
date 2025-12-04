@extends('layouts.admin')

@section('title', 'Add New Practitioner')

@section('content')

<!-- Page Header -->
<div class="flex items-center justify-between mb-8">
    <div>
        <a href="{{ route('admin.practitioners.index') }}" class="text-gray-500 hover:text-gray-700 transition-colors mb-2 inline-flex items-center">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to Practitioners
        </a>
        <h1 class="text-2xl font-bold text-gray-900">Add New Practitioner</h1>
    </div>
</div>

<!-- Form -->
<form action="{{ route('admin.practitioners.store') }}" method="POST">
    @csrf
    
    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Personal Information -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Personal Information</h3>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <!-- Name -->
                    <div class="md:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all @error('name') border-red-500 @enderror"
                            placeholder="e.g. John Smith"
                        >
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Registration Number -->
                    <div>
                        <label for="registration_number" class="block text-sm font-medium text-gray-700 mb-2">
                            Registration Number <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="registration_number" 
                            name="registration_number" 
                            value="{{ old('registration_number') }}"
                            required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all @error('registration_number') border-red-500 @enderror"
                            placeholder="e.g. PAAB/PA/001"
                        >
                        @error('registration_number')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gender -->
                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                            Gender
                        </label>
                        <select 
                            id="gender" 
                            name="gender"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
                            <option value="">Select gender</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                            Category <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="category" 
                            name="category" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
                            <option value="public_auditor" {{ old('category') == 'public_auditor' ? 'selected' : '' }}>Public Auditor</option>
                            <option value="public_accountant" {{ old('category') == 'public_accountant' ? 'selected' : '' }}>Public Accountant</option>
                            <option value="general_accountant" {{ old('category') == 'general_accountant' ? 'selected' : '' }}>General Accountant</option>
                            <option value="tax_accountant" {{ old('category') == 'tax_accountant' ? 'selected' : '' }}>Tax Accountant</option>
                        </select>
                    </div>

                    <!-- Constituent Body -->
                    <div>
                        <label for="constituent_body" class="block text-sm font-medium text-gray-700 mb-2">
                            Constituent Body (PAO)
                        </label>
                        <select 
                            id="constituent_body" 
                            name="constituent_body"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
                            <option value="">Select PAO</option>
                            <option value="ICAZ" {{ old('constituent_body') == 'ICAZ' ? 'selected' : '' }}>ICAZ</option>
                            <option value="ACCA" {{ old('constituent_body') == 'ACCA' ? 'selected' : '' }}>ACCA</option>
                            <option value="CIMA" {{ old('constituent_body') == 'CIMA' ? 'selected' : '' }}>CIMA</option>
                            <option value="ICPAZ" {{ old('constituent_body') == 'ICPAZ' ? 'selected' : '' }}>ICPAZ</option>
                            <option value="SAAA" {{ old('constituent_body') == 'SAAA' ? 'selected' : '' }}>SAAA</option>
                            <option value="IAC" {{ old('constituent_body') == 'IAC' ? 'selected' : '' }}>IAC</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Firm Association -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Firm Association</h3>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <!-- Linked Firm -->
                    <div>
                        <label for="firm_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Select Registered Firm
                        </label>
                        <select 
                            id="firm_id" 
                            name="firm_id"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
                            <option value="">Independent / Not linked</option>
                            @foreach($firms as $firm)
                                <option value="{{ $firm->id }}" {{ old('firm_id') == $firm->id ? 'selected' : '' }}>
                                    {{ $firm->name }} ({{ $firm->registration_number }})
                                </option>
                            @endforeach
                        </select>
                        <p class="text-gray-500 text-xs mt-1">Select if practitioner belongs to a registered firm</p>
                    </div>

                    <!-- Manual Firm Name -->
                    <div>
                        <label for="firm_name" class="block text-sm font-medium text-gray-700 mb-2">
                            Or Enter Firm Name
                        </label>
                        <input 
                            type="text" 
                            id="firm_name" 
                            name="firm_name" 
                            value="{{ old('firm_name') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                            placeholder="e.g. XYZ Accountants"
                        >
                        <p class="text-gray-500 text-xs mt-1">Use if firm is not in the list above</p>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Contact Information</h3>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                            placeholder="e.g. john@example.com"
                        >
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone
                        </label>
                        <input 
                            type="text" 
                            id="phone" 
                            name="phone" 
                            value="{{ old('phone') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                            placeholder="e.g. +263 77 123 4567"
                        >
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Status & Dates -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Status & Registration</h3>
                
                <div class="space-y-4">
                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="status" 
                            name="status" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
                            <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="suspended" {{ old('status') == 'suspended' ? 'selected' : '' }}>Suspended</option>
                            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            <option value="retired" {{ old('status') == 'retired' ? 'selected' : '' }}>Retired</option>
                        </select>
                    </div>

                    <!-- Registration Date -->
                    <div>
                        <label for="registration_date" class="block text-sm font-medium text-gray-700 mb-2">
                            Registration Date
                        </label>
                        <input 
                            type="date" 
                            id="registration_date" 
                            name="registration_date" 
                            value="{{ old('registration_date') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Expiry Date -->
                    <div>
                        <label for="expiry_date" class="block text-sm font-medium text-gray-700 mb-2">
                            Certificate Expiry Date
                        </label>
                        <input 
                            type="date" 
                            id="expiry_date" 
                            name="expiry_date" 
                            value="{{ old('expiry_date') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
                    </div>

                    <!-- Featured -->
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                        <div class="flex items-center">
                            <i class="fas fa-star text-gray-400 mr-3"></i>
                            <span class="text-gray-700">Featured</span>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="is_featured" value="1" class="sr-only peer" {{ old('is_featured') ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-paab-gold/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-paab-gold"></div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold py-4 rounded-xl transition-colors">
                <i class="fas fa-save mr-2"></i>
                Save Practitioner
            </button>
        </div>
    </div>
</form>

@endsection