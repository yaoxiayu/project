<?php

namespace App\Http\Controllers;

use App\Shopping;
use App\ShopUser;
use App\Industry;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $shopping = Shopping::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.shopping.index',compact('shopping'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shopUser = ShopUser::all();
        $industry = Industry::all();
        // "酒店":["壹佰","旅馆",],"美食":["吃的","喝的",
        return view('admin.shopping.create',compact('shopUser','industry'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //插入数据
        $shopping = new Shopping;

        $shopping -> name = $request -> name;
        $shopping -> price = $request -> price;
        $shopping -> shopUser_id = $request -> shopUser_id;
        $shopping -> content = $request -> content;
        $shopping -> counts = $request -> counts;

        //文件上传
        //检测是否有文件上传
        if ($request->hasFile('img')) {
            $shopping->img = '/'.$request->img->store('uploads/'.date('Ymd'));
        }

        //插入
        if($shopping->save()){
                return redirect('/shopping')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败!');
        }
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
        $shopping = Shopping::findOrFail($id);
        $shopUser = ShopUser::all();

        return view('admin.shopping.edit',compact('shopping','shopUser'));
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
        $shopping = Shopping::findOrFail($id);

        $shopping -> name = $request -> name;
        $shopping -> price = $request -> price;
        $shopping -> shopUser_id = $request -> shopUser_id;
        $shopping -> content = $request -> content;
        $shopping -> counts = $request -> counts;
        // dd($request -> shopUser_id);
         //文件上传
        //检测是否有文件上传
        if ($request->hasFile('img')) {
            $shopping->img = '/'.$request->img->store('uploads/'.date('Ymd'));
        }



        //插入
        if($shopping->save()){
                return redirect('/shopping')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败!');
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
        $shopping = Shopping::findOrFail($id);

        if($shopping->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }
}
