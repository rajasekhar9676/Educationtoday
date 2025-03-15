@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Sponsor</h2>
        <form action="{{ route('events.sponsors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <button type="submit" class="btn btn-success">Add Sponsor</button>
        </form>
    </div
    @endsection