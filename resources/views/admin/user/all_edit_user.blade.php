@extends('master_two')
@section('user','active')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <div class="text-center">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <h2 class="text-center">Edit User</h2>
                {!! Form::open(['class'=>'form-horizontal','method'=>'POST','route'=>['all.user.update'],'enctype' => 'multipart/form-data']) !!}
                <input type="hidden" id="id" name="id" value="{{$edit->id}}"/>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">First Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$edit->first_name}}" placeholder="Enter First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Last Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{$edit->last_name}}" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="gender">Gender :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option" name="gender" required>
                            <option value="male" @if($edit->gender == 'male') selected @endif>Male</option>
                            <option value="female" @if($edit->gender == 'female') selected @endif>Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-10 col-sm-offset-2">
                    <img class="preview_image" src="{{asset('/assets/images/employee_image/'.$edit->image)}}"  alt="preview_image"/>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="image">Image :</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" class="form-control" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" value="{{$edit->email}}" placeholder="Enter email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone No:</label>
                    <div class="col-sm-10">
                        <input type="number" id="phone" class="form-control" name="phone" value="{{$edit->phone}}" placeholder="Enter Phone Number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nid">NID No:</label>
                    <div class="col-sm-10">
                        <input type="number" id="nid" class="form-control" name="nid" value="{{$edit->nid}}" placeholder="Enter National ID Number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="account_for">Account For :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option account_for" name="account_for" required @if($edit->position == 'Dealer')
                            disabled
                            @endif >
                            @if($edit->position == 'Admin')
                            <option value="Admin" @if($edit->position == 'Admin') selected="selected" @endif>Admin</option>
                            @endif
                            @if($edit->position == 'Sr.Manager')
                            <option value="Sr.Manager" @if($edit->position == 'Sr.Manager') selected="selected" @endif>Sr.Manager</option>
                            @endif
                            @if($edit->position == 'Manager')
                            <option value="Manager" @if($edit->position == 'Manager') selected="selected" @endif>Manager</option>
                            @endif
                            @if($edit->position == 'RM')
                            <option value="RM" @if($edit->position == 'RM') selected="selected" @endif>RM</option>
                            @endif
                            @if($edit->position == 'ASM')
                            <option value="ASM" @if($edit->position == 'ASM') selected="selected" @endif>ASM</option>
                            @endif
                            @if($edit->position == 'Sr.Executive')
                            <option value="Sr.Executive" @if($edit->position == 'Sr.Executive') selected="selected" @endif>Sr.Executive</option>
                            @endif
                            @if($edit->position == 'Executive')
                            <option value="Executive" @if($edit->position == 'Executive') selected="selected" @endif>Executive</option>
                            @endif
                            @if($edit->position == 'Dealer')
                            <option value="Dealer" @if($edit->position == 'Dealer') selected="selected" @endif>Dealer</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group manager_show" id="manager_show">
                    <label class="control-label col-sm-2" for="manager">Sr.Manager / Manager :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option manager" id="manager" name="manager">
                        </select>
                    </div>
                </div>
                <div class="form-group regional_manager_show" id="regional_manager_show">
                    <label class="control-label col-sm-2" for="regional_manager">Regional Manager :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option manager regional_manager" id="regional_manager" name="regional_manager">
                        </select>
                    </div>
                </div>
                <div class="form-group area_sales_manager_show" id="area_sales_manager_show">
                    <label class="control-label col-sm-2" for="area_sales_manager">Area Sales Manager :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option manager area_sales_manager" id="area_sales_manager" name="area_sales_manager">
                        </select>
                    </div>
                </div>
                <div class="form-group executive_show" id="executive_show">
                    <label class="control-label col-sm-2" for="executive">Sr.Executive / Executive :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option regional_manager" id="executive" name="executive">
                        </select>
                    </div>
                </div>
                <div class="form-group dealer_show" id="dealer_show">
                    <label class="control-label col-sm-2" for="executive">Dealer Code :</label>
                    <div class="col-sm-10">
                        <input type="text" id="dealer_code" class="form-control dealer_code" name="dealer_code" placeholder="Enter Dealer Code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="position">Position :</label>
                    <div class="col-sm-10">
                        <input type="text" id="position" class="form-control" name="position" value="{{$edit->position}}" placeholder="Enter Your User Position" readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Address :</label>
                    <div class="col-sm-10">
                        <input type="text" id="address" class="form-control" name="address" value="{{$edit->address}}" placeholder="Ex : 44/2,polton ,dhaka-1205" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="area">Area :</label>
                    <div class="col-sm-10">
                        <input type="text" id="area" class="form-control" name="area" value="{{$edit->area}}" placeholder="Ex : cantonment ,dhaka-1205" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="role">Role :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option" name="role">
                            <option selected disabled value="">Choose An Option</option>
                            @foreach($roles as $role)
                                @if(!empty($role_user))
                                <option value="{{$role->id}}" @if($role_user->role_id == $role->id) selected="selected" @endif>{{$role->role_name}}</option>
                                @else
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter Your Password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="confirm_password" class="form-control confirm_password_margin" name="confirm_password" placeholder="Retype Your Password Again">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit" />
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script>
        function hierarchy(){
              let id = document.getElementById('id').value;
              let position = document.getElementById('position').value;
              let manager_show = document.getElementById('manager_show');
              let regional_manager_show = document.getElementById('regional_manager_show');
              let area_sales_manager_show = document.getElementById('area_sales_manager_show');
              let executive_show = document.getElementById('executive_show');
              let dealer_show = document.getElementById('dealer_show');
              let manager = document.getElementById('manager');
              let regional_manager = document.getElementById('regional_manager');
              let area_sales_manager = document.getElementById('area_sales_manager');
              let executive = document.getElementById('executive');
              let dealer_code = document.getElementById('dealer_code');
              if(position == 'Dealer') {
                  dealer_show.style.display = 'block';
                  dealer_code.required = true;
                  $.ajax({
                      url: '/dealer/edit/' + id,
                      success: function (data) {
                          if(data.manager_id != 0 && data.regional_manager_id == 0 && data.area_sales_manager_id == 0 && data.executive_id == 0){
                              manager_show.style.display = 'block';
                              manager.required = true;
                              $('#manager').append('<option value=' + data.manager_id + '>' + data.manager_name + '(' + data.manager_email +')</option>');
                          }else if (data.manager_id != 0 && data.regional_manager_id != 0 && data.area_sales_manager_id == 0 && data.executive_id == 0){
                              manager_show.style.display = 'block';
                              regional_manager_show.style.display = 'block';
                              manager.required = true;
                              regional_manager.required =  true;
                              $('#manager').append('<option value=' + data.manager_id + '>' + data.manager_name + '(' + data.manager_email +')</option>');
                              $('#regional_manager').append('<option value=' + data.regional_manager_id + '>' + data.regional_manager_name + '(' + data.regional_manager_email +')</option>');
                          }else if (data.manager_id != 0 && data.regional_manager_id != 0 && data.area_sales_manager_id != 0 && data.executive_id == 0){
                              manager_show.style.display = 'block';
                              regional_manager_show.style.display = 'block';
                              area_sales_manager_show.style.display = 'block';
                              executive_show.style.display = 'block';
                              manager.required = true;
                              regional_manager.required = true;
                              area_sales_manager.required = true;
                              $('#manager').append('<option value=' + data.manager_id + '>' + data.manager_name + '(' + data.manager_email + ')</option>');
                              $('#regional_manager').append('<option value=' + data.regional_manager_id + '>' + data.regional_manager_name + '(' + data.regional_manager_email + ')</option>');
                              $('#area_sales_manager').append('<option value=' + data.area_sales_manager_id + '>' + data.area_sales_manager_name + '(' + data.area_sales_manager_email + ')</option>');
                          }else if(data.manager_id != 0 && data.regional_manager_id != 0 && data.area_sales_manager_id != 0 && data.executive_id != 0){
                              manager_show.style.display = 'block';
                              regional_manager_show.style.display = 'block';
                              area_sales_manager_show.style.display = 'block';
                              executive_show.style.display = 'block';
                              manager.required = true;
                              regional_manager.required = true;
                              area_sales_manager.required = true;
                              executive.required = true;
                              $('#manager').append('<option value=' + data.manager_id + '>' + data.manager_name + '(' + data.manager_email + ')</option>');
                              $('#regional_manager').append('<option value=' + data.regional_manager_id + '>' + data.regional_manager_name + '(' + data.regional_manager_email + ')</option>');
                              $('#area_sales_manager').append('<option value=' + data.area_sales_manager_id + '>' + data.area_sales_manager_name + '(' + data.area_sales_manager_email + ')</option>');
                              $('#executive').append('<option value=' + data.executive_id + '>' + data.executive_name + '(' + data.executive_email + ')</option>');
                          }
                          dealer_code.value = data.dealer_code;
                      }
                  })
              }else if(position == 'RM'){
                        manager_show.style.display = 'block';
                        manager.required = true;
                        $.ajax({
                            url : '/rm/edit/' + id,
                            success : function (data) {
                               $('#manager').append('<option value=' + data.manager_id + '>' + data.manager_name + '(' + data.manager_email +')</option>');
                            }
                        })
              }else if(position == 'ASM'){
                        manager_show.style.display = 'block';
                        regional_manager_show.style.display = 'block';
                        manager.required = true;
                        regional_manager.required =  true;
                        $.ajax({
                           url : '/asm/edit/' + id,
                           success : function(data){
                               $('#manager').append('<option value=' + data.manager_id + '>' + data.manager_name + '(' + data.manager_email +')</option>');
                               $('#regional_manager').append('<option value=' + data.regional_manager_id + '>' + data.regional_manager_name + '(' + data.regional_manager_email +')</option>');
                           }
                        });
              }else if(position == 'Sr.Executive' || position == 'Executive'){
                        manager_show.style.display = 'block';
                        regional_manager_show.style.display = 'block';
                        area_sales_manager_show.style.display = 'block';
                        manager.required = true;
                        regional_manager.required = true;
                        area_sales_manager.required = true;
                        $.ajax({
                           url : '/executive/edit/' + id,
                           success : function(data) {
                               $('#manager').append('<option value=' + data.manager_id + '>' + data.manager_name + '(' + data.manager_email + ')</option>');
                               $('#regional_manager').append('<option value=' + data.regional_manager_id + '>' + data.regional_manager_name + '(' + data.regional_manager_email + ')</option>');
                               $('#area_sales_manager').append('<option value=' + data.area_sales_manager_id + '>' + data.area_sales_manager_name + '(' + data.area_sales_manager_email + ')</option>')
                           }
                })
              }
        }
    </script>
@endsection

