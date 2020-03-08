@extends('master')
@section('challan','active')
@section('challan_index','active')
@section('content')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Challan<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'challan.search','method' => 'POST']) !!}
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
                        <th>Employee Name</th>
                        <th>Position</th>
                        <th>Brand Name</th>
                        <th>Challan No</th>
                        <th>Organization Name</th>
                        <th>Created At</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($challans->count() ==! 0)
                        @foreach($challans as $challan)
                            <tr>
                                <td>{{ ($challans->currentpage()-1) * $challans ->perpage() + $loop->index + 1 }}</td>
                                <td>
                                    <a href="#" data-toggle="email" title="{{$challan->em_email}}">{{$challan->em_name}}</a>
                                </td>
                                <td>{{$challan->position}}</td>
                                <td>{{$challan->brand_name}}</td>
                                <td>{{$challan->challan_no}}</td>
                                <td>{{$challan->organization_name}}</td>
                                @php( $created_at = explode(' ',$challan->created_at))
                                <td>{{$created_at[0]}}</td>
                                <td>
                                    @can('challan_challan',Auth::user())
                                    <a class="btn btn-primary btn-xs btn-block product_edit_button" href="{{route('challan.show',$challan->id)}}" target="_blank">challan</a>
                                    @endcan
                                    @can('challan_additional',Auth::user())
                                    @if($challan->add_pieces_total != 0)
                                    <a class="btn btn-info btn-xs btn-block product_edit_button" href="{{route('additional_challan.details',$challan->id)}}" target="_blank">Additional</a>
                                    @endif
                                    @endcan
                                    @can('challan_total',Auth::user())
                                    <a class="btn btn-success btn-xs btn-block product_edit_button" href="{{route('total_challan.details',$challan->id)}}" target="_blank">Total</a>
                                    @endcan
                                    @can('challan_delete',Auth::user())
                                        <div class="modal fade" id="delete_modal_{{$challan->id}}" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Challan Delete</h4>
                                                    </div>
                                                    <div class="modal-body text-center text-danger">
                                                        <p>Are You Want To Delete This Challan ?</p>
                                                        <p>Once You Delete These Sale,This Challan Record Will Be Delete Permanently</p>
                                                    </div>
                                                    {!! Form::open(['route'=>['challan.destroy',$challan->id],'method' => 'DELETE']) !!}
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$challan->id}}">Delete</button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Challan Create Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $challans->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="email"]').tooltip();
        });
    </script>
    @endsection
