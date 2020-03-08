@extends('master')
@section('invoice','active')
@section('invoice_index','active')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Invoice<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'invoice.search','method' => 'POST']) !!}
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
                    @if($invoices->count() ==! 0)
                        @foreach($invoices as $invoice)
                            <tr>
                                <td>{{ ($invoices->currentpage()-1) * $invoices ->perpage() + $loop->index + 1 }}</td>
                                <td>
                                    <a href="#" data-toggle="email" title="{{$invoice->em_email}}">{{$invoice->em_name}}</a>
                                </td>
                                <td>{{$invoice->position}}</td>
                                <td>{{$invoice->brand_name}}</td>
                                <td>{{$invoice->challan_no}}</td>
                                <td>{{$invoice->organization_name}}</td>
                                @php( $created_at = explode(' ',$invoice->created_at))
                                <td>{{$created_at[0]}}</td>
                                <td>
                                    @can('invoice_invoice',Auth::user())
                                    <a class="btn btn-primary btn-xs btn-block product_edit_button" href="{{route('invoice.show',$invoice->id)}}" target="_blank">Invoice</a>
                                    @endcan
                                    @can('invoice_additional',Auth::user())
                                    @if($invoice->add_pieces_total != 0)
                                    <a class="btn btn-info btn-xs btn-block product_edit_button" href="{{route('additional_invoice.details',$invoice->id)}}" target="_blank">Additional</a>
                                    @endif
                                    @endcan
                                    @can('invoice_total',Auth::user())
                                    <a class="btn btn-success btn-xs btn-block product_edit_button" href="{{route('total_invoice.details',$invoice->id)}}" target="_blank">Total</a>
                                    @endcan
                                    @can('invoice_delete',Auth::user())
                                        <div class="modal fade" id="delete_modal_{{$invoice->id}}" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Invoice Delete</h4>
                                                    </div>
                                                    <div class="modal-body text-center text-danger">
                                                        <p>Are You Want To Delete This Invoice ?</p>

                                                        <p>Once You Delete These Sale,This Invoice Record Will Be Delete Permanently</p>
                                                    </div>
                                                    {!! Form::open(['route'=>['invoice.destroy',$invoice->id],'method' => 'DELETE']) !!}
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$invoice->id}}">Delete</button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Invoice Create Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $invoices->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="email"]').tooltip();
        });
    </script>
@endsection
