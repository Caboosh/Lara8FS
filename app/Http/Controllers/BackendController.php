<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index ()
    {
        // Allow Showing recently published posts on the dashboard page
        $posts = Post::latest()->paginate(6);

        // Show View for Backend Admin Dashboard.
        return view('backend.index',compact('posts'));
    }
}
