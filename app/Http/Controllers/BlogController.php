<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch all blog posts with required details, ordered by latest
        $posts = BlogPost::select( 'id', 'title', 'banner', 'thumbnail', 'content', 'excerpt', 'created_at')
            ->latest()
            ->paginate(10); // Pagination for better performance

        return view('blog.index', compact('posts'));
    }

    public function show($id)
    {
        // Fetch a single blog post by ID with required details
        $post = BlogPost::select('title', 'banner', 'thumbnail', 'excerpt','content', 'created_at')
            ->findOrFail($id);

        return view('blog.show', compact('post'));
    }
}
