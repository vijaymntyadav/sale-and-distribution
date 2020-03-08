@extends('master')
@section('user','active')
@section('create_user','active')
@section('content')
    <div class="container">
        <div class="row text-center">
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
                <h2 class="text-center">User Create</h2>
                {!! Form::open(['class'=>'form-horizontal','method'=>'POST','route'=>['user.store'],'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">First Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Last Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="gender">Gender :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="image">Image :</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" class="form-control" name="image" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Phone No:</label>
                    <div class="col-sm-10">
                        <input type="number" id="phone" class="form-control" name="phone" placeholder="Enter Phone Number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nid">NID No:</label>
                    <div class="col-sm-10">
                        <input type="number" id="nid" class="form-control" name="nid" placeholder="Enter National ID Number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="account_for">Account For :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option account_for" name="account_for" required>
                            <option value="Admin">Admin</option>
                            <option value="Sr.Manager">Sr.Manager</option>
                            <option value="Manager">Manager</option>
                            <option value="RM">RM</option>
                            <option value="ASM">ASM</option>
                            <option value="Sr.Executive">Sr.Executive</option>
                            <option value="Executive">Executive</option>
                            <option value="Dealer">Dealer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group manager_show" id="manager_show">
                    <label class="control-label col-sm-2" for="manager">Sr.Manager / Manager :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option manager" id="manager" name="manager">
                            <option selected disabled value="">choose an option</option>
                            @foreach($hierarchies as $hierarchy)
                                <option value="{{$hierarchy->manager_id}}">{{$hierarchy->manager_name}} ({{$hierarchy->manager_email}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group regional_manager_show" id="regional_manager_show">
                    <label class="control-label col-sm-2" for="regional_manager">Regional Manager :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option regional_manager" id="regional_manager" name="regional_manager">
                        </select>
                    </div>
                </div>
                <div class="form-group area_sales_manager_show" id="area_sales_manager_show">
                    <label class="control-label col-sm-2" for="area_sales_manager">Area Sales Manager :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option area_sales_manager" id="area_sales_manager" name="area_sales_manager">
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
                        <input type="text" id="position" class="form-control" name="position" value="Admin" readonly="readonly" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Address :</label>
                    <div class="col-sm-10">
                        <input type="text" id="address" class="form-control" name="address" placeholder="Ex : 44/2,polton ,dhaka-1205" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="area">Area :</label>
                    <div class="col-sm-10">
                        <input type="text" id="area" class="form-control" name="area" placeholder="Ex : cantonment ,dhaka-1205" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="role">Role :</label>
                    <div class="col-sm-10">
                        <select class="user_role_option" name="role" required>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="confirm_password" class="form-control confirm_password_margin" name="confirm_password" placeholder="Retype Your Password Again" required>
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
        $(document).on('change','.account_for',function(){
            document.getElementById('position').value = $(this).val();
            let value = $(this).val();
            let manager_show = document.getElementById('manager_show');
            let regional_manager_show = document.getElementById('regional_manager_show');
            let area_sales_manager_show = document.getElementById('area_sales_manager_show');
            let executive_show = document.getElementById('executive_show');
            let dealer_show = document.getElementById('dealer_show');
            let manager = document.getElementById('manager');
            let regional_manager = document.getElementById('regional_manager');
            let area_sales_manager = document.getElementById('area_sales_manager');
            let dealer_code = document.getElementById('dealer_code');
            if(value == 'Sr.Manager'){
                manager_show.style.display = 'none';
                regional_manager_show.style.display = 'none';
                area_sales_manager_show.style.display = 'none';
                executive_show.style.display = 'none';
                dealer_show.style.display = 'none';
                manager.required = false;
                regional_manager.required = false;
                area_sales_manager.required = false;
                dealer_code.required = false;
            }else if(value == 'Manager'){
                manager_show.style.display = 'none';
                regional_manager_show.style.display = 'none';
                area_sales_manager_show.style.display = 'none';
                executive_show.style.display = 'none';
                dealer_show.style.display = 'none';
                manager.required = false;
                regional_manager.required = false;
                area_sales_manager.required = false;
                dealer_code.required = false;
            }else if(value == 'RM'){
                manager_show.style.display = 'block';
                regional_manager_show.style.display = 'none';
                area_sales_manager_show.style.display = 'none';
                executive_show.style.display = 'none';
                dealer_show.style.display = 'none';
                manager.required = true;
                regional_manager.required = false;
                area_sales_manager.required = false;
                dealer_code.required = false;
            }else if(value == 'ASM'){
                manager_show.style.display = 'block';
                regional_manager_show.style.display = 'block';
                area_sales_manager_show.style.display = 'none';
                executive_show.style.display = 'none';
                dealer_show.style.display = 'none';
                manager.required = true;
                regional_manager.required =  true;
                area_sales_manager.required = false;
                dealer_code.required = false;
            }else if(value == 'Sr.Executive'){
                manager_show.style.display = 'block';
                regional_manager_show.style.display = 'block';
                area_sales_manager_show.style.display = 'block';
                executive_show.style.display = 'none';
                dealer_show.style.display = 'none';
                manager.required = true;
                regional_manager.required = true;
                area_sales_manager.required = true;
                dealer_code.required = false;
            }else if(value == 'Executive'){
                manager_show.style.display = 'block';
                regional_manager_show.style.display = 'block';
                area_sales_manager_show.style.display = 'block';
                executive_show.style.display = 'none';
                dealer_show.style.display = 'none';
                manager.required = true;
                regional_manager.required = true;
                area_sales_manager.required = true;
                dealer_code.required = false;
            }else if(value == 'Dealer'){
                $('#regional_manager').empty();
                $('#area_sales_manager').empty();
                $('#executive').empty();
                manager_show.style.display = 'block';
                regional_manager_show.style.display = 'block';
                area_sales_manager_show.style.display = 'block';
                executive_show.style.display = 'block';
                dealer_show.style.display = 'block';
                manager.required = true;
                regional_manager.required = false;
                area_sales_manager.required = false;
                dealer_code.required = true;
            }else if(value == 'Admin'){
                manager_show.style.display = 'none';
                regional_manager_show.style.display = 'none';
                area_sales_manager_show.style.display = 'none';
                executive_show.style.display = 'none';
                dealer_show.style.display = 'none';
                manager.required = false;
                regional_manager.required = false;
                area_sales_manager.required = false;
                dealer_code.required = false;
            }
        });
        $(document).on('change','#manager',function(){
            let manager_id = $(this).val();
            $.ajax({
                url : '/hierarchy/manager/' +manager_id,
                success : function(data){
                    $('#regional_manager').empty();
                    $('#area_sales_manager').empty();
                    $('#regional_manager').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each( data, function( item, value ) {
                        $('#regional_manager').append('<option value=' + value.regional_manager_id + '>' + value.regional_manager_name + '(' + value.regional_manager_email +')</option>');
                    });
                }
            })
        });
        $(document).on('change','#regional_manager',function(){
            let manager_id = document.getElementById('manager').value;
            let regional_manager_id = document.getElementById('regional_manager').value;
            $.ajax({
                url : '/hierarchy/regional/manager/' + manager_id + '/' + regional_manager_id,
                success : function(data){
                    $('#area_sales_manager').empty();
                    $('#area_sales_manager').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each(data,function(item,value){
                        $('#area_sales_manager').append('<option value=' + value.area_sales_manager_id + '>' + value.area_sales_manager_name + '(' + value.area_sales_manager_email +')</option>');
                    });
                }
            })
        });
        $(document).on('change','#area_sales_manager',function(){
            let manager_id = document.getElementById('manager').value;
            let regional_manager_id = document.getElementById('regional_manager').value;
            let area_sales_manager_id = document.getElementById('area_sales_manager').value;
            $.ajax({
                url : '/hierarchy/area/sales/manager/' + manager_id + '/' + regional_manager_id + '/' + area_sales_manager_id,
                success : function(data){
                    $('#executive').empty();
                    $('#executive').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each(data,function(item,value){
                        $('#executive').append('<option value=' + value.executive_id + '>' + value.executive_name + '(' + value.executive_email +')</option>');
                    });
                }
            })
        })
    </script>
@endsection
