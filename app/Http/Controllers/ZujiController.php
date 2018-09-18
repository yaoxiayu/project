<?php

namespace App\Http\Controllers;

use App\Zuji;
use Illuminate\Http\Request;

class ZujiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function xianshi()
    {
       

        $zuji = Zuji::orderBy('id','desc')
         ->paginate(3);
        return view('home.person.cunzuji',compact('zuji'));
    }


    public function cunzuji()
    {
        
        $shop_id = $_POST['shop_id'];
        $user_id = \Session::get('id');
        $res = Zuji::where('user_id',$user_id)
                    ->where('shopping_id',$shop_id)
                    ->first();
        if(!empty($res)){
            $time = date('Y-m-d H:i:s',time());
            $res -> updated_at = $time;
            if($res->save()){
                echo '1';
            }else{
                echo '0';
            }
        }

        if(empty($res)){
            $zuji = new Zuji;
            $zuji -> user_id = $user_id;
            $zuji -> shopping_id = $shop_id;
            if($zuji->save()){
                echo '1';
            }else{
                echo '0';
            }
        }
    }    

    public function shanchu($id)
    {
        $zuji = Zuji::findOrFail($id);

        if($zuji->delete()){
            return redirect('/cunzuji')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }

    public function index()
    {
        $zuji = Zuji::all();
        return view('admin.zuji.index',compact('zuji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.zuji.create');
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
        $zuji = Zuji::findOrFail($id);

        if($zuji->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败!');
        }
    }
}
