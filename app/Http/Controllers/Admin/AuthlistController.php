<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use  App\Http\Requests\AdminAuthlist;
class AuthlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth=DB::table("node")->paginate(5);
        return view("Admin.Authlist.index",['auth'=>$auth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("Admin.Authlist.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminAuthlist $request)
    {
       //执行添加
       
          $data=$request->except(['_token']);
          $data['status']=1;
         if(DB::table("node")->insert($data)){
                return redirect('/authlist')->with('success','添加成功');
         }else{
                return redirect('/authlist/create')->with('error','添加失败');
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
      $user=DB::table("node")->where("id",'=',$id)->first();
      return view("Admin.Authlist.edit",['user'=>$user]);
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
       //执行修改
       $data=$request->except(['_token','_method']);
       
       if(DB::table("node")->where("id",'=',$id)->update($data)){
            return redirect("/authlist")->with('success',"修改成功");
        }else{
            return redirect("/authlist")->with('error',"请修改数据");
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
        //
    }
    public function del(Request $request){
        $id=$request->input('id');  
       // echo $id;
        if(DB::table('node')->where("id","=",$id)->delete()){
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }

    }
}
