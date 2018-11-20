@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>商品添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/adminfavorable" method="post" enctype="multipart/form-data">
                        <div class="mws-form-inline">
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品名称</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="name">
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
                              <input type="text" class="large" name="descr">
                            </div>
                          </div>
                          
                          <div class="mws-form-row">
                            <label class="mws-form-label">价格</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="price">
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">库存</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="num">
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