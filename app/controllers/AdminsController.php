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
            
        /*$userCount   = Admin::where('username',$username)
                            ->where('password',$password)
                            ->count();

        return $userCount;*/
  
        if ($valid->fails()) {
            $errors = $valid->messages();
            return Redirect::to('admins')->withErrors($errors)->withInput();
        } else {
            return Redirect::to('/posts');
        }
        
        
       
    }

}