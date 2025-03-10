@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Blog Posts</h2>
        <a href="{{ route('blog_posts.create') }}" class="btn btn-primary">Add Post</a>
    </div>

    <div class="table-responsive">  {{-- Add this div for horizontal scrolling --}}
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                   
                    <th>Banner Source</th>
                    <th>Content</th>
                    <th>Banner</th>
                    <th>Thumbnail</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->subcategory ? $post->subcategory->name : 'N/A' }}</td>
                       
                        <td>{{ $post->banner_source }}</td>
                     
                        <td>{{ Str::limit(strip_tags($post->content), 50) }}</td>

                        <td>
                            @if($post->banner)
                                <img src="{{ asset('storage/' . $post->banner) }}" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            @if($post->thumbnail)
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('blog_posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('blog_posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> {{-- End table-responsive --}}
</div>
@endsection
