<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use DB;
//导入要调用的模型类
use App\Model\Users;
//导入校验类
use App\Http\Requests\UserInsert;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // dd($request);
        //获取搜素关键字
        $k=$request->input("keywords");
        // dd($k);
        //获取列表数据
        $data=Users::where("name",'like',"%".$k."%")->paginate(3);
        // dd($data);
        //加载模板
        return view("Admin.User.index",['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
       
        return view("Admin.User.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserInsert $request)
    {
        //处理添加信息
        //接收提交的信息 并将repassword _token去掉
        // dd($request->all());
        $data=$request->except(['repassword','_token']);
        //对密码进行加密
        $data['password']=Hash::make($data['password']);
        $data['status']=1;
        //str_random() 获取随机数
        $data['_token']=str_random(50);
        // dd($data);
        if(DB::table("user")->insert($data)){
            return redirect("/adminuser")->with("success",'添加成功');
        }else{
            return redirect("/adminuser/create")->with("error","添加失败");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //会员详情
    public function show($id)
    {
        //加载模板
        //根据传递过来的id查找对应的值
        // echo $id;exit;
        $data=Users::find($id)->info;
        // dd($data);
        return view("Admin.User.user",['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    //Ajax删除
    public function del(Request $request){
       $id=$request->input('id');
       if(DB::table("user")->where('id','=',$id)->delete()){
            echo 1;
       }else{
           echo 0;
       }
    }
}
