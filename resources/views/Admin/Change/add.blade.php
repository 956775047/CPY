@extends("Admin.AdminPublic.adminpublic")
@section('admin')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>轮播图添加</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/change" method="post" enctype="multipart/form-data"> 
      类别：<select class="large" name="cate_id">
          <option value="0">--请选择--</option>
          @foreach($cate as $row)
          <option value="{{$row->id}}">{{$row->cate}}</option>
          @endforeach
        </select><br/>
      文件:<input type="file" name="pic"><br>        
      {{csrf_field()}}        
      <input type="submit" value="提交" class="btn btn-info">
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','轮播图添加')