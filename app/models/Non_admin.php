<?php

class Non_admin extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public static function PageList()
    {
    	return Post::where('visibility',1)
                ->orderBy('position','asc')->get();
    }
}