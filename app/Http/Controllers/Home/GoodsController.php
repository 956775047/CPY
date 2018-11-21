<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getcatesbypid($pid){
        $res=DB::table("cate")->where("pid","=",$pid)->get();
         $data=[];
        foreach($res as $key=>$value){
            $value->suv=$this->getcatesbypid($value->id);
            $data[]=$value;
        }
         return $data;
    }
    public function index(Request $request)
    {   
        echo "this is goods";
        // dd($request);
        //加载详情模板
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "this is create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "this is store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        //where id
        // dd($id);
        $info=DB::table("goods")->join('cgoods_info','goods.id','=','cgoods_info.c_id')->select(
                'goods.id as id','goods.name as name','goods.cate_id as cid','goods.pic as pic','goods.descr as descr','goods.num as num','goods.price as price','goods.news as news','goods.d_price as d_price','goods.brank as brank','goods.new_price as new_price','cgoods_info.model as model','cgoods_info.time','cgoods_info.style as style','cgoods_info.color as color','cgoods_info.camera as camera','cgoods_info.store as store','cgoods_info.cpu as cpu','cgoods_info.size as size','cgoods_info.radio as radio','cgoods_info.list as list'
        )->where("goods.id",'=',$id)->get();
       // dd($info);
        // $info=DB::table('goods')->where('id','=',$id)->get()
        //获取分类方法
        $cate=$this->getcatesbypid(0);
        $dad=DB::table("goods")->paginate(3);
        return view("Home.list.goods",['info'=>$info,'dad'=>$dad,'cate'=>$cate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "this is edit";
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
        echo "this is update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function jia(Request $request){
        $j=$request->input('num');
        $id=$request->input('id');
        // $id=50;
        // dd($id);
        $j+=1;
        // echo $j;
        $data=DB::table("goods")->where('id','=',$id)->first();
        $num=$data->num;
        // dd($num);
        if($j >= $num){
            $j=$num;
        }
        echo $j;
            }

    public function jian(Request $request){
        $l=$request->input('num1');
        // echo $l;
        $id=$request->input("id");
        // echo $id;
        $l-=1;
        // dd($num);
        if($l <= 1){
            $l=1;
        }
        echo $l;
    }
}
