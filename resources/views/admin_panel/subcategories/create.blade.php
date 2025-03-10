@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Subcategory</h2>
    <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Category Dropdown -->
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Subcategory Name -->
        <div class="mb-3">
            <label class="form-label">Subcategory Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <!-- Meta Title -->
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control">
        </div>

        <!-- Meta Description -->
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control" rows="3"></textarea>
        </div>

        <!-- Meta Keywords -->
        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control">
        </div>

        <!-- Meta Banner -->
        <div class="mb-3">
            <label class="form-label">Meta Banner</label>
            <input type="file" name="meta_banner" class="form-control">
        </div>

        <!-- Thumbnail -->
        <div class="mb-3">
            <label class="form-label">Subcategory Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection

