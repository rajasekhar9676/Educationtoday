@extends('layouts.app')

@section('title', 'Edit Blog Post')

@section('content')
<div class="container">
    <h2>Edit Blog Post</h2>
    <form action="{{ route('blog_posts.update', $blogPost->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $blogPost->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Subcategory</label>
            <select name="subcategory_id" class="form-control">
                <option value="">Select Subcategory</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}" {{ $subcategory->id == $blogPost->subcategory_id ? 'selected' : '' }}>
                        {{ $subcategory->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $blogPost->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ $blogPost->meta_title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control">{{ $blogPost->meta_description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{ $blogPost->meta_keywords }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Banner Source</label>
            <input type="text" name="banner_source" class="form-control" value="{{ $blogPost->banner_source }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ $blogPost->content }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
            @if($blogPost->thumbnail)
                <img src="{{ asset('storage/' . $blogPost->thumbnail) }}" width="100">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Banner</label>
            <input type="file" name="banner" class="form-control">
            @if($blogPost->banner)
                <img src="{{ asset('storage/' . $blogPost->banner) }}" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

















