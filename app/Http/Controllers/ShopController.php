<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use Cart;
use App\Product;
use App\Order;
use Session;

class ShopController extends MainController
{
    public function categories(){
        self::$data['categories']=Categorie::all()->toArray();
            self::$data['page_title']='Categories Page';
            return view('site.content.categories',self::$data);
    }

    public function products($category)
    {
        self::$data['categories']=Categorie::all()->toArray();
        if(in_array($category,Categorie::pluck('category_url')->toArray())){
            Product::getProducts($category, self::$data);
            return view('site.content.products',self::$data);
        }
        else{
            abort(404);
        }

    }
    public function item($category,$product){

        Product::getItem($product,self::$data);
        self::$data['categories']=Categorie::all()->toArray();
        return view('site.content.item',self::$data);

    }

    public function ajaxAddToCart(Request $request)
    {
       Product::addToCart($request['pid']);
    }

    public function cart()
    {
        self::$data['page_title']='Cart Page';
        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['cart']=$cart;
        return view('site.content.cart',self::$data);

    }

    public function clearCart(){
        Cart::clear();
        return redirect('shop/cart');
    }

    public function removeItem($product_id){

        Cart::remove($product_id);
        return redirect('shop/cart');

    }

    public function updateItem($operation,$product_id){
        Product::updateCart($operation,$product_id);
        return redirect('shop/cart');
    }

    public function orderNow(){


        if(Cart::isEmpty()){
            return redirect('shop/cart');
        }
        
        if(!Session::has('user_id')){
            return redirect('user/signin?redirect=shop/order-now');
        }

        Order::save_new();
        return redirect('shop');
    }

    public function getSearch($query){
        ( Product::searchProducts($query));
        
    }
}
