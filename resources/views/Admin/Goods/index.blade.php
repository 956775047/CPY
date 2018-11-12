@extends("Admin.AdminPublic.adminpublic")
@section("admin")
<html>
 <head></head>
 <script type="text/javascript" src="/static/admins/js/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 商品列表</span> 
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
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">编号</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">商品名</th>
       
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">类别</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">图片</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">商品描述</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">状态</th>
       <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>

      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
 
       <tr class="odd"> 
        <td class="  sorting_1">1</td> 
        <td class=" ">2</td> 
        <td class=" ">3</td> 
        <td class=" ">4</td> 
        <td class=" ">5</td> 
        <td class=" ">5</td> 
        <td class=" "><form action="" method="post">
                      <button class="btn btn-danger">删除</button>
                      {{csrf_field()}}
                      {{method_field("DELETE")}}
                      </form><a href="" class="btn btn-info">修改</a></td> 
       </tr>

      </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="pages">

     </div>
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section("title","商品列表")