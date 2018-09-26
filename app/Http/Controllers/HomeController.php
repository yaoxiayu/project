<?php

namespace App\Http\Controllers;

use App\Industry;
use App\Link;
use App\Order;
use App\Setting;
use App\Shopping;
use App\User;
use App\shopuser;
use App\Coupon;
use App\Coupon_user;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{



    public function index()
    {

        $industry = Industry::all();
        $meishi = Shopuser::OrderBy('id','desc')
                -> where('industry_id','2')
                ->take(3)
                -> get();

        $marry = Shopuser::OrderBy('id','desc')
                -> where('industry_id','4')
                ->take(3)
                -> get();

        $hotel = Shopuser::OrderBy('id','desc')
                -> where('industry_id','1')
                ->take(3)
                -> get();

        $play = Shopuser::OrderBy('id','desc')
                -> where('industry_id','3')
                ->take(5)
                -> get();

    	return view('home.index',compact('industry','meishi','marry','hotel','play'));

    }


    //注册

    public function zhuce(Request $request)

    {

        return view('home.zhuce');
    }

   public function zhucewan(Request $request)
    {

       // dd('aaa');
        $user = new User;
        $user -> username = $request->username;
        $user -> password = Hash::make($request->password);
        $user -> phone = $request->phone;
        $user -> address = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request->address;


        //检测是否有文件上传
         if ($request->hasFile('pic')) {
            $user-> pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
         }

        if($user -> save()){
            return redirect('/login')->with('success','注册成功');

        }else{
            return back()-with('error','注册失败');
        }

    }


    //登录界面
    public function login()
    {
        $user = User::all();
    	return view('home.login',compact('user'));
    }

    //登录操作
    public function dologin(Request $request)
    {

    	//获取用户的数据
        $user = User::where('username',$request->username)->first();
        if(!$user){
            return back()->with('error','登录失败');
        }
        //校验密码
        if(Hash::check($request->password,$user->password)){
            //写入session
            \session(['username'=>$user->username,'id'=>$user->id,'phone'=>$user->phone]);
            return redirect('/')->with('success','登录成功');
        }else{
             return back()->with('error','登录失败');
        }
    }



    //退出
    public function logoutt(Request $request)
    {
         $request->session()->flush();
         return redirect('/login')->with('success','退出成功');

    }




    //购物车
    public function show($id,$counts)
    {
        $shopping = Shopping::find($id);
        return view('home.gwc',compact('shopping','counts'));
    }


    //友情链接
    public function link()
    {
        $link = Link::all();

        return view('home.link',compact('link'));
    }

    //领券列表
    public function all()
    {
      $coupon = Coupon::all();
      $coupon_user = json_decode(Coupon_user::get()
                                ->where('user_id',\Session::get('id'))
                                ->pluck('coupon_id'));
      return view('home.coupon.all',compact('coupon','coupon_user'));
    }
    //领取券
    public function gai($coupon_id,$user_id){
      $coupon = Coupon::find($coupon_id);
      $coupon->counts=$coupon->counts-1;

      $coupon_user = new Coupon_user;
      $coupon_user->user_id = \Session::get('id');
      $coupon_user->coupon_id = $coupon_id;
      $coupon_user->state = 1;
      if($coupon->save() && $coupon_user->save()){
        return redirect('/coupon/all');
      }

    }

    //删除我的券
    public function shanchu(){
      $couponId = $_POST['coupon_id'];
      $coupon_user =Coupon_user::where('user_id',\Session::get('id'))
                    ->where('coupon_id',$couponId)
                    ->value('id');
      $couponUser = Coupon_user::findOrFail($coupon_user);
      $couponUser -> delete();
    }
}
