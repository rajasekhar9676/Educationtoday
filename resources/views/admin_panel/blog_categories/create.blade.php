@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Blog Category</h2>
    <form action="{{ route('blog_categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
