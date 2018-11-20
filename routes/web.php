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

//后台登录退出
Route::resource("/adminlogin","Admin\AdminLoginController");

//后台首页
Route::resource("admins","Admin\AdminsController");

Route::group(['middleware'=>'adminlogin'],function(){
	
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
	//后台无线分类
	Route::resource("/admincate","Admin\CateController");
	//后台AJAX 分类删除
	Route::get("/fldel","Admin\CateController@del");
	//后台管理员
	Route::resource("/adminsuser","Admin\AdminUserController");
	//后台管理员删除
	Route::get("/adminsuserdel",'Admin\AdminUserController@del');
	//分配角色
	Route::get("/rolelist/{id}","Admin\AdminUsersController@rolelist");
	//保存角色
	Route::post("/saverole","Admin\AdminUsersController@saverole");




	//后台会员
	Route::resource("/adminuser","Admin\UserController");
	Route::get('/addressuser/{id}',"Admin\UserController@address");
	//Ajax删除
	Route::get("/del","Admin\UserController@del");
	//后台商品
	Route::resource("/adminshop","Admin\ShopController");

	//精选模块
	Route::resource("/choiceness","Admin\ChoicenessController");
	//精选删除
	Route::get("/choicenessdel","Admin\ChoicenessController@del");
	//精选详情
	Route::post("/choicenessi/{id}","Admin\ChoicenessController@insert");

	Route::resource("/change","Admin\ChangeController");
	//后台轮播图删除
	Route::get("/changedel","Admin\ChangeController@del");
	//轮播图修改状态
	Route::get("/status","Admin\ChangeController@status");
	//后台广告
	Route::resource("/adminad","Admin\ADController");
	//公告模块
	Route::resource("/adminannource","Admin\AnnourceController");
	//公告批量删除
	Route::get("/annourcedel","Admin\AnnourceController@annourcedel");
	//友情链接
	Route::get("/adminlink","Admin\AdminlinkController@index");
	Route::get("/adminlinkdel","Admin\AdminlinkController@del");
	Route::get("/adminlinkchg","Admin\AdminlinkController@chg");
	//优惠
	Route::resource("/adminfavorable","Admin\FavorableController");
	//二手优品
	Route::resource("/adminsecondhand","Admin\SecondhandController");
	Route::resource("/adminsecondhand1","Admin\Secondhand1Controller");
});


//登录
Route::resource("/login","Home\LoginController");
//前台退出
Route::resource("/outlogin","Home\OutLoginController");

//前台注册
Route::resource("/register","Home\RegisterController");
//获取校验码
Route::get("/code","Home\RegisterController@codeget");
//检测输入的校验码
Route::get("/checkcode","Home\RegisterController@checkcode");
//检测手机号是否重复md
Route::get("/checkphone","Home\RegisterController@checkphone");

//前台首页
Route::resource("/","Home\HomeController");
//前台列表
Route::get("/list/{id}","Home\ListController@index");
//公告
Route::get("/annource","Home\HomeController@annource");
//前台详情页
Route::resource("/goods","Home\GoodsController");
//详情页数量添加
Route::get("/jia","Home\GoodsController@jia");
//详情页数量减小
Route::get("/jian","Home\GoodsController@jian");
//友情链接
Route::resource("/link",'Home\HomelinkController');
//购物车
Route::resource("/paycart","Home\PaycartController");
//购物车加
Route::get("/updates/{id}","Home\PaycartController@updates");
//减
Route::get("/updatee/{id}","Home\PaycartController@updatee");
//删除
Route::get("/cartdel/{id}","Home\PaycartController@cartdel");

//结算页
Route::resource('/address',"Home\AddressController");
//优惠
Route::get("/favorable","Home\HomeController@favorable");
//二手
Route::get("/secondhand","Home\HomeController@secondhand");
//支付宝
Route::get('/pay','Home\PayController@pay');
Route::get('/returnurl','Home\PayController@returnurl');



