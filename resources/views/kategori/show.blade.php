@extends('layout.layout')

@section('content')
	
	<a href="/kategori" class="btn btn"> Home </a>
	<a href="/kategori/{{$kategori->id_kategori}}/edit" class="btn btn-default">Edit</a>
	<hr>
	<h4>Id = {{$kategori->id_kategori}}</h4>
	<h2>Nama = {{$kategori->Nama}}</h2>
	<small>Written On {{$kategori->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['KategoriController@destroy', $kategori->id_kategori], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection