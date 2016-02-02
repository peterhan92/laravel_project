@extends('app')

@section('content')
	<h1>Edit: {!! $post->title!!}</h1>
	<hr/>

	{!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
		
	@include ('posts._form', ['submitButtonText' => 'Edit Post'])

	{!! Form::close() !!}
	
@stop