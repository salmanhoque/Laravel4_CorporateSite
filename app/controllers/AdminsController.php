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
        
        $username    = Input::get('username'); 
        $password    = Input::get('password');
        $salt        = 'I am giving a BIT of SALT on your PASS-WORD';
        
        $passwordWithSalt = md5($salt.' '.$password);
        
        $userCount   = Admin::where('username',$username)
                            ->where('password',$passwordWithSalt)
                            ->count();    
        $minimumUser = 1;       
        
        if ($valid->fails())
        {
            $errors = $valid->messages();
            return Redirect::to('admins')->withErrors($errors)->withInput();
        } 
        elseif ($userCount != $minimumUser ) {
            
            $msg = 'No user found in database please check your username and password';
            return Redirect::to('admins')->with('msg', $msg);  
        }
        else 
        {
            return Redirect::to('/posts');
        }
        
        
       
    }

}