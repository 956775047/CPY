<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Link;
class AdminlinkController extends Controller
{
    //友情链接
    public function index(Request $request){
    	//获取关键字
    	$k=$request->input('keywords');

    	$data=DB::table("link")->where("name",'like',"%".$k."%")->paginate(5);
    	// dd($data);
    	return view("Admin.Link.index",['data'=>$data,'request'=>$request->all()]);
    }

    //删除友情链接
    public function del(Request $request){
    	$id=$request->input('id');
    	if(DB::table("link")->where("id",'=',$id)->delete()){
    		echo 1;
    	}else{
    		echo 2;
    	}
    }
    //友情链接申请
    public function chg(Request $request){
        // echo 111;
        $id=$request->input('id');
        // echo $id;
        $stu=$request->input('status');
        if($stu=='未通过'){
            $stu='已通过';
        }else{
            $stu='未通过';
        }
        // echo $stu;
        if(DB::table('link')->where("id",'=',$id)->update(['status'=>$stu])){
             return response()->json(['msg'=>1,'stu'=>$stu]);
        }else{
             return response()->json(['msg'=>2]);
        }
    }
}
