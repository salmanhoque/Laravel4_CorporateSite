@extends('posts.base')

@section('content')
	@if ($errors->has())
		{{ $errors->first('title', '<p>:message</p>') }}
		{{ $errors->first('visibility', '<p>:message</p>') }}
		{{ $errors->first('body', '<p>:message</p>') }}
	@endif	

	@if (Session::has('msg'))
	    <div id="flash_error">{{ Session::get('msg') }}</div>
	@endif


	@foreach ($PostItems as $PostItem)

		{{ Form::open(array('url'=>'/posts/'.$PostItem->id,'method'=>'put')) }}

		{{ Form::label('title') }}
		{{ Form::text('title',$PostItem->title) }}

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

		{{ Form::label('body') }}<br/>
		{{ Form::textarea('body',$PostItem->body) }}

		<br/>
		{{ Form::submit('Update This Post') }}
		<p> Last Updated At: {{ $PostItem->updated_at }}</p>

	@endforeach	

@stop