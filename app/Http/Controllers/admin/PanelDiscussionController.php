<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PanelDiscussion;
use Illuminate\Support\Facades\Storage;

class PanelDiscussionController extends Controller {
    public function index() {
        $discussions = PanelDiscussion::all();
        return view('admin_panel.panel_discussions.index', compact('discussions'));
    }

    public function create() {
        return view('admin_panel.panel_discussions.create');
    }

    public function store(Request $request) {
        $request->validate([
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
            'video' => 'nullable|mimes:mp4,avi,mov|max:10240' // Allow video upload
        ]);

        $data = $request->only(['heading', 'content']);

        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('videos', 'public');
        }

        PanelDiscussion::create($data);
        return redirect()->route('panel_discussions.index')->with('success', 'Panel Discussion created successfully.');
    }

    public function edit(PanelDiscussion $panelDiscussion) {
        return view('admin_panel.panel_discussions.edit', compact('panelDiscussion'));
    }

    public function update(Request $request, PanelDiscussion $panelDiscussion) {
        $request->validate([
            'heading' => 'required|string|max:255',
            'content' => 'required|string',
            'video' => 'nullable|mimes:mp4,avi,mov|max:10240'
        ]);

        $data = $request->only(['heading', 'content']);

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($panelDiscussion->video);
            $data['video'] = $request->file('video')->store('videos', 'public');
        }

        $panelDiscussion->update($data);
        return redirect()->route('panel_discussions.index')->with('success', 'Panel Discussion updated successfully.');
    }

    public function destroy(PanelDiscussion $panelDiscussion) {
        if ($panelDiscussion->video) {
            Storage::disk('public')->delete($panelDiscussion->video);
        }
        $panelDiscussion->delete();
        return redirect()->route('panel_discussions.index')->with('success', 'Panel Discussion deleted successfully.');
    }
}
