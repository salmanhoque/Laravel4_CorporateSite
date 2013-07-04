<?php

class AssetsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $view = View::make('assets.index');
        $view->assets = Asset::all();
        return $view;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {     
        $input = Input::all();
        $rules = array(
            'file' => 'required',
        );
     
        $validation = Validator::make($input, $rules);
     
        $file = Input::file('file');
     
        $originalName   = $file->getClientOriginalName();
        $directory      = 'public/uploads/'.date('m_Y').'/';
        $filename       = time().'_'.$originalName;
     
        $upload_success = Input::file('file')->move($directory, $filename);;
     
        if( $upload_success ) {
            return "File uploaded";
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}