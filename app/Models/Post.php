<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    public function comments()
    {
        return $this->HasMany(Comment::class);
    }
}
