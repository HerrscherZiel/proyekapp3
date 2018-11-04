@extends('layout.layout')

@section('content')

	<a href="/kategori" class="btn btn"> Home </a>
	<hr>
	<h1>Kategori</h1>

	<br>
	<br>

	@foreach($kategori as $kategoris)
		<div class="card">
			<h3><a href="/kategori/{{$kategoris->id_kategori}}">{{$kategoris->Nama}}</a></h3>
			<small>Written On {{$kategoris->created_at}}</small>
		</div>
	@endforeach
	{{$kategori->links()}}

	<br>
	<br>

	<h5><a href="/kategori/create">ADD</a></h5>



@endsection