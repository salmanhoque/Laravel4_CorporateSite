<h1>Admin Panel</h1>
<a href='{{ URL::action('PostsController@index') }}'>Admin Home</a> |
<a href='{{ URL::action('PostsController@create') }}'>Create Post</a> |
<a href='{{ URL::action('AssetsController@index') }}'>File Upload</a> |
<a href='{{ URL::action('AdminsController@logOut') }}'>LogOut</a> 

<hr/>
	<a href='{{ URL::action('AssetsController@index') }}'>All Files</a> |
	<a href='{{ URL::action('AssetsController@create') }}'>Upload File</a>  
<hr/>

@if (Session::has('msg'))
    <div id="flash_error">{{ Session::get('msg') }}</div>
@endif
	
@yield('content')			