@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>FAQs</h2>
        <a href="{{ route('events.faqs.create') }}" class="btn btn-primary">Add New FAQ</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $faq->question }}</td>
                    <td>{{ Str::limit($faq->answer, 100) }}</td>
                    <td>
                        <a href="{{ route('events.faqs.edit', $faq->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('events.faqs.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

