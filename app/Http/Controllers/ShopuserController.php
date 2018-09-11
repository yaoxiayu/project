<?php

namespace App\Http\Controllers;

use App\Shopuser;
use App\Industry;
use App\Address;
use App\Tag;
use App\Shop_user_tag;
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
        $tag = Tag::all();
        $industry = Industry::all();
        return view('admin.shopuser.create',compact('industry','tag'));
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
        $shopuser -> name = $request -> name;
        $shopuser -> industry_id = $request -> industry_id;
        $shopuser -> intro = $request -> intro;
        $shopuser -> password = $request -> password;
        $shopuser -> phone = $request -> phone;
        $shopuser -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request-> address;
        $address = new Address;
        $address -> province = $request->s_province;

        $address -> province = $request->s_province;
        $address -> city = $request->s_city;
        $address -> county = $request->s_county;
        // dd($request->tag_id);
        //文件上传
        if($request->hasFile('pic')){
            $shopuser -> pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }
        //

        // DB::beginTransaction();

        if($shopuser->save() && $address->save()){
            $res = $shopuser->tag()->sync($request->tag_id);
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
        $tag = Tag::all();
        return view('admin.shopuser.edit',compact('shopuser','industry','asd','tag'));
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
        $shopuser -> name = $request -> name;
        $shopuser -> industry_id = $request -> industry_id;
        $shopuser -> intro = $request -> intro;
        // $shopuser -> password = $request -> password;
        $shopuser -> phone = $request -> phone;
        $shopuser -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request-> address;
        $address = Address::findOrFail($id);
        $address -> province = $request->s_province;
        $address -> city = $request->s_city;
        $address -> county = $request->s_county;
        //文件上传
        if($request->hasFile('pic')){
            $shopuser ->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }else{
            $shopuser ->pic = $shopuser ->pic;
        }
        //

         if($shopuser->save() && $address->save()){
            $res = $shopuser->tag()->sync($request->tag_id);
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
        $address = Address::findOrfail($id);
        $shop_user_tag = Shop_user_tag::all();
        foreach ($shop_user_tag as $key => $value) {
            if($id == $value['shop_user_id']){
                // $shop_user_tag[$key];
              Shop_user_tag::findOrfail($shop_user_tag[$key]->id)->delete();
            }
        }
        
        if($shopuser->delete() && $address -> delete()){
            return redirect('/shopuser')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    /**
     * 地址管理
     */
     public function aindex()
     {
       $address = Address::orderBy('id','desc')
       ->where('city', 'like' , '%'.request()->keywords.'%')
       ->paginate(5);
       return view('admin.address.index',compact('address'));
     }
}
