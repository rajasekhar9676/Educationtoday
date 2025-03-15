@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Magazines</h2>
    <a href="{{ route('magazines.create') }}" class="btn btn-primary">Add Magazine</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Year</th>
               <th>Actions</th>
            </tr> 
        </thead>  
        <tbody>  
            @foreach ($magazines as $index => $magazine)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $magazine->name }}</td>
                    <td>{{ $magazine->category->name }}</td>
                    <td>{{ $magazine->subcategory->name }}</td>
                    <td>{{ $magazine->year }}</td>
              
                    <td>
                        <a href="{{ route('magazines.edit', $magazine->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('magazines.destroy', $magazine->id) }}" method="POST" style="display:inline-block;">
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


