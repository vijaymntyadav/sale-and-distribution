@extends('master')
@section('md_ed','active')
@section('md_ed.index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Sale<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'md_ed.sale.search','method' => 'POST']) !!}
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
                        <th>Brand</th>
                        <th>Organization Name</th>
                        <th>Number</th>
                        <th>Total Amount</th>
                        <th>Total Due</th>
                        <th>SM_Status</th>
                        <th>Account_Status</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($sales->count() ==! 0)
                        @foreach($sales as $sale)
                            <tr>
                                <td>{{ ($sales->currentpage()-1) * $sales ->perpage() + $loop->index + 1 }}</td>
                                <td>
                                    <a href="#" data-toggle="email" title="{{$sale->em_email}}">{{$sale->em_name}}</a>
                                </td>
                                <td>{{$sale->position}}</td>
                                <td>{{$sale->brand_name}}</td>
                                <td>{{$sale->organization_name}}</td>
                                <td>{{$sale->mobile_number}}</td>
                                <td>{{$sale->total_amount}}/-</td>
                                <td>{{$sale->total_outstanding}}/-</td>
                                @if($sale->cancel == 0)
                                    <td>
                                        @if($sale->sm_approved == 0)
                                            <div class="td_design_two text-center"><b>{{'Pending'}}</b></div>
                                        @else
                                            <a href="#" data-toggle="sm_email" title="{{$sale->sm_email}}">{{$sale->sm_name}}</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($sale->account_approved == 0)
                                            <div class="td_design_two text-center"><b>{{'Pending'}}</b></div>
                                        @else
                                            <a href="#" data-toggle="account_email" title="{{$sale->account_email}}">{{$sale->account_name}}</a>
                                        @endif
                                    </td>
                                @else
                                    <div class="modal fade" id="cancel_description_{{$sale->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h4 class="modal-title">Cancel Reason</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{{$sale->cancel_description}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <td>
                                        <button class="td_design_three text-center" data-toggle="modal" data-target="#cancel_description_{{$sale->id}}"><b>{{'Canceled'}}</b></button>
                                    </td>
                                    <td>
                                        <a href="#" data-toggle="cancel_u_email" title="{{$sale->cancel_u_email}}">{{$sale->cancel_u_name}}</a>
                                    </td>
                                @endif
                                <td>
                                    <a class="btn btn-success btn-xs btn-block" href="{{route('md_ed.show',$sale->id)}}" target="_blank">Details</a>
                                    @if($sale->cancel == 0 &&  $sale->md_approved == 0)
                                        <div class="modal fade" id="myModal_{{$sale->id}}" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-center">Sale Cancel</h4>
                                                        <p class="text-danger text-center">Once You Cancel These Sale,These Sale Will Cancel Permanently</p>
                                                    </div>
                                                    {!! Form::open(['route' => 'md_ed.cancel','method' => 'POST']) !!}
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{$sale->id}}"/>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2" for="email">Cancel Reason:</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="cancel_textarea" name="cancel_description" rows="10" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        <a class="btn btn-warning btn-xs btn-block" data-toggle="modal" data-target="#myModal_{{$sale->id}}">cancel</a>
                                    @elseif($sale->cancel == 1)
                                        <br/>
                                        <button class="btn btn-warning btn-xs btn-block">canceled</button>
                                    @endif
                                    @if($sale->md_approved == 1 && $sale->cancel == 0)
                                        <br/>
                                        <button class="btn btn-primary btn-xs btn-block">Approved</button>
                                    @elseif($sale->md_approved == 0 && $sale->cancel == 0)
                                        <br/>
                                        <a class="btn btn-primary btn-xs btn-block" href="{{route('md_ed.pending',$sale->id)}}">pending</a>
                                    @endif
                                    <br/>
                                    @if($sale->md_approved == 0 && $sale->cancel == 0)
                                    <div class="modal fade" id="edit_modal_{{$sale->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title text-center">Edit Location</h4>
                                                </div>
                                                {!! Form::open(['class'=>'form-horizontal','route' => ['md_ed.update',$sale->id],'method' => 'PATCH']) !!}
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="division">Division :</label>
                                                        <div class="col-sm-10">
                                                            <select class="user_role_option manager form-control" id="division" name="division" required>
                                                                <option selected disabled value="">choose an option</option>
                                                                <option value="{{'Dhaka'}}">{{'Dhaka'}}</option>
                                                                <option value="{{'Chittagong'}}">{{'Chittagong'}}</option>
                                                                <option value="{{'Barisal'}}">{{'Barisal'}}</option>
                                                                <option value="{{'Khulna'}}">{{'Khulna'}}</option>
                                                                <option value="{{'Mymensingh'}}">{{'Mymensingh'}}</option>
                                                                <option value="{{'Rajshahi'}}">{{'Rajshahi'}}</option>
                                                                <option value="{{'Sylhet'}}">{{'Sylhet'}}</option>
                                                                <option value="{{'Rangpur'}}">{{'Rangpur'}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="district">district :</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" id="district" class="form-control" name="district" value="{{$sale->district}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="sub_district">Sub Locality :</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" id="sub_district" class="form-control" name="sub_district" value="{{$sale->sub_district}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2" for="postal_code">Postal Code :</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" id="postal_code" class="form-control" name="postal_code" value="{{$sale->postal_code}}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info btn-xs btn-block" data-toggle="modal" data-target="#edit_modal_{{$sale->id}}">edit</button>
                                    <br/>
                                    <div class="modal fade" id="delete_modal_{{$sale->id}}" role="dialog">
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
                                                {!! Form::open(['route'=>['md_ed.destroy',$sale->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$sale->id}}">Delete</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Sale Create Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $sales->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="email"]').tooltip();
            $('[data-toggle="sm_email"]').tooltip();
            $('[data-toggle="cancel_u_email"]').tooltip();
            $('[data-toggle="account_email"]').tooltip();
        });
    </script>
@endsection


