@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit FAQ</h2>
    <form action="{{ route('events.faqs.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Question</label>
            <input type="text" name="question" class="form-control" value="{{ $faq->question }}" required>
        </div>
        <div class="mb-3">
            <label>Answer</label>
            <textarea name="answer" class="form-control" required>{{ $faq->answer }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
