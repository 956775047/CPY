<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\AdminCateRequest;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $k=$request->input('keywords');
        //连贯方法
        $cate=DB::table("cate")->select(DB::raw('*,concat(path,",",id)as paths'))->orderBy('paths')->where('name','like',"%".$k."%")->paginate(10);

        foreach($cate as $key=>$value){
            $path=$value->path;
            $arr=explode(",",$path);
            //获取逗号个数
            $len=count($arr)-1;
            $cate[$key]->name=str_repeat("--|",$len).$value->name;
        }
        //加载分类模板
        return view("Admin.Cate.index",['cate'=>$cate,'request'=>$request->all()]);
    }

    public static function getCates(){
         $cate=DB::table("cate")->select(DB::raw('*,concat(path,",",id)as paths'))->orderBy('paths')->get();

        //添加分隔符
        foreach($cate as $key=>$value){
            $path=$value->path;
            $arr=explode(",",$path);
            //获取逗号个数
            $len=count($arr)-1;
            //加分隔符
            $cate[$key]->name=str_repeat("--|",$len).$value->name;
          }  

          return $cate;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate=self::getCates();
        // dd($cate);
        return view("Admin.Cate.add",["cate"=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCateRequest $request)
    {
        $data=$request->only(['name','pid']);
        $pid=$request->input("pid");
        if($pid==0){
            //添加的是顶级
            $data['path']=0;
        }else{
            //添加的子集  获取父类信息
            $info=DB::table("cate")->where("id","=",$pid)->first();
            $data['path']=$info->path.",".$info->id;
        }

        if(DB::table("cate")->insert($data)){
            return redirect("/admincate")->with("success","添加成功");
        }else{
            return redirect("/admincate")->with("error","添加失败");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $data=$request->only(['id','pid']);
        // $data=DB::table("cate")->where("pid","=",$id)->first();
        // // $pid=$request->input("pid");
        // dd($data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取要修改的数据
        $info=DB::table("cate")->where("id","=",$id)->first();
        //加载模板
        return view("Admin.Cate.edit",["info"=>$info]);
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
        $data=$request->only(['name']);
        if(DB::table("cate")->where("id","=",$id)->update($data)){
            return redirect("/admincate")->with("success","修改成功");
        }else{
            return redirect("/admincate")->with("error","修改失败");
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
         $num=DB::table("cate")->where("pid","=",$id)->count();
        if($num>0){
            return back()->with("error","请先干掉子分类");
        }

    //删掉当前类别
    if(DB::table("cate")->where("id","=",$id)->delete()){
            return redirect("/admincate")->with("success","删除成功");
        }else{
            return redirect("/admincate")->with("error","删除失败");
        }

    }


    //Ajax删除
    public function del(Request $request){
       $id=$request->input('id');
   
      $num=DB::table("cate")->where("pid","=",$id)->count();
        if($num>0){
            return back()->with("error","请先干掉子分类");
        }

       
       if(DB::table("cate")->where('id','=',$id)->delete()){
           echo 1;
       }else{
           echo 0;
       }
    }

}
