@extends('master')
@section('role','active')
@section('create_role','active')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route'=>'role.store','method'=>'POST']) !!}
                    <div class="row">
                        <div class="col-md-7 col-md-offset-2">
                            <h2 class="text-center">Create Role<hr/></h2>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="role_name">Role Name :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="role_name" placeholder="Create Roll" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <label class="form-control text-center">Users</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='users')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Product & Brand</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='product&brand')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Stock</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='stock')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <label class="form-control text-center">Commission</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='commission')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">SM/NSM/AGM</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='sm_nsm_agm')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Account</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='account')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <label class="form-control text-center">MD\ED</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='md_ed')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Warehouse</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='warehouse')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Distribution</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='distribution')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <label class="form-control text-center">Challan</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='challan')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Invoice</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='invoice')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Approved Sale</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='approved_sale')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <label class="form-control text-center">Cancel Sale</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='cancel_sale')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Report</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='report')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <label class="form-control text-center">Daily Report</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='daily_report')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <label class="form-control text-center">Role</label>
                        @foreach($permissions as $permission)
                            @if($permission->permission_for =='role')
                                <div class="checkbox">
                                    <input class="styled-checkbox" type="checkbox" id="styled-checkbox-{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
                                    <label for="styled-checkbox-{{$permission->id}}"></label>
                                    <span class="check-label-name text-primary">{{$permission->permission_name}}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
