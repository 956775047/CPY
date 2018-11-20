<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   $res=array();
        $data=session('cart');
        $row['tot']="";
        $row['tot1']="";
        // dd($data);
        foreach($data as $da){
            $info=DB::table("goods")->join('cgoods_info','goods.id','=','cgoods_info.c_id')->where('goods.id','=',$da['id'])->first();
            // dd($info);
            $row['id']=$da['id'];
            $row['name']=$info->name;
            //市场价
            $row['price']=$info->price;
            $row['pic']=$info->pic;
            $row['descr']=$info->descr;
            $row['d_price']=$info->d_price;
            $row['new_price']=$info->new_price;
            $row['brank']=$info->brank;
            $row['model']=$info->model;
            $row['color']=$info->color;
            //购买数量
            $row['num']=$da['num'];
            $row['tot']+=ceil($da['num']*$info->price*$info->d_price*0.1)+$info->price*$da['num'];
            $row['tot1']+=$da['num']*$info->new_price;
            $res[]=$row;
            // dd($res);
        }

        return view('Home.Cart.confirm',['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        echo "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
 

}
