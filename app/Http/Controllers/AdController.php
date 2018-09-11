<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::orderBy('id','desc')
            ->paginate(1);
        //解析模板显示用户数据
        return view('admin.ad.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = new Ad;
        $ad -> name = $request->name;
        // dd($request->hasFile('img'));
         //文件上传
        if ($request->hasFile('img')) {
            $ad-> img = '/'.$request->img->store('uploads/'.date('Ymd'));
        }
        // $user -> save();
    
        if($ad -> save()){
            try{
                return redirect('/ad')->with('success', '添加成功');
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
        $ad = Ad::findOrFail($id); 
        return view('admin.ad.edit',compact('ad'));
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
        $ad = Ad::findOrFail($id);

        $ad -> name = $request->name;
        //文件上传
        if ($request->hasFile('img')) {
            $ad->img = '/'.$request->img->store('uploads/'.date('Ymd'));
        }

        //插入
        if($ad -> save()){
            try{
                return redirect('/ad')->with('success', '修改成功');
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
        $ad = Ad::findOrFail($id);

        if($ad->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('success','删除失败');
        }
    }
}
