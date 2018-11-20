@extends("Admin.AdminPublic.adminpublic")
@section('admin')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>二手商品修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/adminsecondhand/{{$secondhand->id}}" method="post" enctype="multipart/form-data"> 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">二手商品名称</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="name"  value="{{$secondhand->name}}"/> 
       </div> 
      </div>  
      <div class="mws-form-row">
       <label class="mws-form-label">图片</label> 
       <div class="mws-form-item"> 
        <input type="file" class="large" name="pic" /> 
        <img src="{{$secondhand->pic}}"" alt="">
       </div> 
      </div>

      <div class="mws-form-row"> 
       <label class="mws-form-label">商品描述</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="descr" value="{{$secondhand->descr}}" /> 
       </div> 
      </div>
       <div class="mws-form-row"> 
       <label class="mws-form-label">价格</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="price" value="{{$secondhand->price}}" /> 
       </div> 
      </div>
       <div class="mws-form-row"> 
       <label class="mws-form-label">库存</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="num" value="{{$secondhand->num}}" /> 
       </div> 
      </div>
     </div> 
     <div class="mws-button-row"> 
      {{csrf_field()}}
      {{method_field('PUT')}}
      <input type="submit" value="Submit" class="btn btn-danger" /> 
      <input type="reset" value="Reset" class="btn " /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section('title','用户修改')