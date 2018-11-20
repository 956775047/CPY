<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class AdminusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // echo 1;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
        //分配角色
    public function rolelist($id){
         //获取用户信息
            $info=DB::table("admin_users")->where("id","=",$id)->first();
            //获取所有角色
            $role=DB::table("role")->get();
            //获取当前用户的角色信息
            $data=DB::table("user_role")->where("uid",'=',$id)->get();
            //判断
            if(count($data)){
                    foreach($data as $v){
                        $rids[]=$v->rid;

                    }
                   return view("Admin.Adminuser.rolelist",['info'=>$info,'role'=>$role,'rids'=>$rids]);
            }else{
                return view("Admin.Adminuser.rolelist",['info'=>$info,'role'=>$role,'rids'=>array()]);

            }
            //dd($info);
           
    }
    //保存角色
    public function saverole(Request $request){
        //user_role 数据表中插入数据 uid rid
        $uid=$request->input('uid');
        $rid=$_POST['rid'];
       // dd($rid);
        //删除当前用户的角色信息
        DB::table("user_role")->where("uid",'=',$uid)->delete();
        foreach($rid as $key=>$value){
                //封装需要插入的数据
                $data['uid']=$uid;
                $data['rid']=$value;
                DB::table("user_role")->insert($data);

        }
        return redirect("/adminsuser")->with('success','角色修改成功');

    }

}
