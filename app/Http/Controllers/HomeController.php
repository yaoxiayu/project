<?php

namespace App\Http\Controllers;

use App\Industry;
use App\Order;
use App\Setting;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Link;
class HomeController extends Controller
{



    public function index()
    {
        $industry = Industry::all()
        ->where('name', 'like' , '%'.request()->keywords.'%');
    	return view('home.index',compact('industry'));
       
        
    }


    //注册

    public function zhuce(Request $request)

    {
	     
        return view('home.zhuce');
    }

   public function zhucewan(Request $request)
    {
                   
       // dd('aaa');
        $user = new User;
        $user -> username = $request->username;
        $user -> password = Hash::make($request->password);
        $user -> phone = $request->phone;


        if($user -> save()){
            return redirect('/login')->with('success','注册成功');

        }else{
            return back()-with('error','注册失败');
        }

    }


    //登录界面
    public function login()
    {
        $user = User::all();
    	return view('home.login',compact('user'));
    }

    //登录操作
    public function dologin(Request $request)
    {

    	//获取用户的数据
        $user = User::where('username',$request->username)->first();
        if(!$user){
            return back()->with('error','登录失败');
        }
        //校验密码
        if(Hash::check($request->password,$user->password)){
            //写入session
            session(['username'=>$user->username,'id'=>$user->id,'phone'=>$user->phone]);
            return redirect('/')->with('success','登录成功');
        }else{
             return back()->with('error','登录失败');
        }
    }



    //退出
    public function logoutt(Request $request)
    {
         $request->session()->flush();
         return redirect('/login')->with('success','退出成功');

    }


    	 

    //购物车
    public function show()
    {
        $order = Order::all();
        return view('home.gwc',compact('order'));
    }


    //友情链接
    public function link()
    {
        $link = Link::all();

        return view('home.link',compact('link'));
    }
}
