<?php

namespace App\Http\Controllers;
use App\Setting;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //后台首页
    public function show()
    {
        return view('admin.index');
    }

<<<<<<< HEAD

=======
>>>>>>> 8fa326108702b7cc5c91cebf256f345ae4c2c4bf
    public function index()
    {
        $setting = Setting::first();

        return view('admin.setting',compact('setting'));

    }

     //后台设置页面
    public function setting()
    {
        //读取表中的数据
        // $setting = Setting::first();

        // return view('admin.setting',compact('setting'));

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


   

  


  

  
}
