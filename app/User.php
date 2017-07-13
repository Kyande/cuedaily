<?php

namespace App;

use App\Post;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //declare relationship between users and posts.
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //declare relationship between comments and users.
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function createNewPost($title, $body)
    {
        //new instance of Post model
        $newPost = new Post;
        //pass data to object members.
        $newPost->user_id = \Auth::user()->id;//get logged in user's id
        $newPost->title = $title;
        $newPost->body = $body; 
        //save new post
        $newPost->save();
    }

}
