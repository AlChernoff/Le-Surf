@extends('site.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach($content as $content)
            <div class="col-12 mt-3">
                <h3>{{$content->content_title}}</h3>
                <p>{!! $content->content_article !!}</p>
            </div>
        
        @endforeach
    </div> 
</div>     
@endsection