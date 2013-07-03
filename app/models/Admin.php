<?php

class Admin extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
    	'username' => 'required',
    	'password' => 'required',
    );

    public static function validate($data)
    {
    	return Validator::make($data,self::$rules);
    }

}