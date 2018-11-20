<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //引入登录页面
        return view("Home.Login.login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //登录操作
        $phone=$request->input("phone");
        // $name=$request->input("phone");
        // dd($request->all());
        $password=$request->input("password");
        $info=DB::table("user")->where('phone','=',$phone)->orwhere("name",'=',$phone)->first();
        // dd($phone);
        // if($phone){
        //     $user=DB::table("user")->where("name",'=',$phone)->get();
        //     $users=json_decode("$user",true);
        //     dd($users[0]['name']);
        // }
        // session(['name'=>$info]);
        // dd($info);
         // $name=$info->name;
        // $in=json_encode($info);
        // $a=json_decode($in);
        // dd($a->name);
         //dd($info);
        if($info){
                if(Hash::check($password,$info->password)){
                        session(['phone'=>$phone]);
                        session(['name'=>$phone]);
                        return redirect("/")->with('success','登录成功');
                }else{
                        return back()->with('error','密码有误');

                }
        }else{
           return back()->with('error','用户名错误');
           echo "用户名错误";

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 22;
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
}
