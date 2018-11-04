@extends('layout.layout')

@section('content')
	
	<a href="/user" class="btn btn"> Home </a>
	<a href="/user/{{$users->id}}/edit" class="btn btn-default">Edit</a>
	<hr>
	<h4>Id = {{$users->id}}</h4>
	<h2>Nama = {{$users->name}}</h2>
	<h2>Email = {{$users->email}}</h2>
	<h2>Password = {{$users->password}}</h2>
	<small>Written On {{$users->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['UserController@destroy', $users->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection