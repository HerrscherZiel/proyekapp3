@extends('layout.layout')

@section('content')

	<a href="/Submit" class="btn btn"> Home </a>
	<hr>
	<h1>Submit</h1>

	<br>
	<br>

	@foreach($submit as $submits)
		<div class="card">
			<h3><a href="/submit/{{$submits->id_submit}}">{{$submits->nama_objek}}</a></h3>
			<small>Submitted at {{$submits->created_at}}</small>
		</div>
	@endforeach
	{{$submit->links()}}

	<br>
	<br>

	<h5><a href="/submit/create">ADD</a></h5>



@endsection