@extends('layout.layout')

@section('content')
	<a href="/acc" class="btn btn"> Home </a>
	<hr>
	<h1>Edit acc</h1>

	<br>
	<br>

	{!! Form::open(['action' => ['AccController@update', $acc->id_acc], 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('status_acc', 'Status Acc')}}
    			{{Form::select('status_acc', ['No' => 'No', 'Yes' => 'Yes'], $acc->status_acc )}}
    	</div>
    			{{Form::hidden('_method', 'PUT')}}
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection