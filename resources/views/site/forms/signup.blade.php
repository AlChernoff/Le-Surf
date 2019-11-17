@extends('site.master')

@section('content')

                      <!-- breadcrumb section -->
                        <div class="breadcrumb-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="breadcrumb-container">
                                            <ul>
                                                <li><a href="index.html">Home</a> <span class="bc-separator">|</span></li>
                                                <li class="active">REGISTER</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Account Area Start -->
                    <div class="account-area page-content mb-50">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <form action="" method="POST" novalidate="novalidate" autocomplete="off" class="login-form">
                                      @csrf()
                                        <div id="register-form">
                                            <h4 class="login-title">Register</h4>

                                            <div class="row">
                                                <div class="col-md-6 col-12 mb-20">
                                                    <label for="name">Name*</label>
                                                    <input  value="{{ old('name')}}" type="text" name="name" id="name" class="mb-0"  placeholder="First Name">
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                </div>
                                                <div class="col-md-12 mb-20">
                                                    <label for="email">Email Address*</label>
                                                    <input class="mb-0" value="{{ old('email')}}" type="email" name="email" id="email" placeholder="Email Address">
                                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                                </div>
                                                <div class="col-md-6 mb-20">
                                                    <label for="password">Password*</label>
                                                    <input class="mb-0" type="password" name="password" id="password" placeholder="Password">
                                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                                </div>
                                                <div class="col-md-6 mb-20">
                                                    <label>Confirm Password*</label>
                                                    <input class="mb-0"  type="password" name="password_confirmation" id="password-confirmation" placeholder="Confirm Password">
                                                </div>
                                                <div class="col-12">
                                                    <button class="register-button mt-0">Register</button>
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