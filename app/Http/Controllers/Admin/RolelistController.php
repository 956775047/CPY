<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use  App\Http\Requests\AdminRolelist;
class RolelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //加载模板
        $role=DB::table("role")->get();
       
        return view("Admin.Rolelist.index",['role'=>$role]);
    }
    public function auth($id){
        //获取当前操作信息
        $role=DB::table("role")->where("id",'=',$id)->first();
        //获取所有权限信息
        $node=DB::table("node")->get();
        //获取当前角色的权限信息
        $data=DB::table("role_node")->where("rid",'=',$id)->get();
        if(count($data)){
            foreach($data as $v){
                $nid[]=$v->nid;
            }
        
        return view("Admin.Rolelist.auth",['role'=>$role,'node'=>$node,'nid'=>$nid]);
            }else{
                return view("Admin.Rolelist.auth",['role'=>$role,'node'=>$node,'nid'=>array()]);

            }
    }
    //保存权限
    public function saveauth(Request $request){

        //获取角色id
        $rid=$request->input('rid');
        //获取分配权限id
        $nid=$_POST['nid'];
        //删除当前角色已有的权限信息
        DB::table("role_node")->where("rid",'=',$rid)->delete();
        foreach($nid as $key=>$value){
                $data['rid']=$rid;
                $data['nid']=$value;
                DB::table("role_node")->insert($data);

        }
        return redirect("/admin_userss")->with('success','权限分配成功');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("Admin.Rolelist.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRolelist $request)
    {
         $data=$request->except(['_token']);
          $data['status']=1;
          $data['remark']=1;

         if(DB::table("role")->insert($data)){
                return redirect('/admin_userss')->with('success','添加成功');
         }else{
                return redirect('/admin_userss/create')->with('error','添加失败');
         }
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
       // 引入修改页面
        $user=DB::table("role")->where("id",'=',$id)->first();
        return view("Admin.Rolelist.edit",['user'=>$user]);
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
        // dd($request);
        $data=$request->except(['_token','_method']);
        // $data['password']=Hash::make($data['password']);
       if(DB::table("role")->where("id",'=',$id)->update($data)){
            return redirect("/admin_userss")->with('success',"修改成功");
        }else{
            return redirect("/admin_userss")->with('error',"请修改数据");
        }
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
    public function del(Request $request){
        $id=$request->input('id');  
       // echo $id;
        if(DB::table('role')->where("id","=",$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }

    }
}
