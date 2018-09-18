<?php

namespace App\Http\Controllers;
use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupon = Coupon::all();
        return view('/admin/coupon/index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/coupon/create');
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
       $coupon = new Coupon;

       $coupon -> min = $request -> min;
       $coupon -> max = $request -> max;
       $coupon -> counts = $request -> counts;

       //插入
       if($coupon->save()){
               return redirect('/coupon')->with('success','添加成功');
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
      $coupon = Coupon::find($id);
      return view('/admin/coupon/edit',compact('coupon'));
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
        $coupon = Coupon::find($id);

       $coupon -> min = $request -> min;
       $coupon -> max = $request -> max;
       $coupon -> counts = $request -> counts;

       //插入
       if($coupon->save()){
               return redirect('/coupon')->with('success','添加成功');
       }else{
           return back()->with('error','添加失败!');
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
      $coupon = Coupon::findOrFail($id);

      if($coupon->delete()){
          return back()->with('success','删除成功');
      }else{
          return back()->with('error','删除失败!');
      }
    }
}
