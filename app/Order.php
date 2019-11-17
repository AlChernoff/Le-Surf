<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Cart;

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
}
