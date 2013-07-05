@extends('posts.base')

@section('content')
	<h2>All Posts/Pages</h2>
	<p>Click to view,edit or delete</p>
	<ul class='nav nav-pills nav-stacked'>
		@foreach ($posts as $post)
			<li>
				{{ HTML::link('/posts/'.$post->id,$post->title) }}
			</li>
		@endforeach
	</ul>
@stop