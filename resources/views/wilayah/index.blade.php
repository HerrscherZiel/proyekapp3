@extends('layout.layout')

@section('content')

	<a href="/wilayah" class="btn btn"> Home </a>
	<hr>
	<h1>Wilayah</h1>

	<br>
	<br>

	@foreach($wilayah as $wilayahs)
		<div class="card">
			<h3><a href="/wilayah/{{$wilayahs->id_wilayah}}">{{$wilayahs->kecamatan}}</a></h3>
			<small>Written On {{$wilayahs->created_at}}</small>
		</div>
	@endforeach
	{{$wilayah->links()}}

	<br>
	<br>

	<h5><a href="/wilayah/create">ADD</a></h5>



@endsection