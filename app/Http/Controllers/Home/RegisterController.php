<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Home.Login.register");
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
    public function store(Request $request){
        //执行添加
          $data=$request->except(['_token','code']);
          $data['status']=1;
          $data['_token']=str_random(50);
          //dd($data);  
         $data['password']=Hash::make($data['password']);
         if(DB::table("user")->insert($data)){
           // echo "成功";
                return redirect('/login')->with('success','注册成功');
         }else{
                return redirect('/register')->with('error','注册失败');
                // echo "失败";
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
    //获取校验码
    public function codeget(Request $request){
        $pp=$request->input('pp');
        // echo $pp;exit;
        sendsphone($pp);
       // echo 'dd';
    }
    //检测输入的校验码
    public function checkcode(Request $request){
        //获取输入的校验码
        $code=$request->input("code");
        //判断
        if(isset($_COOKIE['scode']) && !empty($code)){
            //获取系统校验码
            $scode=$request->cookie('scode');
            //对比
            if($code==$scode){
                echo 1;//校验码ok
            }else{
                echo 2;//校验码有误
            }
        }elseif(empty($code)){
            echo 3;//校验码为空
        }else{
            echo 4;//校验码过期
        }
    }
    //检测手机号是否重复
    public function checkphone(Request $request){
        $p=$request->input('p');
        // echo $p;
       // 获取phone 一列值
        $phone=DB::table("user")->pluck('phone');
        //对象集合转换为数组
        foreach($phone as $key=>$v){
            $arrs[$key]=$v;
        }
        if(in_array($p,$arrs)){
            echo 1;//手机号重复
        }else if(empty($p)){
            echo 2;//手机号合法
        }else{
            echo 0;
        }


    }
}
