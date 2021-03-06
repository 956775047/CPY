@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>广告修改列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/adminad/{{$info->id}}" method="post" enctype="multipart/form-data">

                       @if (count($errors) > 0)
                          <div class="mws-form-message error">
                            <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                           </ul>
                          </div>
                      @endif

                        <div class="mws-form-inline">
                          <div class="mws-form-row">
                            <label class="mws-form-label">广告名称</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="name"/ value="{{$info->name}}"> 
                            </div>
                          </div>
                          
                      <div class="mws-form-row"> 
                      <label class="mws-form-label">原图片</label> 
                    <div class="mws-form-item"> 
                       <img src="{{$info->pic}}" width="100px" height="100px">
                    </div> 
                   </div>

                   <div class="mws-form-row"> 
                      <label class="mws-form-label">新图片</label> 
                    <div class="mws-form-item"> 
                       <input type="file" name="pic" value="{{$info->pic}}">
                    </div> 
                   </div>
        
                        </div>
                        <div class="mws-button-row">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                          <input type="submit" value="Submit" class="btn btn-danger">
                          <input type="reset" value="Reset" class="btn ">
                        </div>
                      </form>
                    </div>      
                </div>
@endsection
@section("title","广告修改列表")