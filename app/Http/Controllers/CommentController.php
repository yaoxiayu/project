<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Shopping;
use App\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $comment = comment::orderBy('id','desc')
            ->where('id','like', '%'.request()->keywords.'%')
            ->paginate(10);
        
        //解析模板显示用户数据
        return view('admin.comment.index',compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shopping = Shopping::all();
        $user = User::all();
        // dd($shopping);
        return view('admin.comment.create',compact('shopping','user'));
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
        $comment = new Comment;

        $comment -> values = $request -> values;
        $comment -> user_id = $request -> user_id;
        $comment -> shopping_id = $request -> shopping_id;
        $comment -> content = $request -> content;


        //插入
        if($comment->save()){
                return redirect('/comment')->with('success','添加成功');
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
        $shopping = Shopping::all();
        $comment = Comment::findOrFail($id);
        $user = User::all();

        // dd($comment);
        // dd($shopping);
        return view('admin.comment.edit',compact('shopping','comment','user'));
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
        //插入数据
        $comment = Comment::findOrFail($id);

        $comment -> values = $request -> values;
        $comment -> user_id = $request -> user_id;
        $comment -> shopping_id = $request -> shopping_id;
        $comment -> content = $request -> content;

         //插入
        if($comment->save()){
                return redirect('/comment')->with('success','更新成功');
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
         $comment = Comment::findOrFail($id);

        if($comment->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }
}
