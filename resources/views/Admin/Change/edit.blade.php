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
    <form class="mws-form" action="/change/{{$user->id}}" method="post" enctype="multipart/form-data"> 
       @if (count($errors) > 0)
        <div class="mws-form-message error">
          <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
         </ul>
        </div>
     @endif
      文件:<input type="file" name="pic" ><br>
      状态：<select name="status">
       
              <option @if ('{{$user->status}}'=='1') selected  @endif>开启</option>
              <option @if ('{{$user->status}}'=='0') selected  @endif>禁用</option>
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