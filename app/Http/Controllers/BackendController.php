<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index ()
    {
        // Allow Showing recently published posts on the dashboard page
        $posts = Post::latest()->paginate(6);
        $users = User::latest()->paginate(6);

        // Show View for Backend Admin Dashboard.
        return view('backend.index',compact('posts', 'users'));
    }

    public function users ()
    {
        $users = User::latest()->paginate(10);
        return view('backend.users.index', compact('users'));
    }

    public function show (Post $post)
    {
        return view('backend.posts.edit', ['post' => $post]);
    }

    public function posts ()
    {
        $posts = Post::latest()->paginate(15);
        return view('backend.posts.index', compact('posts'));
    }
}
