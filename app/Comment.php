<?php

namespace App;

class Comment extends Model
{
    //declare relationship between comments and posts.
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
    //a comment belongs to user
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
