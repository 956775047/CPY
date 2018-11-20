@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>精选商品添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/choiceness" method="post" enctype="multipart/form-data">
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
                              <input type="text" class="large" name="name"/ > 
                            </div>
                          </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">精选商品图片</label>
                            <div class="mws-form-item">
                              <input type="file" class="large" name="pic">
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">精选商品信息</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="news"> </input>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">精选商品库存数量</label>
                            <div class="mws-form-item">
                          <input type="num" class="large" name="num" /> 
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">品牌</label>
                            <div class="mws-form-item">
                          <input type="brank" class="large" name="brank" /> 
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">折扣价格</label>
                            <div class="mws-form-item">
                          <input type="price" class="large" name="d_price" /> 
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品描述</label>
                            <div class="mws-form-item">
                          <input type="descr" class="large" name="descr" /> 
                            </div>
                          </di v>
        				<div class="mws-form-row">
                            <label class="mws-form-label">市场价格</label>
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
@section("title","精选添加")