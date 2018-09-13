<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Order;
use App\Session;
use App\Shopping;
use App\Shopuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    public function shopuser($id)
    {   
        
        $shopuser = Shopuser::find($id);
        
        $shopping = Shopping::all();
        $comment = Comment::all();
        return view('home.play.shopuser',compact('shopuser','shopping','comment'));
    }

    public function shopping($id)
    {   
        $comment = Comment::all();
        $shopping = Shopping::find($id);

        $shopuser = Shopuser::find($id);

        return view('home.play.shopping',compact('shopping','shopuser','comment'));

    }

    public function meishi($id)
    {   
        
        // $shopuser = DB::table('shop_users')->where('industry_id','=',$id)->get();
        $shopuser = Shopuser::where('industry_id','=',$id)->paginate(10);
        $order = Order::all();
        $shopping = Shopping::all();
        $comment = Comment::all()->count();
        // $shopuser = Shopuser::orderBy('id','desc')
        // ->where('name', 'like' , '%'.request()->keywords.'%')
        // ->paginate(10);

        return view('home.play.index',compact('shopping','shopuser','order','comment','asd'));
    }
}
