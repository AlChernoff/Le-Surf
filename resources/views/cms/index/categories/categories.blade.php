@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Site Categories</h1>
    </div>
    <p>
        <a class="btn btn-primary btn-lg" href="{{url('cms/categories/create')}}">Add Category</a>
    </p>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Category Image</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{$item['category_title']}}</td>
                        <td><img src="{{ asset('images/' .$item['category_image'])}}"  width="70" alt="Category Image"></td>
                        <td>
                            <a class="btn btn-primary btn-sm my-2" href="{{url('cms/categories/'.$item['id'].'/edit')}}">Edit</a>  
                            <a class="btn btn-danger btn-sm my-2" href="{{ url('cms/categories/'.$item['id'])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection