@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Panel Discussion</h2>
    <form action="{{ route('panel_discussions.update', $panelDiscussion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Heading</label>
            <input type="text" name="heading" class="form-control" value="{{ $panelDiscussion->heading }}" required>
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" required>{{ $panelDiscussion->content }}</textarea>
        </div>
        <div class="mb-3">
            <label>Video (optional)</label>
            <input type="file" name="video" class="form-control">
            @if($panelDiscussion->video)
                <video width="100%" controls>
                    <source src="{{ asset('storage/' . $panelDiscussion->video) }}" type="video/mp4">
                </video>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
