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


//前台首页
Route::get('/','HomeController@index');
//注册
Route::get('/zhuce','HomeController@reg');

//登录
Route::get('/login','HomeController@login');

Route::post('/home/index','HomeController@dologin');


/**
 * 后台首页
 */

Route::get('/houtai', 'AdminController@show');

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

//地址管理
Route::get('/address','ShopuserController@aindex');

//用户管理
Route::resource('user','UserController');

//订单管理
Route::resource('order','OrderController');

//友情链接
Route::resource('link','LinkController');

//网站管理
Route::get('/admin/setting','AdminController@index');
Route::post('/admin/setting','AdminController@update');

//超级管理员
Route::resource('administrator','AdministratorController');








//前台首页
Route::get('/', 'HomeController@index');
//美食
Route::resource('food', 'FoodController');
//酒店
Route::resource('hotel', 'HotelController');
//娱乐
Route::resource('play', 'PlayController');
//结婚
Route::resource('marry', 'MarryController');


//个人中心
Route::resource('person','PersonController');

//前台评价
Route::resource('hcomment','HcommentController');
//账户设置
Route::resource('zhanghu','ZhanghuController');
//购物车
Route::get('/shopcar','HomeController@show');



Route::resource('administrator','AdministratorController');
