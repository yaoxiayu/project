<?php

namespace App\Http\Controllers;

use App\Shopping;
use App\order;
use App\Comment;
use Illuminate\Http\Request;

class PersonController extends Controller
{
	//个人中心
    public function index()
    {
    	//获取订单信息
    	$order = order::all();
    	return view('home.person.index',compact('order'));
    }

    //订单删除
    public function delete($id)
    {
    	$order = Order::findOrFail($id);

        if($order->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        }
    }

  	/**
  	 * 储值卡
  	 */
  	public function cindex()
    {
    	$order = order::all();
    	return view('home.person.order',compact('order'));
    }

}
