@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Sponsor</h2>
        <form action="{{ route('events.sponsors.update', $sponsor->id) }}" method="POST" enctype="multipart/form-data">

        @csrf 
        @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $sponsor->name }}" required>
            </div>
           
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" name="image">
                @if($sponsor->image)
                    <img src="{{ asset('storage/' . $sponsor->image) }}" width="50">
                @endif
            </div>
            <button type="submit" class="btn btn-success">Update Sponsor</button>
        </form>
    </div>
@endsection


