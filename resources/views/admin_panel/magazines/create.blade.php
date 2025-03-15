@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Add New Magazine</h2>
    <form method="POST" action="{{ route('magazines.store') }}" enctype="multipart/form-data">
        @csrf
        <!-- <div class="mb-3">
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
            <select name="subcategory_id" class="form-control" required>
                <option value="">Select Subcategory</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
        </div> -->
     <!-- Category Selection or New Entry -->
     <div class="mb-3">
    <label class="form-label">Category</label>
    <select name="category_id" id="category" class="form-control">
        <option value="">Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="text" name="new_category" id="new_category" class="form-control mt-2 d-none" placeholder="Enter New Category">
</div>

<div class="mb-3">
    <label class="form-label">Subcategory</label>
    <select name="subcategory_id" id="subcategory" class="form-control">
        <option value="">Select Subcategory</option>
        @foreach ($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
        @endforeach
    </select>
    <input type="text" name="new_subcategory" id="new_subcategory" class="form-control mt-2 d-none" placeholder="Enter New Subcategory">
</div>


        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Banner</label>
            <input type="file" name="banner" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="year" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Month</label>
            <input type="text" name="month" class="form-control" required>
        </div>
     
        <div class="mb-3">
            <label class="form-label">Embed URL</label>
            <input type="url" name="embed_url" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let categoryDropdown = document.getElementById("category");
    let subcategoryDropdown = document.getElementById("subcategory");
    let newCategoryInput = document.getElementById("new_category");
    let newSubcategoryInput = document.getElementById("new_subcategory");

    // Function to toggle category input field
    function toggleCategoryInput() {
        if (categoryDropdown.value === "") {
            newCategoryInput.classList.remove("d-none");
            newCategoryInput.setAttribute("required", "true");
        } else {
            newCategoryInput.classList.add("d-none");
            newCategoryInput.removeAttribute("required");
        }
    }

    // Function to toggle subcategory input field
    function toggleSubcategoryInput() {
        if (subcategoryDropdown.value === "") {
            newSubcategoryInput.classList.remove("d-none");
            newSubcategoryInput.setAttribute("required", "true");
        } else {
            newSubcategoryInput.classList.add("d-none");
            newSubcategoryInput.removeAttribute("required");
        }
    }

    // Event Listeners
    categoryDropdown.addEventListener("change", toggleCategoryInput);
    subcategoryDropdown.addEventListener("change", toggleSubcategoryInput);
});
</script>

@endsection


