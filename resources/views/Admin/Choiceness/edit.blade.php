@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>精选商品修改</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/choiceness/{{$data->id}}" method="post" enctype="multipart/form-data">
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
                            <label class="mws-form-label">精选商品名称</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="name" value="{{$data->name}}" / > 
                            </div>
                          </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">精选商品图片</label>
                            <div class="mws-form-item">
                              <input type="file" class="large" name="pic" value="{{$data->pic}}">
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">精选商品信息</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="news" value="{{$data->news}}"> </input>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">精选商品已购数量</label>
                            <div class="mws-form-item">
                          <input type="num" class="large" name="num" value="{{$data->num}}" /> 
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">折扣价格</label>
                            <div class="mws-form-item">
                          <input type="price" class="large" name="d_price" value="{{$data->d_price}}" /> 
                            </div>
                          </div>
        				<div class="mws-form-row">
                            <label class="mws-form-label">市场价格</label>
                            <div class="mws-form-item">
                          <input type="price" class="large" name="price" value="{{$data->price}}" /> 
                            </div>
                          </div>
                        </div>
                        <div class="mws-button-row">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                          <input type="submit" value="提交" class="btn btn-danger">
                          <input type="reset" value="重置" class="btn ">
                        </div>

                      </form>
                    </div>      
                </div>
@endsection
@section("title","精选修改")