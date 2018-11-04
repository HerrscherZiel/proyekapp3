@extends('layout.layout')

@section('content')
	
	<a href="/acc" class="btn btn"> Home </a>
	<a href="/acc/{{$acc->id_acc}}/edit" class="btn btn-default">Edit</a>
	<hr>
	<h3>Id Acc = {{$acc->id_acc}}</h3>
	<h5>ID Submits = {{$acc->submit_id}}</h5>
	<h5>Status Acc = {{$acc->status_acc}}</h5>
	<small>Written On {{$acc->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['AccController@destroy', $acc->id_acc], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection