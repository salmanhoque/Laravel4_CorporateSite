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

    public static function slugify($data)
    {	
    	$lowercase_string	= strtolower($data);
    	$splited_array  	= explode(" ",$lowercase_string);
    	
    	if (count($splited_array) == 1)
    	{
    		return $lowercase_string;
    	}
    	else
    	{
    		$joined_string		= implode("_", $splited_array);
    		return $joined_string;
       	}
    }

}