@extends('layouts.app')

@section('content')
	<div class="panel-heading"><h2>Ask a Question</h2></div>

	<div class="panel-body">
		{!! Form::open(['url' => 'posts']) !!}
			@include ('partials._form', ['submitButtonText' => 'Add New Posts'])
		{!! Form::close() !!}

		@include ('errors.list')
	</div>
@stop
