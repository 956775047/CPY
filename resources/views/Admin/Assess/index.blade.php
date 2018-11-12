@extends("Admin.AdminPublic.adminpublic")
@section("admin")
<html>
 <head></head>
 <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>评价列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">会员名</th>
        
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">星级</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">类型</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">评价</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">修改</th>

       </tr> 
       </tr> 
       
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
@foreach($data as $row)
       <tr class="odd"> 
        <td class=" ">{{$row->id}}</td> 
        <td class=" ">{{$row->name}}</td>  
        <td class="">{{$row->start}}</td> 
        <td class="">{{$row->user}}</td> 
        <td class="">{{$row->descr}}</td> 
        <td class="">{{$row->time}}</td> 
        <td class=" ">
          <a href="" class="btn btn-info del">删除</a>
       </tr>
@endforeach
      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
     
     </div>)
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
      id=$(this).parents("tr").find("td:first").html();
      s=$(this).parents("tr");
      //alert(id);
      $.get('/assessdel',{id:id},function(data){
       // alert(data);
        if(data.msg==1){
          alert("删除成功");
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
@section("title","评价列表")