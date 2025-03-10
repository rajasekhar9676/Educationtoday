<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller {
    public function index() {
        $categories = BlogCategory::all();
        return view('admin_panel.blog_categories.index', compact('categories'));
    }

    public function create() {
        return view('admin_panel.blog_categories.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
        ]);

        BlogCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('blog_categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(BlogCategory $blogCategory) {
        return view('admin_panel.blog_categories.edit', compact('blogCategory'));
    }

    public function update(Request $request, BlogCategory $blogCategory) {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,' . $blogCategory->id,
        ]);

        $blogCategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('blog_categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(BlogCategory $blogCategory) {
        $blogCategory->delete();
        return redirect()->route('blog_categories.index')->with('success', 'Category deleted successfully.');
    }
}


