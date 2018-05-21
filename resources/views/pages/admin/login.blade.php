@extends('layouts.home')
@section('content')
    <div class="container" style="padding: 200px">
        <center>
            <h1>LOGIN ADMIN</h1>
        </center>
        {!! Form::open(['action' => 'LoginAdminController@index', 'method' => 'POST', 'class' => 'col-md-12', 'style' => 'margin-top: 50px']) !!}
            <div class="form-group">
                <input name="username" type="text" class="form-control input-lg" placeholder="Username" style="width:100%">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control input-lg" placeholder="Password" style="width:100%">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection