<?php

namespace App;

class Post extends Model
{
    //declare relationship between posts and comments.
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
    //declare relationship between posts and users.
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    //relationship between post and tags.
    public function tags(){

        return $this->BelongsToMany(Tag::class);
    }
}
