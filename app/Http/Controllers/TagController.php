<?php

namespace App\Http\Controllers;

use App\Industry;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        $industry = Industry::all();
        return view('admin.tag.index',compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $industry = Industry::all();
        return view('admin.tag.create',compact('industry'));
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
     $tag = new Tag;

     $tag -> name = $request -> name;
     $tag -> industry_id = $request -> industry_id;

     if($tag->save()){
             return redirect('/tag')->with('success','添加成功');
     }else{
         return back()->with('error','添加失败!');
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
      $tag = Tag::findOrFail($id);;
      $industry = Industry::all();
      return view('admin.tag.edit',compact('tag','industry'));
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
      $tag = Tag::findOrFail($id);

      $tag -> name = $request -> name;
      $tag -> industry_id = $request -> industry_id;
      //插入
      if($tag->save()){
              return redirect('/tag')->with('success','更新成功');
      }else{
          return back()->with('error','更新失败!');
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
      $tag = Tag::findOrFail($id);

      if($tag->delete()){
          return back()->with('success','删除成功');
      }else{
          return back()->with('error','删除失败!');
      }
    }
}
