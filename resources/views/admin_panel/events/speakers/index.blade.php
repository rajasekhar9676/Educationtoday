@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Speakers List</h2>
        <a href="{{ route('events.speakers.create') }}" class="btn btn-primary">Add New Speaker</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Role</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($speakers as $speaker)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $speaker->name }}</td>
                    <td>{{ $speaker->role }}</td>
                    <td>
                        @if($speaker->image)
                            <img src="{{ asset('storage/' . $speaker->image) }}" width="50" alt="Speaker Image">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('events.speakers.edit', $speaker->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('events.speakers.destroy', $speaker->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection














