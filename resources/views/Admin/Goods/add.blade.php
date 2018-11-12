@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>商品添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/adminuser" method="post" enctype="multipart/form-data">
                        <div class="mws-form-inline">
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品名称</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="username" {{old('username')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">类别</label>
                            <div class="mws-form-item">
                              <input type="password" class="large" name="password">
                            </div>
                          </div>
                         <div class="mws-form-row">
                            <label class="mws-form-label">图片</label>
                            <div class="mws-form-item">
                              <input type="file" name="pic">
                            </div>
                          </div>          
                           
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品描述</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="email" {{old('email')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">数量</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">价格</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">版本</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">关联</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">品牌</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">型号</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">上市时间</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">外观样式</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">屏幕颜色</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">摄像头</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">储存功能</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">网络机制</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">CPU</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">SIM卡类型</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品清单</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="phone" {{old('phone')}}>
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">详情描述图片</label>
                            <div class="mws-form-item">
                              <input type="file" name="pic">
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
@section("title","商品添加")