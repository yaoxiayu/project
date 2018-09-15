<?php

namespace App\Http\Controllers;

use App\Order;
use App\Shopping;
use App\Shopuser;
use App\User;
use App\Comment;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //商家首页
    public function index()
    {
      //获取登录商家的商品ID
      $shopping = Shopping::orderBy('id','')
                 ->where('shopUser_id',[\Session::get('id')])
                 ->get()
                 ->pluck('id');
      //php对象转换数组
      $shop = json_decode($shopping);
      //查找属于这个商家未成交订单
      $order = Order::orderBy('id','desc')
          ->whereIn('shopping_id',$shop)
          ->where('state',2)
          ->where('id','like', '%'.request()->keywords.'%')
          ->paginate(10);
      return view('business.index',compact('order'));
    }

    /**
     * 商品列表
     */
     public function sindex()
     {
       $shopping = Shopping::orderBy('id','desc')
                  ->where('name','like', '%'.request()->keywords.'%')
                  ->where('shopUser_id',[\Session::get('id')])
                  ->paginate(1);
       return view('/business.shopping.index',compact('shopping'));
     }
     /**
      * 商品添加
      */
      public function create()
      {
        return view('business.shopping.create');
      }

      public function store(Request $request)
      {
        //插入数据
        $shopping = new Shopping;

        $shopping -> name = $request -> name;
        $shopping -> price = $request -> price;
        $shopping -> counts = $request -> counts;
        $shopping -> shopUser_id = \Session::get('id');
        $shopping -> content = $request -> content;

        // dd($request->tag_id);
        //文件上传
        if($request->hasFile('img')){
            $shopping -> img = '/'.$request->img->store('uploads/'.date('Ymd'));
        }
        //

        // DB::beginTransaction();

        if($shopping->save()){
            return redirect('/business/shopping/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
      }


      /**
       * 商品编辑
       */
       public function edit($id){
         $shopping = Shopping::findOrFail($id);

         return view('/business/shopping/edit',compact('shopping'));
       }

       public function update(Request $request,$id){
         //插入数据
         $shopping = Shopping::findOrFail($id);

         $shopping -> name = $request -> name;
         $shopping -> price = $request -> price;
         $shopping -> counts = $request -> counts;
         $shopping -> shopUser_id = \Session::get('id');
         $shopping -> content = $request -> content;

         // dd($request->tag_id);
         //文件上传
         if($request->hasFile('img')){
             $shopping -> img = '/'.$request->img->store('uploads/'.date('Ymd'));
         }
         //

         // DB::beginTransaction();

         if($shopping->save()){
             return redirect('/business/shopping/index')->with('success','更新成功');
         }else{
             return back()->with('error','更新失败');
         }
       }
      /**
       * 商品删除
       */
       public function del($id)
       {
         $shopping = Shopping::findOrFail($id);

         if($shopping->delete()){
             return back()->with('success','删除成功');
         }else{
             return back()->with('error','删除失败!');
         }
       }

     /**
      * 订单列表
      */
      //未成交
      public function oindex2()
      {
        //获取登录商家的商品ID
        $shopping = Shopping::orderBy('id','')
                   ->where('shopUser_id',[\Session::get('id')])
                   ->get()
                   ->pluck('id');
        $shop = json_decode($shopping);
        //查找属于这个商家未成交订单
        $order = Order::orderBy('id','desc')
            ->whereIn('shopping_id',$shop)
            ->where('state',2)
            ->where('id','like', '%'.request()->keywords.'%')
            ->paginate(10);
        return view('/business.order.index2',compact('order'));
      }
      //已成交
      public function oindex1()
      {
        $shopping = Shopping::orderBy('id','')
                   ->where('shopUser_id',[\Session::get('id')])
                   ->get()
                   ->pluck('id');
        $shop = json_decode($shopping);
        //查找属于这个商家已成交订单
        $order = Order::orderBy('id','desc')
            ->whereIn('shopping_id',$shop)
            ->where('state',1)
            ->where('id','like', '%'.request()->keywords.'%')
            ->paginate(10);
        return view('/business.order.index1',compact('order'));
      }


      /**
       * 会员管理
       */
       public function vindex()
       {
         //获取登录商家的商品ID
         $shopping = Shopping::orderBy('id','')
                    ->where('shopUser_id',[\Session::get('id')])
                    ->get()
                    ->pluck('id');
         $shop = json_decode($shopping);
         //查找属于这个商家已成交订单的用户ID
         $order = Order::orderBy('id','desc')
             ->whereIn('shopping_id',$shop)
             ->where('state',1)
             ->where('user_id','like', '%'.request()->keywords.'%')
             ->pluck('user_id');
          $user_id = json_decode($order);
          //统计一个$user_id中相同用户的个数
          $vip = array_count_values($user_id);
          // dd($vip);
          $user = User::all();
         return view('/business.vip.index',compact('vip','user'));
       }

       /**
        * 评论列表
        */
        public function cindex()
        {
          //获取登录商家的商品ID
          $shopping = Shopping::orderBy('id','')
                     ->where('shopUser_id',[\Session::get('id')])
                     ->get()
                     ->pluck('id');
          $shop = json_decode($shopping);
          //查找属于自己的评论
          $comment = Comment::orderBy('id','')
                  ->where('shopping_id',$shop)
                  ->paginate(1);
          return view('/business.comment.index',compact('comment'));
        }

        /*
        *商家店铺编辑
        */
        public function set()
        {
          $shopuser = Shopuser::find(\Session::get('id'));
          return view('business.set.edit',compact('shopuser'));
        }
        public function xiugai(Request $request,$id)
        {
          //插入数据
          $shopuser = Shopuser::findOrFail($id);

          $shopuser -> name = $request -> name;
          $shopuser -> renprice = $request -> renprice;
          $shopuser -> username = $request -> username;
          $shopuser -> id = \Session::get('id');
          $shopuser -> phone = $request -> phone;
          $shopuser -> intro = $request -> intro;



          if($shopuser->save()){
              return redirect('/business/set')->with('success','修改成功');
          }else{
              return back()->with('error','修改失败');
          }
        }
}
