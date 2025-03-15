@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Sponsors List</h2>
            <a href="{{ route('events.sponsors.create') }}" class="btn btn-primary">Add New Sponsor</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sponsors as $index => $sponsor)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $sponsor->name ?? 'No Name' }}</td>
                        <td>
                            @if($sponsor->image)
                                <img src="{{ asset('storage/' . $sponsor->image) }}" width="50" alt="Sponsor Image">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('events.sponsors.edit', $sponsor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('events.sponsors.destroy', $sponsor->id) }}" method="POST" style="display:inline-block;">
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
