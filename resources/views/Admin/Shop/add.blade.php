@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>商品添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/adminshop" method="post" enctype="multipart/form-data">

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
                            <label class="mws-form-label">商品名称</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="name"/ > 
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品类别</label>
                            <div class="mws-form-item">
                              <select class="large" name="cate_id">
                                <option value="0">--请选择--</option>
                            @foreach($cate as $v)
                                <option value="{{$v->id}}">{{$v->name}}</option>

                             @endforeach  
                              </select>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品图片</label>
                            <div class="mws-form-item">
                              <input type="file" class="large" name="pic">
                            </div>
                          </div>
                          <div class="mws-form-row"> 
                          <label class="mws-form-label">描述</label> 
                          <div class="mws-form-item"> 
                          <input type="text" class="large" name="descr" /> 
                           </div> 
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品数量</label>
                            <div class="mws-form-item">
                          <input type="num" class="large" name="num" /> 
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品价格</label>
                            <div class="mws-form-item">
                          <input type="price" class="large" name="price" /> 
                            </div>
                          </div>
        
                        </div>
                        <div class="mws-button-row">
                        {{csrf_field()}}
                          <input type="submit" value="Submit" class="btn btn-danger">
                          <input type="reset" value="Reset" class="btn ">
                        </div>
                      </form>
                    </div>      
                </div>
@endsection
@section("title","后台商品添加")