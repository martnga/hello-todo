<html>
    <head>
        <title>App Name - @yield('title')</title>

	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
  

    	<!-- Bootstrap CSS served from a CDN -->
    	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="jumbotron">
  		<h1>ToDo Laravel!</h1>
  		<p>We have been waiting for you amigo. La Casa that is going to be Su Casa. Sit down and relax</p>
  		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	</div>

        <div class="container">
	@if (Session::has('message'))
		<div class="flash alert-info">
			<p>{{ Session::get('message') }}</p>
		</div>
	@endif

	@if ($errors->any())
	<div class='flash alert-danger'>
		@foreach ( $errors->all() as $error )
			<p>{{ $error }}</p>
		@endforeach
	</div>
	@endif

            @yield('content')

      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
