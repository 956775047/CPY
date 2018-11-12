@extends("Admin.AdminPublic.adminpublic")
@section("admin")
<html>
 <head></head>
 <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 管理员列表</span> 
    
   </div> 
   <form action="/adminsuser" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter"> 
      <label>搜索: 用户名<input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}"/></label>
      <input type="submit" value="搜索">
     </div>
     </form>
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
      
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">用户名</th>
      
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
   @foreach($data as $row)
       <tr class="odd"> 
        <td class="">{{$row->id}}</td> 
        <td class=" ">{{$row->name}}</td>  
        <!-- <td class=" ">{{$row->password}}</td> -->  
        <td class=" ">
                     <a href ="javascript:void(0)" class="btn btn-success del">删除</a>
                      <a href="/rolelist/{{$row->id}}" class="btn btn-danger">分配角色</a>
                      <a href="/adminsuser/{{$row->id}}/edit" class="btn btn-info">修改</a></td> 
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
  //alert($);
    $(".del").click(function(){
    var trueOrFalse = confirm("确定删除吗!");
    if(!trueOrFalse){
      return;
    }else{
      id=$(this).parents("tr").find("td:first").html();
      s=$(this).parents("tr");
      //alert(id);
      $.get('/adminsuserdel',{id:id},function(data){
        if(data.msg==1){
          alert("删除成功");
          s.remove();
        }else{
          alert("删除失败");
        }
      },'json');
     } 
    });
  </script>
</html>
@endsection
@section("title","后台管理员列表")