@extends("Admin.AdminPublic.adminpublic")
@section('admin')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>轮播图修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/change/{{$id}}" method="post" enctype="multipart/form-data"> 
      文件:<input type="file" name="pic" ><br>
      类别：<select class="large" name="cate_id">
          <option value="0">--请选择--</option>
          @foreach($user as $row)
          <option value="{{$row->id}}">{{$row->cate}}</option>
          @endforeach
        </select><br/><br/>
      状态：<select name="status">
              <option>--请选择--</option>
              <option value="1">开启</option>
              <option value="0">禁用</option>
            </select>  
      <br/> 
      <br/>
      {{csrf_field()}}
      {{method_field('PUT')}}        
      <input type="submit" value="提交" class="btn btn-info">
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','轮播图修改')