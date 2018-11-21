<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Adminorder;
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
         // return Adminorder::getStatus();
         $k=$request->input('keywords');
        //订单 订单详情 address表三个表
        // $data=DB::table("orders")->join("order_goods","orders.id","=","order_goods.order_id")->join("address","orders.user_id",'=',"address.id")->join("goods","order_goods.goods_id",'=',"goods.id")->select("goods.name as gname","address.name as name","orders.order_num as order_num","orders.total as total","order_goods.status as status","address.address as address","orders.id as id")->where('address.name','like',"%".$k."%")->paginate(1);
         $data=DB::table("orders")->join("order_goods","orders.id","=","order_goods.order_id")->join("address","orders.user_id",'=',"address.u_id")->join("goods","order_goods.goods_id",'=',"goods.id")->select("goods.name as gname","address.name as name","orders.order_num as order_num","orders.total as total","order_goods.status as status","address.address as address","orders.id as oid","order_goods.goods_id")->where('address.name','like',"%".$k."%")->paginate(5);
        // dd($data);   
        return view("Admin.Order.index",['data'=>$data,'request'=>$request->all()]);
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
    public function details($goods_id){
        // dd($goods_id);
        $data=DB::table("goods")->where("id","=",$goods_id)->get();
        // dd($data);
        return view("Admin.Order.details",['data'=>$data]);
    }

    //Ajax订单状态修改
    public function edits(Request $request){
       $id=$request->input('id');
       // echo $id;exit;
       $data=DB::table("order_goods")->where("order_id",'=',$id)->get();
       // dd($data);
       $data1=json_decode($data,true);
        // dd($data1);
         // echo $data1[0]['status'];
       
       // echo $data;
       if($data1[0]['status']==0){
            echo 1;
            $data1[0]['status']=1;
            $in['status']=$data1[0]['status'];
            DB::table("order_goods")->where("order_id",'=',$id)->update($in);
       }
    }
}
