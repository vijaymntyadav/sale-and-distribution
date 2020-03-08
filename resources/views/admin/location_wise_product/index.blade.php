@extends('master')
@section('report','active')
@section('location_wise_product.index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Products<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'location_wise_product.search','method' => 'POST']) !!}
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
                        <th>Division</th>
                        <th>District</th>
                        <th>Sub_district</th>
                        <th>Postal Code</th>
                        <th>P_Code</th>
                        <th>P_Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Pieces</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($locations->count() ==! 0)
                        @foreach($locations as $location)
                            <tr>
                                <td>{{ ($locations->currentpage()-1) * $locations ->perpage() + $loop->index + 1 }}</td>
                                <td>{{$location->division}}</td>
                                <td>{{$location->district}}</td>
                                <td>{{$location->sub_district}}</td>
                                <td>{{$location->postal_code}}</td>
                                <td>{{$location->product_code}}</td>
                                <td>{{$location->product_name}}</td>
                                <td>{{$location->category}}</td>
                                <td>{{$location->price}}/-</td>
                                <td>{{$location->pieces}}pieces</td>
                                <td>
                                    <div class="modal fade" id="delete_modal_{{$location->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Track Delete</h4>
                                                </div>
                                                <div class="modal-body text-center text-danger">
                                                    <p>Are You Want To Delete This Track ?</p>
                                                    <p>Once You Delete These Track,This Track Record Will Be Delete Permanently</p>
                                                </div>
                                                {!! Form::open(['route'=>['location_wise_product.destroy',$location->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs " data-toggle="modal" data-target="#delete_modal_{{$location->id}}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12">No Product Available</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $locations->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="m_email"]').tooltip();
            $('[data-toggle="rm_email"]').tooltip();
            $('[data-toggle="asm_email"]').tooltip();
            $('[data-toggle="e_email"]').tooltip();
            $('[data-toggle="d_name"]').tooltip();
        });
    </script>
@endsection