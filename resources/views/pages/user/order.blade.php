@extends('layouts.home')
@section('content')
<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1>Tracking Your Order</h1>
            <h4>Your Order with Tracking Number : <a href="">999999</a></h4>
        </div>
    </div>
    
    <hr>
    
    <div class="row mt centered">
        <div class="col-lg-4">
            <div class="jumbotron">
                <img src="{{ url('img/ser02.png') }}" width="180" alt="">
                <h4>1 - Order</h4>
                <p>Lorem Ipsum is simply dummy</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="jumbotron">
                <img src="{{ url('img/ser02.png') }}" width="180" alt="">
                <h4>2 - Resource</h4>
                <p>Lorem Ipsum is simply dummy</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="jumbotron">
                <img src="{{ url('img/ser02.png') }}" width="180" alt="">
                <h4>3 - Shipping</h4>
                <p>Lorem Ipsum is simply dummy</p>
            </div>
        </div>
    </div>
    
    <hr>

    <div class="row mt centered">
        <div class="col-lg-12">
            <div class="jumbotron">
                    <p>asdasdasdas</p>
            </div>
        </div>
    </div>
</div>
@endsection