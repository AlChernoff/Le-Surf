<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Categorie;

class PagesController extends MainController
{
    public function home()
    {
        self::$data['categories']=Categorie::all()->toArray();
        self::$data['page_title']='Home Page';
        return view('site.content.home',self::$data);
    }
    public function about()
    {
        self::$data['page_title']='About Us';
        return view('site.content.about',self::$data);
    }
    public function contact()
    {
        self::$data['page_title']='Contact Us';
        return view('site.content.contact',self::$data);
    }

    public function content($url)
    {
        Content::getByUrl($url,self::$data);
        return view('site.content.dynamic_content',self::$data);
    }
}
