@extends("Admin.AdminPublic.adminpublic")
@section('admin')
<html>
 <head></head>
 <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>公告列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">操作</th>
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">标题</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 191px;">内容</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>

       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($annource as $row)
       <tr class="odd">
        <td class=" "><input type="checkbox" value="{{$row->id}}"></td> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->title}}</td> 
        <td class=" ">{{$row->descr}}</td> 
        <td colspan="5"><a href="javascript:void(0)" class="btn btn-warning del">删除</a></td>

       </tr>
       @endforeach
       <tr>
        <td colspan="5"><a href="javascript:void(0)" class="btn btn-success allchoose">全选</a><a href="javascript:void(0)" class="btn btn-success nochoose">全不选</a><a href="javascript:void(0)" class="btn btn-success fchoose">反选</a></td>
      
        
       </tr>
      </tbody>
     </table>
     <div class="dataTables_info" id="DataTables_Table_1_info">
     </div>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script type="text/javascript">
 // alert($);
 //全选
 $(".allchoose").click(function(){
    //遍历table 下的所有tr
    $("#DataTables_Table_1").find("tr").each(function(){
      //查找复选框 设置属性
      $(this).find(":checkbox").attr("checked",true);
    });
 });

 //全不选
 $(".nochoose").click(function(){
  $("#DataTables_Table_1").find("tr").each(function(){
    $(this).find(":checkbox").attr("checked",false);
  });
 });

 //反选
 $(".fchoose").click(function(){
  $("#DataTables_Table_1").find("tr").each(function(){
    //判断
    if($(this).find(":checkbox").attr("checked")){
      //取消选中
      $(this).find(":checkbox").attr("checked",false);
    }else{
      $(this).find(":checkbox").attr("checked",true);

    }
  });
 });

 //Ajax删除
 $(".del").click(function(){
  arr=[];
  //遍历
  $(":checkbox").each(function(){
    if($(this).attr("checked")){
      //获取选中数据的id
      id=$(this).val();
      arr.push(id);
      // alert(id);
    }
  });
  // alert(arr);
  //Ajax
  $.get("/annourcedel",{arr:arr},function(data){
    // alert(data);
    if(data==1){
      // alert("删除成功");
      //遍历arr数组
      for(var i=0;i<arr.length;i++){
        //获取选中数据input
        $("input[value='"+arr[i]+"']").parents("tr").remove();
      } 
    }else{
      alert(data);
    }
  });
 });
 </script>
</html>
@endsection
@section('title','公告列表')