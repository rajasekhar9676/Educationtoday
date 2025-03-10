@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Blog Category</h2>
    <form action="{{ route('blog_categories.update', $blogCategory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" value="{{ $blogCategory->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

