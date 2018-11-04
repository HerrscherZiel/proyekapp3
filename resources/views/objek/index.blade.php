@extends('layout.layout')

@section('content')

	<a href="/objek" class="btn btn"> Home </a>
	<hr>
	<h1>objek</h1>

	<br>
	<br>

	@foreach($objek as $objeks)
		<div class="card">
			<h3><a href="/objek/{{$objeks->id_objek}}">{{$objeks->nama_objek}}</a></h3>
			<small>Created at {{$objeks->created_at}}</small>
		</div>
	@endforeach
	{{$objek->links()}}

	<br>
	<br>

	<h5><a href="/objek/create">ADD</a></h5>



@endsection