<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::all();
        return view('admin_panel.events.sponsors.index', compact('sponsors'));
    }

    public function create()
    {
        return view('admin_panel.events.sponsors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('sponsors', 'public');

        Sponsor::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('events.sponsors.index')->with('success', 'Sponsor created successfully!');
    }

    public function edit(Sponsor $sponsor)
    {
        return view('admin_panel.events.sponsors.edit', compact('sponsor'));
    }

    
    public function update(Request $request, Sponsor $sponsor)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($sponsor->image) {
                Storage::disk('public')->delete($sponsor->image);
            }
            $imagePath = $request->file('image')->store('sponsors', 'public');
        } else {
            $imagePath = $sponsor->image;
        }

        $sponsor->update([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('events.sponsors.index')->with('success', 'Sponsor updated successfully!');
    }

    public function destroy(Sponsor $sponsor)
    {
        if ($sponsor->image) {
            Storage::disk('public')->delete($sponsor->image);
        }

        $sponsor->delete();

        return redirect()->route('events.sponsors.index')->with('success', 'Sponsor deleted successfully!');
    }
}

