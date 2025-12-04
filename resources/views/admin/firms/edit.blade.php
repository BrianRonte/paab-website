@extends('layouts.admin')

@section('title', 'Edit Firm')

@section('content')

<!-- Page Header -->
<div class="flex items-center justify-between mb-8">
    <div>
        <a href="{{ route('admin.firms.index') }}" class="text-gray-500 hover:text-gray-700 transition-colors mb-2 inline-flex items-center">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to Firms
        </a>
        <h1 class="text-2xl font-bold text-gray-900">Edit Firm</h1>
    </div>
</div>

<!-- Form -->
<form action="{{ route('admin.firms.update', $firm) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
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
                            value="{{ old('name', $firm->name) }}"
                            required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all @error('name') border-red-500 @enderror"
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
                            value="{{ old('registration_number', $firm->registration_number) }}"
                            required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all @error('registration_number') border-red-500 @enderror"
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
                            value="{{ old('managing_partner', $firm->managing_partner) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
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
                            value="{{ old('partners_count', $firm->partners_count) }}"
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
                            <option value="audit" {{ old('category', $firm->category) == 'audit' ? 'selected' : '' }}>Audit Firm</option>
                            <option value="accounting" {{ old('category', $firm->category) == 'accounting' ? 'selected' : '' }}>Accounting Firm</option>
                            <option value="tax" {{ old('category', $firm->category) == 'tax' ? 'selected' : '' }}>Tax Firm</option>
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
                        >{{ old('address', $firm->address) }}</textarea>
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
                            value="{{ old('city', $firm->city) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
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
                            value="{{ old('phone', $firm->phone) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
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
                            value="{{ old('email', $firm->email) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
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
                            value="{{ old('website', $firm->website) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
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
                            <option value="active" {{ old('status', $firm->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="suspended" {{ old('status', $firm->status) == 'suspended' ? 'selected' : '' }}>Suspended</option>
                            <option value="cancelled" {{ old('status', $firm->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
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
                            value="{{ old('registration_date', $firm->registration_date?->format('Y-m-d')) }}"
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
                            value="{{ old('expiry_date', $firm->expiry_date?->format('Y-m-d')) }}"
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
                            <input type="checkbox" name="is_featured" value="1" class="sr-only peer" {{ old('is_featured', $firm->is_featured) ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-paab-gold/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-paab-gold"></div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Logo Upload -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Firm Logo</h3>
                
                @if($firm->logo)
                    <div class="mb-4 relative">
                        <img src="{{ asset('storage/' . $firm->logo) }}" alt="Current logo" class="w-full rounded-xl">
                        <span class="absolute top-2 right-2 bg-black/50 text-white text-xs px-2 py-1 rounded">Current</span>
                    </div>
                @endif
                
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
                            <p class="text-gray-600 text-sm">{{ $firm->logo ? 'Click to replace' : 'Click to upload' }}</p>
                            <p class="text-gray-400 text-xs mt-1">PNG, JPG up to 1MB</p>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Submit Buttons -->
            <button type="submit" class="w-full bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold py-4 rounded-xl transition-colors">
                <i class="fas fa-save mr-2"></i>
                Update Firm
            </button>

            <!-- Delete Button -->
            <form action="{{ route('admin.firms.destroy', $firm) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this firm?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full bg-red-50 hover:bg-red-100 text-red-600 font-medium py-3 rounded-xl transition-colors border border-red-200">
                    <i class="fas fa-trash mr-2"></i>
                    Delete Firm
                </button>
            </form>
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