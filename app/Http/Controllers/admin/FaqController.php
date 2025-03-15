<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index() {
        $faqs = Faq::all();
        return view('admin_panel.events.faqs.index', compact('faqs'));
    }

    public function create() {
        return view('admin_panel.events.faqs.create');
    }

    // public function store(Request $request) {
    //     $request->validate([
    //         'question' => 'required|string|max:255',
    //         'answer' => 'required|string',
    //     ]);

    //     Faq::create($request->only(['question', 'answer']));

    //     return redirect()->route('events.faqs.index')->with('success', 'FAQ created successfully.');
    // }

    
    public function store(Request $request) {
        $request->validate([
            'faqs.*.question' => 'required|string|max:255',
            'faqs.*.answer' => 'required|string',
        ]);
    
        foreach ($request->faqs as $faq) {
            Faq::create($faq);
        }
    
        return redirect()->route('events.faqs.index')->with('success', 'FAQs created successfully.');
    }
    
    
    public function edit(Faq $faq) {
        return view('admin_panel.events.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq) {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq->update($request->only(['question', 'answer']));

        return redirect()->route('events.faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq) {
        $faq->delete();
        return redirect()->route('events.faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}


