@extends('site.master')

@section('content')
                        <div class="breadcrumb-area">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="breadcrumb-container">
											<ul>
												<li><a href="{{url('')}}">Home</a> <span class="bc-separator">|</span></li>
												<li class="active">{{$page_title}}</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
                    <section class="single-product-page-content">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-9 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-7">

                                            <div class="single-product-page-image-gallery">
                                                <!--Modal Tab Menu Start-->

                                                <div class="single-product-img img-full">
                                                    <img src="{{asset('assets/images/products/'.$item['product_image'])}}" class="img-fluid" alt="">
                                                </div>  
                                                <!--Modal Tab Menu End-->
                                                <!-- end of product quickview image gallery -->
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-5">
                                            <!-- product quick view description -->
                                            <div class="product-options">
                                                <h2 class="product-title">{{$item['product_title']}}</h2>
                                                <h2 class="product-price">$ {{$item['price']}}</h2>
                                                <p class="product-description">{!! $item['product_article'] !!}</p>
                                                             <p>
                                                                    @if(!Cart::get($item['id']))
                                                                        <i class="fa fa-shopping-cart mx-2 my-2"></i>
                                                                        <input  data-pid="{{$item['id']}}" type="button" class="add-to-cart-btn" value="+ Add to Cart">
                                                                        @else
                                                                        <input  disabled="disabled" type="button" class="add-to-cart-btn" value="In Cart">
                                                                        @endif
                                                                        <a href="{{url('shop/cart')}}" class=" mx-2 cart-btn">To Cart</a>
                                                                        <br>
                                                             </p>
                                            </div>
                                            <!-- end ofproduct quick view description -->
                                        </div>
                                    </div>
                                </div>

                                        <div class="col-lg-3 col-md-4">
                                                <div class="shoppage-sidebar">
                                                        <!-- category list -->
                                                        <!-- Header Category -->
                                                        <div class="hero-side-category shop-side-category">
                
                                                            <h2 class="block-title">CATEGORIES</h2>
                
                                                            <!-- Category Menu -->
                                                            <nav class="shop-category-menu mb-50">
                                                                <ul>
                                                                        @foreach ($categories as $category)
                                                                            <li><a href="{{url('shop/'. $category['category_url'])}}">{{$category['category_title'] }}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </nav>
                                                            <!-- end of Category menu -->
                                                        </div>
                                                        <!-- End of Header Category -->
                                                        <!-- end of category list -->
                
                                                </div>
                                        </div>
                            </div>
                        </div>
                    </section>
@endsection