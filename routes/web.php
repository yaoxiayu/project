<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * 前台
 */

//前台首页
Route::get('/','HomeController@index');
//注册
Route::get('/home/zhuce','HomeController@zhuce');
Route::post('/home/zhuce','HomeController@zhucewan');
//前台登录
Route::get('/login','HomeController@login');
Route::post('/home/index','HomeController@dologin');
//退出登录
Route::get('/logoutt/','HomeController@logoutt');
//个人中心
Route::resource('person','PersonController');
//前台评价
Route::resource('hcomment','HcommentController');
//账户设置
Route::resource('zhanghu','ZhanghuController');
//购物车
Route::get('/shopcart/{id}&{counts}','HomeController@show');
//评价删除
Route::get('/hcomment/delete/{id}','CommentController@shanchu');
//友情链接
Route::get('/links','HomeController@link');
//最近浏览
Route::get('/liulan','LanController@liulan');
//美食 娱乐 结婚 酒店
Route::get('/food/{id}','FoodController@meishi');
Route::get('/food/shopuser','FoodController@shopuser');
Route::resource('/food', 'FoodController');
Route::get('{id}.html','FoodController@shopuser');
Route::get('/home/{id}.html','FoodController@shopping');




/**
 * 后台
 */
//后台首页
Route::get('/houtai', 'AdminController@show');

//后台登录
Route::get('/admin/login','AdminController@login');

//登陆操作
Route::post('/admin/login','AdminController@dologin');

//退出
Route::get('/admin/logout','AdminController@logout');


/**
 * 商品管理
 */
Route::resource('shopping','ShoppingController');
/**
 * 评价管理
 */
Route::resource('comment','CommentController');
//
//行业管理
Route::resource('industry','IndustryController');


//商家管理
Route::resource('shopuser','ShopuserController');

//标签管理
Route::resource('tag','TagController');

//地址管理
Route::get('/address','ShopuserController@aindex');

//用户管理
Route::resource('user','UserController');

//订单管理
Route::resource('order','OrderController');

//友情链接
Route::resource('link','LinkController');

//广告管理
Route::resource('ad','AdController');


//网站管理
Route::get('/admin/setting','AdminController@index');
Route::post('/admin/setting','AdminController@update');

//超级管理员
Route::resource('administrator','AdministratorController');


/**
 * 商家管理前台
 */
//商家登录
Route::get('/shangjia/login','ShangjiaController@login');
Route::post('/shangjia','ShangjiaController@dologin');

//商家注册
Route::get('/shangjia/zhuce','ShangjiaController@zhuce');
Route::post('/shangjia/zhuce','ShangjiaController@zhucewan');

//商家首页
Route::get('/shangjia','BusinessController@index');

//商家商品列表
Route::get('/business/shopping/index','BusinessController@sindex');
//商家商品编辑
Route::get('/business/shopping/edit/{id}','BusinessController@edit');
Route::post('/business/shopping/update/{id}','BusinessController@update');
//商家商品添加
Route::get('/business/shopping/create','BusinessController@create');
Route::post('/business/shopping/store','BusinessController@store');
//商家店铺编辑
Route::get('/business/set','BusinessController@set');
Route::post('/business/xiugai/{id}','BusinessController@xiugai');

//商品删除
Route::get('/business/shopping/del/{id}','BusinessController@del');
//商家订单列表
//未成交
Route::get('/business/order/2','BusinessController@oindex2');
//已成交
Route::get('/business/order/1','BusinessController@oindex1');
//会员列表
Route::get('/business/vip','BusinessController@vindex');
//评论列表
Route::get('/business/comment','BusinessController@cindex');
//退出
Route::get('/logout','ShangjiaController@logout');
//订单修改
Route::get('/order/gai/{id}','OrderController@gai');

