<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MainController extends Controller
{
    public static $data = [];

    public function __construct(){

        self::$data['menus'] = Menu::all()->toArray();

    }
}
