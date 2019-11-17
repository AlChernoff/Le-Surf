@extends('site.master')

@section('content')

                    <div class="page-content mt-50 mb-10">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="page-title">
                                        <h2>{{$page_title}}</h2>
                                    </div>
                                </div>
                            </div>
                            @if($cart)
                            <div class="row">
                                <div class="col-12">
                                    <form action="#">
                                        <!-- Cart Table -->
                                        <div class="cart-table table-responsive mb-40">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="pro-thumbnail">Image</th>
                                                        <th class="pro-title">Product</th>
                                                        <th class="pro-price">Price</th>
                                                        <th class="pro-quantity">Quantity</th>
                                                        <th class="pro-subtotal">Sub-Total</th>
                                                        <th class="pro-remove">Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                 @foreach($cart as $item)
                                                    <tr>
                                                        <td class="pro-thumbnail"><a href="#"><img
                                                                    class="img-fluid" src="{{asset('assets/images/products/'.$item['attributes']['image'])}}"
                                                                    alt="Product"></a></td>
                                                        <td class="pro-title"><a href="#">{{$item['name']}}</a></td>
                                                        <td class="pro-price"><span>${{$item['price']}}</span></td>
                                                        <td class="text-center">
                                                            <a href="{{url('shop/update-cart/minus/' . $item['id'])}}"><i class="fas fa-minus-circle mx-2"></i></a>
                                                            <input size="1"  class="text-center" type="text" value="{{$item['quantity']}}">
                                                            <a href="{{url('shop/update-cart/plus/' . $item['id'])}}"><i class="fas fa-plus-circle mx-2"></i></a>
                                                        </td>     
                                                        <td class="pro-subtotal"><span>${{$item['quantity'] * $item['price']}}</span></td>
                                                        <td class="pro-remove"><a href="{{ url('shop/remove-item/' .$item['id'])}}"><i class="fa fa-trash-o"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
 @endif 
                                    </form>

                                                                    <div class="row">

                                        <div class="col-lg-6 col-12 mb-15">
                                        </div>

                                        <!-- Cart Summary -->
                                        <div class="col-lg-6 col-12 mb-40 d-flex">
                                            <div class="cart-summary">
                                                <div class="cart-summary-wrap">
                                                    <h4>Cart Summary</h4>
                                                    <h2>Grand Total <span>${{Cart::getTotal()}}</span></h2>
                                                </div>
                                                <div class="cart-summary-button">
                                                
                                                    <button class="checkout-btn"><a href="{{url('shop/order-now')}}">Check Out</a></button>
                                                    <button class="update-btn"><a href="{{url('shop/clear-cart')}}">Clear Cart</a></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection