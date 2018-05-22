@extends('layouts.home')
@section('content')
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1>Track Your Order<br/>
					Immediately</h1>
					<form class="form-inline" role="form">
						<div class="form-group">
							<input type="email" class="form-control" id="" name="" placeholder="Enter Your Tracking Number">
						</div>
						<button type="submit" class="btn btn-warning btn-lg">Track Now</button>
					</form>					
				</div><!-- /col-lg-6 -->
				<div class="col-lg-6">
					<img class="img-responsive" src="{{ url('uitrack/img/ipad-hand.png') }}" alt="">
				</div><!-- /col-lg-6 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div>
@endsection