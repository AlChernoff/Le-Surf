@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Site Content</h1>
    </div>
    <p>
        <a class="btn btn-primary btn-lg" href="{{url('cms/content/create')}}">Add Content</a>
    </p>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Article</th>
                </tr> 
            </thead>
            <tbody>
                @foreach ($contents as $item)
                    <tr>
                        <td>{{$item['content_title']}}</td>
                        <td>{{$item['content_article']}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{url('cms/content/'.$item['id'].'/edit')}}">Edit</a>  
                            <a class="btn btn-danger btn-sm" href="{{ url('cms/content/'.$item['id'])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection