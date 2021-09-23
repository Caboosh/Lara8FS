<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public $title;
    public $slug;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title, $slug, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }


    // Get All Posts
    public static function all() {
        return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->slug,
                    $document->excerpt,
                    $document->date,
                    $document->body()
                ));
    }

    // Find a specific post by its slug
    public static function find($slug) {

        return static::all()->firstWhere('slug', $slug);

    }

    // Find a specific post by its slug, and fail if no matching post is found
    public static function findOrFail($slug) {

        $post = static::all()->firstWhere('slug', $slug);

        if (! $post) {
            throw new ModelNotFoundException();
        }
        return $post;

    }
}
