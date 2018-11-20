<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use  App\Http\Requests\AdminUserinsert;
class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //加载模板 会员列表
        $k=$request->input('keywords');
        $data=DB::table("admin_users")->where('name','like',"%".$k."%")->paginate(3);
        return view("Admin.Adminuser.index",['data'=>$data,'request'=>$request->all()]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //加载模板
         return view("Admin.Adminuser.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserinsert $request)
    {
        //执行添加
          $data=$request->except(['_token']);
         // dd($data);  
         $data['password']=Hash::make($data['password']);
         if(DB::table("admin_users")->insert($data)){
                return redirect('/adminsuser')->with('success','添加成功');
         }else{
                return redirect('/adminsuser/create')->with('error','添加失败');
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
        $user=DB::table("admin_users")->where("id",'=',$id)->first();
        return view("Admin.Adminuser.edit",['user'=>$user]);
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
      //执行修改
       $data=$request->except(['_token','_method']);
        $data['password']=Hash::make($data['password']);
       if(DB::table("admin_users")->where("id",'=',$id)->update($data)){
            return redirect("/adminsuser")->with('success',"修改成功");
        }else{
            return redirect("/adminsuser/{id}/edit")->with('error',"修改失败");
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
        if(DB::table('admin_users')->where("id","=",$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }

    }

}
