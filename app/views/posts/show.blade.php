@extends('posts.base')

@section('content')
	@foreach ($PostItems as $PostItem)
		<h1>{{ $PostItem->title }}</h1>
		
		<p> Created At: {{ $PostItem->created_at }}</p>
		<p> Updated At: {{ $PostItem->updated_at }}</p>
		
		@if ($PostItem->visibility == 1)
		<p> Visibility: True</p>
		@else
		<p> Visibility: False</p>
		@endif

		<p> {{ $PostItem->body  }}</p>

		<p> {{ HTML::link('/posts/'.$PostItem->id.'/edit','Edit This Page') }} </p>
	
	{{ Form::open(array('url'=>'/posts','method'=>'post')) }}

		<p> {{ HTML::link('/posts/'.$PostItem->id.'/edit','Edit This Page') }} </p>
	@endforeach

@stop