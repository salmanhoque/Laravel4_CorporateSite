<?php

class PostsController extends BaseController {

    //http://maxoffsky.com/code-blog/howto-ajax-multiple-file-upload-in-laravel/
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $all_page       = Post::PageList();
        $view           = View::make('posts.index');
        $view->posts    = $all_page;
        return $view;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       return View::make('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $fields = Input::only('title','visibility','position','body');
        $valid  = Post::validation($fields);
        
        if($valid->fails())
        {
            $errors = $valid->messages();
            return Redirect::to('/posts/create')
                            ->withErrors($errors)->withInput();
        }
        else{
            Post::create(array(
                                'title'      => Input::get('title'),
                                'slug'       => Post::slugify(Input::get('title')),
                                'visibility' => Input::get('visibility'),
                                'position'   => Input::get('position'),
                                'body'       => Input::get('body'),
                            ));

            $msg = "Your post has been created!";
            return Redirect::to('/posts')
                            ->with('msg',$msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post   = Post::where('id',$id)->get();
        return  View::make('posts.show')->with('PostItems',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post   = Post::where('id',$id)->get();
        return  View::make('posts.edit')->with('PostItems',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $fields = Input::only('title','visibility','position','body');
        $valid  = Post::validation($fields);
        
        if($valid->fails())
        {
            $errors = $valid->messages();
            return Redirect::to('posts/'.$id.'/edit')
                            ->withErrors($errors);
        }
        else{
            Post::where('id',$id)
                            ->update(array(
                                'title'      => Input::get('title'),
                                'visibility' => Input::get('visibility'),
                                'position'   => Input::get('position'),
                                'body'       => Input::get('body'),
                            ));

            $msg = "Your post has been updated!";
            return Redirect::to('posts/'.$id.'/edit')
                            ->with('msg',$msg);
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
        Post::where('id',$id)->delete();

        $msg = "Your post has been deleted!";
        
        return Redirect::to('/posts')->with('msg',$msg);
    }

}