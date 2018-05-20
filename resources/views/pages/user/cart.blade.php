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
					<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Remove</th>
								<th>Image</th>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Unit Price</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" value="option1"></td>
								<td><a href="{{ route('productdetail') }}"><img alt="" src="themes/images/ladies/9.jpg"></a></td>
								<td>Fusce id molestie massa</td>
								<td><input type="text" placeholder="1" class="input-mini"></td>
								<td>$2,350.00</td>
								<td>$2,350.00</td>
							</tr>			  
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><strong>$3,600.00</strong></td>
							</tr>		  
						</tbody>
					</table>
					<h4>What would you like to do next?</h4>
					<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
						Use Coupon Code
					</label>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Estimate Shipping &amp; Taxes
					</label>
					<hr>
					<p class="cart-total right">
						<strong>Sub-Total</strong>:	$100.00<br>
						<strong>Eco Tax (-2.00)</strong>: $2.00<br>
						<strong>VAT (17.5%)</strong>: $17.50<br>
						<strong>Total</strong>: $119.50<br>
					</p>
					<hr/>
					<p class="buttons center">				
						<button class="btn" type="button">Update</button>
						<button class="btn" type="button">Continue</button>
						<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
					</p>					
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
												<a href="{{ route('productdetail') }}"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
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
	<script src="{{ url('/themes/js/common.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#checkout').click(function (e) {
				document.location.href = "#";
			})
		});
	</script>	
@endsection