<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function create ()
    {
    // Show a Form to create a post, if you are an Administrator
        return view('backend.posts.create');
    }

    public function store ()
    {
    //  Validate Submitted Data from the Post Creation Form and store into the Database
        $postdata = $this->validatePost();

        $postdata['user_id'] = auth()->id();
        if (isset($postdata['thumbnail'])) {
            $postdata['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        Post::create($postdata);

        return redirect('/admin/dashboard')->with('success','Post Successfully Created!');

    }

    public function update (Post $post)
    {
       $postdata = $this->validatePost($post);

        if (isset($postdata['thumbnail'])) {
            $postdata['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($postdata);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy (Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post Deleted!');
    }

    public function validatePost (?Post $post = null):array
    {
        $post ??= new Post();
       return request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }
}
