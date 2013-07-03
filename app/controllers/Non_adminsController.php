<?php

class Non_adminsController extends BaseController {

    // protected $layout = 'non_admins.common';


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $home_page_slug     = 'home';
        $all_page_links     = Non_admin::PageList();
        $home_page          = Post::where('slug',$home_page_slug)->get(); 

        $view               = View::make('non_admins.index');
        $view->pageLinks    = $all_page_links;
        $view->homePage     = $home_page;

        return $view;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        //return DB::getQueryLog($data);
        $all_page_links     = Non_admin::PageList();
        $current_page       = Post::where('slug',$slug)->get();
        $view               = View::make('non_admins.show');
        $view->pageLinks    = $all_page_links;
        $view->posts        = $current_page;
        return $view;
    }

    

}