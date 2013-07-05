@extends('assets.assetbase')

@section('content')

	@foreach ($assets as $asset)

		File Name: {{ $asset->asset_name }} <br/>

		File Url : {{ HTML::link($asset->url,$asset->url)}} 

		{{ Form::open(array('url'=>'/assets/'.$asset->id, 'method'=>'delete')) }}
		{{ Form::submit('Delete This File',
			array('class'=>'btn btn-danger pull-right')) }} 
			<span class='clearfix'></span>

		<hr/>
	@endforeach

@stop