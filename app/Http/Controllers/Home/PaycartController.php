<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PaycartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $data=session('cart');
        $m=0;
        $res=array();
        
        foreach($data as $da){
            $s=$da['num'];
            $m+=$s;
        }

        $tot="";
        $nu="";
        foreach($data as $da){
            
            $info=DB::table('goods')->join('cgoods_info','goods.id','=','cgoods_info.c_id')->where('goods.id','=',$da['id'])->first();
            $row['name']=$info->name;
            $row['pic']=$info->pic;
            $row['descr']=$info->descr;
            $row['num']=$info->num;
            $row['price']=$info->price;
            $row['d_price']=$info->d_price;
            $row['brank']=$info->brank;
            $row['new_price']=$info->new_price;
            $row['model']=$info->model;
            $row['num1']=$da['num'];
            $row['id']=$da['id'];
            $row['tot1']=$info->new_price*$row['num1'];
            $res[]=$row;        
        }
        // dd($res);
        foreach($res as $val){
                $price=$val['price'];
                $d_price=$val['d_price'];
                $new_price=$val['new_price'];
                $num=$val['num1'];
                // dd($num);
                $tot+=$price*$num;
                // dd($tot);
                $nu+=$val['num1'];
            }
            if($tot != null && $tot !=0){
                    $tot+=ceil($price*$d_price*$num*0.1);
                }else{
                    $tot+=$new_price*$num;
                }
                // dd($tot);
        return view("Home.Cart.cart",['res'=>$res,'tot'=>$tot,'nu'=>$nu]);
    }

    public function updates($id){
        // echo $id;
        $goods=session('cart');
        foreach($goods as $key=>$value){
            //对比
            if($value['id']==$id){
                //数量加一
                $s=$value['num']+1;
                $goods[$key]['num']=$s;
                 $info=DB::table('goods')->join('cgoods_info','goods.id','=','cgoods_info.c_id')->where('goods.id','=',$id)->first();
                 if($goods[$key]['num']>$info->num){
                    $goods[$key]['num']=$info->num;
                 }
            }
        }
        session(['cart'=>$goods]);
        return redirect('/paycart');
    }

    public function updatee($id){
        // echo $id;
        $goods=session('cart');
        foreach($goods as $key=>$value){
            //对比
            if($value['id']==$id){
                //数量加一
                $s=$value['num']-1;
                $goods[$key]['num']=$s;
                 $info=DB::table('goods')->join('cgoods_info','goods.id','=','cgoods_info.c_id')->where('goods.id','=',$id)->first();
                 if($goods[$key]['num']<=1){
                    $goods[$key]['num']=1;
                 }
            }
        }
        session(['cart'=>$goods]);
        return redirect('/paycart');
    }

    public function cartdel($id){
        // echo $id;
         $goods=session('cart');
        foreach($goods as $key=>$value){
            //对比
            if($value['id']==$id){
               //删除
               unset($goods[$key]);
            }
        }
        session(['cart'=>$goods]);
        return redirect('/paycart');
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

    public function checkExists($id){
        //获取session数据
        $goods=session('cart');
        if(empty($goods)) return false;
        foreach($goods as $value){
            if($value['id']==$id){
                return true;
            }
        }
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
        if(!$this->checkExists($data['id'])){
            $request->session()->push('cart',$data);
        }
        // dd($data);
        // 将数据存储session中
      
        
        return redirect('/paycart');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {   
       echo  "this";
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
