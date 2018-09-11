<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //商家首页
    public function index()
    {
      $order = Order::orderBy('id','desc')
          ->where('id','like', '%'.request()->keywords.'%')
          ->get();

      return view('business.index',compact('order'));
    }
}
