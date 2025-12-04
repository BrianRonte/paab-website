@extends('layouts.admin')

@section('title', 'Manage News')

@section('content')

<!-- Page Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Manage News</h1>
        <p class="text-gray-600 mt-1">Create, edit, and manage news articles</p>
    </div>
    <a href="{{ route('admin.news.create') }}" class="mt-4 sm:mt-0 inline-flex items-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
        <i class="fas fa-plus mr-2"></i>
        Add New Article
    </a>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-newspaper text-blue-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ \App\Models\News::count() }}</p>
                <p class="text-gray-500 text-sm">Total Articles</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-check-circle text-green-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ \App\Models\News::where('is_published', true)->count() }}</p>
                <p class="text-gray-500 text-sm">Published</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-star text-yellow-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ \App\Models\News::where('is_featured', true)->count() }}</p>
                <p class="text-gray-500 text-sm">Featured</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-eye-slash text-gray-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ \App\Models\News::where('is_published', false)->count() }}</p>
                <p class="text-gray-500 text-sm">Drafts</p>
            </div>
        </div>
    </div>
</div>

<!-- News Table -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <h2 class="font-semibold text-gray-900">All Articles</h2>
    </div>
    
    @if($news->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Article</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($news as $article)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-lg overflow-hidden flex-shrink-0 mr-4">
                                        @if($article->featured_image)
                                            <img src="{{ asset('storage/' . $article->featured_image) }}" alt="" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                                <i class="fas fa-image text-gray-400"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 line-clamp-1">{{ $article->title }}</p>
                                        <p class="text-gray-500 text-sm">By {{ $article->author }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="{{ $article->category_color }} text-xs font-semibold px-2 py-1 rounded-full">
                                    {{ $article->category_label }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    @if($article->is_published)
                                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">
                                            Published
                                        </span>
                                    @else
                                        <span class="bg-gray-100 text-gray-700 text-xs font-semibold px-2 py-1 rounded-full">
                                            Draft
                                        </span>
                                    @endif
                                    @if($article->is_featured)
                                        <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-2 py-1 rounded-full">
                                            <i class="fas fa-star"></i>
                                        </span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500 text-sm">
                                {{ $article->published_at ? $article->published_at->format('M d, Y') : 'Not set' }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('news.show', $article->slug) }}" target="_blank" class="w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center text-gray-600 transition-colors" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.news.edit', $article) }}" class="w-8 h-8 bg-blue-100 hover:bg-blue-200 rounded-lg flex items-center justify-center text-blue-600 transition-colors" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.news.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-8 h-8 bg-red-100 hover:bg-red-200 rounded-lg flex items-center justify-center text-red-600 transition-colors" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $news->links() }}
        </div>
    @else
        <div class="px-6 py-12 text-center">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-newspaper text-gray-400 text-2xl"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">No Articles Yet</h3>
            <p class="text-gray-500 mb-4">Get started by creating your first news article.</p>
            <a href="{{ route('admin.news.create') }}" class="inline-flex items-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
                <i class="fas fa-plus mr-2"></i>
                Create First Article
            </a>
        </div>
    @endif
</div>

@endsection