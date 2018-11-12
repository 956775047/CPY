@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>角色修改</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/admin_userss/{{$user->id}}" method="post">
                        <div class="mws-form-inline">
                          <div class="mws-form-row">
                            <label class="mws-form-label">角色名</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="name" value="{{$user->name}}">
                            </div>
                          </div>
                          
                        <div class="mws-button-row">
                          {{csrf_field()}}
                        {{method_field("PUT")}} 
                          <input type="submit" value="Submit" class="btn btn-danger">
                          <input type="reset" value="Reset" class="btn ">
                        </div>

                      </form>
                    </div>      
                </div>
@endsection
@section("title","角色修改")