@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Blog Subcategory</h2>
    <form action="{{ route('blog_subcategories.update', $blogSubcategory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $blogSubcategory->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Subcategory Name</label>
            <input type="text" name="name" class="form-control" value="{{ $blogSubcategory->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Subcategory URL</label>
            <input type="text" name="subcategory_url" class="form-control" value="{{ $blogSubcategory->subcategory_url }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ $blogSubcategory->meta_title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control">{{ $blogSubcategory->meta_description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{ $blogSubcategory->meta_keywords }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Banner</label>
            <input type="file" name="meta_banner" class="form-control">
            @if($blogSubcategory->meta_banner)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $blogSubcategory->meta_banner) }}" width="100" alt="Current Meta Banner">
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
            @if($blogSubcategory->thumbnail)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $blogSubcategory->thumbnail) }}" width="100" alt="Current Thumbnail">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection






