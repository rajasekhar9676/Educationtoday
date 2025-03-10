@extends('layouts.app')

@section('content')
<div class="container mt-5">
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Blog Subcategories</h2>
    <a href="{{ route('blog_subcategories.create') }}" class="btn btn-primary">Add Subcategory</a>
</div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Name</th>
                <!-- <th>Meta Title</th>
                <th>Meta Description</th>
                <th>Meta Keywords</th> -->
                <th>Meta Banner</th>
                <th>Thumbnail</th>
                <th>Subcategory URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcategories as $subcategory)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $subcategory->category->name }}</td>
                    <td>{{ $subcategory->name }}</td>
                    <!-- <td>{{ $subcategory->meta_title }}</td>
                    <td>{{ $subcategory->meta_description }}</td>
                    <td>{{ $subcategory->meta_keywords }}</td> -->
                    <td>
                        @if($subcategory->meta_banner)
                            <img src="{{ asset('storage/' . $subcategory->meta_banner) }}" width="50" height="50" alt="Meta Banner">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        @if($subcategory->thumbnail)
                            <img src="{{ asset('storage/' . $subcategory->thumbnail) }}" width="50" height="50" alt="Thumbnail">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $subcategory->subcategory_url }}</td>
                    <td>
                        <a href="{{ route('blog_subcategories.edit', $subcategory->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('blog_subcategories.destroy', $subcategory->id) }}" method="POST" style="display:inline-block;">
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

