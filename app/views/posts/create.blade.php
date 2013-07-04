@extends('posts.base')

@section('content')
	
	@if ($errors->has())
		{{ $errors->first('title', '<p>:message</p>') }}
		{{ $errors->first('visibility', '<p>:message</p>') }}
		{{ $errors->first('body', '<p>:message</p>') }}
	@endif	

	{{ Form::open(array('url'=>'/posts','method'=>'post')) }}

	{{ Form::label('title') }}
	{{ Form::text('title',Input::old('title')) }}

	<br/>

	{{ Form::label('visibility') }}
	{{ Form::select('visibility', 
			array(''=>'Select Vibilibility','1' => 'True', '0' => 'False'), '') }}
	<br/>

	{{ Form::label('position') }}
	{{ Form::text('position',Input::old('position')) }}

	<br/>

	{{ Form::label('body') }}<br/>
	{{ Form::textarea('body',Input::old('body')) }}

	<br/>
	{{ Form::submit('Create Post') }}

@stop