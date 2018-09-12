<?php

namespace App\Http\Controllers;

use App\Shopuser;
use App\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ShangjiaController extends Controller
{
    

    //注册

    public function zhuce(Request $request)

    {
	     $industry=Industry::all();
        return view('home.shangjia.zhuce',compact('industry'));
    }

   public function zhucewan(Request $request)
    {
                   
       // dd('aaa');
        $shopuser = new Shopuser;

        $shopuser -> username = $request ->username;
        $shopuser -> name = $request ->name;
        $shopuser -> industry_id = $request ->industry_id;
        $shopuser -> intro = $request ->intro;
        $shopuser -> password = Hash::make($request->password);
        $shopuser -> phone = $request ->phone;
        $shopuser -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request->address;
 

 		 if($request->hasFile('pic')){
            $shopuser -> pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }

        if($shopuser -> save()){
            return redirect('/shangjia/login')->with('success','注册成功');

        }else{
            return back()-with('error','注册失败');
        }

    }


     //登录界面
    public function login()
    {
    		// dd('aa');


        $shopuser = Shopuser::all();
    	return view('home.shangjia.login',compact('shopuser'));
    }


     //登录操作
    public function dologin(Request $request)
    {
    		 //dd('aa');

    	//获取用户的数据
        $shopuser = Shopuser::where('username',$request->username)->first();
        if(!$shopuser){
            return back()->with('error','登录失败');
        }
        //校验密码
        if(Hash::check($request->password,$shopuser->password)){
            //写入session
            session(['username'=>$shopuser->username,'id'=>$shopuser->id,'phone'=>$shopuser->phone]);
            return redirect('/shangjia')->with('success','登录成功');
        }else{
             return back()->with('error','登录失败');
        }
    }

     //退出登录
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/shangjia/login/')->with('success','退出成功');

    }
}
