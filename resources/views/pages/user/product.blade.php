@extends('layouts.user')
@section('link')
@endsection
@section('content')
			
	<section class="header_text sub">
	<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
		<h4><span>Shopping Cart</span></h4>
	</section>
	<section class="main-content">
	
	<div class="row">						
		<div class="span9">								
			<ul class="thumbnails listing-products">
				<li class="span3">
					<div class="product-box">
						<span class="sale_tag"></span>												
						<a href="{{ route('productdetail') }}"><img alt="" src="themes/images/ladies/9.jpg"></a><br/>
						<a href="{{ route('productdetail') }}" class="title">Fusce id molestie massa</a><br/>
						<a href="#" class="category">Phasellus consequat</a>
						<p class="price">$341</p>
					</div>
				</li>       
			</ul>								
			<hr>
			<div class="pagination pagination-small pagination-centered">
				<ul>
					<li><a href="#">Prev</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>
		</div>
		<div class="span3 col">
			<div class="block">
				<h4 class="title">
					<span class="pull-left"><span class="text">Randomize</span></span>
					<span class="pull-right">
						<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
					</span>
				</h4>
				<div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">
						<div class="active item">
							<ul class="thumbnails listing-products">
								<li class="span3">
									<div class="product-box">
										<span class="sale_tag"></span>												
										<a href="{{ route('productdetail') }}"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
										<a href="{{ route('productdetail') }}" class="title">Fusce id molestie massa</a><br/>
										<a href="#" class="category">Suspendisse aliquet</a>
										<p class="price">$261</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="block">								
				<h4 class="title"><strong>Best</strong> Seller</h4>								
				<ul class="small-product">
					<li>
						<a href="#" title="Praesent tempor sem sodales">
							<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
						</a>
						<a href="#">Praesent tempor sem</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

</section>
@endsection
@section('jquery')
@endsection