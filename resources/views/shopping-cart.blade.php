@extends('layouts.customer')

@section('content')
 <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
	@if(Session::has('cart'))
		<div class="container">
			<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>Product name</th>
						        <th>Total Price</th>
						        <th>Quantity</th>
						        <th>Modify Items</th>
						        <th>Remove Items</th>
						      </tr>
						    </thead>
						   	@foreach($products as $product)
						    <tbody>
						      <tr class="text-center">
						        <!--<td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>-->
						        <td class="product-name"><h3>{{ $product['item']['title'] }}</h3></td>
						        
						        <td class="quantiy">{{ $product['qty'] }}</td> 

						        <td class="quantity">{{ $product['price'] }}</td>

						        <td><a href="{{ route('product.reduceByOne', ['id'=> $product['item']['id']]) }}"><span class="btn btn-danger">-</span>

									<a href="{{ route('product.addItem', ['id' => $product['item']['id']]) }}"><span class="btn btn-success">+</span></a>
								</td>

						        <td><a href="{{ route('product.remove', ['id'=> $product['item']['id']]) }}"><span class="btn btn-danger">Delete</span></a></td>  

								</tr><!-- END TR-->
						    </tbody>
						    @endforeach
						  </table>
					  </div>
    			</div>
    		</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>{{ $totalPrice }}</span>
    					</p>
    				</div>
    				<p><a href="{{ route('checkout') }}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    			
    		</div>
			</div>
		@else

		@endif
@endsection

