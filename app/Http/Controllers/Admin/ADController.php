<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;
class ADController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table("ad")->get();
        return view("Admin.AD.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.AD.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except('_token');
         // dd($data);
        //判断是否具有文件上传
        if($request->hasFile("pic")){
            //随机上传图片名字
            $name=time()+rand(1,10000);
            //获取后缀
            $ext=$request->file("pic")->getClientOriginalExtension();
            //移动
            $request->file('pic')->move(Config::get('app.app_upload'),$name.".".$ext);
            //封装data
            $data['pic']=trim(Config::get("app.app_upload")."/".$name.".".$ext,".");
            // dd($data);
            //执行添加 666
            if(DB::table("ad")->insert($data)){
                return redirect("/adminad")->with("success","添加成功");
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
        $info=DB::table("ad")->where("id","=",$id)->first();
        return view("Admin.AD.edit",['info'=>$info]);
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
         $data=$request->only(['name','pic']);
        // dd($data);
        $info=DB::table("ad")->where("id",'=',$id)->first();
        // dd($info);
        if($request->hasFile('pic')){
            $name=time()+rand(1,10000);
            $ext=$request->file('pic')->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file("pic")->move(Config::get('app.app_upload'),$name.".".$ext);
            //初始化
            $data['pic']=trim(Config::get('app.app_upload').'/'.$name.".".$ext,'.');
            if(DB::table("ad")->where("id","=",$id)->update($data)){
                unlink(".".$info->pic);
                return redirect("/adminad")->with('success','修改成功');
              }
            }else{
                if(DB::table("ad")->where("id","=",$id)->update($data)){
                unlink(".".$info->pic);
                return redirect("/adminad")->with('success','修改成功');
            }else{
                return redirect("/adminad")->with('error','修改失败,没有做改变');
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
        // echo $id;exit;
        $info=DB::table("ad")->where("id","=",$id)->first();
        //获取pic
        $pic=$info->pic;
        // dd($pic);exit;
        //执行删除
        if(DB::table("ad")->where("id","=",$id)->delete()){
            //删除图片
            unlink(".".$pic);
            // dd($pic);exit;
            return redirect("/adminad")->with("success","删除成功");
        }
    }
}
