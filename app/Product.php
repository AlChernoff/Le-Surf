<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;

class Product extends Model
{
    public static function getProducts($category, &$data){
        $products = DB::table('products as p')
        ->join('categories as c','c.id','=','p.category_id')
        ->where('c.category_url','=',$category)
        ->select('p.*','category_title','category_url')
        ->paginate(3);


        if($products->currentPage() <= $products->lastPage()){
            if($products){
                $data['products'] = $products;
                $data['page_title'] = $products[0]->category_title . ' products';
            }
            else{
                abort(404);
            }
        }else{
           abort(404);
        }
       
       
        
        
    }

    public static function searchProducts($query){
        $products = DB::table('products as p')
        ->join('categories as c','c.id','=','p.category_id')
        ->where('p.product_title','LIKE',"%$query%")
        ->select('p.*','category_title','category_url')
        ->get()
        ->toArray();
       if($products) echo json_encode($products);
    }


    public static function getItem($product,&$data){

        if($item = Product::where('product_url','=',$product)->first()){

            $data['item'] = $item->toArray();
            $data['page_title']=$data['item']['product_title'];
        }
        else{
            abort(404);
        }
   
    }


    public static function addToCart($pid)
    {
        if(!empty($pid) && is_numeric($pid)){

            if($product = self::find($pid)){

                $product = $product->toArray();

                if(!Cart::get($pid)){
                    Cart::add($pid, $product['product_title'], $product['price'], 1, ['image'=>$product['product_image']]);
                    Session::flash('sm',$product['product_title'] . ' added to cart!');
                }
                
            }
            
        }
        
    }


    public static function updateCart($operation,$product_id){

        if(!empty($product_id)&& is_numeric($product_id) && Cart::get($product_id)){

            if(!empty($operation)){
                if($operation === 'plus'){
                        Cart::update($product_id, ['quantity' => 1]);
                } elseif($operation === 'minus'){
                    Cart::update($product_id, ['quantity' => -1]);
                }
            }
        }
    }
}


