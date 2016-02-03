@extends('layouts.app')

@section('content')
	
	<div class="panel-heading"><h2>{{ $post->title }}</h2></div>

	<div class="panel-body">
		<article>
			{{ $post->body }}
		</article>
		<br>
		@unless ($post->tags->isEmpty())
			<h5>Tags:</h5>
			<ul>
				@foreach ($post->tags as $tag)
					<li>{{ $tag->name }}</li>
				@endforeach
			</ul>
		@endunless
	<center>
   		<button type='submit' onclick="window.location='{{ url("posts/$id/edit") }}'">Edit this Post</button>
	</center>
	</div>
@stop
