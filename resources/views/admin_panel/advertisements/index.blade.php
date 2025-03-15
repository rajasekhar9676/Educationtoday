@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Advertisements</h2>
    <a href="{{ route('advertisements.create') }}" class="btn btn-primary mb-3">Upload Advertisement</a>

    <div class="row">
        @foreach ($ads as $ad)
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ asset('storage/' . $ad->image) }}" class="card-img-top" alt="Advertisement">
                    <div class="card-body">
                        <p>Type: <strong>{{ ucfirst($ad->type) }}</strong></p>
                        <a href="{{ route('advertisements.edit', $ad->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('advertisements.destroy', $ad->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this ad?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
