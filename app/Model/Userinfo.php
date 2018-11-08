<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    //定义与模型类相关联的数据表
    protected $table="user_info";
    //主键
    protected $primarykey="id";
    //设置是否需要自动维护时间戳
    public $timestamps = false;
    protected $fillable = ['name','username','password','sex','date','address','pic'];
}
