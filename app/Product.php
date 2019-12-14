<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Cart;
use Image;
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

    public static function save_new($request)
    {
        $image_name='default.png';
        if ($request->hasFile('product_image') &&  $request->file('product_image')->isValid()) {
            $file=$request->file('product_image');
            $image_name = date('Y.m.d.H.i.s') . '-'.$file->getClientOriginalName();
            $request->file('product_image')->move(public_path() . '/assets/images/products/', $image_name);

            $img = Image::make(public_path() . '/assets/images/products/'.$image_name);

            // resize the image to a width of 640 and HEIGHT 480 constrain aspect ratio (auto height)
            $img->resize(640, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }

        $product = new self();
        $product->category_id = $request['category_id'];
        $product->product_title= $request['product_title'];
        $product->product_article= $request['article'];
        $product->product_url= $request['url'];
        $product->product_image= $image_name;
        $product->price= $request['price'];
        $product->save();

        Session::flash('sm', 'Product created successfully!');
    }


    public static function update_item($request,$id)
    {
        $image_name='';
        if ($request->hasFile('product_image') &&  $request->file('product_image')->isValid()) {
            $file=$request->file('product_image');
            $image_name = date('Y.m.d.H.i.s') . '-'.$file->getClientOriginalName();
            $request->file('product_image')->move(public_path() . '/assets/images/products/', $image_name);

            $img = Image::make(public_path() . '/assets/images/products/'.$image_name);

            // resize the image to a width of 640 and HEIGHT 480 constrain aspect ratio (auto height)
            $img->resize(640, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
 
        $product = self::find($id);
        $product->category_id = $request['category_id'];
        $product->product_title= $request['product_title'];
        $product->product_article= $request['article'];
        $product->product_url= $request['url'];
        if($image_name){
            $product->product_image= $image_name;
        }
 
        $product->price= $request['price'];
        $product->save();

        Session::flash('sm', 'Product updated successfully!');
    }
}


