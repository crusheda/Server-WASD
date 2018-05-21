@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="row mt centered">
            <div class="col-lg-6 col-lg-offset-3">
                <br>
                <h1>Contact</h1>
            </div>
        </div>

        <div class="jumbotron">
            <form action="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="" placeholder="name@example.com" style="width:100%">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nama Pemesan</label>
                            <input type="text" class="form-control" id="" placeholder="Your Name" style="width:100%">
                        </div>
                    </div>  
                </div>
                
                <div class="form-group">
                    <textarea class="form-control" id="" placeholder="Your Problems..." style="width:100%"></textarea>
                </div>
                <center><button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button></center>
            </form>
        </div>

        <hr>

        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-6">
                    <center><h3>Location</h3></center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6433763121345!2d110.3945613142835!3d-7.827516994359732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5719869ac7a7%3A0x632c7a81a43e4e4d!2sWASD+Clothing!5e0!3m2!1sid!2sid!4v1526928838639" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </div>
                <div class="col-lg-6">
                    <center><h3>Contact Person</h3></center>
                    <div class="thumbnail">
                        <p>
                            <strong>Phone:</strong>&nbsp;+62823-7507-xxxx<br>
                            <strong>Fax:</strong>&nbsp;+62823-7507-xxxx<br>
                            <strong>Email:</strong>&nbsp;<a href="#">KNTL@WASD.com</a>					
                        </p>
                    </div>
                </div>

                <br>

                <div class="col-lg-6">
                    <div class="thumbnail">
                        <p>
                            <strong>Phone:</strong>&nbsp;+62823-7507-xxxx<br>
                            <strong>Fax:</strong>&nbsp;+62823-7507-xxxx<br>
                            <strong>Email:</strong>&nbsp;<a href="#">JNCK@WASD.com</a>					
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection