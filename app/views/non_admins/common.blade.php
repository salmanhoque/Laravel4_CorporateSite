
<p>
	@foreach ($pageLinks as $pageLink)
		{{ HTML::link('/page/'.$pageLink->slug,$pageLink->title) }} |
	@endforeach
</p>

@yield('content')