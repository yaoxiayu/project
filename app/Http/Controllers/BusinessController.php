<?php

namespace App\Http\Controllers;

use App\Order;
use App\Shopping;
use App\User;
use App\Comment;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //商家首页
    public function index()
    {
      //获取登录商家的商品ID
      $shopping = Shopping::orderBy('id','')
                 ->where('shopUser_id',[\Session::get('id')])
                 ->get()
                 ->pluck('id');
      //php对象转换数组
      $shop = json_decode($shopping);
      //查找属于这个商家未成交订单
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
        //获取登录商家的商品ID
        $shopping = Shopping::orderBy('id','')
                   ->where('shopUser_id',[\Session::get('id')])
                   ->get()
                   ->pluck('id');
        $shop = json_decode($shopping);
        //查找属于这个商家未成交订单
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
        //查找属于这个商家已成交订单
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
         //获取登录商家的商品ID
         $shopping = Shopping::orderBy('id','')
                    ->where('shopUser_id',[\Session::get('id')])
                    ->get()
                    ->pluck('id');
         $shop = json_decode($shopping);
         //查找属于这个商家已成交订单的用户ID
         $order = Order::orderBy('id','desc')
             ->whereIn('shopping_id',$shop)
             ->where('state',1)
             ->where('user_id','like', '%'.request()->keywords.'%')
             ->pluck('user_id');
          $user_id = json_decode($order);
          //统计一个$user_id中相同用户的个数
          $vip = array_count_values($user_id);
          // dd($vip);
          $user = User::all();
         return view('/business.vip.index',compact('vip','user'));
       }

       /**
        * 评论列表
        */
        public function cindex()
        {
          //获取登录商家的商品ID
          $shopping = Shopping::orderBy('id','')
                     ->where('shopUser_id',[\Session::get('id')])
                     ->get()
                     ->pluck('id');
          $shop = json_decode($shopping);
          //查找属于自己的评论
          $comment = Comment::orderBy('id','')
                  ->where('shopping_id',$shop)
                  ->paginate(1);
          return view('/business.comment.index',compact('comment'));
        }
}
