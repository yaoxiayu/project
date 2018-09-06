<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industry;
class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $industry = Industry::orderBy('id','desc')
        ->where('name', 'like' , '%'.request()->keywords.'%')
        ->paginate(5);
        //解析模板显示用户数据
        return view('admin.industry.index',['industry'=>$industry]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.industry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $industry = new Industry;

        $industry->name = $request->name;

        if($industry -> save()){
            return redirect('/industry')->with('success','添加成功');
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
        //
         $industry = Industry::findOrfail($id);
        
        return view('admin.industry.edit',['industry'=>$industry]);
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
         $industry = Industry::findOrfail($id);

        $industry -> name = $request->name;
        if($industry->save()){
            return redirect('/industry')->with('success','修改成功');
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
        $industry = Industry::findOrfail($id);

        if($industry->delete()){
            return redirect('/industry')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
