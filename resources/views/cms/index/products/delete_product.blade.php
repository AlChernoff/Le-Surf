@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Are you sure you want to delete this item?</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form action="{{url('cms/products/' .$item_id)}}" method="POST">
            @method('DELETE')
                @csrf
                <a href="{{url('cms/products')}}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Delete" name="submit" class="btn btn-danger">
            </form>
        </div>
    </div>
@endsection