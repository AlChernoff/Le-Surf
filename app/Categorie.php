<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Session;
    
class Categorie extends Model
{
    public static function save_new($request)
    {
        $image_name='default.png';
        if ($request->hasFile('category_image') &&  $request->file('category_image')->isValid()) {
            $file=$request->file('category_image');
            $image_name = date('Y.m.d.H.i.s') . '-'.$file->getClientOriginalName();
            $request->file('category_image')->move(public_path() . '/images/', $image_name);

            $img = Image::make(public_path() . '/images/'.$image_name);

            // resize the image to a width of 640 and HEIGHT 480 constrain aspect ratio (auto height)
            $img->resize(640, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }

        $category = new self();
        $category->category_title=$request['category_title'];
        $category->category_article=$request['description'];
        $category->category_url=$request['url'];
        $category->category_image=$image_name;
        $category->save();

        Session::flash('sm', 'Category created successfully!');
    }

    public static function update_item($request, $id)
    {
        $image_name='';
        if ($request->hasFile('category_image') &&  $request->file('category_image')->isValid()) {
            $file=$request->file('category_image');
            $image_name = date('Y.m.d.H.i.s') . '-'.$file->getClientOriginalName();
            $request->file('category_image')->move(public_path() . '/images/', $image_name);

            $img = Image::make(public_path() . '/images/'.$image_name);

            // resize the image to a width of 640 and HEIGHT 480 constrain aspect ratio (auto height)
            $img->resize(640, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }

        $category = self::find($id);
        $category->category_title=$request['category_title'];
        $category->category_article=$request['description'];
        $category->category_url=$request['url'];

        if($image_name){
            $category->category_image=$image_name;
        }
        $category->save();

        Session::flash('sm', 'Category updated successfully!');
    }
}