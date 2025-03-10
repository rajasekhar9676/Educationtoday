@extends('layouts.app')

@section('title', 'Create Blog Post')

@section('content')
<div class="container">
    <h2>Add New Blog Post</h2>
    <form action="{{ route('blog_posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Subcategory</label>
            <select name="subcategory_id" class="form-control">
                <option value="">Select Subcategory</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div> 
         <div class="mb-3">
            <label class="form-label">Excerpt</label>
            <input type="text" name="excerpt" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Banner Source</label>
            <input type="text" name="banner_source" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="editor" class="form-control" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Banner</label>
            <input type="file" name="banner" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

<!-- CKEditor Integration -->
<script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection
