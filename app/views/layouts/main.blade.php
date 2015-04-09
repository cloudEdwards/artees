

<html>
	<head>
		<title>ArTees</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="css/main.css">


	</head>
	<body>

		@include('layouts.partials.nav')

		<div class="container">

			@include('flash::message')

			@yield('content')

		</div>



		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
		<script>$('#flash-overlay-modal').modal();</script>

	</body>
</html>
