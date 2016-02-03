@extends('layouts.app')

@section('content')

<div class="panel-heading">Top Stories</div>

<div class="panel-body">
	@foreach ($posts as $post)
		<article>
			<h3>
				<a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a>
			</h3>
			<div class="body">{{ $post->body }}</div>
		</article>
        <hr/>
	@endforeach
</div>

<center>
    <button type='submit' onclick="window.location='{{ url("posts/create") }}'">Ask a Question</button>
</center>
<br>
@endsection
