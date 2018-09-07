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

//行业管理
Route::resource('industry','IndustryController');


//商家管理
Route::resource('shopuser','ShopuserController');


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

//结婚
Route::resource('jiehun','JiehunController');

//个人中心
/**
 * 首页
 */
Route::get('/person','PersonController@index');
/**
 * 订单
 */
Route::get('/person/order/1','PersonController@index');
/**
 * 储值卡
 */
Route::get('/person/order/2','PersonController@cindex');
//订单删除
Route::get('/person/delete/{id}','PersonController@delete');

/**
 * 评价
 */
Route::get('/person/order/3','PersonController@pindex');