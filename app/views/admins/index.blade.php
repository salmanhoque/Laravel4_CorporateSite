<h1>Admin Login</h1>

{{ Form::open(array('url'=>'/admins/login','method'=>'put')) }}

{{ Form::label('username') }}
{{ Form::text('username') }}

<br/>

{{ Form::label('password') }}
{{ Form::password('password') }}

<br/>

{{ Form::submit('Login') }}