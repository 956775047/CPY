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
    {   
        $id=session('id');
        $res=array();
        $data=session('cart');
        //获取收货地址
        $addr=DB::table('address')->where('u_id','=',$id)->get();

        // dd($addr);
        //总计
        $total="";
        $num="";
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
            if($row['d_price'] ==null){
                $row['d_price']=1;
            }
            $row['brank']=$info->brank;
            $row['model']=$info->model;
            $row['color']=$info->color;
            //购买数量
            $row['num']=$da['num'];
            $row['tot']=$info->price*$row['num'];
            $res[]=$row;
            $total+=$row['tot'];
            $num+=$row['num'];
            // dd($res);
        }
                
        return view('Home.Cart.confirm',['res'=>$res,'total'=>$total,'num'=>$num,'addr'=>$addr]);

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
       // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('Home.Cart.address');
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
 
   public function addresss(Request $request){
    // echo "111";
       // dd($request->session()->all());
       $id=session('id');
       // dd($id);
       $addr=$request->all();
       $addr['u_id']=$id;
       // dd($addr);
       // dd($addr);
        $info=DB::table('address')->insert($addr);
        // dd($info);
       
       return redirect('/address');
   }
 
}
