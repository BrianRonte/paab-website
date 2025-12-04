@extends('layouts.admin')

@section('title', 'Add New Firm')

@section('content')

<!-- Page Header -->
<div class="flex items-center justify-between mb-8">
    <div>
        <a href="{{ route('admin.firms.index') }}" class="text-gray-500 hover:text-gray-700 transition-colors mb-2 inline-flex items-center">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to Firms
        </a>
        <h1 class="text-2xl font-bold text-gray-900">Add New Firm</h1>
    </div>
</div>

<!-- Form -->
<form action="{{ route('admin.firms.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Basic Information -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Basic Information</h3>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <!-- Name -->
                    <div class="md:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Firm Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all @error('name') border-red-500 @enderror"
                            placeholder="e.g. ABC Chartered Accountants"
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
                            placeholder="e.g. PAAB/F/001"
                        >
                        @error('registration_number')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Managing Partner -->
                    <div>
                        <label for="managing_partner" class="block text-sm font-medium text-gray-700 mb-2">
                            Managing Partner
                        </label>
                        <input 
                            type="text" 
                            id="managing_partner" 
                            name="managing_partner" 
                            value="{{ old('managing_partner') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                            placeholder="e.g. John Smith"
                        >
                    </div>

                    <!-- Partners Count -->
                    <div>
                        <label for="partners_count" class="block text-sm font-medium text-gray-700 mb-2">
                            Number of Partners
                        </label>
                        <input 
                            type="number" 
                            id="partners_count" 
                            name="partners_count" 
                            value="{{ old('partners_count', 1) }}"
                            min="1"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
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
                            <option value="audit" {{ old('category') == 'audit' ? 'selected' : '' }}>Audit Firm</option>
                            <option value="accounting" {{ old('category') == 'accounting' ? 'selected' : '' }}>Accounting Firm</option>
                            <option value="tax" {{ old('category') == 'tax' ? 'selected' : '' }}>Tax Firm</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Contact Information</h3>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <!-- Address -->
                    <div class="md:col-span-2">
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                            Address
                        </label>
                        <textarea 
                            id="address" 
                            name="address" 
                            rows="2"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all resize-none"
                            placeholder="Full address"
                        >{{ old('address') }}</textarea>
                    </div>

                    <!-- City -->
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700 mb-2">
                            City
                        </label>
                        <input 
                            type="text" 
                            id="city" 
                            name="city" 
                            value="{{ old('city') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                            placeholder="e.g. Harare"
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
                            placeholder="e.g. +263 24 2123456"
                        >
                    </div>

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
                            placeholder="e.g. info@firm.co.zw"
                        >
                    </div>

                    <!-- Website -->
                    <div>
                        <label for="website" class="block text-sm font-medium text-gray-700 mb-2">
                            Website
                        </label>
                        <input 
                            type="url" 
                            id="website" 
                            name="website" 
                            value="{{ old('website') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                            placeholder="e.g. https://www.firm.co.zw"
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
                            <span class="text-gray-700">Featured Firm</span>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="is_featured" value="1" class="sr-only peer" {{ old('is_featured') ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-paab-gold/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-paab-gold"></div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Logo Upload -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Firm Logo</h3>
                
                <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-paab-gold transition-colors">
                    <input 
                        type="file" 
                        id="logo" 
                        name="logo" 
                        accept="image/*"
                        class="hidden"
                        onchange="previewImage(this)"
                    >
                    <label for="logo" class="cursor-pointer">
                        <div id="image-preview" class="hidden mb-4">
                            <img src="" alt="Preview" class="max-h-32 mx-auto rounded-lg">
                        </div>
                        <div id="upload-placeholder">
                            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-cloud-upload-alt text-gray-400 text-xl"></i>
                            </div>
                            <p class="text-gray-600 text-sm">Click to upload logo</p>
                            <p class="text-gray-400 text-xs mt-1">PNG, JPG up to 1MB</p>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold py-4 rounded-xl transition-colors">
                <i class="fas fa-save mr-2"></i>
                Save Firm
            </button>
        </div>
    </div>
</form>

@endsection

@push('scripts')
<script>
    function previewImage(input) {
        const preview = document.getElementById('image-preview');
        const placeholder = document.getElementById('upload-placeholder');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.querySelector('img').src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush