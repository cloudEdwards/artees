@extends('layouts.main')

@section('content')

@include('layouts.partials.errors')

<div class="row">
<div class="col-md-6 col-md-offset-3">

	<div class="status-post">
		{{Form::open()}}
			<div class="form-group status-form">
				{{Form::textarea('body',null, ['class'=>'form-control', 'placeholder'=>"what's on your mind?" , 'rows'=>3, 'id'=>'publish'])}}
			</div>
			<div class="form-group status-post-submit">
				{{Form::submit('Post Status', ['class'=>'btn btn-primary btn-xs', 'id'=>'post-status'])}}
			</div>
		{{Form::close()}}
	</div>

<h3>Statuses</h3>

@include('statuses.partials.statuses')

</div>
</div>

@stop