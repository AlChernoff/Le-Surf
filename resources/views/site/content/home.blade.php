@extends('site.master')

@section('content')

                    <!--===========================================
					=            homepage content section            =
					============================================-->

                    <section class="homepage-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Hero Slider Start -->
                                    <div class="hero-slider hero-slider-one">

                                        <!-- Hero Item Start -->
                                        <div class="hero-item hero-bg-3">
                                            <div class="row align-items-center justify-content-between">

                                                <!-- Hero Content -->
                                                <div class="hero-content col-md-7 offset-md-5 col-sm-12 offset-sm-0">
                                                    <h1>THE SUMMER</h1>
                                                    <h2><span>SPORT SUMMER</span></h2>
                                                    <a href="{{url('shop/sup-boards')}}">shop now</a>
                                                </div>


                                            </div>
                                        </div><!-- Hero Item End -->

                                        <!-- Hero Item Start -->
                                        <div class="hero-item hero-bg-4">
                                            <div class="row align-items-center justify-content-between">

                                                <!-- Hero Content -->
                                                <div class="hero-content col-md-7 offset-md-5 col-sm-12 offset-sm-0">

                                                    <h1>THE WINTER</h1>
                                                    <h2><span>SPORT WINTER</span></h2>
                                                    <a href="{{url('shop/snow-boards')}}">shop now</a>

                                                </div>
                                            </div>
                                        </div><!-- Hero Item End -->
                                    </div><!-- Hero Slider End -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <!-- Header category list -->
                                    <div class="hero-side-category">

                                            <!-- Category Toggle Wrap -->
                                            <div class="category-toggle-wrap">
                                                <!-- Category Toggle -->

                                                <button class="category-toggle">Categories <i class="ti-menu"></i></button>
                                            </div>

                                            <!-- Category Menu -->
                                            <nav class="category-menu mb-40">
                                                    @foreach ($categories as $category)
                                                        <ul>
                                                            <li><a href="{{url('shop/'. $category['category_url'])}}">{{$category['category_title'] }}</a></li>
                                                         </ul>
                                                    @endforeach
                                            </nav>
                                    </div>
                                    <!-- end of Header category list -->
                            </div>
                                <div class="col-lg-9 col-md-">
                                    <!-- homepage double banner section -->
										<div class="homepage-banners mb-50">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 mb-20 mb-lg-0">
                                                        <!-- ======  Homepage single split banner  ======= -->
    
                                                        <div class="single-featured-service banner-bg-3">
															<div class="single-featured-service-content">
																<h3>Wakeboards</h3>
																<p>Best Wakeboards with best prices </p>
																<a href="{{url('shop/wake-boards')}}">View Collection</a>
															</div>
														</div>
    
                                                        <!-- ====  End of Homepage single split banner  ==== -->
    
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <!-- ======  Homepage single split banner  ======= -->
    
                                                          <div class="single-featured-service banner-bg-4">
															<div class="single-featured-service-content">
																<h3>Surfboards</h3>
																<p>Try to catch a Wave</p>
																<a href="{{url('shop/surf-boards')}}">View Collection</a>
															</div>
														</div>
    
                                                        <!-- ====  End of Homepage single split banner  ==== -->
    
                                                    </div>
    
                                                </div>
                                </div>
                                <!-- end of homepage double banner section -->

                                <!-- horizontal product slider -->
                                <div class="horizontal-product-slider">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Block title -->
                                            <div class="block-title">
                                                <h2><a href="#">SNOWBOARD</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- horizontal product slider container -->
                                            <div class="horizontal-product-list">
                                                <!-- single product -->
                                                <div class="single-product">
                                                    <div class="single-product-content">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img src="assets/images/products/1.jpg" class="img-fluid"
                                                                    alt="">
                                                                <img src="assets/images/products/2.jpg" class="img-fluid"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <h5 class="product-name"><a href="single-product-variable.html">CAPITA DEFENDERS OF AWESOME</a></h5>
                                                        <div class="price-box">
                                                            <h4>$ 1200.00</h4>
                                                        </div>

                                                        <div class="add-to-cart-btn" data-toggle="modal"
                                                            data-target="#add-to-cart-modal-container">
                                                        </div>    
                                                    </div>
                                                </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="#">
                                                                    <img src="assets/images/products/3.jpg" class="img-fluid"
                                                                        alt="">
                                                                    <img src="assets/images/products/4.jpg" class="img-fluid"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">BURTON PROCESS SMALLS</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 1100.00</h4>
                                                            </div>
    
                                                            <div class="add-to-cart-btn" data-toggle="modal"
                                                                data-target="#add-to-cart-modal-container">
                                                            </div>    
                                                        </div>
                                                    </div>
                                                <!-- end of single product -->

                                                <!-- single product -->
                                                <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="#">
                                                                    <img src="assets/images/products/5.jpg" class="img-fluid"
                                                                        alt="">
                                                                    <img src="assets/images/products/6.jpg" class="img-fluid"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">CAPITA THE NAVIGATOR</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 1300.00</h4>
                                                            </div>
    
                                                            <div class="add-to-cart-btn" data-toggle="modal"
                                                                data-target="#add-to-cart-modal-container">
                                                            </div>    
                                                        </div>
                                                    </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="#">
                                                                    <img src="assets/images/products/7.jpg" class="img-fluid"
                                                                        alt="">
                                                                    <img src="assets/images/products/8.jpg" class="img-fluid"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">LIB TECH BRD C3</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 1500.00</h4>
                                                            </div>
    
                                                            <div class="add-to-cart-btn" data-toggle="modal"
                                                                data-target="#add-to-cart-modal-container">
                                                            </div>    
                                                        </div>
                                                    </div>
                                                <!-- end of single product -->
                                                <!-- single product -->
                                                <div class="single-product">
                                                        <div class="single-product-content">
                                                            <div class="product-image">
                                                                <a href="single-product-variable.html">
                                                                    <img src="assets/images/products/9.jpg" class="img-fluid"
                                                                        alt="">
                                                                    <img src="assets/images/products/10.jpg" class="img-fluid"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <h5 class="product-name"><a href="single-product-variable.html">JONES MOUNTAIN TWIN</a></h5>
                                                            <div class="price-box">
                                                                <h4>$ 1000.00</h4>
                                                            </div>
    
                                                            <div class="add-to-cart-btn" data-toggle="modal"
                                                                data-target="#add-to-cart-modal-container">
                                                            </div>    
                                                        </div>
                                                    </div>
                                                <!-- end of single product -->


                                            </div>
                                            <!-- end of horizontal product slider container -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end of horizontal product slider -->
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="homepage-sidebar">
                                        <!-- vertical auto slider container -->
                                        <div class="sidebar">
                                            <h2 class="block-title">BESTSELLER</h2>
                                            <div class="vertical-product-slider-container">
                                                <div class="single-vertical-slider">
                                                    
                                                    <div class="vertical-auto-slider-product-list">
                                                        <!-- single vertical product -->
                                                        <div class="single-auto-vertical-product d-flex">
                                                            <div class="product-image">
                                                                <a href="#"><img src="{{url('assets/images/products/10.jpg')}}"
                                                                        class="img-fluid" alt=""></a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5 class="product-name"><a href="#">JONES MOUNTAIN TWIN</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ 1000.00</h4>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end of single vertical product -->
                                                        <!-- single vertical product -->
                                                        <div class="single-auto-vertical-product d-flex">
                                                                <div class="product-image">
                                                                    <a href="#"><img src="{{url('assets/images/products/3.jpg')}}"
                                                                            class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5 class="product-name"><a href="#">BURTON PROCESS SMALL</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 1100.00</h4>
                                                                    </div>
    
                                                                </div>
                                                        </div>
                                                        <!-- end of single vertical product -->
                                                        <!-- single vertical product -->
                                                        <!-- single vertical product -->
                                                        <div class="single-auto-vertical-product d-flex">
                                                                <div class="product-image">
                                                                    <a href="#"><img src="{{url('assets/images/products/5.jpg')}}"
                                                                            class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5 class="product-name"><a href="#">CAPITA THE NAVIGATOR</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 1300.00</h4>
                                                                    </div>
    
                                                                </div>
                                                            </div>
                                                        <!-- end of single vertical product -->
                                                        <!-- single vertical product -->
                                                        <div class="single-auto-vertical-product d-flex">
                                                                <div class="product-image">
                                                                    <a href="#"><img src="{{url('assets/images/products/7.jpg')}}"
                                                                            class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5 class="product-name"><a href="#">LIB TECH BRD C3</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 1500.00</h4>
                                                                    </div>
    
                                                                </div>
                                                            </div>
                                                        <!-- end of single vertical product -->
                                                        <!-- single vertical product -->
                                                        <!-- single vertical product -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <!-- end of vertical auto slider container -->

                                        <!-- homepage sidebar banner -->
                                        <div class="sidebar">
                                            <div class="homepage-sidebar-banner-container">
                                                <a href="#">
                                                    <img src="{{url('assets/images/banners/banner-left.jpg')}}" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end of homepage sidebar banner -->

                                        <!-- vertical auto slider container -->
                                        <div class="sidebar">
                                            <h2 class="block-title">LATEST PRODUCTS</h2>
                                            <div class="vertical-product-slider-container">
                                                    <div class="single-vertical-slider">
                                                    
                                                            <div class="vertical-auto-slider-product-list">
                                                                <!-- single vertical product -->
                                                                <div class="single-auto-vertical-product d-flex">
                                                                    <div class="product-image">
                                                                        <a href="#"><img src="{{url('assets/images/products/10.jpg')}}"
                                                                                class="img-fluid" alt=""></a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5 class="product-name"><a href="#">JONES MOUNTAIN TWIN</a></h5>
                                                                        <div class="price-box">
                                                                            <h4>$ 1000.00</h4>
                                                                        </div>
        
                                                                    </div>
                                                                </div>
                                                                <!-- end of single vertical product -->
                                                                <!-- single vertical product -->
                                                                <div class="single-auto-vertical-product d-flex">
                                                                        <div class="product-image">
                                                                            <a href="#"><img src="{{url('assets/images/products/3.jpg')}}"
                                                                                    class="img-fluid" alt=""></a>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <h5 class="product-name"><a href="#">BURTON PROCESS SMALL</a></h5>
                                                                            <div class="price-box">
                                                                                <h4>$ 1100.00</h4>
                                                                            </div>
            
                                                                        </div>
                                                                </div>
                                                                <!-- end of single vertical product -->
                                                                <!-- single vertical product -->
                                                                <!-- single vertical product -->
                                                                <div class="single-auto-vertical-product d-flex">
                                                                        <div class="product-image">
                                                                            <a href="#"><img src="{{url('assets/images/products/5.jpg')}}"
                                                                                    class="img-fluid" alt=""></a>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <h5 class="product-name"><a href="#">CAPITA THE NAVIGATOR</a></h5>
                                                                            <div class="price-box">
                                                                                <h4>$ 1300.00</h4>
                                                                            </div>
            
                                                                        </div>
                                                                    </div>
                                                                <!-- end of single vertical product -->
                                                                <!-- single vertical product -->
                                                                <div class="single-auto-vertical-product d-flex">
                                                                        <div class="product-image">
                                                                            <a href="#"><img src="{{url('assets/images/products/7.jpg')}}"
                                                                                    class="img-fluid" alt=""></a>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <h5 class="product-name"><a href="#">LIB TECH BRD C3</a></h5>
                                                                            <div class="price-box">
                                                                                <h4>$ 1500.00</h4>
                                                                            </div>
            
                                                                        </div>
                                                                    </div>
                                                                <!-- end of single vertical product -->
                                                                <!-- single vertical product -->
                                                                <!-- single vertical product -->
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <!-- end of vertical auto slider container -->


                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <section class="homepage-main-content">
                                            <div class="row">
                                                    <div class="col-lg-12">
                                                        <!-- homepage wide banner section -->
                    
                                                        <div class="home-wide-bg-container mb-50">
                                                            <a class="banner-width-bg-link" href="#">
                                                                <img src="{{url('assets/images/banners/banner-wide.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                    
                                                        <!-- end of homepage wide banner section -->
                                                    </div>
                                                </div>
                                        <!-- horizontal product slider -->
                                        <div class="horizontal-product-slider">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Block title -->
                                                    <div class="block-title">
                                                        <h2><a href="#">WAKEBOARD</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- horizontal product slider container -->
                                                    <div class="horizontal-product-list">
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                            <div class="single-product-content">
                                                                <div class="product-image">
                                                                    <a href="#">
                                                                        <img src="{{url('assets/images/products/11.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                        <img src="{{url('assets/images/products/12.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <h5 class="product-name"><a href="single-product-variable.html">SLINGSHOT NOMAD</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ 500.00</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                            <div class="single-product-content">
                                                                <div class="product-image">
                                                                    <a href="#">
                                                                        <img src="{{url('assets/images/products/13.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                        <img src="{{url('assets/images/products/14.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                    </a>

                                                                </div>
                                                                <h5 class="product-name"><a href="#">SLINGSHOT SOLO</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ 400.00</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                            <div class="single-product-content">
                                                                <div class="product-image">
                                                                    <a href="#">
                                                                        <img src="{{url('assets/images/products/15.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                        <img src="{{url('assets/images/products/16.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <h5 class="product-name"><a href="#">SLINGSHOT VALLEY</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ 600.00</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                            <div class="single-product-content">
                                                                <div class="product-image">
                                                                    <a href="#">
                                                                        <img src="{{url('assets/images/products/17.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                        <img src="{{url('assets/images/products/18.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <h5 class="product-name"><a href="#">RONIX PRESS EDITION</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ 800</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                            <div class="single-product-content">
                                                                <div class="product-image">
                                                                    <a href="#">
                                                                        <img src="{{url('assets/images/products/19.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                        <img src="{{url('assets/images/products/20.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <h5 class="product-name"><a href="#">SLINGSHOT WINDSOR</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ 900.00</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of single product -->


                                                    </div>
                                                    <!-- end of horizontal product slider container -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of horizontal product slider -->

                                        <!-- horizontal product slider -->
                                        <div class="horizontal-product-slider">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Block title -->
                                                    <div class="block-title">
                                                        <h2><a href="#">SURFBOARD</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- horizontal product slider container -->
                                                    <div class="horizontal-product-list">
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                            <div class="single-product-content">
                                                                <div class="product-image">
                                                                    <a href="#">
                                                                        <img src="{{url('assets/images/products/21.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                        <img src="{{url('assets/images/products/22.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <h5 class="product-name"><a href="#">Firewire Dominator</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ 789.00</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-product-content">
                                                                    <div class="product-image">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/products/23.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                            <img src="{{url('assets/images/products/24.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="product-name"><a href="#">Mason Ho Twin</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 259.99</h4>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-product-content">
                                                                    <div class="product-image">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/products/25.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                            <img src="{{url('assets/images/products/26.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="product-name"><a href="#">E.G. Flash</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 254.99</h4>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-product-content">
                                                                    <div class="product-image">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/products/29.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                            <img src="{{url('assets/images/products/30.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="product-name"><a href="#">Filipe Toledo - Wildfire</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 254.99</h4>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-product-content">
                                                                    <div class="product-image">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/products/31.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                            <img src="{{url('assets/images/products/32.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="product-name"><a href="#">K.K. Rocket Rish</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 260.34</h4>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- end of single product -->



                                                    </div>
                                                    <!-- end of horizontal product slider container -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of horizontal product slider -->

                                        <!-- horizontal product slider -->
                                        <div class="horizontal-product-slider">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Block title -->
                                                    <div class="block-title">
                                                        <h2><a href="#">ACCESSORIES</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- horizontal product slider container -->
                                                    <div class="horizontal-product-list">
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                            <div class="single-product-content">
                                                                <div class="product-image">
                                                                    <a href="#">
                                                                        <img src="{{url('assets/images/products/33.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                        <img src="{{url('assets/images/products/34.jpg')}}" class="img-fluid"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <h5 class="product-name"><a href="#">FDAKINE HELI PRO</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$ 784.00</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-product-content">
                                                                    <div class="product-image">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/products/35.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                            <img src="{{url('assets/images/products/36.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="product-name"><a href="#">DAKINE MISSION PRO</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 652.00</h4>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-product-content">
                                                                    <div class="product-image">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/products/39.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                            <img src="{{url('assets/images/products/40.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="product-name"><a href="#">DAKINE POACHER RAS</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 545.00</h4>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-product-content">
                                                                    <div class="product-image">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/products/41.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                            <img src="{{url('assets/images/products/42.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="product-name"><a href="#">BURTON SKYWARD 18L</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 806.00</h4>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- end of single product -->
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-product-content">
                                                                    <div class="product-image">
                                                                        <a href="#">
                                                                            <img src="{{url('assets/images/products/43.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                            <img src="{{url('assets/images/products/44.jpg')}}" class="img-fluid"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                    <h5 class="product-name"><a href="#">BURTON RIDERS 25L</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$ 731.00</h4>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <!-- end of single product -->


                                                    </div>
                                                    <!-- end of horizontal product slider container -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of horizontal product slider -->
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--====  End of homepage content section  ====-->


                    <!-- New and featured product section -->

                    <section class="new-featured-product-section mb-40">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- horizontal product slider -->
                                    <div class="horizontal-product-slider">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="block-title">
                                                    <h2><a href="#">NEW PRODUCTS</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- horizontal product slider container -->
                                                <div class="horizontal-double-row-product-list">
                                                    <!-- single product -->
                                                    <div class="single-product">
                                                        <div class="single-vertical-product d-flex">
                                                            <div class="product-image">
                                                                <a href="#"><img src="{{url('assets/images/products/11.jpg')}}"
                                                                        class="img-fluid" alt=""></a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5 class="product-name"><a href="#">SLINGSHOT NOMAD</a></h5>
                                                                <div class="price-box">
                                                                    <h4>$500.00</h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="single-vertical-product d-flex">
                                                                <div class="product-image">
                                                                    <a href="#"><img src="{{url('assets/images/products/15.jpg')}}"
                                                                            class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5 class="product-name"><a href="#">SLINGSHOT VALLEY</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$600.00</h4>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                    </div>
                                                    <!-- end of single product -->

                                                    <!-- single product -->
                                                    <div class="single-product">
                                                            <div class="single-vertical-product d-flex">
                                                                <div class="product-image">
                                                                    <a href="#"><img src="{{url('assets/images/products/17.jpg')}}"
                                                                            class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5 class="product-name"><a href="#">RONIX PRESS EDITION</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$800.00</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="single-vertical-product d-flex">
                                                                    <div class="product-image">
                                                                        <a href="#"><img src="{{url('assets/images/products/19.jpg')}}"
                                                                                class="img-fluid" alt=""></a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5 class="product-name"><a href="#">SLINGSHOT WINDSOR</a></h5>
                                                                        <div class="price-box">
                                                                            <h4>$900.00</h4>
                                                                        </div>
                                                                    </div>
                                                            </div>
    
                                                    </div>
                                                    <!-- end of single product -->

                                                    <!-- single product -->
                                                    <div class="single-product">
                                                            <div class="single-vertical-product d-flex">
                                                                <div class="product-image">
                                                                    <a href="#"><img src="{{url('assets/images/products/21.jpg')}}"
                                                                            class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5 class="product-name"><a href="#">FIREWARE DOMINATOR</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$500.00</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="single-vertical-product d-flex">
                                                                    <div class="product-image">
                                                                        <a href="#"><img src="{{url('assets/images/products/23.jpg')}}"
                                                                                class="img-fluid" alt=""></a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5 class="product-name"><a href="#">MASO HO TWIN</a></h5>
                                                                        <div class="price-box">
                                                                            <h4>$259.99</h4>
                                                                        </div>
                                                                    </div>
                                                            </div>
    
                                                    </div>
                                                    <!-- end of single product -->

                                                    <!-- single product -->
                                                    <div class="single-product">
                                                            <div class="single-vertical-product d-flex">
                                                                <div class="product-image">
                                                                    <a href="#"><img src="{{url('assets/images/products/25.jpg')}}"
                                                                            class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5 class="product-name"><a href="#">E.G.FLASH</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$254.00</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="single-vertical-product d-flex">
                                                                    <div class="product-image">
                                                                        <a href="#"><img src="{{url('assets/images/products/31.jpg')}}"
                                                                                class="img-fluid" alt=""></a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5 class="product-name"><a href="#">K.K.ROCKET RISH</a></h5>
                                                                        <div class="price-box">
                                                                            <h4>$260.34</h4>
                                                                        </div>
                                                                    </div>
                                                            </div>
    
                                                    </div>
                                                    <!-- end of single product -->



                                                </div>
                                                <!-- end of horizontal product slider container -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of horizontal product slider -->
                                </div>
                                <div class="col-lg-6">
                                    <!-- horizontal product slider -->
                                    <div class="horizontal-product-slider">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="block-title">
                                                    <h2><a href="#">FEATURED PRODUCTS</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- horizontal product slider container -->
                                                <div class="horizontal-double-row-product-list">
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                            <div class="single-vertical-product d-flex">
                                                                <div class="product-image">
                                                                    <a href="#"><img src="{{url('assets/images/products/11.jpg')}}"
                                                                            class="img-fluid" alt=""></a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5 class="product-name"><a href="#">SLINGSHOT NOMAD</a></h5>
                                                                    <div class="price-box">
                                                                        <h4>$500.00</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="single-vertical-product d-flex">
                                                                    <div class="product-image">
                                                                        <a href="#"><img src="{{url('assets/images/products/15.jpg')}}"
                                                                                class="img-fluid" alt=""></a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5 class="product-name"><a href="#">SLINGSHOT VALLEY</a></h5>
                                                                        <div class="price-box">
                                                                            <h4>$600.00</h4>
                                                                        </div>
                                                                    </div>
                                                            </div>
    
                                                        </div>
                                                        <!-- end of single product -->
    
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-vertical-product d-flex">
                                                                    <div class="product-image">
                                                                        <a href="#"><img src="{{url('assets/images/products/17.jpg')}}"
                                                                                class="img-fluid" alt=""></a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5 class="product-name"><a href="#">RONIX PRESS EDITION</a></h5>
                                                                        <div class="price-box">
                                                                            <h4>$800.00</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="single-vertical-product d-flex">
                                                                        <div class="product-image">
                                                                            <a href="#"><img src="{{url('assets/images/products/19.jpg')}}"
                                                                                    class="img-fluid" alt=""></a>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <h5 class="product-name"><a href="#">SLINGSHOT WINDSOR</a></h5>
                                                                            <div class="price-box">
                                                                                <h4>$900.00</h4>
                                                                            </div>
                                                                        </div>
                                                                </div>
        
                                                        </div>
                                                        <!-- end of single product -->
    
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-vertical-product d-flex">
                                                                    <div class="product-image">
                                                                        <a href="#"><img src="{{url('assets/images/products/21.jpg')}}"
                                                                                class="img-fluid" alt=""></a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5 class="product-name"><a href="#">FIREWARE DOMINATOR</a></h5>
                                                                        <div class="price-box">
                                                                            <h4>$500.00</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="single-vertical-product d-flex">
                                                                        <div class="product-image">
                                                                            <a href="#"><img src="{{url('assets/images/products/23.jpg')}}"
                                                                                    class="img-fluid" alt=""></a>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <h5 class="product-name"><a href="#">MASO HO TWIN</a></h5>
                                                                            <div class="price-box">
                                                                                <h4>$259.99</h4>
                                                                            </div>
                                                                        </div>
                                                                </div>
        
                                                        </div>
                                                        <!-- end of single product -->
    
                                                        <!-- single product -->
                                                        <div class="single-product">
                                                                <div class="single-vertical-product d-flex">
                                                                    <div class="product-image">
                                                                        <a href="#"><img src="{{url('assets/images/products/25.jpg')}}"
                                                                                class="img-fluid" alt=""></a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5 class="product-name"><a href="#">E.G.FLASH</a></h5>
                                                                        <div class="price-box">
                                                                            <h4>$254.00</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="single-vertical-product d-flex">
                                                                        <div class="product-image">
                                                                            <a href="#"><img src="{{url('assets/images/products/31.jpg')}}"
                                                                                    class="img-fluid" alt=""></a>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <h5 class="product-name"><a href="#">K.K.ROCKET RISH</a></h5>
                                                                            <div class="price-box">
                                                                                <h4>$260.34</h4>
                                                                            </div>
                                                                        </div>
                                                                </div>
        
                                                        </div>
                                                        <!-- end of single product -->
    
    
    
                                                </div>
                                                <!-- end of horizontal product slider container -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of horizontal product slider -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- end of new and featured product section -->


@endsection