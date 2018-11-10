<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Choiceness;
use Config;
//导入校验类
use App\Http\Requests\AdminChoiceinsert;
class ChoicenessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //列表
        // echo "this is index";
        // dd($request);
        //获取搜素关键字
        $k=$request->input("keywords");
        //获取列表数据
        $data=Choiceness::where("name",'like',"%".$k."%")->paginate(3);
        // dd($data);
        return view("Admin.Choiceness.index",['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //精选添加模块
        // echo "this is add";
        return view("Admin.Choiceness.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminChoiceinsert $request)
    {
         //判断是否具有文件上传
        if($request->hasFile("pic")){
            //随机上传图片名字
            $name=time()+rand(1,10000);
            //获取后缀
            $ext=$request->file("pic")->getClientOriginalExtension();
            //移动
            $request->file('pic')->move(Config::get('app.app_upload'),$name.".".$ext);
          
            $data=$request->except(['_token']);
            $data['_token']=str_random(50);
            $data['pic']=trim(Config::get("app.app_upload")."/".$name.".".$ext,".");
            // dd($data);
            //执行添加 66
            if(DB::table("choiceness")->insert($data)){
                return redirect("/choiceness")->with("success",'添加成功');
            }else{
                return redirect("/choiceness/create")->with("error","添加失败");
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
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        // echo  "this is edit";
        $data=DB::table("choiceness")->where("id",'=',$id)->first();
        // dd($data);
        return view("Admin.Choiceness.edit",["data"=>$data]);
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
        // echo "this";
        // dd($request->all());
        $info=$request->except(['_token','_method']);
        if(DB::table("choiceness")->where("id","=",$id)->update($info)){
            return redirect("/choiceness")->with("success",'修改成功');
        }else{
            return redirect("/choiceness/$id","修改失败");
        }
        // dd($info);
        
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
        echo "this destory";
    }
    
    public function del(Request $request){
         $id=$request->input('id');
       if(DB::table("choiceness")->where('id','=',$id)->delete()){
            echo 1;
       }else{
            echo 0;
       }
     }
}
