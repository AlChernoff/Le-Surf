@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Menu Link</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form action="{{url('cms/menu')}}" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="link"><span class="text-danger">*</span> Link:</label>
                    <input value="{{old('link')}}" type="text" name="link" id="link" class="form-control field-input-cms original-text">
                    <small class="text-muted">The Menu link, min 2 chars, max 50 chars</small><br>
                    <span class="text-danger">{{$errors->first('link')}}</span>
                </div>
                <div class="form-group">
                        <label for="url"><span class="text-danger">*</span> Menu URL:</label>
                        <input value="{{old('url')}}" type="text" name="url" id="url" class="form-control field-input-cms target-text">
                        <small class="text-muted">The Menu URL link, only small letters , - , numbers could be used</small><br>
                        <span class="text-danger">{{$errors->first('url')}}</span>
                </div>
                <div class="form-group">
                        <label for="title"><span class="text-danger">*</span> Menu Label:</label>
                        <input value="{{old('title')}}" type="text" name="title" id="title" class="form-control field-input-cms">
                        <small class="text-muted">The Menu Title, min 2 chars, max 100 chars</small><br>
                        <span class="text-danger">{{$errors->first('title')}}</span>
                </div>
                <a href="{{url('cms/menu')}}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save Menu" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection