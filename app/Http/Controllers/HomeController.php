<?php

namespace App\Http\Controllers;

use App\User;
use App\Industry;
use Illuminate\Http\Request;
use App\Setting;
class HomeController extends Controller
{



    public function index()
    {
        $industry = Industry::all()
        ->where('name', 'like' , '%'.request()->keywords.'%');
    	return view('home.index',compact('industry'));
       
        
    }


    //注册
    public function reg()

    {
    	//echo  'aa';

    	// return view('home.zhuce');
    }



    //登录界面
    public function login()
    {

    	return view('home.login');
    }

    //登录操作
    public function dologin(Request $request)
    {

    	//获取用户的数据
    	// $user = User::where('username',$request->username)->first();

    	// if(!$user){
    	// 	return back()->with('error','登录失败');
    	// }


    	// //校验密码
    	// if(Hash::check($request->password,$user->password)){
    	// 	return redirect('/');

    	// }else{
    	// 	return back()
    	// }



    	return view('home.index');
    }

}
