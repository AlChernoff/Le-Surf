@extends('site.master')

@section('content')
                        <!-- breadcrumb section -->
                        <div class="breadcrumb-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="breadcrumb-container">
                                            <ul>
                                                <li><a href="{{url('')}}">Home</a> <span class="bc-separator">|</span></li>
                                                <li class="active">LOGIN</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of breadcrumb section -->
                    <!-- Account Area Start -->
                    <div class="account-area page-content mb-50">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 mb-30">
                                    <!-- Login Form s-->
                                    
                                    <form action="" method="POST" novalidate="novalidate" autocomplete="off" class="login-form">
                                     @csrf()
                                        <div id="login-form">
                                            <h4 class="login-title">Login</h4>

                                            <div class="row">
                                                <div class="col-md-12 col-12 mb-20">
                                                    <label for="email">Email Address*</label>
                                                    <input value="{{ old('email')}}" type="email" name="email" id="email" class="mb-0" placeholder="Email Address">
                                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>Password*</label>
                                                    <input class="mb-0" type="password" name="password" id="password" placeholder="Password">
                                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <button class="register-button mt-0">Login</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Account Area End -->

                    <!--====  End of Login / register content section  ====-->


                    <!--=======================================
					=            brand logo slider            =
					========================================-->

                </div>
            </div>
        </div>
    </div>



    <!-- scroll to top  -->
    <a href="#" class="scroll-top"></a>
    <!-- end of scroll to top -->
@endsection

