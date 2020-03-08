@extends('master')
@section('commission','active')
@section('commission_index','active')
@section('content')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2 class="text-center">Commission<hr/></h2>
            </div>
        </div>
        <div class="row table-responsive">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Commission</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($commissions->count() ==! 0)
                        @foreach($commissions as $commission)
                            <tr>
                                <td>{{ ($commissions->currentpage()-1) * $commissions ->perpage() + $loop->index + 1 }}</td>
                                <td>{{$commission->commission}}</td>
                                <td>{{$commission->status}}</td>
                                <td>
                                    @can('commission_edit',Auth::user())
                                    <a class="btn btn-info btn-xs btn-block product_edit_button" href="{{route('commission.edit',$commission->id)}}">Edit</a>
                                    @endcan
                                    @can('commission_delete',Auth::user())
                                    <div class="modal fade" id="delete_modal_{{$commission->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Commission Delete</h4>
                                                </div>
                                                <div class="modal-body text-center text-danger">
                                                    <p>Are You Want To Delete This Commission ?</p>
                                                </div>
                                                {!! Form::open(['route'=>['commission.destroy',$commission->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$commission->id}}">Delete</button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Commission Create Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $commissions->links() !!}
            </div>
        </div>
    </div>
@endsection
