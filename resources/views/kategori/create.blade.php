@extends('layout.layout')

@section('content')
	<a href="/kategori" class="btn btn"> Home </a>
	<hr>
	<h1>Create Kategori</h1>

	<br>
	<br>

	{!! Form::open(['action' => 'KategoriController@store', 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('Nama', 'Nama Kategori')}}
    			{{Form::text('Nama', '' , ['class' => 'form-control', 'placeholder' => 'Nama Kategori'])}}
    	</div>

    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection