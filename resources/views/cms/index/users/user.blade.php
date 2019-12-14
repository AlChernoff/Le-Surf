@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Site Users</h1>
    </div>
    <p>
        <a class="btn btn-primary btn-lg" href="{{url('cms/users/create')}}">Add User</a>
    </p>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{url('cms/users/'.$user['id'].'/edit')}}">Edit</a>  
                            <a class="btn btn-danger btn-sm" href="{{ url('cms/users/'.$user['id'])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection