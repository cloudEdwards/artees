@extends('layouts.main')

@section('content')

<div class="jumbotron">
  <h1>Welcome to Artees!</h1>
  <p>Discover local artists, from around the world.</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Discover Artists Near You</a></p>
  
  @if(! $currentUser)
     <p>{{ link_to_route('register_path', 
   		'Sign Up for Free', null, ['class'
   		=>'btn btn-lg btn-primary']); }}
   </p>
   @endif
   
</div>

@stop

