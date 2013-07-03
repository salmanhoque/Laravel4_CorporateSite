@extends('posts.base')

@section('content')
	<h1>Welcome to the Admin Panel</h1> <br/>
	<p>Here You can do many things</p>
	<ul>
		@foreach ($posts as $post)
			<li>
				{{ HTML::link('/posts/'.$post->id,$post->title) }}
			</li>
		@endforeach
	</ul>
@stop