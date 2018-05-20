<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<title>WASD CLOTH</title>
		<link rel="icon" type="image/png" sizes="16x16" href="{{ url('/img/iconwasd.png') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="{{ url('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">      
		<link href="{{ url('/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
		<link href="{{ url('/themes/css/bootstrappage.css') }}" rel="stylesheet">
		
		<!-- global styles -->
		<link href="{{ url('/themes/css/flexslider.css') }}" rel="stylesheet">
		<link href="{{ url('/themes/css/main.css') }}" rel="stylesheet">

		@yield('link')
</head>
<body>
	<div id="top-bar" class="container">
		<center>
			<div class="span12">
				<a href="{{ route('home') }}" class="">
					<img src="{{ url('/img/wasd.png') }}" class="site_logo" alt="">
				</a>
			</div>
		</center>
	</div>
	<br>

	<div id="wrapper" class="container">
		<section class="navbar main-menu"></section>
		
			@yield('content')

		<section id="copyright">
			<span>Copyright 2013 bootstrappage template  All right reserved.</span>
		</section>
	</div>
	<!-- scripts -->
		<script src="{{ url('/themes/js/jquery-1.7.2.min.js') }}"></script>
		<script src="{{ url('/bootstrap/js/bootstrap.min.js') }}"></script>			
		<script src="{{ url('/themes/js/superfish.js') }}"></script>	
		<script src="{{ url('/themes/js/jquery.scrolltotop.js') }}"></script>
		@yield('jquery')
			
</body>
</html>