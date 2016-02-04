@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"><h2>Create a Question</h2></div>

	<div class="panel-body">
		{!! Form::open(['url' => 'posts']) !!}
			@include ('partials._form', ['submitButtonText' => 'Submit Post'])
		{!! Form::close() !!}

		@include ('errors.list')
	</div>
</div>
@stop
