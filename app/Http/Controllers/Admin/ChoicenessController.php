<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Goods;
use Config;
//导入校验类
use App\Http\Requests\AdminChoiceinsert;
use App\Http\Requests\AddChoiceinsert;
class ChoicenessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //列表
        // echo "this is index";
        // dd($request);
        //获取搜素关键字
        $k=$request->input("keywords");
        //获取列表数据
        $data=Goods::where("name",'like',"%".$k."%")->where('cate_id','=','28')->paginate(3);
         // dd($data);
        return view("Admin.Choiceness.index",['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        //精选添加模块
        // echo "this is add";
        return view("Admin.Choiceness.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminChoiceinsert $request)
    {   
        // dd($request->all());
         //判断是否具有文件上传
        if($request->hasFile("pic")){
            //随机上传图片名字
            $name=time()+rand(1,10000);
            //获取后缀
            $ext=$request->file("pic")->getClientOriginalExtension();
            //移动
            $request->file('pic')->move(Config::get('app.app_upload'),$name.".".$ext);
          
            $data=$request->except(['_token']);
            $data['cate_id']=28;
            // $data['_token']=str_random(50);
            $data['pic']=trim(Config::get("app.app_upload")."/".$name.".".$ext,".");
            // dd($data);
            //执行添加 
            if(DB::table("goods")->insert($data)){
                return redirect("/choiceness")->with("success",'添加成功');
            }else{
                return redirect("/choiceness/create")->with("error","添加失败");
            }
        }
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
        $data=DB::table('goods')->join('cgoods_info','goods.id','=','cgoods_info.c_id')->where("goods.id",'=',$id)->first();
        // dd($data);
        $da=json_encode($data);
        $dt=json_decode($da,true);
        $c_id=$dt['c_id'];
        // dd($c_id);
         if($c_id==$id && $data != null){
                $info=DB::table("cgoods_info")->join('goods','cgoods_info.c_id','=','goods.id')->where("goods.id",'=',$id)->first();
                // dd($info);
                return view("Admin.Choiceness.indexs",['info'=>$info]);
             }else{
                $info=DB::table("goods")->where("id",'=',$id)->first();
                // dd($info);
                return view("Admin.Choiceness.addindexs",['info'=>$info]);
             }          

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        // echo  "this is edit";
        $data=DB::table("goods")->where("id",'=',$id)->first();
        // dd($data);
        return view("Admin.Choiceness.edit",["data"=>$data]);
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
        // echo "this";
        // dd($request->all());
        $info=$request->except(['_token','_method']);
        if(DB::table("goods")->where("id","=",$id)->update($info)){
            // return redirect("/choiceness")->with("success",'修改成功');
            echo 1;
        }else{
            // return redirect("/choiceness/$id","修改失败");
            echo 2;
        }
        // dd($info);
        
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
        echo "this destory";
    }
    
    public function del(Request $request){
         $id=$request->input('id');
         $info=DB::table("goods")->where('id','=',$id)->first();
         // dd($info);
       if(DB::table("goods")->where('id','=',$id)->delete()){
            DB::table("cgoods_info")->where("c_id",'=',$id)->delete();
            unlink(".".$info->pic);
            echo 1;
       }else{
            echo 0;
       }
     }

     

      public function insert(AddChoiceinsert $request){
        // dd($request->all());
         //$a=($request->input('c_id'));
        // dd($a);
        if(!empty($request->input('c_id'))){
            $c_id=$request->input('c_id');
            $info=$request->except(['_token','name','phone','news','price','pic','d_price','id']);
            //dd($info);
            $aa=DB::table('cgoods_info')->where("c_id",'=',$c_id)->update($info);
            //dd($aa);
            if($aa==1){
                return redirect("/choiceness")->with("success",'修改成功');
                // echo "成功";
            }else{
                return redirect("/choiceness/$c_id")->with("error",'修改失败');
                //echo "失败";
            }
        }else{
            $data=$request->all();
            // dd($data);
            $id=$request->input('id');
            // dd($id);
            
            $data=$request->except(['name','_token','id']);
            $data['c_id']=$id;
            // dd($data);
            if(DB::table('cgoods_info')->insert($data)){
                return redirect('/choiceness')->with("success",'添加成功');
                // echo "成功";
            }
        }
      }
}
