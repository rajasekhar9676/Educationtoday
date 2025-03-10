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
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin_panel.magazines.create', compact('categories', 'subcategories'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'month' => 'required',
            'year' => 'required',
            'banner' => 'required|image',
            'thumbnail' => 'required|image',
            'embed_url' => 'required|url',
            'category_id' => 'required',
            'subcategory_id' => 'required',
        ]);
    
        // Create the magazine
        $magazine = Magazine::create($request->all());
    
        // Check if SEO meta fields are present before creating seoMeta
        if ($request->has(['meta_title', 'meta_description', 'meta_keywords'])) {
            $magazine->seoMeta()->create([
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
            ]);
        }
    
        return redirect()->route('admin_panel.magazines.index');
    }
    
    public function edit(Magazine $magazine) {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin_panel.magazines.edit', compact('magazine', 'categories', 'subcategories'));
    }
    
    public function update(Request $request, Magazine $magazine) {
        $magazine->update($request->all());
        $magazine->seoMeta->update($request->only(['meta_title', 'meta_description', 'meta_keywords']));
        return redirect()->route('admin_panel.magazines.index');
    }
    
    public function destroy(Magazine $magazine) {
        $magazine->delete();
        return redirect()->route('admin_panel.magazines.index');
    }
}



