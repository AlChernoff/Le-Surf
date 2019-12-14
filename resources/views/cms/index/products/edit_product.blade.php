@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Product</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form action="{{url('cms/products/'.$product_item['id'])}}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="item_id" value="{{$product_item['id']}}">    
                <div class="form-group">
                        <label for="category-id"><span class="text-danger">*</span> Category</label>
                        <select name="category_id" id="category-id" class="form-control">
                            <option  value="">Choose Category...</option>
                            @foreach ($categories as $item )
                                <option @if($product_item['category_id']==$item['id']) selected="selected" @endif value="{{$item['id']}}">{{$item['category_title']}}</option>   
                            @endforeach
                        </select>
                        <span class="text-danger">{{$errors->first('category_id')}}</span>    
                </div>                    
                <div class="form-group">
                        <label for="product_title"><span class="text-danger">*</span> Title:</label>
                        <input value="{{$product_item['product_title']}}" type="text" name="product_title" id="product_title" class="form-control field-input-cms original-text">
                        <small class="text-muted">The  Title, min 2 chars, max 255 chars</small><br>
                        <span class="text-danger">{{$errors->first('product_title')}}</span>
                </div>
                <div class="form-group">
                        <label for="url"><span class="text-danger">*</span> Product URL:</label>
                        <input value="{{$product_item['product_url']}}" type="text" name="url" id="url" class="form-control field-input-cms target-text target-text">
                        <small class="text-muted">The Product URL link, only small letters , - , numbers could be used</small><br>
                        <span class="text-danger">{{$errors->first('url')}}</span>
                </div>
                <div class="form-group">
                        <label for="price"><span class="text-danger">*</span> Product Price:</label>
                        <input value="{{$product_item['price']}}" type="text" name="price" id="price" class="form-control field-input-cms">
                        <small class="text-muted">The Product URL link, only  numbers could be used</small><br>
                        <span class="text-danger">{{$errors->first('price')}}</span>
                </div>
                <div class="form-group">
                        <label for="article"><span class="text-danger">*</span> Article:</label>
                        <textarea name="article" id="content_article" class="form-control">{{$product_item['product_article']}}</textarea>
                        <small class="text-muted">The  Article, min 2 chars, max 255 chars</small><br>
                        <span class="text-danger">{{$errors->first('article')}}</span>
                </div>
                <div class="form-group">
                <img width="80" src="{{ asset('assets/images/products/'. $product_item['product_image'])}}" alt="Product Image">
                </div>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input name="product_image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose Product Image</label>
                        </div>
                </div>
                <div class="form-group">
                    <small class="text-muted">The  Image, must be: jpeg,jpg,png,gif with max size: 5Mb.</small><br>
                    <span class="text-danger">{{$errors->first('product_image')}}</span>
                </div>
                <a href="{{url('cms/products')}}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save Content" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection