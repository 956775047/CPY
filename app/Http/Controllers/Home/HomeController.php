<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //公共方法
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
    {   //精选列表
        $data=DB::table('goods')->join("cate",'goods.cate_id','=','cate.id')->select(
            'goods.id as id','goods.name as name','goods.cate_id as cid','goods.pic as pic','goods.descr as descr','goods.num as num','goods.price as price','goods.news as news','goods.d_price as d_price','goods.brank as brank'
        )->where('goods.cate_id','=','28')->get();

        // 轮播图
        $info=DB::table("change")->where("status",'=',1)->get();

        // 公告
        $dat=DB::table('articles')->get();
        //获取分类方法
        $cate=$this->getcatesbypid(0);
        //商品信息上
        $good=DB::table("goods")->join("cate","goods.cate_id","=","cate.id")->select(
            'goods.id as id','goods.name as name','goods.cate_id as cate_id','goods.pic as pic','goods.descr as descr','goods.num as num','goods.price as price','cate.id as cid','cate.name as cname'
            )->where('goods.cate_id','=','24')->get();
        //商品信息下
        $goods=DB::table("goods")->join("cate","goods.cate_id","=","cate.id")->select(
            'goods.id as id','goods.name as name','goods.cate_id as cate_id','goods.pic as pic','goods.descr as descr','goods.num as num','goods.price as price','cate.id as cid','cate.name as cname'
            )->where('goods.cate_id','=','21')->get();
      
        //广告
        $ad=DB::table("AD")->get();
        //引入前台页面
        return view("Home.Homes.index",['data'=>$data,'info'=>$info,'dat'=>$dat,'goods'=>$goods,'good'=>$good,'ad'=>$ad,'cate'=>$cate]);
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
        //
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
    //测试
    public function list(){

        return view("Home.Cart.confirm");
    }

    //公告
     public function annource(){
        $data=DB::table('articles')->get();
        // dd($data);

        return view("Home.Annource.annource",['data'=>$data]);
    }
    //优惠
    public function favorable(){ 
         //获取分类方法
        $cate=$this->getcatesbypid(0);
        $daa=DB::table('goods')->where('cate_id','=','40')->get(); 
        return view("Home.Favorable.favorable",['daa'=>$daa,'cate'=>$cate]); 
    }

    //二手
    public function secondhand(){
         $cate=$this->getcatesbypid(0);
        $data=DB::table('goods')->where('cate_id','=','41')->get();
        $data1=DB::table('goods')->where('cate_id','=','41')->get();
        // dd($data1);
        


        return view("Home.Secondhand.secondhand",['data'=>$data,'data1'=>$data1,'cate'=>$cate]);
    }
}
