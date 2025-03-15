<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speaker;
use Illuminate\Support\Facades\Storage;


class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::all();
        return view('admin_panel.events.speakers.index', compact('speakers'));
    }

    public function create()
    {
        return view('admin_panel.events.speakers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('speakers', 'public');
        }

        Speaker::create([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $imagePath,
        ]);

        return redirect()->route('events.speakers.index')->with('success', 'Speaker created successfully!');
    }
    public function edit(Speaker $speaker)
    {
        return view('admin_panel.events.speakers.edit', compact('speaker'));
    }
    
    
    public function update(Request $request, Speaker $speaker)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            if ($speaker->image) {
                Storage::disk('public')->delete($speaker->image);
            }
            $imagePath = $request->file('image')->store('speakers', 'public');
        } else {
            $imagePath = $speaker->image;
        }
    
        $speaker->update([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('events.speakers.index')->with('success', 'Speaker updated successfully!');
    }
    

    public function destroy(Speaker $speaker)
    {
        if ($speaker->image) {
            Storage::disk('public')->delete($speaker->image);
        }

        $speaker->delete();

        return redirect()->route('events.speakers.index')->with('success', 'Speaker deleted successfully!');
    }
}


