<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogSubcategory;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogSubcategoryController extends Controller {
    public function index() {
        $subcategories = BlogSubcategory::with('category')->get();
        return view('admin_panel.blog_subcategories.index', compact('subcategories'));
    }

    public function create() {
        $categories = BlogCategory::all();
        return view('admin_panel.blog_subcategories.create', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'category_id' => 'required|exists:blog_categories,id',
            'name' => 'required|string|max:255|unique:blog_subcategories,name',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_banner' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'subcategory_url' => 'required|string|max:255|:blog_subcategories,subcategory_url',
        ]);

        $data = $request->all();

        if ($request->hasFile('meta_banner')) {
            $data['meta_banner'] = $request->file('meta_banner')->store('banners', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        BlogSubcategory::create($data);

        return redirect()->route('blog_subcategories.index')->with('success', 'Subcategory created successfully.');
    } 

    public function edit(BlogSubcategory $blogSubcategory) {
        $categories = BlogCategory::all();
        return view('admin_panel.blog_subcategories.edit', compact('blogSubcategory', 'categories'));
    }

    public function update(Request $request, BlogSubcategory $blogSubcategory) {
        $request->validate([
            'category_id' => 'required|exists:blog_categories,id',
            'name' => 'required|string|max:255|unique:blog_subcategories,name,' . $blogSubcategory->id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_banner' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'subcategory_url' => 'required|string|max:255|unique:blog_subcategories,subcategory_url,' . $blogSubcategory->id,
        ]);

        $data = $request->all();

        if ($request->hasFile('meta_banner')) {
            $data['meta_banner'] = $request->file('meta_banner')->store('banners', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $blogSubcategory->update($data);

        return redirect()->route('blog_subcategories.index')->with('success', 'Subcategory updated successfully.');
    }

    public function destroy(BlogSubcategory $blogSubcategory) {
        $blogSubcategory->delete();
        return redirect()->route('blog_subcategories.index')->with('success', 'Subcategory deleted successfully.');
    }
}


  