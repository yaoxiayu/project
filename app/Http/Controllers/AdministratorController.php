<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   	 
    
    public function index()
    {
        $admins = Admin::orderBy('id','desc')
       ->where('username','like','%'.request()->keywords.'%')
        ->get();
        

        return view('admin.administrator',['admins'=>$admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	//echo 'aa';

      return view('admin.createadmin');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $admin = new Admin;
        $admin -> username = $request ->username;
        $admin -> password =Hash::make($request->password);
        //$admin -> pic = $request ->pic;
        $admin -> phone = $request ->phone;
        //dd($admin);


        //检测是否有文件上传
         if ($request->hasFile('pic')) {
            $admin-> pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
         }

        if($admin -> save()){
          return redirect('/administrator')->with('success','添加成功');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $admin = Admin::FindOrFail($id);
        //dd($link);

        return view('admin.editadmin',['admin'=>$admin]);

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
         $admin = Admin::findOrFail($id);

        $admin-> username = $request->username;
        //$res-> pic = $request->pic;
        $admin-> phone = $request->phone;
       
        if($admin -> save()){
            return redirect('/administrator')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
        }

        //检测是否有文件上传
         if ($request->hasFile('pic')) {
            $admin-> pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
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
        $res = Admin::destroy($id);

        if($res){
            return back()->with('success','删除成功');
        }
    }
}
