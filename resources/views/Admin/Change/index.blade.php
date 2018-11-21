@extends("Admin.AdminPublic.adminpublic")
@section("admin")
<html>
 <head></head>
 <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>轮播图列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">PIC</th>
        
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">类别</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>

       </tr> 
       </tr> 
       
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
     @foreach($data as $row)
       <tr class="odd"> 
        <td class=" ">{{$row->id}}</td> 
        <td class=" "><img src='{{$row->pic}}'></td>  
        <td class="">@if($row->status == 0) 禁用 @elseif($row->status == 1) 开启 @endif</td> 
        <td class=" ">{{$row->cate}}</td> 
        <td class=" ">
          <a href="javascript:void(0)" class="btn btn-info del">删除</a>
          <a href="/change/{{$row->id}}/edit" class="btn btn-info">修改</a></td> 
       </tr>
      @endforeach
      </tbody>
     </table>
    <div class="dataTables_paginate paging_full_numbers" id="pages">
              {{$data->render()}}
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
     }else{
      id=$(this).parents("tr").find("td:first").html();
      // alert(id);
       s=$(this).parents("tr");
      //alert(id);
      $.get("/changedel",{id:id},function(data){
         if(data.msg==1){
          alert("删除成功");
          s.remove();
        }else{
          alert("删除失败");
        }
      },'json');
     }
   });


    // $(".status").click(function(){
    //   s=$(this).html();
    //  id=$(this).parents("tr").find("td:first").html();
    //  //alert(id);
    //  $.get('/status','{id:id}',function(data){
    //   //alert(data);

    //  });
    // })

  </script>
</html>
@endsection
@section("title","轮播图列表")

