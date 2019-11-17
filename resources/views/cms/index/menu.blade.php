@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Site Menu</h1>
    </div>
    <p>
        <a class="btn btn-primary btn-lg" href="{{url('cms/menu/create')}}">Add Menu link</a>
    </p>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Link</th>
                    <th>Title</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{$menu['link']}}</td>
                        <td>{{$menu['menu_title']}}</td>
                        <td><a class="btn btn-primary btn-sm" href="">Edit</a>  <a class="btn btn-danger btn-sm" href="">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection