<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Support\Facades\Storage;

class MagazineController extends Controller
{
    public function index() {
        $magazines = Magazine::with(['seoMeta', 'category', 'subcategory'])->get();
        return view('admin_panel.magazines.index', compact('magazines'));
    }
    
    public function create() {
        // Fetch categories that have "magazine" in their name
        $categories = Category::where('name', 'LIKE', '%magazine%')->get();
        $subcategories = Subcategory::where('name', 'LIKE', '%magazine%')->get();
        return view('admin_panel.magazines.create', compact('categories', 'subcategories'));
    }

    public function getSubcategories($category_id) {
        // Fetch subcategories related to the selected category and containing "magazine" in the name
        $subcategories = Subcategory::where('category_id', $category_id)
                                    ->where('name', 'LIKE', '%magazine%')
                                    ->get();
        return response()->json($subcategories);
    }
    
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'month' => 'required|string|max:50',
            'year' => 'required|string|max:10',
            'embed_url' => 'required|url',
            'banner' => 'required|image',
            'thumbnail' => 'required|image',
            'category_id' => 'nullable|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'new_category' => 'nullable|string|max:255',
            'new_subcategory' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        // Handle category
        if ($request->filled('new_category')) {
            $category = Category::firstOrCreate(['name' => $request->new_category]);
            $category_id = $category->id;
        } else {
            $category_id = $request->category_id;
        }

        // Handle subcategory
        if ($request->filled('new_subcategory')) {
            $subcategory = Subcategory::firstOrCreate([
                'name' => $request->new_subcategory,
                'category_id' => $category_id
            ]);
            $subcategory_id = $subcategory->id;
        } else {
            $subcategory_id = $request->subcategory_id;
        }

        // Save magazine
        $magazine = new Magazine();
        $magazine->name = $request->name;
        $magazine->month = $request->month;
        $magazine->year = $request->year;
        $magazine->embed_url = $request->embed_url;
        $magazine->category_id = $category_id;
        $magazine->subcategory_id = $subcategory_id;

        // Handle file uploads
        if ($request->hasFile('banner')) {
            $magazine->banner = $request->file('banner')->store('banners', 'public');
        }
        if ($request->hasFile('thumbnail')) {
            $magazine->thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $magazine->save();

        // Save SEO meta
        if ($request->has(['meta_title', 'meta_description', 'meta_keywords'])) {
            $magazine->seoMeta()->create([
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
            ]);
        }

        return redirect()->route('magazines.index')->with('success', 'Magazine added successfully.');
    }

    public function edit(Magazine $magazine) {
        // Fetch categories and subcategories with "magazine" in their name
        $categories = Category::where('name', 'LIKE', '%magazine%')->get();
        $subcategories = Subcategory::where('name', 'LIKE', '%magazine%')->get();
        return view('admin_panel.magazines.edit', compact('magazine', 'categories', 'subcategories'));
    }
    
    public function update(Request $request, Magazine $magazine) {
        $magazine->update($request->all());
        if ($magazine->seoMeta) {
            $magazine->seoMeta->update($request->only(['meta_title', 'meta_description', 'meta_keywords']));
        }
        return redirect()->route('magazines.index')->with('success', 'Magazine updated successfully.');
    }
    
    public function destroy(Magazine $magazine) {
        $magazine->delete();
        return redirect()->route('magazines.index')->with('success', 'Magazine deleted successfully.');
    }
}
