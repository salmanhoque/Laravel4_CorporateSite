<?php

class Non_adminsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Post::all();
        return View::make('non_admins.index', array('posts' => $data));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        return $slug;
    }

    

}