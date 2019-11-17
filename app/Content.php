<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

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
}
