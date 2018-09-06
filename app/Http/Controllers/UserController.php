<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')
            ->where('username','like', '%'.request()->keywords.'%')
            ->paginate(1);
        //解析模板显示用户数据
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user -> username = $request->username;
        $user -> password = Hash::make($request->password);
        $user -> phone = $request->phone;
        $user -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request-> address;
        // dd($request->hasFile('pic'));
         //文件上传
        if ($request->hasFile('pic')) {
            $user->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }
        // $user -> save();
    
        if($user -> save()){
            try{
                return redirect('/user')->with('success', '添加成功');
            }catch(\Exception $e){
                return back()->with('error','添加失败');
            }
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
        $user = User::findOrFail($id); 
        $asd = explode('-', $user->address);
        return view('admin.user.edit',compact('user','asd'));
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
        $user = User::findOrFail($id);

        $user -> username = $request->username;
        $user -> phone = $request -> phone;
         $user -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request-> address;
        
        //文件上传
         if ($request->hasFile('pic')) {
            $user->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }

        //插入
        if($user -> save()){
            try{
                return redirect('/user')->with('success', '修改成功');
            }catch(\Exception $e){
                return back()->with('error','修改失败');
            }
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
        $user = User::findOrFail($id);

        if($user->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        }
    }
}
