<h1>Admin Panel</h1>
<a href='{{ URL::action('PostsController@index') }}'>Admin Home</a> |
<a href='{{ URL::action('PostsController@create') }}'>Create Post</a> |
<a href='#'>File Upload</a> |
<a href='{{ URL::action('AdminsController@logOut') }}'>LogOut</a> 

@yield('content')