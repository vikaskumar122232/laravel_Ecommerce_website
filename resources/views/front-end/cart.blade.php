@extends('front-end.layout.layout');
@section('content')

<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>
	<hr class="soft"/>
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Name</th>
                  <th>Quantity</th>
                  <th>Selete</th>
				  <th>Price</th>
				</tr>
              </thead>
              <tbody>
                  @php
                      $sum =0;
                  @endphp
                  @foreach($carts as $cart)
                         @php
                             $sum = $sum + $cart->product->price;
                         @endphp

                <tr>
                  <td> <img width="60" src="{{asset('uploads/'.$cart->product->image)}}" alt=""/></td>
                  <td>{{$cart->product->name}}</td>
				  <td>
					<div class="input-append">
                        <input class="span1" style="max-width:40px" placeholder="1" id="appendedInputButtons" size="15" value="{{$cart->qty}}" type="number">
                   <a href="{{route('cart.delete',$cart->id)}}"> <button class="btn btn-danger" type="button"><i class="icon-remove"></i></button>
                   </a>
                  </div>
				  </td>
                  <td><input type="checkbox" cart-id="{{$cart->id}}" name="selete_product[]"></td>
                  <td>₹ {{$cart->product->price}}</td>
                </tr>

                @endforeach

                <tr>
                  <td colspan="3" style="text-align:right">Total Price:	</td>
                  <td>₹ {{$sum}}</td>
				 <tr>
                  <td colspan="3" style="text-align:right"></td>
                  <td class="label label-important product_buy btn btn-success" style="display:block;cursor: pointer; text-align:center;">
                     <strong>Buy Products</strong>
                    </td>
                </tr>
				</tbody>
            </table>
	<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>

</div>
@endsection

