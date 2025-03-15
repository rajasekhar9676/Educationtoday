@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Advertisement</h2>
    <form action="{{ route('advertisements.update', $advertisement->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Current Advertisement</label>
            <img src="{{ asset('storage/' . $advertisement->image) }}" class="img-fluid mb-3" width="300">
        </div>

        <div class="mb-3">
            <label class="form-label">Upload New Image (optional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Advertisement Type</label>
            <select name="type" class="form-control" required>
                <option value="banner" {{ $advertisement->type == 'banner' ? 'selected' : '' }}>Banner</option>
                <option value="voting_survey" {{ $advertisement->type == 'voting_survey' ? 'selected' : '' }}>Voting & Survey</option>
                <option value="popup" {{ $advertisement->type == 'subscription' ? 'selected' : '' }}>subscription</option>
                <option value="sidebar" {{ $advertisement->type == '' ? 'selected' : 'myschooladmission' }}>myschooladmission</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
