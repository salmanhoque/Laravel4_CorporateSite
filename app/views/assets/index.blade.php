@extends('assets.assetbase')

@section('content')

	@foreach ($assets as $asset)

		File Name: {{ $asset->asset_name }} |
		File Url : {{ HTML::link($asset->url,$asset->url) }} |
		{{ Form::open(array('url'=>'/assets/'.$asset->id, 'method'=>'delete')) }}
		{{ Form::submit('Delete This File') }}

		<br/>
	@endforeach

@stop