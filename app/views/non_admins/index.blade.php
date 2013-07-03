
@foreach ($posts as $post)
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->body }}<p>
		<p>{{ HTML::link('/page/'.$post->slug,$post->title) }}<p>
@endforeach