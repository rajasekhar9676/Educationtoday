@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Magazine</h2>
    <form method="POST" action="{{ route('magazines.update', $magazine->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $magazine->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Subcategory</label>
            <select name="subcategory_id" class="form-control" required>
                <option value="">Select Subcategory</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}" {{ $magazine->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                        {{ $subcategory->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $magazine->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Banner</label>
            <br>
            <img src="{{ asset('storage/' . $magazine->banner) }}" alt="Banner" width="100">
            <br>
            <label class="form-label">Upload New Banner (Optional)</label>
            <input type="file" name="banner" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Current Thumbnail</label>
            <br>
            <img src="{{ asset('storage/' . $magazine->thumbnail) }}" alt="Thumbnail" width="100">
            <br>
            <label class="form-label">Upload New Thumbnail (Optional)</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="year" class="form-control" value="{{ $magazine->year }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Month</label>
            <input type="text" name="month" class="form-control" value="{{ $magazine->month }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Embed URL</label>
            <input type="url" name="embed_url" class="form-control" value="{{ $magazine->embed_url }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ optional($magazine->seoMeta)->meta_title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control" required>{{ optional($magazine->seoMeta)->meta_description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{ optional($magazine->seoMeta)->meta_keywords }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection






