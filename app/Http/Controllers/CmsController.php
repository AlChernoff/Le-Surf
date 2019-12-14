<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CmsController extends MainController
{
    public function dashboard()
    {
        return view('cms.index.dashboard',self::$data);
    }

    public function orders()
    {   
        Order::getAll(self::$data);
        return view('cms.index.orders',self::$data);
    }
}
