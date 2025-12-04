@extends('layouts.app')

@section('title', $article->title)
@section('meta_description', $article->excerpt)

@section('content')

<!-- Custom Header for Article -->
<section class="relative py-16 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        @if($article->featured_image)
            <img src="{{ asset('storage/' . $article->featured_image) }}" alt="" class="w-full h-full object-cover">
        @elseif(file_exists(public_path('images/headers/news-header.jpg')))
            <img src="{{ asset('images/headers/news-header.jpg') }}" alt="" class="w-full h-full object-cover">
        @endif
        <div class="absolute inset-0 bg-gradient-to-br from-paab-navy/95 via-paab-blue/90 to-paab-navy/95"></div>
    </div>
    
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-paab-gold rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-paab-gold rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-sm mb-8">
            <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
            <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
            <a href="{{ route('news') }}" class="text-gray-400 hover:text-paab-gold transition-colors">News</a>
            <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
            <span class="text-paab-gold truncate max-w-xs">{{ $article->title }}</span>
        </nav>

        <!-- Category & Date -->
        <div class="flex flex-wrap items-center gap-4 mb-6">
            <span class="{{ $article->category_color }} text-sm font-semibold px-4 py-1 rounded-full">
                {{ $article->category_label }}
            </span>
            @if($article->is_featured)
                <span class="bg-paab-gold text-paab-navy text-sm font-semibold px-4 py-1 rounded-full">
                    <i class="fas fa-star mr-1"></i> Featured
                </span>
            @endif
        </div>

        <!-- Title -->
        <h1 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
            {{ $article->title }}
        </h1>

        <!-- Meta -->
        <div class="flex flex-wrap items-center gap-6 text-gray-300">
            <span class="flex items-center">
                <i class="fas fa-calendar-alt mr-2 text-paab-gold"></i>
                {{ $article->formatted_date }}
            </span>
            <span class="flex items-center">
                <i class="fas fa-user mr-2 text-paab-gold"></i>
                {{ $article->author }}
            </span>
        </div>
    </div>
</section>
<!-- Article Content -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Featured Image -->
        @if($article->featured_image)
            <div class="relative -mt-20 mb-10 rounded-2xl overflow-hidden shadow-2xl">
                <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-auto">
            </div>
        @endif

        <!-- Excerpt -->
        <div class="bg-paab-light border-l-4 border-paab-gold rounded-r-xl p-6 mb-8">
            <p class="text-gray-700 text-lg italic">
                {{ $article->excerpt }}
            </p>
        </div>

        <!-- Content -->
        <article class="prose prose-lg max-w-none prose-headings:font-display prose-headings:text-paab-navy prose-a:text-paab-gold prose-a:no-underline hover:prose-a:underline">
            {!! nl2br(e($article->content)) !!}
        </article>

        <!-- Share Buttons -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <span class="font-semibold text-paab-navy">Share this article:</span>
                <div class="flex gap-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="w-10 h-10 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->title) }}" target="_blank" class="w-10 h-10 bg-sky-500 hover:bg-sky-600 text-white rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($article->title) }}" target="_blank" class="w-10 h-10 bg-blue-700 hover:bg-blue-800 text-white rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . request()->url()) }}" target="_blank" class="w-10 h-10 bg-green-500 hover:bg-green-600 text-white rounded-lg flex items-center justify-center transition-colors">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <button onclick="navigator.clipboard.writeText('{{ request()->url() }}'); alert('Link copied!');" class="w-10 h-10 bg-gray-600 hover:bg-gray-700 text-white rounded-lg flex items-center justify-center transition-colors">
                        <i class="fas fa-link"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related News -->
@if($relatedNews->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="font-display text-2xl font-bold text-paab-navy">
                Related Articles
            </h2>
            <a href="{{ route('news') }}" class="text-paab-gold hover:text-paab-gold-light font-semibold">
                View All News
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($relatedNews as $related)
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <a href="{{ route('news.show', $related->slug) }}" class="block relative h-48 overflow-hidden">
                        @if($related->featured_image)
                            <img src="{{ asset('storage/' . $related->featured_image) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-paab-navy to-paab-blue flex items-center justify-center">
                                <i class="fas fa-newspaper text-paab-gold text-4xl opacity-50"></i>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="{{ $related->category_color }} text-xs font-semibold px-3 py-1 rounded-full">
                                {{ $related->category_label }}
                            </span>
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            {{ $related->short_date }}
                        </div>
                        <a href="{{ route('news.show', $related->slug) }}">
                            <h3 class="font-display font-bold text-paab-navy mb-3 group-hover:text-paab-gold transition-colors line-clamp-2">
                                {{ $related->title }}
                            </h3>
                        </a>
                        <p class="text-gray-600 text-sm line-clamp-2">
                            {{ $related->excerpt }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Back to News -->
<section class="py-8 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('news') }}" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-semibold">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to All News
        </a>
    </div>
</section>

@endsection