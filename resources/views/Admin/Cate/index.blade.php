@extends("Admin.AdminPublic.adminpublic")
@section("admin")
<html>
 <head></head>
 <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>分类列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
      <form action="/admincate" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      <label>搜索: <input type="text" name="keywords" aria-controls="DataTables_Table_1" / value="{{$request['keywords'] or ''}}"></label><input type="submit" value="搜索">
      
     </div>
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">分类名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">Pid</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">Path</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($cate as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->name}}</td> 
        <td class=" ">{{$row->pid}}</td> 
        <td class=" ">{{$row->path}}</td>  
        <td class=" "><form action="/admincate/{{$row->id}}" method="post">
                      <a href="javascript:void(0)" class="btn btn-danger del" >删除</a>
                      <!-- a href="/admincate/{{$row->id}}" class="btn btn-success">查看子分类</a> -->
                      {{csrf_field()}}
                      {{method_field("DELETE")}}
                      </form><a href="/admincate/{{$row->id}}/edit" class="btn btn-info">修改</a>
                      </td> 
       </tr>
       @endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      {!!$cate->appends($request)->render()!!}
     </div>)
    </div> 
   </div> 
  </div>
 </body>
 <script type="text/javascript">
     $(".del").click(function(){
       var trueOrFalse = confirm("确定删除吗!");
    if(!trueOrFalse){
      return;
    }else{
    //获取要删除的id
    id=$(this).parents("tr").find("td:first").html();
    //获取删除的tr
    s=$(this).parents("tr");
    $.get('/fldel',{id:id},function(data){
      // alert(data);
        if(data==1){
          confirm("确定删除吗");
          //删除tr
          s.remove();
        }else{
          alert("请先干掉你的孩子");
        }
    });
}

  });
 </script>
</html>
@endsection
@section("title","后台分类列表")