<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{
    public function contents(){
        return $this->hasMany('App\Content');
    }

    static public function save_new($request){

        $menu = new self();
        $menu->link = $request['link'];
        $menu->menu_url = $request['url'];
        $menu->menu_title = $request['title'];
        $menu->save();

        Session::flash('sm','Menu created successfully!');
    }

    static public function update_item($request,$id){
        
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->menu_url = $request['url'];
        $menu->menu_title = $request['title'];
        $menu->save();

        Session::flash('sm','Menu updated successfully!');

    }
}
