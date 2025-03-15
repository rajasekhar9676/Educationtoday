@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Panel Discussions</h2>
    <a href="{{ route('panel_discussions.create') }}" class="btn btn-primary mb-3">Add New</a>

    <div class="row">
        @foreach ($discussions as $discussion)
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>{{ $discussion->heading }}</h5>
                        <p>{{ Str::limit($discussion->content, 100) }}</p>
                        @if($discussion->video)
                            <video width="100%" controls>
                                <source src="{{ asset('storage/' . $discussion->video) }}" type="video/mp4">
                            </video>
                        @endif
                        <a href="{{ route('panel_discussions.edit', $discussion->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('panel_discussions.destroy', $discussion->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this discussion?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
