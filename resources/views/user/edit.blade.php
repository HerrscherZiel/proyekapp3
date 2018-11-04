@extends('layout.layout')

@section('content')
	<a href="/user" class="btn btn"> Home </a>
	<hr>
	<h1>Edit Users</h1>

	<br>
	<br>

	{!! Form::open(['action' => ['UserController@update', $users->id], 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('name', 'Nama')}}
    			{{Form::text('name', $users->name , ['class' => 'form-control', 'placeholder' => 'Nama'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('email', 'E-mail')}}
    			{{Form::text('email', $users->email , ['class' => 'form-control', 'placeholder' => 'email@mail.com'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('password', 'Password')}}
    			{{Form::text('password', $users->password , ['class' => 'awesome', 'placeholder' => 'Password'])}}
    	</div>

    			{{Form::hidden('_method', 'PUT')}}
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection