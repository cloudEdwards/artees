

{{Form::open();}}

	@include('layouts.partials.errors')

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Username</span>
	  {{ Form::input('text','username', null, ["class"=>"form-control", "placeholder"=>"Username", "aria-describedby"=>"basic-addon1"]); }}
	</div>

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Email</span>
	  {{ Form::email('email', null, ["class"=>"form-control", "placeholder"=>"Email", "aria-describedby"=>"basic-addon1"]); }}
	</div>

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Password</span>
	  {{ Form::input('password','password', null, ["class"=>"form-control", "placeholder"=>"Password", "aria-describedby"=>"basic-addon1"]); }}
	</div>

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Confirm Password</span>
	  {{ Form::input('password', 'password_confirmation', null, ["class"=>"form-control", "placeholder"=>"Confirm Password", "aria-describedby"=>"basic-addon1"]); }}
	</div>


	{{Form::submit('Sign Up', ['class'=>'btn btn-primary btn-lg']);}}

{{Form::close();}}