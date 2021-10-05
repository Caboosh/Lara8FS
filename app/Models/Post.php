<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    // Return the sluggable configuration array for this model.
    public function sluggable(): array
    {
        return ['slug' => ['source' => 'title']];
    }

    public function scopeFilter ($query, array $filters)
    {
    // Filter Posts Based on a Search Query
    $query->when($filters['search'] ?? false, function ($query, $search) {
        $query->where(fn($query) =>
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
        );
    });

    // Filter Posts based on the associated Category
        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) => $query->where('slug', $category)
            )
        );

    // Filter Posts based on the author who created the Post
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) => $query->where('username', $author)
            )
        );
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
