@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Speaker</h2>
        <form action="{{ route('events.speakers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <input type="text" class="form-control" name="role" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-success">Save Speaker</button>
        </form>
    </div>
@endsection
