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
    public function store(Request $request)
    {
        // $name=$request->input('name');
        // $password=$request->input('password');
        $data=$request->except('confirm','_token');
        $data['_token']=str_random(50);
        $data['status']=1;
        $data['password']=Hash::make($data['password']);
       // dd($data);
        if(DB::table("user")->insert($data)){
                return redirect('/login')->with('success','注册成功');
         }else{
                return redirect('/register')->with('error','注册失败');
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
    public function reg(){
        //发送验证码的手机号
        $p=$_GET['phone'];
        require_once('lib/Ucpaas.class.php');

        //初始化必填
        //填写在开发者控制台首页上的Account Sid
        $options['accountsid']='b70ea9ba6c9bcef4e612f0219d88e902';
        //填写在开发者控制台首页上的Auth Token
        $options['token']='4abb781143f7fabc344b8fdc0cd73c5';

        //初始化 $options必填
        $ucpass = new Ucpaas($options);
        //载入ucpass类
        require_once('lib/Ucpaas.class.php');
        require_once('serverSid.php');

        //应用的ID，可在开发者控制台内的短信产品下查看
        $appid = "xxxxxxxxxxxxxxxxxxxxxxx"; 
        //短信模板ID
        $templateid = "xxx";    //可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID
        //发送的短信验证码
        $param = rand(1,10000); //多个参数使用英文逗号隔开（如：param=“a,b,c”），如为参数则留空
        //放置在cookie中 60秒后过期
        setcookie('fcode',$param,time()+60);
        //接收验证码的手机号
        $mobile = $p;
        $uid = "";

        //70字内（含70字）计一条，超过70字，按67字/条计费，超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。

        echo $ucpass->SendSms($appid,$templateid,$param,$mobile,$uid);
    }
    //验证码对比
    // public function code(){

    //     //获取code参数
    //     $code=isset($_GET['code'])?$_GET['code']:'';
    //     //输入验证吗和手机验证码对比
    //     if(isset($_COOKIE['fcode']) && !empty($code)){

    //             if($code=$_COOKIE['fcode']{

    //                     echo 1;
    //                     //一致
    //             }else{
    //                 echo 2;
    //                 //不一致

    //             }
    //     }elseif(empty($code){

    //             echo 3;
    //             //校验码空
    //     }else{
    //             echo  4;
    //             //校验码过期

    //     }
    // }
}
