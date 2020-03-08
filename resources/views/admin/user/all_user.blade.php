@extends('master')
@section('user','active')
@section('all_user','active')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h2>All User<hr/></h2>
            <div class="search_margin">
                {!! Form::open(['route' => 'exist.user.search','method' => 'POST']) !!}
                <div class="input-group">
                    <input type="text" name="user_search" class="form-control" placeholder="Search...">
                    <input type="hidden" name="user_category_code" value="1"/>
                    <span class="input-group-btn"><button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button></span>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <br/>
    <div class="container">
    @if($users->count() ==! 0)
        <div class="row ">
            <div class="col-md-offset-5 text-center">
                <h2 class="title_user_design">Admin</h2></h2>
            </div>
            <br/>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($users as $user)
                            @if($user->position == 'Admin')
                                <div class="col-md-3 card_box card-1">
                                    <p><img class="user_image_design" src="{{asset('assets/images/employee_image/'.$user->image)}}" alt=""></p>
                                    <p>Name : {{$user->name}}</p>
                                    <p>Email : {{$user->email}}</p>
                                    <p>Phone : {{$user->phone}}</p>
                                    <p>Position : {{$user->position}}</p>
                                    <div class="text-center">
                                        <table class="table_left_margin">
                                            <tr>
                                                @can('user_details',Auth::user())
                                                    <td><a class="btn btn-success" href="{{route('user.show',$user->first_name.'_'.$user->last_name.'_'.$user->id)}}" target="_blank">Details</a></td>
                                                @endcan
                                                @can('user_edit',Auth::user())
                                                    <td><a class="btn btn-primary user_margin" href="{{route('all.user.edit',$user->id)}}" target="_blank">Edit</a></td>
                                                @endcan
                                                @can('user_delete',Auth::user())
                                                    <td>
                                                        <div class="modal fade" id="delete_modal_{{$user->id}}" role="dialog">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">User Delete</h4>
                                                                    </div>
                                                                    <div class="modal-body text-center text-danger">
                                                                        <p>Are You Want To Delete This User ?</p>
                                                                        <p>Once You Delete These User,This UserRecord Will Be Delete Permanently</p>
                                                                    </div>
                                                                    {!! Form::open(['route' => ['user.destroy',$user->id], 'method' => 'DELETE']) !!}
                                                                    <div class="modal-footer">
                                                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-danger user_margin" data-toggle="modal" data-target="#delete_modal_{{$user->id}}">Delete</button>
                                                    </td>
                                                @endcan
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-offset-5 text-center">
                <h2 class="title_user_design">Employee</h2></h2>
            </div>
            <br/>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($users as $user)
                            @if($user->position != 'Dealer' && $user->position != 'Admin')
                                <div class="col-md-3 card_box card-1">
                                    <p><img class="user_image_design" src="{{asset('assets/images/employee_image/'.$user->image)}}" alt=""></p>
                                    <p>Name : {{$user->name}}</p>
                                    <p>Email : {{$user->email}}</p>
                                    <p>Phone : {{$user->phone}}</p>
                                    <p>Position : {{$user->position}}</p>
                                    <div class="text-center">
                                        <table class="table_left_margin">
                                            <tr>
                                                @can('user_details',Auth::user())
                                                    <td><a class="btn btn-success" href="{{route('user.show',$user->first_name.'_'.$user->last_name.'_'.$user->id)}}" target="_blank">Details</a></td>
                                                @endcan
                                                @can('user_edit',Auth::user())
                                                    <td><a class="btn btn-primary user_margin" href="{{route('all.user.edit',$user->id)}}" target="_blank">Edit</a></td>
                                                @endcan
                                                @can('user_delete',Auth::user())
                                                    <td>
                                                        <div class="modal fade" id="delete_modal_{{$user->id}}" role="dialog">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">User Delete</h4>
                                                                    </div>
                                                                    <div class="modal-body text-center text-danger">
                                                                        <p>Are You Want To Delete This User ?</p>
                                                                        <p>Once You Delete These User,This UserRecord Will Be Delete Permanently</p>
                                                                    </div>
                                                                    {!! Form::open(['route' => ['user.destroy',$user->id], 'method' => 'DELETE']) !!}
                                                                    <div class="modal-footer">
                                                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-danger user_margin" data-toggle="modal" data-target="#delete_modal_{{$user->id}}">Delete</button>
                                                    </td>
                                                @endcan
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-offset-5 text-center">
                <h2 class="title_user_design">Dealer</h2></h2>
            </div>
            <br/>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($users as $user)
                            @if($user->position == 'Dealer')
                                <div class="col-md-3 card_box card-1">
                                    <p><img class="user_image_design" src="{{asset('assets/images/employee_image/'.$user->image)}}" alt=""></p>
                                    <p>Name : {{$user->name}}</p>
                                    <p>Email : {{$user->email}}</p>
                                    <p>Phone : {{$user->phone}}</p>
                                    <p>Position : {{$user->position}}</p>
                                    <div class="text-center">
                                        <table class="table_left_margin">
                                            <tr>
                                                @can('user_details',Auth::user())
                                                    <td><a class="btn btn-success" href="{{route('user.show',$user->first_name.'_'.$user->last_name.'_'.$user->id)}}" target="_blank">Details</a></td>
                                                @endcan
                                                @can('user_edit',Auth::user())
                                                    <td><a class="btn btn-primary user_margin" href="{{route('all.user.edit',$user->id)}}" target="_blank">Edit</a></td>
                                                @endcan
                                                @can('user_delete',Auth::user())
                                                    <td>
                                                        <div class="modal fade" id="delete_modal_{{$user->id}}" role="dialog">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title">User Delete</h4>
                                                                    </div>
                                                                    <div class="modal-body text-center text-danger">
                                                                        <p>Are You Want To Delete This User ?</p>
                                                                        <p>Once You Delete These User,This UserRecord Will Be Delete Permanently</p>
                                                                    </div>
                                                                    {!! Form::open(['route' => ['user.destroy',$user->id], 'method' => 'DELETE']) !!}
                                                                    <div class="modal-footer">
                                                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-danger user_margin" data-toggle="modal" data-target="#delete_modal_{{$user->id}}">Delete</button>
                                                    </td>
                                                @endcan
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-12 text-center">
            <div class="card_box_two card-2">
                <p><img class="" src="{{asset('assets/images/not_found/not_found.jpg')}}" alt=""></p>
            </div>
        </div>
    @endif
    </div>
    {!! $users->links() !!}
@endsection