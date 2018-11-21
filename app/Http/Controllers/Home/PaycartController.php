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
        // dd($data);
        $m=0;
        $res=array();
        //得到数量
        foreach($data as $da){
            $s=$da['num'];
            $m+=$s;

        }
        //总计
        $total="";
        $num="";
        foreach($data as $da){
            
            $info=DB::table('goods')->join('cgoods_info','goods.id','=','cgoods_info.c_id')->where('goods.id','=',$da['id'])->first();
            $row['name']=$info->name;
            $row['pic']=$info->pic;
            $row['descr']=$info->descr;
            $row['num']=$info->num;
            $row['price']=$info->price;
            $row['d_price']=$info->d_price;
            if($row['d_price'] == null){
                $row['d_price']=1;
            }
            $row['brank']=$info->brank;
            $row['model']=$info->model;
            //商品的数量
            $row['num1']=$da['num'];
            $row['id']=$da['id'];
            $row['tot']=$info->price*$row['num1'];
            // dd($row['tot']);
            $total+=$row['tot'];
            $num+=$row['num1'];
            //分开算         无折扣价格              有折扣价格
            // $total=$info->price*$row['num1']+ceil($info->$price*$info->d_price*$row['num1']);
            // dd($total);
            $res[]=$row;        
        }

        // dd($total);
      
        return view("Home.Cart.cart",['res'=>$res,'total'=>$total,'num'=>$num]);
    }
    //加
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
    //减
    public function updatee($id){
        // echo $id;
        $goods=session('cart');
        foreach($goods as $key=>$value){
            //对比
            if($value['id']==$id){
                //数量减一
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
