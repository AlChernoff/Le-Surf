<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Content extends Model
{
    public static function getByUrl($url,&$data)
    {
         $contents = DB::table('contents as c')
         ->join('menus as m','m.id','=','c.menu_id')
         ->select('c.*','m.menu_title')
         ->where('m.menu_url','=',$url)
         ->get()
         ->toArray();

         if(!$contents){
             abort(404);
         }

         $data['page_title']=$contents[0]->menu_title; 
         $data['contents']=$contents;

    }

    public static function save_new($request)
    {
        $content = new self();
        $content->menu_id=$request['menu_id'];
        $content->content_title=$request['content_title'];
        $content->content_article=$request['content_article'];
        $content->save();

        Session::flash('sm','Content created successfully!');
    }

    public static function update_item($request,$id){
        $content = self::find($id);
        $content->menu_id=$request['menu_id'];
        $content->content_title=$request['content_title'];
        $content->content_article=$request['content_article'];
        $content->save();

        Session::flash('sm','Content updated successfully!');
    }
}
