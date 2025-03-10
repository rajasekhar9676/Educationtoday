
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>SEO Meta List</h2>
        <a href="{{ route('seo_meta.create') }}" class="btn btn-primary">Add SEO Meta</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Meta Title</th>
                    <th>Slug</th>
                    <th>Meta Description</th>
                    <th>Meta Keywords</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($seoMetas as $meta)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $meta->meta_title }}</td>
                        <td>{{ $meta->slug }}</td>
                        <td>{{ Str::limit($meta->meta_description, 50) }}</td>
                        <td>{{ $meta->meta_keywords }}</td>
                        <td>
                            <a href="{{ route('seo_meta.edit', $meta->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('seo_meta.destroy', $meta->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
