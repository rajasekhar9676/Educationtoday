@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Subcategory</h2>
    <form action="{{ route('subcategories.update', $subcategory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Subcategory Name</label>
            <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ $subcategory->meta_title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control">{{ $subcategory->meta_description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{ $subcategory->meta_keywords }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Banner</label>
            <input type="file" name="meta_banner" class="form-control">
            @if ($subcategory->meta_banner)
                <img src="{{ asset('storage/' . $subcategory->meta_banner) }}" width="100" height="100" alt="Meta Banner">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Subcategory Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
            @if ($subcategory->thumbnail)
                <img src="{{ asset('storage/' . $subcategory->thumbnail) }}" width="100" height="100" alt="Thumbnail">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection




