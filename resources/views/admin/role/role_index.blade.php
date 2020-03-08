@extends('master')
@section('role','active')
@section('role_index','active')
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="col-md-4 col-md-offset-3 text-center">All Role<hr/></h2>
        </div>
        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Role Name</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($roles->count() ==! 0)
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ ($roles->currentpage()-1) * $roles ->perpage() + $loop->index + 1 }}</td>
                                <td>{{$role->role_name}}</td>
                                <td>
                                    @can('role_edit',Auth::user())
                                    <a class="btn btn-info btn-xs" href="{{route('role.edit',$role->id)}}">Edit</a>
                                    @endcan
                                    @can('role_delete',Auth::user())
                                    <div class="modal fade" id="delete_modal_{{$role->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Role Delete</h4>
                                                </div>
                                                <div class="modal-body text-center text-danger">
                                                    <p>Are You Want To Delete This Role ?</p>
                                                    <p>Once You Delete These Role,This Role Record Will Be Delete Permanently</p>
                                                </div>
                                                {!! Form::open(['route'=>['role.destroy',$role->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_modal_{{$role->id}}">Delete</button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Role Create Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $roles->links() !!}
            </div>
        </div>
    </div>
@endsection
