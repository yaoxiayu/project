<?php

namespace App\Http\Controllers;

use App\Shoucang;
use Illuminate\Http\Request;

class ShoucangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoucang = Shoucang::all();
        return view('admin.shoucang.index',compact('shoucang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shoucang.create');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shoucang = Shoucang::findOrFail($id);

        if($shoucang->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }

    public function cunshoucang()
    {
        $shop_id = $_POST['shop_id'];
        $user_id = \Session::get('id');
        $res = Shoucang::where('user_id',$user_id)
                    ->where('shopping_id',$shop_id)
                    ->first();    
        if(!empty($res)){
            echo '0';
        }
        if(empty($res)){
            if(empty($user_id)){
               echo '2';
            }else{
                $shoucang = new Shoucang;
                $shoucang -> user_id = $user_id;
                $shoucang -> shopping_id = $shop_id;
                if($shoucang->save()){
                echo '1';
                }
            }
        }
    }

    public function xianshi()
    {
        $shoucang = Shoucang::orderBy('id','desc')
         ->paginate(3);
        return view('home.person.cunshoucang',compact('shoucang'));
    }

    public function shoucang()
    {
        $shop_id = $_POST['shop_id'];
        $user_id = \Session::get('id');
        $res = Shoucang::where('user_id',$user_id)
                    ->where('shopping_id',$shop_id)
                    ->first();  
        if(empty($res)){
            echo '0';
        }else{
            echo '1';
        } 
        
        
    }

    public function shanchu($id)
    {
        $shoucang = Shoucang::findOrFail($id);

        if($shoucang->delete()){
            return redirect('/cunshoucang')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }

}
