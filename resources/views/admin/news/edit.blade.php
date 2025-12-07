@extends('layouts.admin')

@section('title', 'Edit Article')

@section('content')

<!-- Page Header -->
<div class="flex items-center justify-between mb-8">
    <div>
        <a href="{{ route('admin.news.index') }}" class="text-gray-500 hover:text-gray-700 transition-colors mb-2 inline-flex items-center">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to News
        </a>
        <h1 class="text-2xl font-bold text-gray-900">Edit Article</h1>
    </div>
    <a href="{{ route('news.show', $news->slug) }}" target="_blank" class="inline-flex items-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium px-4 py-2 rounded-xl transition-colors">
        <i class="fas fa-external-link-alt mr-2"></i>
        View Article
    </a>
</div>

<!-- Form -->
<form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Title -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                    Article Title <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $news->title) }}"
                    required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all @error('title') border-red-500 @enderror"
                    placeholder="Enter article title..."
                >
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Excerpt -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">
                    Excerpt / Summary <span class="text-red-500">*</span>
                </label>
                <textarea 
                    id="excerpt" 
                    name="excerpt" 
                    rows="3" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all resize-none @error('excerpt') border-red-500 @enderror"
                    placeholder="Brief summary of the article..."
                >{{ old('excerpt', $news->excerpt) }}</textarea>
                <p class="text-gray-500 text-sm mt-1">Max 500 characters. This appears in news listings and search results.</p>
                @error('excerpt')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                    Full Content <span class="text-red-500">*</span>
                </label>
                <textarea 
                    id="content" 
                    name="content" 
                    rows="15" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all @error('content') border-red-500 @enderror"
                    placeholder="Write your article content here..."
                >{{ old('content', $news->content) }}</textarea>
                <p class="text-gray-500 text-sm mt-1">Write the full article content. Line breaks will be preserved.</p>
                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Publish Settings -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Publish Settings</h3>
                
                <div class="space-y-4">
                    <!-- Status -->
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                        <div class="flex items-center">
                            <i class="fas fa-eye text-gray-400 mr-3"></i>
                            <span class="text-gray-700">Published</span>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="is_published" value="1" class="sr-only peer" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-paab-gold/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-paab-gold"></div>
                        </label>
                    </div>

                    <!-- Featured -->
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                        <div class="flex items-center">
                            <i class="fas fa-star text-gray-400 mr-3"></i>
                            <span class="text-gray-700">Featured</span>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" name="is_featured" value="1" class="sr-only peer" {{ old('is_featured', $news->is_featured) ? 'checked' : '' }}>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-paab-gold/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-paab-gold"></div>
                        </label>
                    </div>

                    <!-- Publish Date -->
                    <div>
                        <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">
                            Publish Date
                        </label>
                        <input 
                            type="datetime-local" 
                            id="published_at" 
                            name="published_at" 
                            value="{{ old('published_at', $news->published_at ? $news->published_at->format('Y-m-d\TH:i') : '') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                        >
                    </div>
                </div>
            </div>

            <!-- Category & Author -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Details</h3>
                
                <div class="space-y-4">
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
                            <option value="general" {{ old('category', $news->category) == 'general' ? 'selected' : '' }}>General</option>
                            <option value="announcement" {{ old('category', $news->category) == 'announcement' ? 'selected' : '' }}>Announcement</option>
                            <option value="regulation" {{ old('category', $news->category) == 'regulation' ? 'selected' : '' }}>Regulation</option>
                            <option value="event" {{ old('category', $news->category) == 'event' ? 'selected' : '' }}>Event</option>
                            <option value="training" {{ old('category', $news->category) == 'training' ? 'selected' : '' }}>Training</option>
                            <option value="publication" {{ old('category', $news->category) == 'publication' ? 'selected' : '' }}>Publication</option>
                        </select>
                    </div>

                    <!-- Author -->
                    <div>
                        <label for="author" class="block text-sm font-medium text-gray-700 mb-2">
                            Author
                        </label>
                        <input 
                            type="text" 
                            id="author" 
                            name="author" 
                            value="{{ old('author', $news->author) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                            placeholder="Author name"
                        >
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Featured Image</h3>
                
                @if($news->featured_image)
                    <div class="mb-4 relative">
                        <img src="{{ asset('storage/' . $news->featured_image) }}" alt="Current image" class="w-full rounded-xl">
                        <span class="absolute top-2 right-2 bg-black/50 text-white text-xs px-2 py-1 rounded">Current Image</span>
                    </div>
                @endif
                
                <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-paab-gold transition-colors">
                    <input 
                        type="file" 
                        id="featured_image" 
                        name="featured_image" 
                        accept="image/*"
                        class="hidden"
                        onchange="previewImage(this)"
                    >
                    <label for="featured_image" class="cursor-pointer">
                        <div id="image-preview" class="hidden mb-4">
                            <img src="" alt="Preview" class="max-h-48 mx-auto rounded-lg">
                        </div>
                        <div id="upload-placeholder">
                            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-cloud-upload-alt text-gray-400 text-xl"></i>
                            </div>
                            <p class="text-gray-600 text-sm">{{ $news->featured_image ? 'Click to replace image' : 'Click to upload image' }}</p>
                            <p class="text-gray-400 text-xs mt-1">PNG, JPG up to 2MB</p>
                        </div>
                    </label>
                </div>
                @error('featured_image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Buttons -->
            <div class="flex gap-4">
                <button type="submit" class="flex-1 bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold py-4 rounded-xl transition-colors">
                    <i class="fas fa-save mr-2"></i>
                    Update Article
                </button>
            </div>

            <!-- Delete Button -->
            <!-- Form: UPDATE -->
                <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- all your fields --}}

                    <!-- Submit Buttons -->
                    <!-- <div class="flex gap-4">
                        <button type="submit" class="flex-1 ...">
                            <i class="fas fa-save mr-2"></i>
                            Update Article
                        </button>
                    </div> -->
                </form>

                <!-- Separate Form: DELETE (NOT nested) -->
                <form action="{{ route('admin.news.destroy', $news) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this article? This action cannot be undone.');"
                    class="mt-4">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="w-full bg-red-50 hover:bg-red-100 text-red-700 font-medium py-3 rounded-xl transition-colors border border-red-200">
                        <i class="fas fa-trash mr-2"></i>
                        Delete Article
                    </button>
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