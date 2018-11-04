@extends('layout.layout')

@section('content')

	<a href="/user" class="btn btn"> Home </a>
	<hr>
	<h1>User</h1>

	<br>
	<br>

	@foreach($users as $user)
		<div class="card">
			<h3><a href="/user/{{$user->id}}">{{$user->name}}</a></h3>
			<small>Written On {{$user->created_at}}</small>
		</div>
	@endforeach
	{{$users->links()}}

	<br>
	<br>

	<h5><a href="/register">ADD</a></h5>



@endsection