@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Site Products</h1>
    </div>
    <p>
        <a class="btn btn-primary btn-lg" href="{{url('cms/products/create')}}">Add Product</a>
    </p>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Product Image</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>    
                        <td>{{$item['product_title']}}</td>
                        <td><img src="{{ asset('assets/images/products/' .$item['product_image'])}}"  width="70" alt="Product Image"></td>
                        <td>
                            <a class="btn btn-primary btn-sm my-2" href="{{url('cms/products/'.$item['id'].'/edit')}}">Edit</a>  
                            <a class="btn btn-danger btn-sm my-2" href="{{ url('cms/products/'.$item['id'])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection