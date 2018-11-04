@extends('layout.layout')

@section('content')
	<a href="/acc" class="btn btn"> Home </a>
	<hr>
	<h1>Create acc</h1>

	<br>
	<br>

	{!! Form::open(['action' => 'AccController@store', 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('submit_id', 'Submit Id')}}
    			{{Form::number('submit_id', '' , ['class' => 'form-control', 'placeholder' => 'Submit Id'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('status_acc', 'Status Acc')}}
    			{{Form::select('status_acc', ['No' => 'No', 'Yes' => 'Yes'], '', ['placeholder' => 'Pilih status Acc'] )}}
    	</div>

    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection