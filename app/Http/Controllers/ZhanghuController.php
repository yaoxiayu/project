<?php

namespace App\Http\Controllers;

use App\User;
use App\order;
use Illuminate\Http\Request;

class ZhanghuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取个人信息
        $user = User::all();
        $order = order::all();
        return view('home.person.zhanghu',compact('user','order'));
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
        $user = User::findOrFail($id); 
        $asd = explode('-', $user->address);
        $order = Order::all();
        return view('home.person.zhanghuedit',compact('user','asd','order'));
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
        //更新数据
        $user = User::findOrFail($id);

        $user -> phone = $request -> phone;
   
        $user -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request-> address;
        //插入
        if($user -> save()){
            try{
                return redirect('/zhanghu')->with('success', '修改成功');
            }catch(\Exception $e){
                return back()->with('error','修改失败');
            }
        }else{
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
