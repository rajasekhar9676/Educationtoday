@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Panel Discussion</h2>
    <form action="{{ route('panel_discussions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Heading</label>
            <input type="text" name="heading" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Video </label>
            <input type="file" name="video" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection

