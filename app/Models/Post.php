<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    // Relación uno a muchos
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Relación muchos a muchos
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
