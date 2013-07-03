<?php

class Post extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public static function PageList()
    {
    	return Post::orderBy('position','asc')->get();
    }
}