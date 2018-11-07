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


//后台首页
Route::resource("admins","Admin\AdminsController");
//后台无线分类
Route::resource("admincate","Admin\CateController");
//后台管理员
Route::resource("adminsuser","Admin\AdminUserController");
//后台会员
Route::resource("adminuser","Admin\UserController");
//后台商品
Route::resource("/adminshop","Admin\ShopController");
