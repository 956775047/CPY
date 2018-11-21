<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function pay(Request $request){
        // dd($id);
        // dd($request->all());
        $data=$request->all();
        $id=$data['id'];
        // dd($data);

        session(['addrid'=>$id]);
        pays(time(),'goods','0.01','goods');
    }
    public function returnurl(Request $request){
          // echo 111;
        // dd($request->input('time()'));
        $n=session('cart');
        $uid=session('id');
        foreach($n as $nu){
            $num['num']=$nu['num'];
            //商品id
            $gid=$nu['id'];
        }
        // dd($num);
        $id=session('addrid');
        $data=$request->all();

        // dd($data);
        $info=DB::table('address')->where('id','=',$id)->get();
        $inf=json_decode($info,true);
        foreach($inf as $row){
            $row['order_num']=$data['out_trade_no'];
            $row['total']=$data['total_fee'];
            $row['num']=$num['num'];
            $res[]=$row;
        }
       // dd($res);
       //orders
       //订单号
       $in['order_num']=$data['out_trade_no'];
       //user_id
       $in['user_id']=$uid;
       //address_id 收货地址id
       $in['address_id']=$id;
       //total 总价
       $in['total']=$data['total_fee'];
       //将数据插入订单表 获取最后一条id数据
       $oid=DB::table('orders')->insertGetId($in);
       $ord['order_id']=$oid;
       $ord['goods_id']=$gid;
       $ord['num']=$num['num'];
       $ord['status']=0;
       $ord['appraise']=0;
       $s=DB::table('order_goods')->insert($ord);
       // dd($s);

        return view('Home.Cart.pay',['res'=>$res]);
    }   

}
