@extends("Admin.AdminPublic.adminpublic")
@section('admin')

 <html>
 <head></head>
 <script type="text/javascript" src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 二精列表</span> 
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
       
        
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">图片</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">价格</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">商品描述</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">库存</th>
        
       <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>

      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
         @foreach($data1 as $row)
       <tr class="odd"> 

        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->name}}</td> 
        <td class=" "><img src="{{$row->pic}}"></td> 
        <td class=" ">{{$row->price}}</td> 
        <td class=" ">{{$row->descr}}</td> 
        <td class=" ">{{$row->num}}</td> 
  
        
        <td class=" "><form action="/adminsecondhand1/{{$row->id}}" method="post">
                     
                   {{csrf_field()}}
          {{method_field('DELETE')}}
          <button type="submit" class="btn btn-success">删除</button>
                      </form><a href="/adminsecondhand1/{{$row->id}}/edit" class="btn btn-info">修改</a></td> 
       </tr>
@endforeach
      </tbody>
     </table>
     
    </div> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','二精列表')