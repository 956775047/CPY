@extends("Admin.AdminPublic.adminpublic")
@section('admin')
<html>
 <head></head>
<script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>订单列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
      <form action="/adminorder" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter"> 
      <label>搜索: 用户名<input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}"/></label>
      <input type="submit" value="搜索">
     </div>W
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">ID</th>

        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">订单号</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">用户名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">地址</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">总金额</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>

       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($data as $row)
       <tr class="odd"> 
        <td class="">{{$row->oid}}</td> 
        <td class=" ">{{$row->order_num}}</td> 
        <td class=" ">{{$row->name}}</td> 
        <td class=" ">{{$row->address}}</td> 
        <td class=" ">{{$row->total}}</td> 
        <td class=" "><a href="javascript:void(0)" class="btn btn-sussess sta">@if($row->status == 1) 待收货 @elseif($row->status == 0) 发货 @else 订单完成 @endif
                      </a></td> 
        <td class=""><a href="/details/{{$row->goods_id}}" class="btn btn-sussess">详细信息</a></td>  
       </tr>
        @endforeach
      </tbody>
     </table>
     <div class="dataTables_info" id="DataTables_Table_1_info">
      Showing 1 to 10 of 57 entries
     </div>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
           {{$data->appends($request)->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script>
// alert($);
$('.sta').click(function(){
    obj=$(this);
    //获取id
    id=$(this).parents().find("td:first").html();
    // alert(id);
    //获取状态内容
    status=obj.html();
    // alert(sta);
    $.get("/edits",{id:id,status:status},function(data){
      // alert(data);
        if(data==1){
          sta=obj.html("待收货");
        }

        
        // else if(data==1){
        //   sta=obj.html("待收货");
        // }else{
        //   sta=obj.html("订单完成");
        // }
    },'json');
    
});
 </script>
</html>
@endsection
@section('title','订单列表')