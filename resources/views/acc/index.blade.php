@extends('layout.layout')

@section('content')

	<a href="/acc" class="btn btn"> Home </a>
	<hr>
	<h1>Tabel Acc</h1>

	<br>
	<br>

	@foreach($acc as $accs)
		<div class="card">
			<h3><a href="/acc/{{$accs->id_acc}}">{{$accs->id_acc}}</a></h3>
			<small>Written On {{$accs->created_at}}</small>
		</div>
	@endforeach
	{{$acc->links()}}

	<br>
	<br>

	<h5><a href="/acc/create">ADD</a></h5>



@endsection