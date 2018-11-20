@extends("Admin.AdminPublic.adminpublic")
@section("admin")
<html>
 <head></head>
 <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>友情链接列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
      <form action="/choiceness" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      <label>搜索: <input type="text" name="keywords" aria-controls="DataTables_Table_1" / value="{{$request['keywords'] or ''}}"></label><input type="submit" value="搜索">
     </div>
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">网址名称</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">网站地址</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">联系方式</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">网站介绍</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">申请</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
       <tr class="odd"> 
        @foreach($data as $row)
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->name}}</td> 
        <td class=" ">{{$row->link_url}}</td> 
        <td class=" ">{{$row->tel}}</td>   
        <td class=" ">{{$row->descr}}</td>   
        <td class="btn btn-info stu">{{$row->status}}</td>   
        <td class=" " style="width:150px">
                      <a href="javascript:void(0)" class="btn btn-danger del">删除</a>
                    </td> 
       </tr>
        @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {{$data->appends($request)->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
  <script type="text/javascript">
  // alert($);
    $(".del").click(function(){
      var trueOrFalse = confirm("确定删除吗!");
     if(!trueOrFalse){
        return;
     }else{
      //获取要删除的id
      id=$(this).parents("tr").find("td:first").html();
      //获取删除的tr
      s=$(this).parents("tr");
      $.get('/adminlinkdel',{id:id},function(data){
        // alert(data);
          if(data==1){
            // return confirm("")
            alert("删除成功");
            //删除tr
            s.remove();
          }else{
            alert("删除失败");
          }
    });
  }
 });   
//修改
    $(".stu").click(function(){
      // alert(1);
      id=$(this).parents().find("td:first").html();
      // alert(id);
      v=$(this).html();

      // alert(v);
      $.get("/adminlinkchg",{id:id,status:v},function(data){
          // alert(stu);
          //alert(data.stu);
          if(data.msg==1){
            alert('修改成功');
           // alert($(this));
            //alert($(this).html('data.stu'));
           $(".stu").html(data.stu);
            // alert()
            // alert(v);
          }else{
            alert('修改失败');
          }

      },'json');
      //alert($(this));
     
    });
  </script>
</html>
@endsection
@section("title","友情链接列表")