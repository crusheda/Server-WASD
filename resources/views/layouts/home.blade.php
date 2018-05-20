<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ url('uitrack/img/favicon.png') }}">

		<title>Tracking Order - WASD</title>
		
    <!-- Bootstrap core CSS -->
    <link href="{{ url('uitrack/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('uitrack/css/main.css') }}" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
        #copyright{
            bottom: 0;
            width: 100%;
            position: absolute;
            height:50px;
            line-height:50px;
            padding-left: 10px;
        }
    </style>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>WASD.</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">meh diganti opo sak2mu? LOGIN???</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    @yield('content')
    
    <footer>
        <div class="container">            
            <div class="copy text-center">
                <hr>
                <span><p class="centered">&copy; Copyright 2018 - All right reserved.</p></span> 
            </div>		
        </div>
    </footer>
	
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{ url('uitrack/js/bootstrap.min.js') }}"></script>
  </body>
</html>
