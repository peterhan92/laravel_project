@extends('layouts.app')

@section('content')
	<div class="panel-heading"><h2>Edit: "{{ $post->title }}"</h2></div>
	
	<div class="panel-body">
		{!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
			@include ('partials._form', ['submitButtonText' => 'Update Post'])
		{!! Form::close() !!}
		
		@include ('errors.list')
	</div>
@stop

