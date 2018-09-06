<?php

namespace App\Http\Controllers;

use App\Shopuser;
use App\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $shopuser = Shopuser::orderBy('id','desc')
        ->where('username', 'like' , '%'.request()->keywords.'%')
        ->paginate(5);
        //解析模板显示用户数据
        return view('admin.shopuser.index',['shopuser'=>$shopuser]);
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $industry = Industry::all();
        return view('admin.shopuser.create',compact('industry'));
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
        $shopuser = new Shopuser;
        
        $shopuser -> username = $request -> username;
        $shopuser -> industry_id = $request -> industry_id;
        $shopuser -> intro = $request -> intro;
        $shopuser -> password = $request -> password;
        $shopuser -> phone = $request -> phone;
        $shopuser -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request-> address;

        //文件上传
        if($request->hasFile('pic')){
            $shopuser -> pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }
        //
        
        // DB::beginTransaction();

        if($shopuser->save()){
            return redirect('/shopuser')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
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
        $shopuser = Shopuser::findOrFail($id);
        $asd = explode('-', $shopuser->address);
        $industry = Industry::all();
        return view('admin.shopuser.edit',compact('shopuser','industry','asd'));
        // return '555';
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
        $shopuser = Shopuser::findOrFail($id);
        
        $shopuser -> username = $request -> username;
        $shopuser -> industry_id = $request -> industry_id;
        $shopuser -> intro = $request -> intro;
        // $shopuser -> password = $request -> password;
        $shopuser -> phone = $request -> phone;
        $shopuser -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request-> address;
<<<<<<< HEAD

=======
>>>>>>> 4c3a370545057cfba324fa09b4d5a082a8736b77
       
        //文件上传
        if($request->hasFile('pic')){
            $shopuser ->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }else{
            $shopuser ->pic = $shopuser ->pic;
        }
        //
        
         if($shopuser->save()){
            return redirect('/shopuser')->with('success','修改成功');
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
        $shopuser = Shopuser::findOrfail($id);

        if($shopuser->delete()){
            return redirect('/shopuser')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
