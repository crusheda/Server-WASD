<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Admin - WASD</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a href="{{ route('track') }}" class="navbar-brand"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Tracking WASD</a>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <footer>
        <center><img src="{{ url('/img/wasd.png') }}" style="width:40px;height:40px;bottom:0%;position:fixed;margin-bottom:10px" class="dark-logo" /></center>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
