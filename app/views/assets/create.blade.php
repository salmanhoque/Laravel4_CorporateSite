@extends('assets.assetbase')

@section('content')

	@if ($errors->has())
		{{ $errors->first('file', '<p>:message</p>') }}
	@endif	

	{{ Form::open(array('url'=>'/assets', 'method'=>'post','files' => 'true')) }}
	{{ Form::file('file') }} <br/>
	{{ Form::submit('Upload This File') }}
@stop