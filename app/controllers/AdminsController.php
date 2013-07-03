<?php

class AdminsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function login()
    {           
        $userInput  = Input::only('username','password');
        $valid      = Admin::validate($userInput);
        
        if ($valid->fails())
        {
            $errors = $valid->messages();
            return Redirect::to('admins')->withErrors($errors)->withInput();
        } 
        elseif (Auth::attempt($userInput) == False ) {
            
            $msg = 'No user found in database please check your username and password';
            return Redirect::to('admins')->with('msg', $msg);  
        }
        else 
        {
            return Redirect::to('/posts');
        }
        
        
       
    }

}