@extends('layout.layout')

@section('content')
	
	<a href="/submit" class="btn btn"> Home </a>
	<a href="/submit/{{$submit->id_submit}}/edit" class="btn btn-default">Edit</a>
	<hr>

	<h2>Nama Objek= {{$submit->nama_objek}}</h2>
	<h2>ID Submit = {{$submit->id_submit}}</h2>
	<h2>Id User = {{auth()->user()->id}}</h2>
	<h2>Alamat Objek = {{$submit->alamat}}</h2>
	<h2>Harga Tiket Masuk = {{$submit->htm}}</h2>
	<h2>Jam Buka = {{$submit->buka}}</h2>
	<h2>Jam Tutup = {{$submit->tutup}}</h2>

	<small>Written On {{$submit->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['SubmitController@destroy', $submit->id_submit], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection