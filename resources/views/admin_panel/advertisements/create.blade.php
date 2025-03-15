@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload Advertisement</h2>
    <form action="{{ route('advertisements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
       

        <div class="mb-3">
            <label class="form-label">Advertisement Type</label>
            <select name="type" class="form-control" required>
                <option value="banner">Banner</option>
                <option value="voting_survey">Voting & Survey</option>
                <option value="popup">Subscription</option>
                <option value="sidebar">MySchoolAdmision</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Advertisement Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
