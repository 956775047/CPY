@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>管理员添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/adminsuser" method="post">
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
                            <label class="mws-form-label">管理员名</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="name">
                            </div>
                          </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">密码</label>
                            <div class="mws-form-item">
                              <input type="password" class="large" name="password">
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
@section("title","后台管理员添加")