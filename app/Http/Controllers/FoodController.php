<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Industry;
use App\Order;
use App\Session;
use App\Shopping;
use App\Shopuser;
use App\Tag;
use App\shop_user_tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    //第一页面 店铺遍历
    public function meishi($id)
    {
        $id = $id;
        $order = Order::all();
        $shopping = Shopping::all();
        $comment = Comment::all()->count();
        $tag = Tag::get()->where('industry_id','=',$id);
        $industry = Industry::all();

        $shop_user_tag = shop_user_tag::get()
                         ->where('tag_id',request()->name)
                         ->pluck('shop_user_id');

        $shopUser_id = json_decode($shop_user_tag);
        // var_dump($shopUser_id);echo '<br>';
        if(request()->name){
            $shopuser = Shopuser::whereIn('id',$shopUser_id)

                            ->paginate(2);
        }else{
             $shopuser = Shopuser::where('industry_id',$id)
                            ->paginate(2);

        }
        $industry_id = request()->name;
        return view('home.food.index',compact('shopping','shopuser','order','comment','asd','tag','id','industry','industry_id'));
    }

     public function shopuser($id)
    {

        $shopuser = Shopuser::find($id);
        $tag = Tag::all();
        $shopping = Shopping::all();
        $comment = Comment::all();
        $industry = Industry::all();
        return view('home.food.shopuser',compact('shopuser','shopping','comment','tag','industry'));
    }

    public function shopping($id)
    {
        $comment = Comment::all();
        $shopping = Shopping::find($id);
        $shopuser = Shopuser::find($id);
        $industry = Industry::all();

        return view('home.food.shopping',compact('shopping','shopuser','comment','industry'));
    }


    public function wushi()
    {
        $price = $_POST['wushi'];
        $tag_id = $_POST['tag_id'];
        $shop = shop_user_tag::where('tag_id',$tag_id)->get();
        foreach($shop as $v){
            dd($v);
        }

    }
}
