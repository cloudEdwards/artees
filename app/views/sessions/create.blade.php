@extends('layouts.main')

@section('content')

<h1>Sign In!</h1>

{{Form::open(['route'=>'login_path'])}}


	{{-- Email Form --}}
	<div class="form-group">
		{{Form::label('email', 'Email')}}
		{{Form::email('email', null, ['class'=>'form-control', 'required'=>'required'])}}
	</div>

	{{-- Password Form --}}
	<div class="form-group">
		{{Form::label('password', 'Password')}}
		{{Form::password('password', ['class'=>'form-control', 'required'=>'required'])}}
	</div>

	{{-- Submit Form --}}
	<div class="form-group">
		{{Form::submit('Sign In', ['class'=>'btn btn-primary'])}}
	</div>


{{Form::close()}}

@stop