@extends('posts.base')

@section('content')
	@if ($errors->has())
		<div class="alert alert-error">
			{{ $errors->first('title', '<p>:message</p>') }}
			{{ $errors->first('visibility', '<p>:message</p>') }}
			{{ $errors->first('body', '<p>:message</p>') }}
		</div>
	@endif	

	{{ Form::open(array('url'=>'/posts','method'=>'post')) }}

	{{ Form::label('title') }}
	<span class='title-text'>
		{{ Form::text('title',Input::old('title')) }}
	</span>	
	<br/>

	{{ Form::label('visibility') }}
	{{ Form::select('visibility', 
			array(''=>'Select Vibilibility','1' => 'True', '0' => 'False'), '') }}
	<br/>

	{{ Form::label('position') }}
	{{ Form::text('position',Input::old('position')) }}

	<br/>

	{{ Form::textarea('body',Input::old('body'),
		array('class'=>'ckeditor')) }}

	<br/>
	{{ Form::submit('Create Post',array('class'=>'btn btn-primary pull-right')) }}
		<span class='clearfix'></span>
@stop