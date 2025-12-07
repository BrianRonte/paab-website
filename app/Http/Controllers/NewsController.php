<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display public news listing
     */
    public function index(Request $request)
    {
        $query = News::published()->orderBy('published_at', 'desc');

        // Filter by category
        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        // Search
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
            });
        }

        $news = $query->paginate(9);
        $featuredNews = News::published()->featured()->latest('published_at')->take(3)->get();
        $categories = ['all', 'announcement', 'regulation', 'event', 'training', 'publication', 'general'];

        return view('pages.news.index', compact('news', 'featuredNews', 'categories'));
    }

    /**
     * Display single news article
     */
    public function show($slug)
    {
        $article = News::where('slug', $slug)->published()->firstOrFail();
        $relatedNews = News::published()
                          ->where('id', '!=', $article->id)
                          ->where('category', $article->category)
                          ->latest('published_at')
                          ->take(3)
                          ->get();

        // If not enough related by category, get recent ones
        if ($relatedNews->count() < 3) {
            $additionalNews = News::published()
                                 ->where('id', '!=', $article->id)
                                 ->whereNotIn('id', $relatedNews->pluck('id'))
                                 ->latest('published_at')
                                 ->take(3 - $relatedNews->count())
                                 ->get();
            $relatedNews = $relatedNews->concat($additionalNews);
        }

        return view('pages.news.show', compact('article', 'relatedNews'));
    }

    // =============================================
    // ADMIN METHODS
    // =============================================

    /**
     * Display admin news listing
     */
    public function adminIndex()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store new news article
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required|max:500',
            'content' => 'required',
            'category' => 'required',
            'author' => 'nullable|max:255',
            'featured_image' => 'nullable|image|max:8216',
            'is_featured' => 'nullable|boolean',
            'is_published' => 'nullable|boolean',
            'published_at' => 'nullable|date',
        ]);

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('news', 'public');
            $validated['featured_image'] = $path;
        }

        // Set defaults
        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_published'] = $request->has('is_published');
        $validated['author'] = $validated['author'] ?? 'PAAB';
        $validated['published_at'] = $validated['published_at'] ?? now();

        News::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'News article created successfully!');
    }

    /**
     * Show edit form
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update news article
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required|max:500',
            'content' => 'required',
            'category' => 'required',
            'author' => 'nullable|max:255',
            'featured_image' => 'nullable|image|max:8216',
            'is_featured' => 'nullable|boolean',
            'is_published' => 'nullable|boolean',
            'published_at' => 'nullable|date',
        ]);

        // Handle image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($news->featured_image) {
                Storage::disk('public')->delete($news->featured_image);
            }
            $path = $request->file('featured_image')->store('news', 'public');
            $validated['featured_image'] = $path;
        }

        // Set defaults
        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_published'] = $request->has('is_published');

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'News article updated successfully!');
    }

    /**
     * Delete news article
     */
    public function destroy(News $news)
    {
        // Delete image
        if ($news->featured_image) {
            Storage::disk('public')->delete($news->featured_image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News article deleted successfully!');
    }
}