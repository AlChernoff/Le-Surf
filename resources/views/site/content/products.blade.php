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
                        <section class="shop-content mt-40 mb-40">
                                <div class="container">
                                    <div class="row">
        
                                        <div class="col-lg-9 col-md-8">
                                            <div class="shop-page-container">
                                                <div class="shop-page-header">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-lg-end justify-content-start">
        
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="shop-product-wrap grid row">
                                                    <!-- ======  Shop product list  ====== -->
                                                    @foreach ($products as $product)
                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                                                        <!-- product start -->
        
                                                        <div class="single-product">
                                                            <div class="single-product-content">
                                                                <div class="">
                                                                    <a href="{{url('shop/'.$product->category_url.'/'.$product->product_url)}}">
                                                                        <img src="{{asset('assets/images/products/' . $product->product_image)}}" class="img-fluid" alt="Product Image">
                                                                    </a>
                                                                </div>
                                                                <h5 class="product-name"><a href="single-product-variable.html">{{$product->product_title}}</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ {{$product->price}}</h4>
                                                                </div>
                                                                    <p>
                                                                        @if(!Cart::get($product->id))
                                                                        <i class="fa fa-shopping-cart mx-2 my-2"></i>
                                                                        <input  data-pid="{{$product->id}}" type="button" class="add-to-cart-btn" value="+ Add to Cart">
                                                                        @else
                                                                        <input  disabled="disabled" type="button" class="add-to-cart-btn" value="In Cart">
                                                                        @endif
                                                                        <br>
                                                                        </p>
                                                        </div>
                                                        </div>
                                                        
                                                        <!-- product end -->
                                                    </div>
                                                    <!-- ====  End of Shop product list  ==== -->
                                                        @endforeach
        
        
                                                    <!-- ====  End of Shop product list  ==== -->
        
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
        
                            <!--====  End of shop content section  ====-->
        
                                        <div class="row ml-auto">
                                            <div class="col-12">
                                            {{$products->links()}}
                                            </div>
                                        </div>
                                
@endsection                                 
