@extends('master')
@section('approved_sale','active')
@section('approved_sale_index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>Approved Sale<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'approved_sale.search','method' => 'POST']) !!}
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
                    @if($approved->count() ==! 0)
                        @foreach($approved as $approve)
                            <tr>
                                <td>{{ ($approved->currentpage()-1) * $approved ->perpage() + $loop->index + 1 }}</td>
                                <td>
                                    <a href="#" data-toggle="email" title="{{$approve->em_email}}">{{$approve->em_name}}</a>
                                </td>
                                <td>{{$approve->position}}</td>
                                <td>{{$approve->brand_name}}</td>
                                <td>{{$approve->challan_no}}</td>
                                <td>{{$approve->organization_name}}</td>
                                @php( $created_at = explode(' ',$approve->created_at))
                                <td>{{$created_at[0]}}</td>
                                <td>
                                    @can('approved_challan',Auth::user())
                                    <a class="btn btn-primary btn-xs btn-block product_edit_button" href="{{route('approved_challan.details',$approve->id)}}" target="_blank">Challan</a>
                                    @endcan
                                    @can('approved_additional_challan',Auth::user())
                                    @if($approve->add_pieces_total != 0)
                                    <a class="btn btn-info btn-xs btn-block product_edit_button" href="{{route('approved_additional.challan.details',$approve->id)}}" target="_blank">Additional</a>
                                    @endif
                                    @endcan
                                    @can('approved_total_challan',Auth::user())
                                    <a class="btn btn-success btn-xs btn-block product_edit_button" href="{{route('approved_total.challan.details',$approve->id)}}" target="_blank">Total Challan</a>
                                    @endcan
                                    @can('approved_invoice',Auth::user())
                                    <a class="btn btn-primary btn-xs btn-block product_edit_button" href="{{route('approved_invoice.details',$approve->id)}}" target="_blank">Invoice</a>
                                    @endcan
                                    @can('approved_additional_invoice',Auth::user())
                                    @if($approve->add_pieces_total != 0)
                                    <a class="btn btn-info btn-xs btn-block product_edit_button" href="{{route('approved_additional.invoice.details',$approve->id)}}" target="_blank">Additional</a>
                                    @endif
                                    @endcan
                                    @can('approved_total_invoice',Auth::user())
                                    <a class="btn btn-success btn-xs btn-block product_edit_button" href="{{route('approved_total.invoice.details',$approve->id)}}" target="_blank">Total Invoice</a>
                                    @endcan
                                    @can('approved_delete',Auth::user())
                                    <div class="modal fade" id="delete_modal_{{$approve->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Approved Sale Delete</h4>
                                                </div>
                                                <div class="modal-body text-center text-danger">
                                                    <p>Are You Want To Delete This Approved Sale ?</p>

                                                    <p>Once You Delete These Sale,This Approved Sale Record Will Be Delete Permanently</p>
                                                </div>
                                                {!! Form::open(['route'=>['approved_sale.destroy',$approve->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$approve->id}}">Delete</button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Approved Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $approved->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="email"]').tooltip();
        });
    </script>
@endsection
