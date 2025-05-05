<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'commentable_type',
        'commentable_id'
    ];

    /* public function post()
    {
        return $this->belongsTo(Post::class);
    } */

    public function commentable()
    {
        return $this->morphTo();
    }
}
