@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>详细信息</span>
                    </div>
                    <div class="mws-panel-body no-padding">

                      <form class="mws-form" action="/choicenessi/{{$info->id}}" method="post" enctype="multipart/form-data">
                         @if (count($errors) > 0)
                          <div class="mws-form-message error">
                            <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                           </ul>
                          </div>
                       @endif
                       
                       <input type="hidden" name="c_id" value="{{$info->c_id}}">
                       <input type="hidden" name="id" value="{{$info->id}}">
                        <div class="mws-form-inline">
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品名称</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="name" value="{{$info->name}}" {{old('name')}}>
                            </div>
                          </div>  
                          <div class="mws-form-row">
                            <label class="mws-form-label">型号</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="model" value="{{$info->model}}" {{old('name')}}>
                            </div>
                          </div>         
                          <div class="mws-form-row">
                            <label class="mws-form-label">上市时间</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="time" value="{{$info->time}}" {{old('time')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">外观样式</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="style" value="{{$info->style}}" {{old('style')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">屏幕颜色</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="color" value="{{$info->color}}" {{old('color')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">摄像头</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="camera" value="{{$info->camera}}" {{old('camera')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">储存功能</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="store" value="{{$info->store}}" {{old('store')}}>
                            </div>
                          </div>
                          
                          <div class="mws-form-row">
                            <label class="mws-form-label">CPU</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="cpu" value="{{$info->cpu}}" {{old('cpu')}}>
                            </div>
                          </div>
                         
                          <div class="mws-form-row">
                            <label class="mws-form-label">屏幕大小</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="size" value="{{$info->size}}" {{old('size')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">主屏分辨率</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="radio" value="{{$info->radio}}" {{old('radio')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品清单</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="list" value="{{$info->list}}" {{old('list')}}>
                            </div>
                          </div>
                        </div>
                        
                        <div class="mws-button-row">
                        {{csrf_field()}}
                          <input type="submit" value="修改" class="btn btn-danger">
                          <input type="reset" value="重置" class="btn ">
                        </div>
                      </form>
   
                    </div>      
                </div>
@endsection
@section("title","商品添加")