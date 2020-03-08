@extends('master')
@section('cancel','active')
@section('cancel_index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>Cancel Sale<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'cancel_sale.search','method' => 'POST']) !!}
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search...">
                        <span class="input-group-btn"><button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button></span>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <br/>
        <div class="row table-responsive">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Party Name</th>
                        <th>Project</th>
                        <th>Canceled User Name</th>
                        <th>Cancel Reason</th>
                        <th>Created At</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($cancels->count() ==! 0)
                        @foreach($cancels as $cancel)
                        <tr>
                            <td>{{ ($cancels->currentpage()-1) * $cancels ->perpage() + $loop->index + 1 }}</td>
                            <td>
                                <a href="#" data-toggle="em_email" title="{{$cancel->em_email}}">{{$cancel->em_name}}</a>
                            </td>
                            <td>{{$cancel->position}}</td>
                            <td>{{$cancel->organization_name}}</td>
                            <td>{{$cancel->project}}</td>
                            <td>
                                <a href="#" data-toggle="cancel_u_email" title="{{$cancel->cancel_u_email}}">{{$cancel->cancel_u_name}}</a>
                            </td>
                            <td>
                                <div class="modal fade" id="cancel_description_{{$cancel->id}}" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title">Cancel Reason</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{$cancel->cancel_description}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a style = "cursor: pointer;text-decoration: none;color:black" data-toggle="modal" data-target="#cancel_description_{{$cancel->id}}">{{str_limit($cancel->cancel_description,$limit = 25,$end ='..')}}</a>
                            </td>
                            @php( $created_at = explode(' ',$cancel->created_at))
                            <td>{{$created_at[0]}}</td>
                            <td>
                                @can('cancel_invoice',Auth::user())
                                <a class="btn btn-success btn-xs btn-block" href="{{route('cancel_sale.invoice',$cancel->id)}}" target="_blank">invoice</a>
                                @endcan
                                @can('cancel_challan',Auth::user())
                                <a class="btn btn-primary btn-xs btn-block" href="{{route('cancel_sale.challan',$cancel->id)}}" target="_blank">challan</a>
                                @endcan
                                @can('cancel_delete',Auth::user())
                                        <div class="modal fade" id="delete_modal_{{$cancel->id}}" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Sale Delete</h4>
                                                    </div>
                                                    <div class="modal-body text-center text-danger">
                                                        <p>Are You Want To Delete This Sale ?</p>
                                                        <p>Once You Delete These Sale,This Sale Record Will Be Delete Permanently</p>
                                                    </div>
                                                    {!! Form::open(['route'=>['cancel_sale.destroy',$cancel->id],'method' => 'DELETE']) !!}
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                <a class="btn btn-danger btn-xs btn-block" style="margin-top: 5px" data-toggle="modal" data-target="#delete_modal_{{$cancel->id}}">delete</a>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">No Sale Cancel Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $cancels->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="cancel_u_email"]').tooltip();
            $('[data-toggle="em_email"]').tooltip();
        });
    </script>
    @endsection
