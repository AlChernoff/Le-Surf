@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Category</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form action="{{url('cms/categories/'.$category_item['id'])}}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="item_id" value="{{$category_item['id']}}">       
                <div class="form-group">
                        <label for="category_title"><span class="text-danger">*</span> Title:</label>
                        <input value="{{$category_item['category_title']}}" type="text" name="category_title" id="category_title" class="form-control field-input-cms original-text">
                        <small class="text-muted">The  Title, min 2 chars, max 255 chars</small><br>
                        <span class="text-danger">{{$errors->first('category_title')}}</span>
                </div>
                <div class="form-group">
                        <label for="url"><span class="text-danger">*</span> Category URL:</label>
                        <input value="{{$category_item['category_url']}}" type="text" name="url" id="url" class="form-control field-input-cms target-text target-text">
                        <small class="text-muted">The Category URL link, only small letters , - , numbers could be used</small><br>
                        <span class="text-danger">{{$errors->first('url')}}</span>
                </div>
                <div class="form-group">
                        <label for="description"><span class="text-danger">*</span> Description:</label>
                        <textarea name="description" id="content_article" class="form-control">{{$category_item['category_article']}}</textarea>
                        <small class="text-muted">The  Description, min 2 chars, max 255 chars</small><br>
                        <span class="text-danger">{{$errors->first('description')}}</span>
                </div>
                <div class="form-group">
                    <img width="80" src="{{asset('images/'. $category_item['category_image'])}}" alt="Category Image">
                </div>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input name="category_image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Change Category Image</label>
                        </div>
                </div>
                <div class="form-group">
                    <small class="text-muted">The  Image, must be: jpeg,jpg,png,gif with max size: 5Mb.</small><br>
                    <span class="text-danger">{{$errors->first('category_image')}}</span>
                </div>
                <a href="{{url('cms/categories')}}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Update Content" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection