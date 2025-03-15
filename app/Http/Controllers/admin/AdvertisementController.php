<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    public function index() {
        $ads = Advertisement::all();
        return view('admin_panel.advertisements.index', compact('ads'));
    }

    public function create() {
        return view('admin_panel.advertisements.create');
    }

    public function store(Request $request) {
        $request->validate([
            'image' => 'required|image',
            'type' => 'required|in:banner,voting_survey,subscription, myschooladmission',
        ]);

        $path = $request->file('image')->store('ads', 'public');

        Advertisement::create([
            'image' => $path,
            'type' => $request->type,
        ]);

        return redirect()->route('advertisements.index')->with('success', 'Advertisement uploaded successfully.');
    }

    public function edit(Advertisement $advertisement) {
        return view('admin_panel.advertisements.edit', compact('advertisement'));
    }

    public function update(Request $request, Advertisement $advertisement) {
        $request->validate([
            'image' => 'nullable|image',
            'type' => 'required|in:banner,voting_survey,subscription, myschooladmission',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($advertisement->image);
            $path = $request->file('image')->store('ads', 'public');
            $advertisement->update(['image' => $path, 'type' => $request->type]);
        } else {
            $advertisement->update(['type' => $request->type]);
        }

        return redirect()->route('advertisements.index')->with('success', 'Advertisement updated successfully.');
    }


    public function destroy(Advertisement $advertisement) {
        Storage::disk('public')->delete($advertisement->image);
        $advertisement->delete();
        return redirect()->route('advertisements.index')->with('success', 'Advertisement deleted successfully.');
    }
}





