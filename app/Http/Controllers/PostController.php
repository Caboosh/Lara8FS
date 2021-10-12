<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        // dd(Gate::allows('admin'));
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

        return back()->with('success','Post Successfully Created!');

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
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'published_at' => 'required'
        ]);
    }
}
