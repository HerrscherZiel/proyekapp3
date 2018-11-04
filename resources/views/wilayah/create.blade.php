@extends('layout.layout')

@section('content')
	<a href="/wilayah" class="btn btn"> Home </a>
	<hr>
	<h1>Create Wilayah</h1>

	<br>
	<br>

	{!! Form::open(['action' => 'WilayahController@store', 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('provinsi', 'Provinsi')}}
    			{{Form::text('provinsi', '' , ['class' => 'form-control', 'placeholder' => 'Nama provinsi'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('kabupaten', 'Kabupaten')}}
    			{{Form::text('kabupaten', '' , ['class' => 'form-control', 'placeholder' => 'Nama Kabupaten'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('kecamatan', 'Kecamatan')}}
    			{{Form::text('kecamatan', '' , ['class' => 'form-control', 'placeholder' => 'Nama Kecamatan'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('deskripsi', 'Deskripsi')}}
    			{{Form::textarea('deskripsi', '' , ['class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
    	</div>



    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection