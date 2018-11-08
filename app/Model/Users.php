<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //定义与模型关联的数据表
	protected $table="user";
	//主键
	protected $primaryKey="id";
	//设置是否需要自动维护时间戳 created_at updated_at
	public $timestamps =false;
	/**
	* 可以被批量赋值的属性。
	* *
	@var array
	*/
	protected $fillable = ['name','password','status','_token','phone'];
	//修改器的方法
	//对完成的数据(状态 status)做自动处理
	public function getStatusAttribute($value){
	$status=[1=>'禁用',2=>'激活'];
	return $status[$value];
	}

	//获取与用户相关联的详细信息
	public function info(){
		return $this->hasOne('App\Model\Userinfo','u_id');
	}
}
