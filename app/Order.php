<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Cart;   
use DB;

class Order extends Model
{
    public static function save_new(){

        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->order_data=serialize(Cart::getContent()->toArray());
        $order->total = Cart::getTotal();
        $order->save();
        Session::flash('sm','You order saved');
        Cart::clear();
    }

    public static function getAll(&$data)
    {
        $data['orders'] = DB::table('orders as o')
        ->join('users as u','u.id','=','o.user_id')
        ->orderBy('o.created_at','desc')
        ->get();
    }
}
