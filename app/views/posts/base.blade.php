<h1>Admin Panel</h1>
<a href='{{ URL::action('PostsController@index') }}'>Admin Home</a> |
<a href='{{ URL::action('PostsController@allposts') }}'>All Page</a> |
<a href='{{ URL::action('PostsController@allposts') }}'>Create Page</a> |
<a href='#'>File Upload</a> 



@yield('content')