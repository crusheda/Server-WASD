@extends('layouts.home')
@section('content')
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1>Track Your Order<br/>
					Immediately</h1>					
					{!! Form::open(['action' => 'OrderController@track', 'method' => 'POST', 'class' => 'form-inline', 'role' => 'form']) !!}
					{{-- <form action="OrderController@track" method="POST" class="form-inline" role="form">	 --}}
						<div class="form-group">
							{{-- <input type="text" class="form-control" name="kodetrack" placeholder="Enter Your Tracking Number"> --}}
							{{Form::text('kodetrack', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Tracking Number'])}}
						</div>
						{{-- <button type="submit" class="btn btn-warning btn-lg"></button> --}}
						{{Form::submit('Track Now', ['class' => 'btn btn-warning btn-lg'])}}
					{{-- </form> --}}
					{!! Form::close() !!}			
				</div><!-- /col-lg-6 -->
				<div class="col-lg-6">
					<img class="img-responsive" src="{{ url('uitrack/img/img_bg.png') }}" alt="">
				</div><!-- /col-lg-6 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div>

	@if (session("nothing"))
	<script>
		$(document).ready(function() {
			$('#alert').modal('show');
		});
	</script>
	@endif
	<div id="alert" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
			<center>{{ session("nothing")}}</center>
			</div>
		</div>
	</div>
@endsection