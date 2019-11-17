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

<div class="page-content mt-50 mb-50">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<form action="#">

										<!-- Compare Table -->
										<div class="compare-table table-responsive">
											<table class="table mb-0">
												<tbody>
                                                @foreach($categories as $category)
													<tr>
														<td class="first-column">{{$category['category_title'] }}</td>
														<td class="product-image-title">
															<a href="{{url('shop/'. $category['category_url'])}}" class="image"><img class="img-fluid" src="{{asset('images/' . $category['category_image'])}}" alt="Category Image"></a>
														</td>
													</tr>
                                                @endforeach    
												</tbody>
											</table>
										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
@endsection 