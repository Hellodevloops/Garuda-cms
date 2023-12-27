<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class BlogController extends Controller
{

    public function index()
    {
        // Fetch blog posts from the database
        $posts = Post::get();

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        // Fetch the blog post by slug from the database
        $post = Post::get();

        return view('blog.show', compact('post'));
    }
}
