@extends("Admin.AdminPublic.adminpublic")
@section("admin")
<html>
 <head></head>
 <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 用户详情</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
      <form action="/adminuser" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      <label>搜索: <input type="text" name="keywords" aria-controls="DataTables_Table_1" / value="{{$request['keywords'] or ''}}"></label><input type="submit" value="搜索">
     </div>
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">UID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">昵称</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">真实姓名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">性别</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">电话</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">出生日期</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">居住地址</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        
        @if(!empty($data))
        @foreach($data as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->u_id}}</td> 
        <td class=" ">{{$row->name}}</td> 
        <td class=" ">{{$row->username}}</td> 
        <td class=" ">{{$row->sex}}</td>  
        <td class=" ">{{$row->phone}}</td>  
        <td class=" ">{{$row->date}}</td>  
        <td class=" ">{{$row->address}}</td>  
        <td class=" " style="width:100px"><form action="" method="post">
                      {{csrf_field()}}
                      {{method_field("DELETE")}}
                      <a href="javascript:void(0)" class="btn btn-danger del">删除</a>
                      </form>
                    </td> 
       </tr>
       @endforeach
     @else
        <tr class="odd">
            <td calss=" " colspan="9">暂无数据</td>
        </tr>
      @endif
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">

     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script>
 
  $(".del").click(function(){
    var trueOrFalse=confirm("确定删除吗!");
    if(!trueOrFalse){
      return;
    }else{
      //获取要删除的id
      id=$(this).parents("tr").find("td:first").html();
      s=$(this).parents("tr");
      $.get('/del',{id:id},function(data){
        // alert(data);
          if(data==1){
           return confirm("确定删除吗");
            s.remove();
          }else{
            alert("删除失败");
          }
      });
    }
  });
 </script>
</html>
@endsection
@section("title","后台用户列表")