<?php

namespace App\Http\Controllers;

use App\Order;
use App\Shopping;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //商家首页
    public function index()
    {
      $shopping = Shopping::orderBy('id','')
                 ->where('shopUser_id',[\Session::get('id')])
                 ->get()
                 ->pluck('id');
      $shop = [];
      foreach ($shopping as $k => $v) {
        $shop[] = $v;
      }
      // dd($shop);
      $order = Order::orderBy('id','desc')
          ->where('state',2)
          ->where('id','like', '%'.request()->keywords.'%')
          ->get();
      return view('business.index',compact('order','shop'));
    }
    /**
     * 商品列表
     */
     public function sindex()
     {
       $shopping = Shopping::orderBy('id','desc')
                  ->where('name','like', '%'.request()->keywords.'%')
                  ->where('shopUser_id',[\Session::get('id')])
                  ->paginate(1);
       return view('/business.shopping.index',compact('shopping'));
     }

     /**
      * 订单列表
      */
      //未成交
      public function oindex2()
      {
        $shopping = Shopping::orderBy('id','')
                   ->where('shopUser_id',[\Session::get('id')])
                   ->get()
                   ->pluck('id');
        $shop = [];
        foreach ($shopping as $k => $v) {
          $shop[] = $v;
        }
        // dd($shop);
        $order = Order::orderBy('id','desc')
            ->where('state',2)
            ->where('id','like', '%'.request()->keywords.'%')
            ->get();
        return view('/business.order.index2',compact('order','shop'));
      }
      //已成交
      public function oindex1()
      {
        $shopping = Shopping::orderBy('id','')
                   ->where('shopUser_id',[\Session::get('id')])
                   ->get()
                   ->pluck('id');
        $shop = [];
        foreach ($shopping as $k => $v) {
          $shop[] = $v;
        }
        // dd($shop);
        $order = Order::orderBy('id','desc')
            ->where('state',1)
            ->where('id','like', '%'.request()->keywords.'%')
            ->get();
        return view('/business.order.index1',compact('order','shop'));
      }
}
