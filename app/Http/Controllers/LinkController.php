<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Link;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $links = Link::orderBy('id','desc')
        ->where('name','like','%'.request()->keywords.'%')
        ->get();
        
       return view('admin.link.index',['links'=>$links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.link.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $link = new Link;
        $link -> name = $request ->name;
        $link -> url = $request ->url;
        // dd($link);

        if($link -> save()){
          return redirect('/link')->with('success','添加成功');
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
        
        $link = Link::FindOrFail($id);
        //dd($link);

        return view('admin.link.edit',['link'=>$link]);

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
         $res = Link::findOrFail($id);

        $res-> name = $request->name;
        $res-> url = $request->url;
       
        if($res -> save()){
            return redirect('/link')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
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
        $link = Link::destroy($id);
       
        if($link){
            return back()->with('success','删除成功');
        }
    }
}
