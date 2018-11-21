<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $name = session('sname'); 
         $id =session('id');
         // dd($id);
         if($name || $id){
            // dd($id);
        $k=$request->input('keywords');
        $data=DB::table("order_goods")->join("orders",'order_goods.order_id','=','orders.id')->join("goods","order_goods.goods_id",'=',"goods.id")->select("orders.id as id","orders.order_num as order_num","order_goods.appraise as appraise","orders.user_id as user_id","orders.address_id as address_id","orders.total as total","order_goods.id as gid","order_goods.order_id as order_id","order_goods.goods_id as goods_id","order_goods.num as num","goods.id as sid","goods.name as name","goods.descr as descr","goods.pic","order_goods.status as status","goods.price as price")->where('orders.order_num','like',"%".$k."%")->where('orders.user_id','=',$id)->where('goods.name','like',"%".$k."%")->get();
        // dd($data);
        // $data=json_decode($da,true);
        // dd($data);
        return view("Home.Order.index",['data'=>$data]); 
    }else{
            return redirect("/login");
        } 
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
    //提交评价
    public function store()
    {
        // echo '111';
        // dd($request->input('descr'));
        // dd($request);
        


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
    //待收货页面
    public function shouhuo(){
        $data=DB::table("order_goods")->join("orders",'order_goods.order_id','=','orders.id')->join("goods","order_goods.goods_id",'=',"goods.id")->select("orders.id as id","orders.order_num as order_num","orders.user_id as user_id","orders.address_id as address_id","orders.total as total","order_goods.appraise as appraise","order_goods.id as gid","order_goods.order_id as order_id","order_goods.goods_id as goods_id","order_goods.num as num","goods.id as sid","goods.name as name","goods.descr as descr","goods.pic","order_goods.status as status","goods.price as price")->where("status",'=','1')->get();
        return view("Home.Order.address",['data'=>$data]);
    }
    public function pingjia($sid){
        // dd($sid);
        $info=DB::table("order_goods")->where('goods_id','=',$sid)->get();
        // dd($info);
        // dd($info[0]->appraise);
        if($info[0]->appraise==0 && $info[0]->status==3){
        $data=DB::table("goods")->where("id",'=',$sid)->get();
        return view("Home.Order.pingjia",['data'=>$data]);
    }else{
        return back();
    }
    }

    public function tjpj(Request $request, $id){
        // dd($id);
        $data=DB::table("goods")->where("id",'=',$id)->get();
        // dd($data);
        // dd($request->input('descr'));
         $descr=$request->input('descr');
         $name = session('name'); 
         $da['name']=$name;
         $da['descr']=$descr;
        if(DB::table("assess")->insert($da));

        $info=DB::table("order_goods")->where("goods_id",'=',$id)->get();
        $appraise=$info[0]->appraise=1;
        $in['appraise']=$appraise;
        // $info=json_decode($info,true);
        DB::table("order_goods")->where("goods_id",'=',$id)->update($in);
        // dd($info);
        return view("Home.Order.pjcg",['data'=>$data]);
    }
    public function homeedit(Request $request){
        $id=$request->input('id');
       // echo $id;exit;
       $data=DB::table("order_goods")->where("order_id",'=',$id)->get();
       $data1=json_decode($data,true);
        // dd($data1);
        // echo $data1[0]['status'];
       if($data1[0]['status']==1){
            echo 1;
            $data1[0]['status']=3;
            $in['status']=$data1[0]['status'];
            DB::table("order_goods")->where("order_id",'=',$id)->update($in);
       }
    }
    public function dpj(){
        $data=DB::table("order_goods")->join("orders",'order_goods.order_id','=','orders.id')->join("goods","order_goods.goods_id",'=',"goods.id")->select("orders.id as id","orders.order_num as order_num","orders.user_id as user_id","orders.address_id as address_id","orders.total as total","order_goods.appraise as appraise","order_goods.id as gid","order_goods.order_id as order_id","order_goods.goods_id as goods_id","order_goods.num as num","goods.id as sid","goods.name as name","goods.descr as descr","goods.pic","order_goods.status as status","goods.price as price")->where("appraise",'=',0)->where("status",'=','3')->get();
        // dd($data);
        return view("Home.Order.dpj",['data'=>$data]);
    }
}
