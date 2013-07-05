@extends('posts.base')

@section('content')
	@foreach ($PostItems as $PostItem)
		<h1>{{ $PostItem->title }}</h1>
		
		<p class='pull-right'><em> Created At: {{ $PostItem->created_at }}</em></p>
		<span class='clearfix'></span>
		<p class='pull-right'><em> Updated At: {{ $PostItem->updated_at }}</em></p>
		<span class='clearfix'></span>

		<strong>
			@if ($PostItem->visibility == 1)
			<p> Visibility: True</p>
			@else
			<p> Visibility: False</p>
			@endif
		</strong>

		<p> {{ $PostItem->body  }}</p>

		<p> 
			{{ HTML::link('/posts/'.$PostItem->id.'/edit','Edit This Page',
				array('class'=>'btn btn-warning pull-left')) }}
		</p>
	
		
		{{ Form::open(array('url'=>'/posts/'.$PostItem->id,'method'=>'delete')) }}
		<p> 
			{{ Form::submit('Delete This Post',
			array('class'=>'btn btn-danger pull-right')) }} 
			<span class='clearfix'></span>
		</p>

	@endforeach

@stop