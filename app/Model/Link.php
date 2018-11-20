<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //定义与模型类的数据表
    protected $table="link";
    //主键
    protected $primaryKey="id";
    protected $fillable = ['name','link_url','descr','status','tel'];
    //设置是否需要自动维护时间戳
    public $timestamps =false;
    //对完成的数据状态做自动处理
    public function getStatusAttribute($value){
    	$status=[1=>'未通过',2=>'已通过'];
    	return $status[$value];
    }
}
