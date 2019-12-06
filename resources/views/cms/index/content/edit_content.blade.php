@extends('cms.cms_master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Content</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form action="{{url('cms/content/'.$content_item['id'])}}" method="POST" novalidate="novalidate" autocomplete="off">
                @method('PUT')
                @csrf
               <div class="form-group">
                        <label for="menu-id"><span class="text-danger">*</span> Menu Link</label>
                        <select name="menu_id" id="menu-id" class="form-control">
                            @foreach ($menus as $item )
                                <option @if($content_item['menu_id']==$item['id']) selected="selected" @endif value="{{$item['id']}}">{{$item['link']}}</option>   
                            @endforeach
                        </select>
                        <span class="text-danger">{{$errors->first('menu_id')}}</span>    
                </div>              
                <div class="form-group">
                        <label for="content_title"><span class="text-danger">*</span> Title:</label>
                        <input value="{{$content_item['content_title']}}" type="text" name="content_title" id="content_title" class="form-control field-input-cms">
                        <small class="text-muted">The  Title, min 2 chars, max 255 chars</small><br>
                        <span class="text-danger">{{$errors->first('content_title')}}</span>
                </div>
                <div class="form-group">
                        <label for="content_article"><span class="text-danger">*</span> Article:</label>
                        <textarea name="content_article" id="content_article" class="form-control">{{$content_item['content_article']}}</textarea>
                        <small class="text-muted">The  Title, min 2 chars, max 255 chars</small><br>
                        <span class="text-danger">{{$errors->first('content_article')}}</span>
                </div>
                <a href="{{url('cms/content')}}" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save Content" name="submit" class="btn btn-primary">
            </form>
            </form>
        </div>
    </div>
@endsection