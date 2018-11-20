@extends("Admin.AdminPublic.adminpublic")
@section("admin")
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>广告列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    
     <form action="/adminshop" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
     
     </div>
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
       <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">Name</th>
      
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">商品图片</th>
       
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
      @foreach($data as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class="">{{$row->name}}</td> 
        <td class=" "><img src="{{$row->pic}}" width="100px" height="100px"></td> 
        <td class=" "><form action="/adminad/{{$row->id}}" method="post">
                        <button class="btn btn-danger">删除</button>
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                      </form><a href="/adminad/{{$row->id}}/edit" class="btn btn-info">修改</a></td>
       </tr>
@endforeach
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
</html>
@endsection
@section("title","后台广告列表")