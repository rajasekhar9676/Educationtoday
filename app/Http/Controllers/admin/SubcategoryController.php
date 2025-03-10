<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::with('category')->get();
        return view('admin_panel.subcategories.index', compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin_panel.subcategories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_banner' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $metaBannerPath = $request->file('meta_banner') ? $request->file('meta_banner')->store('meta_banners', 'public') : null;
        $thumbnailPath = $request->file('thumbnail') ? $request->file('thumbnail')->store('thumbnails', 'public') : null;

        Subcategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'meta_banner' => $metaBannerPath,
            'thumbnail' => $thumbnailPath,
        ]);

        return redirect()->route('subcategories.index')->with('success', 'Subcategory added successfully');
    }

    public function show(Subcategory $subcategory)
    {
        return view('admin_panel.subcategories.show', compact('subcategory'));
    }

    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('admin_panel.subcategories.edit', compact('subcategory', 'categories'));
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_banner' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Handle file uploads
        if ($request->hasFile('meta_banner')) {
            if ($subcategory->meta_banner) {
                Storage::disk('public')->delete($subcategory->meta_banner);
            }
            $metaBannerPath = $request->file('meta_banner')->store('meta_banners', 'public');
            $subcategory->meta_banner = $metaBannerPath;
        }

        if ($request->hasFile('thumbnail')) {
            if ($subcategory->thumbnail) {
                Storage::disk('public')->delete($subcategory->thumbnail);
            }
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
            $subcategory->thumbnail = $thumbnailPath;
        }

        // Update subcategory fields
        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        return redirect()->route('admin_panel.subcategories.index')->with('success', 'Subcategory updated successfully');
    }

    public function destroy(Subcategory $subcategory)
    {
        if ($subcategory->meta_banner) {
            Storage::disk('public')->delete($subcategory->meta_banner);
        }
        if ($subcategory->thumbnail) {
            Storage::disk('public')->delete($subcategory->thumbnail);
        }

        $subcategory->delete();
        return redirect()->route('admin_panel.subcategories.index')->with('success', 'Subcategory deleted successfully');
    }
}



