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
      $shop = json_decode($shopping);
      // dd($shop);
      // dd($shop);
      $order = Order::orderBy('id','desc')
          ->whereIn('shopping_id',$shop)
          ->where('state',2)
          ->where('id','like', '%'.request()->keywords.'%')
          ->paginate(10);
      return view('business.index',compact('order'));
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
        $shop = json_decode($shopping);
        // dd($shop);
        $order = Order::orderBy('id','desc')
            ->whereIn('shopping_id',$shop)
            ->where('state',2)
            ->where('id','like', '%'.request()->keywords.'%')
            ->paginate(10);
        return view('/business.order.index2',compact('order'));
      }
      //已成交
      public function oindex1()
      {
        $shopping = Shopping::orderBy('id','')
                   ->where('shopUser_id',[\Session::get('id')])
                   ->get()
                   ->pluck('id');
        $shop = json_decode($shopping);
        // dd($shop);
        $order = Order::orderBy('id','desc')
            ->whereIn('shopping_id',$shop)
            ->where('state',1)
            ->where('id','like', '%'.request()->keywords.'%')
            ->paginate(10);
        return view('/business.order.index1',compact('order'));
      }


      /**
       * 会员管理
       */
       public function vindex()
       {
         $shopping = Shopping::orderBy('id','')
                    ->where('shopUser_id',[\Session::get('id')])
                    ->get()
                    ->pluck('id');
         $shop = json_decode($shopping);
         // dd($shop);
         $order = Order::orderBy('id','desc')
             ->whereIn('shopping_id',$shop)
             ->where('state',1)
             ->where('user_id','like', '%'.request()->keywords.'%')
             ->paginate(10);
         return view('/business.vip.index',compact('order'));
       }
}
