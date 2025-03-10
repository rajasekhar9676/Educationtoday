@extends('layouts.frontend')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-center">Latest Blog Posts</h1>

    @if($posts->count() > 0)
        <!-- Featured Blog Post (First Post) -->
        <div class="row mb-4">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <img src="{{ asset('storage/' . $posts[0]->thumbnail) }}" class="card-img-top" alt="{{ $posts[0]->title }}" style="height: 400px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $posts[0]->title }}</h3>
                        <p class="text-muted"><strong>Education Today</strong> | {{ $posts[0]->created_at->format('F d, Y') }}</p>
                        <p class="card-text">{{ Str::limit($posts[0]->excerpt, 200) }}</p>
                        <a href="{{ url('blog/' . $posts[0]->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Two Smaller Blogs Beside the Featured One -->
            <div class="col-lg-4 d-flex flex-column gap-3">
                @foreach($posts->skip(1)->take(2) as $post)
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="text-muted small">
                                <strong>Education Today</strong> | {{ $post->created_at->format('F d, Y') }}
                            </p>
                            <a href="{{ url('blog/' . $post->id) }}" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Remaining Blog Posts in Grid -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach($posts->skip(3) as $post)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="text-muted small">
                                <strong>Education Today</strong> | {{ $post->created_at->format('F d, Y') }}
                            </p>
                            <p class="card-text flex-grow-1">{{ Str::limit($post->excerpt, 100) }}</p>
                            <a href="{{ url('blog/' . $post->id) }}" class="btn btn-primary mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">No blog posts available.</p>
    @endif

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links() }}
    </div>
</div>
@endsection


