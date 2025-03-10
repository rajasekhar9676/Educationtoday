@extends('layouts.frontend')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p class="text-muted">Published on {{ $post->created_at->format('F d, Y') }}</p>
            @if($post->banner)
                <img src="{{ asset('storage/' . $post->banner) }}" class="img-fluid mb-4" alt="{{ $post->title }}">
            @endif
            <div class="content">{!! $post->content !!}</div>
            <a href="{{ route('blog.index') }}" class="btn btn-secondary mt-4">Back to Blog</a>
        </div>
    </div>
</div>
@endsection


