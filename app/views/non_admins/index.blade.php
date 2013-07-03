@extends('non_admins.common')

@section('content')

	@foreach ($homePage as $homePageItem)
		<h1>{{ $homePageItem->title }}</h1>
		<p>{{ $homePageItem->body }}<p>
	@endforeach

@stop


