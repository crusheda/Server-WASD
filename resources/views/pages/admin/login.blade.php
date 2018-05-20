<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link href="{{ url('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container" style="padding: 200px">
        <center>
            <h1>LOGIN ADMIN</h1>
        </center>
        {!! Form::open(['action' => 'LoginAdminController@index', 'method' => 'POST', 'class' => 'col-md-12', 'style' => 'margin-top: 50px']) !!}
            <div class="form-group">
                <input name="username" type="text" class="form-control input-lg" placeholder="Username">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
        {!! Form::close() !!}
    </div>
</body>
</html>