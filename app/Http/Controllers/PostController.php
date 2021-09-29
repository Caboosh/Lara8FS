<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    // Search for posts that match the user's query, if applicable and show Resulting Posts
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString()
        ]);
    }

    public function show (Post $post)
    {
    // Find a Post by its slug, pass the data and show it in a view called "post"
        return view('posts.show', compact('post'));
    }
}
