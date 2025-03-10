@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $seoMeta->meta_title }}</h1>
    <p><strong>Meta Description:</strong> {{ $seoMeta->meta_description }}</p>
    <p><strong>Meta Keywords:</strong> {{ $seoMeta->meta_keywords }}</p>
</div>
@endsection

