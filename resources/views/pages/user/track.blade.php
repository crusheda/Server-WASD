@extends('layouts.home')
@section('content')
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1>Track Your Order<br/>
					Immediately</h1>					
					{!! Form::open(['action' => 'OrderController@detail', 'method' => 'POST', 'class' => 'form-inline', 'role' => 'form']) !!}
						<div class="form-group">
							<input type="text" class="form-control" name="kodetrack" placeholder="Enter Your Tracking Number">
						</div>
						<button type="submit" class="btn btn-warning btn-lg">Track Now</button>
					{!! Form::close() !!}			
				</div><!-- /col-lg-6 -->
				<div class="col-lg-6">
					<img class="img-responsive" src="{{ url('uitrack/img/img_bg.png') }}" alt="">
				</div><!-- /col-lg-6 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div>
@endsection