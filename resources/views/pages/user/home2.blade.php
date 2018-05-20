@extends('layouts.user')
@section('link')
@endsection
@section('content')
	<section  class="homepage-slider" id="home-slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="{{ url('/img/carousel/banner-1.jpg') }}" alt="" />
					</li>
					<li>
						<img src="{{ url('/img/carousel/banner-2.jpg') }}" alt="" />
						<div class="intro">
							<h1>Mid season sale</h1>
							<p><span>Up to 50% Off</span></p>
							<p><span>On selected items online and in stores</span></p>
						</div>
					</li>
				</ul>
			</div>			
	</section>

		<section class="main-content">
			<div class="container">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			
				<div class="row">
					<div class="span12">
						<div class="form-group">
							<input type="text" name="" value="" placeholder="Masukkan Nomor Order Anda">
						</div>							
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Tambahkan</button>
			</div>
		</section>
	
			<section class="main-content">
				<div class="row">
					<div class="span12">							
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
@endsection

@section('jquery')
	<script src="{{ url('/themes/js/common.js') }}"></script>
		<script src="{{ url('/themes/js/jquery.flexslider-min.js') }}"></script>
			<script type="text/javascript">
				$(function() {
					$(document).ready(function() {
						$('.flexslider').flexslider({
							animation: "fade",
							slideshowSpeed: 4000,
							animationSpeed: 600,
							controlNav: false,
							directionNav: true,
							controlsContainer: ".flex-container" // the container that holds the flexslider
						});
					});
				});
			</script>
@endsection