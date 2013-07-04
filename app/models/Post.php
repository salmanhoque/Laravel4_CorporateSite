<?php

class Post extends Eloquent {
    protected $guarded = array();

    public $timestamps = true;

     public static function PageList()
    {
    	return Post::orderBy('position','asc')->get();
    }

    public static $rules = array(
    	'title' 		=> 'required', 
    	'visibility' 	=> 'required', 
    	'body'			=> 'required', 
    );

    public static function validation($data)
    {
    	return Validator::make($data,self::$rules);
    }

}