<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Change extends Model{

    //与模型关联的数据表
    protected $table = 'change';
    //该模型是否被自动维护时间戳
    public $timestamps = false;
    //可以被批量赋值的属性
   	protected $ﬁllable  = ['pic','status'];

   	public function getStatusAttribute($value){
 	$status=[1=>"开启",2=>"禁用"];
    return $status[$value];
	} 

}
