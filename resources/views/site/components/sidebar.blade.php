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