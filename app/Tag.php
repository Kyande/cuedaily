<?php

namespace App;

class Tag extends Model
{
    //relationship between post and tags.
    public function posts(){

        return $this->BelongsToMany(Post::class);
    }
    //add a tag
    public static function addTag($name){
    	$tag = new Tag;
    	//create tag.
    	$tag->name = $name;
    	//save tag.
    	$tag->save();
    }

    //update Tag.
    public static function updateTag($name, $id){

    	$tag = Tag::find($id);
        $update = \DB::table('tags')
            ->where('id', $id)
            ->update(['name' => $name]);
    } 
    
}
