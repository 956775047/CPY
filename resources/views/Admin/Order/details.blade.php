@extends("Admin.AdminPublic.adminpublic")
@section('admin')
<html>
 <head></head>
<script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>订单详情</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">ID</th>

        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">商品名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">图片</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">描述</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">价格</th>

       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($data as $row)
       <tr class="odd"> 
        <td class="">{{$row->id}}</td> 
        <td class=" ">{{$row->name}}</td> 
        <td class=" "><img src="{{$row->pic}}"></td> 
        <td class=" ">{{$row->descr}}</td> 
        <td class=" ">{{$row->price}}</td>  
       </tr>
        @endforeach
      </tbody>
     </table>
     <div class="dataTables_info" id="DataTables_Table_1_info">
      Showing 1 to 10 of 57 entries
     </div>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      
     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','订单详情')