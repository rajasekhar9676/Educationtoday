<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogSubcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with(['category', 'subcategory'])->get();
        return view('admin_panel.blog_posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = BlogCategory::all();
        $subcategories = BlogSubcategory::all();
        return view('admin_panel.blog_posts.create', compact('categories', 'subcategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:blog_categories,id',
            'subcategory_id' => 'nullable|exists:blog_subcategories,id',
            'title' => 'required|string|max:255|unique:blog_posts,title',
            'banner_source' => 'nullable|string',
            'content' => 'required',
            'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'excerpt' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);
    
        $data = $request->except(['meta_title', 'meta_description', 'meta_keywords']);
    
        // Generate Slug
        $data['slug'] = Str::slug($request->title);
    
        if ($request->hasFile('banner')) {
            $data['banner'] = $request->file('banner')->store('banners', 'public');
        }
    
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }
    
        $blogPost = BlogPost::create($data);
    
        // Save SEO Meta
        $blogPost->seoMeta()->create([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);
    
        return redirect()->route('blog_posts.index')->with('success', 'Post created successfully.');
    }
    
    

    public function edit(BlogPost $blogPost)
    {
        $categories = BlogCategory::all();
        $subcategories = BlogSubcategory::all();
        return view('admin_panel.blog_posts.edit', compact('blogPost', 'categories', 'subcategories'));
    }

    public function update(Request $request, BlogPost $blogPost)
{
    $request->validate([
        'category_id' => 'required|exists:blog_categories,id',
        'subcategory_id' => 'nullable|exists:blog_subcategories,id',
        'title' => 'required|string|max:255|unique:blog_posts,title,' . $blogPost->id,
        'banner_source' => 'nullable|string',
        'content' => 'required',
        'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        'excerpt' => 'nullable|string|max:255',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string',
        'meta_keywords' => 'nullable|string',
        'slug' => 'string'
    ]);

    $data = $request->except(['meta_title', 'meta_description', 'meta_keywords']);

    if ($request->hasFile('banner')) {
        $data['banner'] = $request->file('banner')->store('banners', 'public');
    }

    if ($request->hasFile('thumbnail')) {
        $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
    }

    $blogPost->update($data);

    // Update or Create SEO Meta
    $blogPost->seoMeta()->updateOrCreate([], [
        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'meta_keywords' => $request->meta_keywords,
    ]);

    return redirect()->route('blog_posts.index')->with('success', 'Post updated successfully.');
}
  

    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect()->route('blog_posts.index')->with('success', 'Post deleted successfully.');
    }
}


