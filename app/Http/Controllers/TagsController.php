<?php

namespace App\Http\Controllers;

use App\Tag;

use Illuminate\Http\Request;

class TagsController extends Controller
{
	public function __construct()
    {
         //all urls are accessible by an authenticated user
        $this->middleware('auth');
    }

	//show all tags
    public function index(){
    	//collect all tags from DB.
        $tag = new Tag;

        $tags = tag::all();
    	//return view.
    	return view('tags.index', compact('tags'));
    }

    //add a tag page.
    public function add(){
    	//return view.
    	return view('tags.add');
    }

    //edit a tag page.
    public function edit($id){

        $tag = Tag::find($id);

    	//return view. form filled with necessary values
    	return view('tags.edit', compact('tag'));
    }

    //new tag store to DB
    public function store(Tag $tag){
    	//validate input.
    	$this->validate(request(),[
    			'name' => 'required|min:3'
    		]);
    	//create new tag.
    	$tag::addTag(request('name'));
    	//redirect to view all tags.
    	return redirect('/tags');
    }

    //update a tag.
    public function update($id){

        //validate data
        $this->validate(request(),[
                'name' => 'required|min:3'
            ]);

        //update tag.
        $tag = Tag::updateTag(request('name'), $id);
        
        //redirect to view all tags.
        return redirect('/tags');
    }

}
