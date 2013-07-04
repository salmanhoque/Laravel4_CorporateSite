<?php

class AdminsController extends BaseController {

    /**
     * UserLogin Form.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('admins.index');
    }

    /**
     * Log the user in.
     * validation message if not correct or log user in and store user credentials
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
            
            $msg = '<div class="alert alert-error">
                    No user found in database please check
                    your username and password
                    </div>';
            return Redirect::to('admins')->with('msg', $msg);  
        }
        else 
        {
            return Redirect::to('/posts');
        }
    }


     /**
     * LogOut page destroy users session.
     *
     * @return Response
     */
    public function logOut()
    {           
        if (Auth::user())
        {
            Auth::logout();
            $msg = '<div class="alert alert-success">Logout Successful</div>';
            return Redirect::to('admins')->with('msg', $msg);
        }
        else
        {
            return Redirect::to('admins');
        }
    }

}