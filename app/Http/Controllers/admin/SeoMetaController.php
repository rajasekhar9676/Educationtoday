<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoMeta;
use Illuminate\Http\Request;

class SeoMetaController extends Controller
{
    public function index()
    {
        $seoMetas = SeoMeta::all();
        return view('admin_panel.seo_meta.index', compact('seoMetas'));
    }

    public function create()
    {
        return view('admin_panel.seo_meta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'slug' => 'required|string|unique:seo_meta,slug|max:255',
        ]);

        SeoMeta::create($request->all());

        return redirect()->route('seo_meta.index')->with('success', 'SEO Meta added successfully.');
    }

    public function edit(SeoMeta $seoMeta)
    {
        return view('admin_panel.seo_meta.edit', compact('seoMeta'));
    }

    public function update(Request $request, SeoMeta $seoMeta)
    {
        $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'slug' => 'required|string|max:255|unique:seo_meta,slug,' . $seoMeta->id,
        ]);

        $seoMeta->update($request->all());

        return redirect()->route('seo_meta.index')->with('success', 'SEO Meta updated successfully.');
    }

    public function destroy(SeoMeta $seoMeta)
    {
        $seoMeta->delete();
        return redirect()->route('seo_meta.index')->with('success', 'SEO Meta deleted successfully.');
    }

    public function show($slug)
    {
        $seoMeta = SeoMeta::where('slug', $slug)->firstOrFail();
        return view('frontend.seo_meta.show', compact('seoMeta'));
    }
}

