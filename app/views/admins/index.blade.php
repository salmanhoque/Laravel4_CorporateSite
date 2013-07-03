<h1>Admin Login</h1>

@if ($errors->has())
	{{ $errors->first('username', '<p>:message</p>') }}
	{{ $errors->first('password', '<p>:message</p>') }}
@endif	

@if (Session::has('msg'))
    <div id="flash_error">{{ Session::get('msg') }}</div>
@endif

{{ Form::open(array('url'=>'/admins/login','method'=>'put')) }}

{{ Form::label('username') }}
{{ Form::text('username',Input::old('username')) }}

<br/>

{{ Form::label('password') }}
{{ Form::password('password') }}

<br/>

{{ Form::submit('Login') }}