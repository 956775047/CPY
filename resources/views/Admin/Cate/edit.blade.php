@extends("Admin.AdminPublic.adminpublic")
@section("admin")
  <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                      <span>分类修改</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                      <form class="mws-form" action="/admincate/{{$info->id}}" method="post">
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
                            <label class="mws-form-label">分类名</label>
                            <div class="mws-form-item">
                              <input type="text" class="large" name="name" value="{{$info->name}}">
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
@section("title","后台分类修改")