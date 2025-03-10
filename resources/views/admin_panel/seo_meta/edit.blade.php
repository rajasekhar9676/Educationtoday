@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit SEO Meta</h2>

    <form action="{{ route('seo_meta.update', $seoMeta->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ $seoMeta->meta_title }}" required>
        </div>
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $seoMeta->slug }}" required>
        </div>
        <div class="mb-3">
            <label>Meta Description</label>
            <textarea name="meta_description" class="form-control">{{ $seoMeta->meta_description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{ $seoMeta->meta_keywords }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection












