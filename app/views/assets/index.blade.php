@extends('assets.assetbase')

@section('content')

	@foreach ($assets as $asset)

		File Name: {{ $asset->asset_name }} |
		File Url : {{ HTML::link($asset->url,$asset->url) }}

	@endforeach

@stop