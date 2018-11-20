<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
class Secondhand1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据
        $data1=DB::table("goods")->where('cate_id','=','41')->get();
        //加载模板
        return view("Admin.Secondhand1.index",['data1'=>$data1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view("Admin.Secondhand1.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // $data=$request->all();
            // dd($data);
           
    $data=$request->except('_token');

     if($request->hasFile("pic")){
              //初始化名字 获取后缀
              $name=time()+rand(1,10000);
              $ext=$request->file("pic")->getClientOriginalExtension();
              // dd($ext);
              //移动到指定的目录下
             $request->file("pic")->move(Config::get('app.app_upload'),$name.".".$ext);
              // dd($a);
              // 初始化$data
              $data['pic']=trim(Config::get('app.app_upload').'/'.$name.".".$ext,'.');
              // dd($data);
          
         }
         if(DB::table("goods")->insert($data)){
            
          
         
            return redirect("/adminsecondhand1")->with('success','添加成功');
        }else{
            return redirect("/adminsecondhand1/create")->with('error','添加失败');
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
       
    
      
      $secondhand1=DB::table("goods")->where("id","=",$id)->first();
      // dd($secondhand);
      //加载模板的同时加载数据
      return view("Admin.secondhand1.edit",['secondhand1'=>$secondhand1]);
      
    
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
       
         //随机上传图片名字
            $name=time()+rand(1,10000);
            //获取后缀
            $ext=$request->file("pic")->getClientOriginalExtension();
            //移动
            $request->file('pic')->move(Config::get('app.app_upload'),$name.".".$ext);
            //封装data
            $data['pic']=trim(Config::get("app.app_upload")."/".$name.".".$ext,".");
            //dd($data['pic']);
            
            //执行添加 666
            if(DB::table("goods")->where('id','=',$id)->update($data)){ 
                return redirect("/adminsecondhand1")->with("success","修改成功");
            }else{
                return redirect("/adminsecondhand1/edit")->with("error",'修改失败');


            }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        //获取需要删除数据
        $info=DB::table("goods")->where("id",'=',$id)->first();
        echo $info->pic;
        // exit;
         
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$info->pic,$arr);
        // dd($arr);
       // echo $id;
       if(DB::table("goods")->where("id",'=',$id)->delete()){
        //unlink(图片路径);
        //遍历
        if(isset($arr[1])){
             foreach($arr[1] as $key=>$value){
        unlink('.'.$value);
        }
        }
        
        return redirect("/adminsecondhand1")->with('success','删除成功');
       }
    }
}
