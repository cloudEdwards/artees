@extends('layouts.main')

@section('content')

<h1>Status Updates</h1>

@include('layouts.partials.errors')

<h3>Post a Status</h3>

{{Form::open()}}
	<div class="form-group">
		{{Form::label('body','Status')}}
		{{Form::textarea('body',null, ['class'=>'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::submit('Post Status', ['class'=>'btn btn-primary', 'id'=>'post-status'])}}
	</div>
{{Form::close()}}


<h3>Statuses</h3>
@foreach($statuses as $status)
	<article>{{$status->body}}</article>
@endforeach


@stop