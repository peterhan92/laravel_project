
@extends('app')

@section('content')
	
	<h1>Write a New Posts</h1>

	<hr/>

	{!! Form::open(['url' => 'posts']) !!}
		
	@include ('posts._form', ['submitButtonText' => 'Add New Posts'])

	{!! Form::close() !!}


@stop