@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Speaker</h2>
        <form action="{{ route('events.speakers.update', $speaker->id) }}" method="POST" enctype="multipart/form-data">

        @csrf 
        @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $speaker->name }}" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <input type="text" class="form-control" name="role" value="{{ $speaker->role }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" name="image">
                @if($speaker->image)
                    <img src="{{ asset('storage/' . $speaker->image) }}" width="50">
                @endif
            </div>
            <button type="submit" class="btn btn-success">Update Speaker</button>
        </form>
    </div>
@endsection


