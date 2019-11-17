@extends('site.master')

@section('content')

                    <section class="page-content about-page-content mt-50 mb-50">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="page-title">
                                        <h2>{{$page_title}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="about-single-block">
                                        <h2>OUR SHOP</h2>
                                        <p class="bold-text">Best products from all over the world</p>
                                        <p>Order today and you will receive it ony in 7days!</p>

                                        <div class="featured-points">
                                            <ul>
                                                <li>Top quality products</li>
                                                <li>Best customer service</li>
                                                <li>30-days money back guarantee</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="about-single-block">
                                        <h2>OUR TEAM</h2>

                                        <div class="about-team-image">
                                            <img src="{{url('assets/images/about-us.jpg')}}" class="img-fluid" alt="About us">
                                        </div>
                                        <p class="bold-text">The best team in the world</p>
                                        <p>Designers, Managers,Sellers and the most interesting: Real Riders! </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> 
@endsection