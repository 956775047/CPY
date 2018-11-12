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
Route::resource("/adminsuser","Admin\AdminUserController");
//后台管理员管理员管理管理员ajax删除
Route::get("/adminsuserdel","Admin\AdminUserController@del");
//分配角色
Route::get("/rolelist/{id}","Admin\AdminUsersController@rolelist");
//保存角色
Route::post("/saverole","Admin\AdminUsersController@saverole");


//后台管理员角色管理
Route::resource("/admin_userss","Admin\RolelistController");
//角色权限分配
Route::get("/authrole/{id}","Admin\RolelistController@auth");
//保存权限
Route::post("/saveauth","Admin\RolelistController@saveauth");
//删除角色
Route::get("/admin_userssdel","Admin\RolelistController@del");

//后台管理员权限管理
Route::resource("/authlist","Admin\AuthlistController");
//后台管理员权限删除
Route::get("/authlistdel","Admin\AuthlistController@del");

//后台轮播图管理
Route::resource("/change","Admin\ChangeController");
//后台轮播图删除
Route::get("/changedel","Admin\ChangeController@del");
//轮播图修改状态
Route::get("/status","Admin\ChangeController@status");


//后台会员
Route::resource("adminuser","Admin\UserController");
//后台商品
Route::resource("/adminshop","Admin\ShopController");

//后台评价
Route::resource("/assess","Admin\AssessController");
//后台评价删除
Route::get("/assessdel","Admin\AssessController@del");




//前台首页
Route::resource("/","Home\HomeController");
//前台登录页面
Route::resource("/login","Home\LoginController");
//前台退出
Route::resource("/outlogin","Home\OutLoginController");
//前台注册
Route::resource("/register","Home\RegisterController");
//前台短信接口调用
Route::get("/reg","Home\RegisterController@reg");
//验证码对比
Route::get("/code","Home\RegisterController@code");


//测试页面
Route::get("/list","Home\HomeController@list");

//后台商品列表
Route::resource("/goods","Admin\GoodsController");
