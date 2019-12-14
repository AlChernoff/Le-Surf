@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add User</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form action="{{url('cms/users')}}" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="name"><span class="text-danger">*</span> Name:</label>
                    <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control field-input-cms">
                    <small class="text-muted">The User Name, min 2 chars, max 50 chars</small><br>
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
                <div class="form-group">
                        <label for="email"><span class="text-danger">*</span> User Email:</label>
                        <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control field-input-cms">
                        <small class="text-muted">The Email  should be a valid email</small><br>
                        <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
                <div class="form-group">
                        <label for="password"><span class="text-danger">*</span> User Password:</label>
                        <input value="{{old('password')}}" type="password" name="password" id="password" class="form-control field-input-cms">
                        <small class="text-muted">The Password , min 2 chars, max 15 chars</small><br>
                        <span class="text-danger">{{$errors->first('password')}}</span>
                </div>
                <div class="form-group">
                        <label for="password_confirmation"><span class="text-danger">*</span>Password Confirmation:</label>
                        <input value="{{old('password_confirmation')}}" type="password" name="password_confirmation" id="password_confirmation" class="form-control field-input-cms">
                        <small class="text-muted">The Password confirmation, min 6 chars, max 20 chars</small><br>
                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                </div>
                <a href="{{url('cms/users')}}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save User" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection