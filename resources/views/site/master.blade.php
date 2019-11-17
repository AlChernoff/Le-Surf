<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Le Surf | {{!empty($page_title) ? $page_title:$page_title="Site"}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}">

     <!-- My CSS --> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link href="{{url('css/iconfont-style.css')}}" /> 

    <!-- ************************* CSS ************************* -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    

    <!-- Fontawesome CSS -->
    <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- IcoFont CSS -->
    <link href="{{ asset('assets/css/icon-font.min.css')}}" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('extra_css');

    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script>
      var BASE_URL = "{{url('')}}/";
    </script>

</head>

<body>
        <div id="page">
            <div class="container">
                <div class="outer-row row">
                    <div class="col-md-12">
                        <!--===================================
              =            Header            		   =
              =====================================-->
    
                        <header>
                            <!-- header top nav -->
                            <div class="header-top-nav">
                                <div class="container">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                            <!-- end of header top nav -->
    
                            <!-- header bottom -->
    
                            <!-- header content -->
                            <div class="header-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 offset-lg-0 text-md-left text-sm-center">
                                            <!-- logo -->
                                            <div class="logo">
                                                <a href="{{url('')}}"><img src="{{asset('assets/images/logo.png')}}" 
                                                  style="width:150px;height: 120px" class="img-fluid"
                                                        alt="logo"></a>
                                            </div>
                                            <!-- end of logo -->
                                        </div>
        <form id="search-form" action="" method="GET" novalidate="novalidate" autocomplete="off" style="width:49%">
          <div class="input-group my-4">
            <input value="{{old('search')}}" id="search" name="search" type="text" class="form-control" placeholder="Search Product">
          </div>
        </form>    
                                        <div class="col-lg-3 col-md-4 ml-10">
                                            <!-- shopping cart -->
                                            <div class="shopping-cart float-lg-right d-flex justify-content-start" id="shopping-cart">
                                                <div class="cart-icon">
                                                    <a href="{{url('shop/cart')}}"><img src="{{asset('assets/images/icon-topcart.png')}}" class="img-fluid"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                        @if(!Cart::isEmpty())
                                                    <h2><a href="{{url('shop/cart')}}">Shopping Cart <span><span id="cartStatus">{{Cart::getTotalQuantity()}}</span></span></a></h2>    
                                                        @else
                                                    <h2><a href="{{url('shop/cart')}}">Shopping Cart <span><span id="cartStatus">(Empty)</span></span></a></h2>
                                                        @endif
                                                </div>
    
                                                <!-- end of shopping cart -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of header content -->
    
                            <!-- header navigation section -->
                            <div class="header-navigation">
                                <div class="container">
                                    <div class="navigation-container">
                                        <div class="row">
                                            <div class="col-lg-3 d-none d-lg-block">
                                                <!-- ======  Header menu left text  ======= -->
                                                <p class="call-us-text">Call us 24/7: (+66) 123-456-789</p>
                                            </div>
                                            <div class="col-lg-9 col-md-12">
    
                                                <!-- Header navigation right side-->
    
                                                <!-- main menu start -->
                                                <div class="main-menu">
                                                    <nav>
                                                        <ul>
                                                            <li class=""><a href="{{url('about')}}">About</a>
                                                            <li class=""><a href="{{url('shop')}}">Shop</a>
                                                                <!-- ======  Submenu block  ======= -->
                                                                <!-- ====  End of Submenu block  ==== -->
    
                                                            </li>
                                                            @if(!Session::has('user_id'))
                                                            <li><a href="{{url('user/signin')}}">Sign In</a></li>
                                                            <li><a href="{{url('user/signup')}}">Sign Up</a></li>
                                                            @else
                                                            <li><a href="{{ url('user/profile')}}">Hello,{{Session::get('user_name')}}! </a></li>
                                                            <li><a  href="{{ url('user/logout')}}"><i class="fas fa-sign-out-alt mr-1"></i>Log Out</a></li>
                                                            @endif  
                                                            @if(Session::has('is_admin'))
                                                            <li><a href="{{ url('cms/dashboard')}}">Admin Panel</a></li>
                                                            
                                                            @else
                                                            @endif
                                                        </ul>
                                                    </nav>
    
                                                    <!-- Mobile Menu -->
                                                    <div class="mobile-menu order-12 d-block d-lg-none"></div>
    
                                                </div>
    
                                                <!-- end of Header navigation right side-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of header navigation section -->
    
                            <!-- end of header bottom -->
                        </header>
                        <main>
                          @yield('content')
                        </main>            

                        <!--============================
              =            footer            =
              =============================-->
    
                        <footer>
                            <div class="container">
                                <!-- footer navigation -->
                                <div class="footer-navigation section-padding">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <!-- footer description -->
                                            <div class="footer-description">
                                                <div class="footer-logo">
                                                    <img src="{{asset('assets/images/logo.png')}}" style="width:200px;height: 200px" alt="">
                                                </div>
                                            </div>
                                            <!-- end of footer description -->
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <!-- footer nav links -->
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single footer nav block -->
                                                    <div class="single-footer-nav-block">
                                                        <h2 class="block-title">INFORMATION</h2>
                                                        <ul class="footer-nav-links">
                                                            <li><a href="#">Specials</a></li>
                                                            <li><a href="#">New Products</a></li>
                                                            <li><a href="#">Best Sellers</a></li>
                                                            <li><a href="#">Contact Us</a></li>
                                                            <li><a href="{{url('about')}}">About Us</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- end of single footer nav block -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single footer nav block -->
                                                    <div class="single-footer-nav-block">
                                                        <h2 class="block-title"><a href="#">MY ACCOUNT</a></h2>
                                                        <ul class="footer-nav-links">
                                                            <li><a href="#">My Orders</a></li>
                                                            <li><a href="#">My Credit Slips</a></li>
                                                            <li><a href="#">My Addresses</a></li>
                                                            <li><a href="#">My Personal Info</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- end of single footer nav block -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single footer nav block -->
                                                    <div class="single-footer-nav-block">
                                                        <h2 class="block-title">CATEGORIES</h2>
                                                        <ul class="footer-nav-links">
                                                            <li><a href="{{url('shop/surf-boards')}}">Surfboards</a></li>
                                                            <li><a href="{{url('shop/sup-boards')}}">Supboards</a></li>
                                                            <li><a href="{{url('shop/wake-boards')}}">Wakeboards</a></li>
                                                            <li><a href="{{url('shop/snow-boards')}}">Snowboards</a></li>
                                                            <li><a href="{{url('shop/accessories')}}">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- end of single footer nav block -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single footer nav block -->
                                                    <div class="single-footer-nav-block">
                                                        <h2 class="block-title">OUR SERVICES</h2>
                                                        <ul class="footer-nav-links">
                                                            <li><a href="{{url('shop')}}">Our Stores</a></li>
                                                            <li><a href="{{url('about')}}">Information</a></li>
                                                            <li><a href="#">Privacy Policy</a></li>
                                                            <li><a href="#">Terms & Condition</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- end of single footer nav block -->
                                                </div>
                                            </div>
                                            <!-- end of footer nav links -->
    
                                        </div>
                                    </div>
                                </div>
                                <!-- end of footer navigation -->
    
                                <!-- copyright section -->
                                <div class="copyright-section">
                                    <div class="copyright-container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <p class="copyright-text text-center text-md-left">Copyright © {{date('Y')}}  <a href="#">Le Surf</a>.
                                                    All Rights Reserved</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="payment-logos text-md-right text-center">
                                                    <img src="{{url('assets/images/payment.png')}}" alt="payment logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of copyright section -->
                                </div>
                            </div>
                        </footer>
    
                        <!--====  End of footer  ====-->
                    </div>
                </div>
            </div>
        </div>

    
        <!-- scroll to top  -->
        <a href="#" class="scroll-top"></a>
        <!-- end of scroll to top -->
    
    



    <!-- ************************* JS ************************* -->
        <!-- My JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{asset ('js/script.js')}}"></script> 

    <!-- jQuery JS -->

    <!-- Popper JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    @if (Session::has('sm'))
    <script>
        toastr.options.positionClass = 'toast-bottom-full-width';
        toastr.success("{{Session::get('sm')}}");
       </script>
       @endif

</body>

</html>

