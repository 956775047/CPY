<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;
use App\Model\Change;
use App\Http\Requests\Changeinsert;
class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Change::get();
        //dd($data);
        return view("Admin.Change.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("Admin.Change.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Changeinsert $request)
    {
        // dd($request);
        $data=$request->except('_token');
        $data['status']=1;
       // dd($data['pic']);
         //判断是否具有文件上传
        // dd($request->hasFile('pic'));
        if($request->hasFile("pic")){
            //随机上传图片名字
            $name=time()+rand(1,10000);
            //获取后缀
            $ext=$request->file("pic")->getClientOriginalExtension();
            //移动
            $request->file('pic')->move(Config::get('app.app_upload'),$name.".".$ext);
            //封装data
            $data['pic']=trim(Config::get("app.app_upload")."/".$name.".".$ext,".");
            //dd($data['pic']);
            //执行添加 666
            if(DB::table("change")->insert($data)){
                return redirect("/change")->with("success","添加成功");
            }
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
        $user=DB::table("change")->where("id",'=',$id)->first();
        // dd($user);
        return view("Admin.Change.edit",['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Changeinsert $request, $id)
    {
       $data=$request->except('_token','_method');
        //dd($data);
        if($data['status']=='开启'){
                    $data['status']=1;

        }
        if($data['status']=='禁用'){
                    $data['status']=2;

        }
        //dd($data);
         //判断是否具有文件上传
        
        // dd($request->hasFile('pic'));
        if($request->hasFile("pic")){
            //随机上传图片名字
            $name=time()+rand(1,10000);
            //获取后缀
            $ext=$request->file("pic")->getClientOriginalExtension();
            //移动
            $request->file('pic')->move(Config::get('app.app_upload'),$name.".".$ext);
            //封装data
            $data['pic']=trim(Config::get("app.app_upload")."/".$name.".".$ext,".");
            //dd($data['pic']);
            //执行添加 666
            if(DB::table("change")->where('id','=',$id)->update($data)){ 
                return redirect("/change")->with("success","修改成功");
            }else{
                return redirect("/change")->with("error",'修改失败');

            }
            
            
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
        echo $id;
        if(DB::table('change')->where("id","=",$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }

    }
    public function status(Request $request){
       // $id=$request->input('id');
        echo ddd;

    }
}
