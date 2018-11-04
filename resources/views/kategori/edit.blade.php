@extends('layout.layout')

@section('content')
	<a href="/kategori" class="btn btn"> Home </a>
	<hr>
	<h1>Edit Kategori</h1>

	<br>
	<br>

	{!! Form::open(['action' => ['KategoriController@update', $kategori->id_kategori], 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('Nama', 'Nama Kategori')}}
    			{{Form::text('Nama', $kategori->Nama , ['class' => 'form-control', 'placeholder' => 'Nama Kategori'])}}
    	</div>
    			{{Form::hidden('_method', 'PUT')}}
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection