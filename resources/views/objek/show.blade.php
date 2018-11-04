@extends('layout.layout')

@section('content')
	
	<a href="/objek" class="btn btn"> Home </a>
	<a href="/objek/{{$objek->id_objek}}/edit" class="btn btn-default">Edit</a>
	<hr>

	<h1>Nama Objek= {{$objek->nama_objek}}</h1>
	<h2>ID objek = {{$objek->id_objek}}</h2>
	<h2>ID Acc = {{$objek->acc_id}}</h2>
	<h2>ID Kategori = {{$objek->kategori_id}}</h2>
	<h2>ID Wilayah = {{$objek->wilayah_id}}</h2>
	<h2>Harga Tiket Masuk = {{$objek->htm}}</h2>
	<h2>Jarak (Km) = {{$objek->jarakKm}}</h2>
	<h2>Jam Buka = {{$objek->buka}}</h2>
	<h2>Jam Tutup = {{$objek->tutup}}</h2>
	<h2>Deskripsi = {{$objek->deskripsi}}</h2>

	<small>Written On {{$objek->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['ObjekController@destroy', $objek->id_objek], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection