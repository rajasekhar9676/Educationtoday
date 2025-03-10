@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Add SEO Meta</h2>

    <form action="{{ route('seo_meta.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Meta Title</label>
            <input type="text" name="meta_title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Meta Description</label>
            <textarea name="meta_description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
