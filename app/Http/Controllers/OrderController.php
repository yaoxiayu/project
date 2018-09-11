<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Shopping;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id','desc')
            ->where('price','like', '%'.request()->keywords.'%')
            ->paginate(1);
        $users = User::all();
        $shoppings = Shopping::all();
        //解析模板显示用户数据
        return view('admin.order.index', compact('orders','users','shoppings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$order = Order::findOrFail($id);

        if($order->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        }*/
    }

    public function shanchu($id)
    {
        $order = Order::findOrFail($id);

        if($order->delete()){
            return redirect('/shopcart')->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        }
    }
}
