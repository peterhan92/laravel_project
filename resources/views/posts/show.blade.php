@extends('layouts.app')

@section('content')
	
	<div class="panel-heading"><h2>Title: {{ $post->title }} </h2></div>

	<div class="panel-body">
		<article>
			{{ $post->body }}
		</article>
		<br>
		@unless ($post->tags->isEmpty())
			<h5>Tags:</h5>
			<ul>
				@foreach ($post->tags as $tag)
					<li><a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a></li>
				@endforeach
			</ul>
		@endunless
		<br>
		Written by: {{ $user->name }}
	<center>
		<button class='btn btn-primary' type='submit' onclick="window.location='{{ url("posts/$id/edit") }}'">Edit Post</button>
	
   		{{ Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $id]]) }}
   			{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
		{{ Form::close() }}

	</center>

	</div>
@stop