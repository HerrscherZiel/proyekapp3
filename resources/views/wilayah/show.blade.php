@extends('layout.layout')

@section('content')
	
	<a href="/wilayah" class="btn btn"> Home </a>
	<a href="/wilayah/{{$wilayah->id_wilayah}}/edit" class="btn btn-default">Edit</a>
	<hr>
	<h4>Id = {{$wilayah->id_wilayah}}</h4>
	<h2>Provinsi = {{$wilayah->provinsi}}</h2>
	<h2>Kabupaten = {{$wilayah->kabupaten}}</h2>
	<h2>Kecamatan = {{$wilayah->kecamatan}}</h2>
	<h2>Deskripsi = {{$wilayah->deskripsi}}</h2>
	<small>Written On {{$wilayah->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['WilayahController@destroy', $wilayah->id_wilayah], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection