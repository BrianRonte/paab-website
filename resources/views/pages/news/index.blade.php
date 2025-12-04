@extends('layouts.app')

@section('title', 'News & Updates')
@section('meta_description', 'Latest news, announcements, and updates from PAAB Zimbabwe')

@section('content')

@include('partials.page-header', [
    'title' => 'News & Updates',
    'description' => 'Stay up to date with the latest announcements, regulatory updates, events, and publications from PAAB.',
    'badge' => 'Stay Informed',
    'backgroundImage' => asset('images/headers/news-header.jpg'),
    'breadcrumbs' => [
        ['label' => 'News']
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
                <span class="text-white text-sm font-medium">Stay Informed</span>
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                News & Updates
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Stay up to date with the latest announcements, regulatory updates, events, and publications from PAAB.
            </p>
        </div>
        
        <!-- Breadcrumb -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                <span class="text-paab-gold">News</span>
            </nav>
        </div>
    </div>
</section>

<!-- Featured News -->
@if($featuredNews->count() > 0)
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="font-display text-2xl font-bold text-paab-navy">
                <i class="fas fa-star text-paab-gold mr-2"></i>
                Featured Stories
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach($featuredNews as $index => $featured)
                @if($index === 0)
                <!-- Large Featured Card -->
                <div class="md:col-span-2 md:row-span-2">
                    <a href="{{ route('news.show', $featured->slug) }}" class="block bg-white rounded-2xl shadow-lg overflow-hidden group h-full">
                        <div class="relative h-64 md:h-80 overflow-hidden">
                            @if($featured->featured_image)
                                <img src="{{ asset('storage/' . $featured->featured_image) }}" alt="{{ $featured->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-paab-navy to-paab-blue flex items-center justify-center">
                                    <i class="fas fa-newspaper text-paab-gold text-6xl opacity-50"></i>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="{{ $featured->category_color }} text-xs font-semibold px-3 py-1 rounded-full">
                                    {{ $featured->category_label }}
                                </span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="bg-paab-gold text-paab-navy text-xs font-semibold px-3 py-1 rounded-full">
                                    <i class="fas fa-star mr-1"></i> Featured
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ $featured->formatted_date }}
                                <span class="mx-2">•</span>
                                <i class="fas fa-user mr-2"></i>
                                {{ $featured->author }}
                            </div>
                            <h3 class="font-display text-xl font-bold text-paab-navy mb-3 group-hover:text-paab-gold transition-colors">
                                {{ $featured->title }}
                            </h3>
                            <p class="text-gray-600 line-clamp-3">
                                {{ $featured->excerpt }}
                            </p>
                        </div>
                    </a>
                </div>
                @else
                <!-- Smaller Featured Cards -->
                <div>
                    <a href="{{ route('news.show', $featured->slug) }}" class="block bg-white rounded-2xl shadow-lg overflow-hidden group h-full">
                        <div class="relative h-40 overflow-hidden">
                            @if($featured->featured_image)
                                <img src="{{ asset('storage/' . $featured->featured_image) }}" alt="{{ $featured->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-paab-blue to-paab-navy flex items-center justify-center">
                                    <i class="fas fa-newspaper text-paab-gold text-3xl opacity-50"></i>
                                </div>
                            @endif
                            <div class="absolute top-3 left-3">
                                <span class="{{ $featured->category_color }} text-xs font-semibold px-2 py-1 rounded-full">
                                    {{ $featured->category_label }}
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="text-xs text-gray-500 mb-2">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $featured->short_date }}
                            </div>
                            <h3 class="font-display font-semibold text-paab-navy group-hover:text-paab-gold transition-colors line-clamp-2">
                                {{ $featured->title }}
                            </h3>
                        </div>
                    </a>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Search & Filter -->
<section class="py-8 bg-white border-b sticky top-[73px] z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="GET" action="{{ route('news') }}" class="flex flex-col md:flex-row gap-4">
            <!-- Search -->
            <div class="flex-1 relative">
                <input 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}"
                    class="w-full pl-11 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-paab-gold focus:border-transparent transition-all"
                    placeholder="Search news..."
                >
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
            </div>

            <!-- Category Filter -->
            <div class="flex gap-2 overflow-x-auto scrollbar-hide">
                @foreach($categories as $category)
                    <button 
                        type="submit" 
                        name="category" 
                        value="{{ $category }}"
                        class="flex-shrink-0 px-4 py-3 rounded-xl text-sm font-medium transition-all
                            {{ request('category', 'all') === $category 
                                ? 'bg-paab-navy text-white' 
                                : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}"
                    >
                        {{ $category === 'all' ? 'All' : ucfirst($category) }}
                    </button>
                @endforeach
            </div>
        </form>
    </div>
</section>

<!-- News Grid -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($news->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($news as $article)
                    <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group">
                        <!-- Image -->
                        <a href="{{ route('news.show', $article->slug) }}" class="block relative h-48 overflow-hidden">
                            @if($article->featured_image)
                                <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-paab-navy to-paab-blue flex items-center justify-center">
                                    <i class="fas fa-newspaper text-paab-gold text-4xl opacity-50"></i>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="{{ $article->category_color }} text-xs font-semibold px-3 py-1 rounded-full">
                                    {{ $article->category_label }}
                                </span>
                            </div>
                            @if($article->is_featured)
                                <div class="absolute top-4 right-4">
                                    <span class="bg-paab-gold text-paab-navy text-xs font-semibold px-2 py-1 rounded-full">
                                        <i class="fas fa-star"></i>
                                    </span>
                                </div>
                            @endif
                        </a>

                        <!-- Content -->
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ $article->short_date }}
                                <span class="mx-2">•</span>
                                <i class="fas fa-user mr-2"></i>
                                {{ $article->author }}
                            </div>
                            
                            <a href="{{ route('news.show', $article->slug) }}">
                                <h3 class="font-display text-lg font-bold text-paab-navy mb-3 group-hover:text-paab-gold transition-colors line-clamp-2">
                                    {{ $article->title }}
                                </h3>
                            </a>
                            
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                {{ $article->excerpt }}
                            </p>
                            
                            <a href="{{ route('news.show', $article->slug) }}" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-semibold text-sm">
                                Read More
                                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $news->withQueryString()->links() }}
            </div>
        @else
            <!-- No Results -->
            <div class="text-center py-16">
                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-newspaper text-gray-400 text-3xl"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-paab-navy mb-2">No News Found</h3>
                <p class="text-gray-600 mb-6">
                    @if(request('search'))
                        No articles match your search "{{ request('search') }}".
                    @else
                        There are no news articles in this category yet.
                    @endif
                </p>
                <a href="{{ route('news') }}" class="inline-flex items-center text-paab-gold hover:text-paab-gold-light font-semibold">
                    <i class="fas fa-arrow-left mr-2"></i>
                    View All News
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-paab-navy to-paab-blue rounded-3xl p-8 md:p-12">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="font-display text-3xl font-bold text-white mb-4">
                        Stay Updated
                    </h2>
                    <p class="text-gray-300">
                        Subscribe to our mailing list to receive the latest news, regulatory updates, and announcements directly in your inbox.
                    </p>
                </div>
                <div>
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input 
                            type="email" 
                            placeholder="Enter your email address"
                            class="flex-1 px-6 py-4 rounded-xl focus:ring-2 focus:ring-paab-gold focus:outline-none"
                        >
                        <button type="submit" class="bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-8 py-4 rounded-xl transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection