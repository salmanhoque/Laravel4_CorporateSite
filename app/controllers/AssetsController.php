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
     
        $originalName       = $file->getClientOriginalName();
        $directory          = 'public/uploads/'.date('m_Y').'/';
        $updatedFilename    = Post::slugify($originalName);
        $filename           = time().'_'.$updatedFilename;
     
        $upload_success = Input::file('file')->move($directory, $filename);
        $inserted_url   = URL::to('/').'/uploads/'.date('m_Y').'/'.$filename;

        if( $upload_success ) 
        {
            $msg = '<div class="alert alert-success">
                    File uploaded successfully!</div>';
            Asset::create(array(
                    'asset_name' => $originalName,
                    'url'        => $inserted_url,
                ));
            return Redirect::to('/assets')->with('msg',$msg);
        }
        else
        {
            $msg = '<div class="alert alert-error">
                    Error: File upload Unsuccessful!</div>';
            return Redirect::to('/assets')->with('msg',$msg);
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
        Asset::where('id',$id)->delete();

        $msg = '<div class="alert alert-success">
                Your File has been deleted!</div>';
        
        return Redirect::to('/assets')->with('msg',$msg);

    }

}