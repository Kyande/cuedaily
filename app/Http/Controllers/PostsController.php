<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
         //all urls are accessible by an authenticated user except...
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    
    public function index()
    {
        $post = new Post;

        //get all posts.
        $posts = $post::all();

    	//return a view in views/posts
    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	//return a view in views/posts
    	return view('posts.create');
    }

    public function store(User $user)
    {
    	//validate input.
    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required',
            'tags' => 'required'
    		]);
        //create new Post
        $user->createNewPost(request('title'), request('body'));

    	//redirect to home page.
    	return redirect('/home');
    }

    public function show(Post $post){
        //show id specific posts.
        //return view in views/posts.
        return view('posts.show', compact('post'));
    }
}
