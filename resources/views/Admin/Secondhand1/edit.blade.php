@extends("Admin.AdminPublic.adminpublic")
@section('admin')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>二精修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/adminsecondhand1/{{$secondhand1->id}}" method="post" enctype="multipart/form-data"> 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">二精名称</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="name"  value="{{$secondhand1->name}}"/> 
       </div> 
      </div>  
      <div class="mws-form-row">
       <label class="mws-form-label">图片</label> 
       <div class="mws-form-item"> 
        <input type="file" class="large" name="pic" /> 
        <img src="{{$secondhand1->pic}}"" alt="">
       </div> 
      </div>

      <div class="mws-form-row"> 
       <label class="mws-form-label">商品描述</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="descr" value="{{$secondhand1->descr}}" /> 
       </div> 
      </div>
       <div class="mws-form-row"> 
       <label class="mws-form-label">价格</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="new_price" value="{{$secondhand1->new_price}}" /> 
       </div> 
      </div>
       <div class="mws-form-row"> 
       <label class="mws-form-label">原价</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="price" value="{{$secondhand1->price}}" /> 
       </div> 
      </div>
      <div class="mws-form-row"> 
       <label class="mws-form-label">库存</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="price" value="{{$secondhand1->num}}" /> 
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