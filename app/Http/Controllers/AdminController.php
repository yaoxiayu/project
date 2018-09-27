<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    //后台首页
    public function show()
    {
        $setting = Setting::first();
        return view('admin.index',compact('setting'));
    }

    public function index()
    {
        $setting = Setting::first();

        return view('admin.setting',compact('setting'));

    }

     //后台设置页面
    public function setting()
    {


    }


    //保存设置
    public function update( Request $request )
    {
        $setting =Setting::first();

        if(!$setting){
            $setting = new Setting;
        }

        $setting-> title = $request->title;
        $setting-> logo = 1;
        $setting-> keywords = $request->keywords;

        if($setting->save()){
            return back()->with('success','设置成功');
        }else{
            return back()->with('error','设置失败');
        }



    }




    //后台登录页面
    public function login()
    {
        return view('admin.login');

    }

    //登录操作
    public function dologin(Request $request)
    {


        //获取用户的数据
        $admin = Admin::where('username',$request->username)->first();

        //dd($admin);

         if(!$admin){
            return back()->with('error','登录失败');

         }

        //校验密码
        if(Hash::check($request->password,$admin->password)){
            //写入session
            session(['adminname'=>$admin->username,'aid'=>$admin->id,'admin'=>'admin']);
            return redirect('/houtai')->with('success','登录成功');
    }else{

         return back()->with('error','登录失败');
    }
    }



    //退出登录
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login/')->with('success','退出成功');

    }

}
