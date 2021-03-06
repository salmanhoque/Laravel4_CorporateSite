@extends('posts.base')

@section('content')
	@if ($errors->has())
		<div class="alert alert-error">
			{{ $errors->first('title', '<p>:message</p>') }}
			{{ $errors->first('visibility', '<p>:message</p>') }}
			{{ $errors->first('body', '<p>:message</p>') }}
		</div>
	@endif	

	@foreach ($PostItems as $PostItem)

		{{ Form::open(array('url'=>'/posts/'.$PostItem->id,'method'=>'put')) }}

		{{ Form::label('title') }}
		<span class='title-text'>
			{{ Form::text('title',$PostItem->title) }}
		</span>	
		<br/>

		{{ Form::label('visibility') }}
		@if ($PostItem->visibility == 1)
			{{ Form::select('visibility', array('1' => 'True', '0' => 'False'), '1') }}
		@else
			{{ Form::select('visibility', array('1' => 'True', '0' => 'False'), '0') }}
		@endif
		<br/>

		{{ Form::label('position') }}
		{{ Form::text('position',$PostItem->position) }}

		<br/>

		{{ Form::textarea('body',$PostItem->body,
			array('class'=>'ckeditor')) }}

		<br/>
		{{ Form::submit('Update This Post',
			array('class'=>'btn btn-primary pull-right')) }}
		<span class='clearfix'></span>
			
		<p> <strong>Last Updated At: {{ $PostItem->updated_at }}</strong></p>

	@endforeach	

@stop