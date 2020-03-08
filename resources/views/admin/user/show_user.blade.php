@extends('master')
@section('user','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row ">
            <div class="col-md-4 single_profile_background_color">
                <div class="row single_profile_margin ">
                    <div class="col-md-12 text-center">
                        <img class="single_profile_image" src="{{asset('assets/images/employee_image/'.$user->image)}}" alt="user">
                    </div>
                    <div class="col-md-12">
                        <br/>
                        <div><span class="single_profile_text_highlight">Name : </span><span class="single_profile_text_text">{{$user->name}}</span></div>
                        <div><span class="single_profile_text_highlight">Gender : </span><span class="single_profile_text_text">{{$user->gender}}</span></div>
                        <div><span class="single_profile_text_highlight">phone : </span><span class="single_profile_text_text">{{$user->phone}}</span></div>
                        <div><span class="single_profile_text_highlight">Email : </span><span class="single_profile_text_text">{{$user->email}}</span></div>
                        <div><span class="single_profile_text_highlight">Joining Date : </span><span class="single_profile_text_text">{{date('F d,Y',strtotime($user->created_at))}}</span></div>
                        <div><span class="single_profile_text_highlight">NID No. : </span><span class="single_profile_text_text">{{$user->nid}}</span></div>
                        <div><span class="single_profile_text_highlight">Position : </span><span class="single_profile_text_text">{{$user->position}}</span></div>
                        <div><span class="single_profile_text_highlight">Address : </span><span class="single_profile_text_text">{{$user->address}}</span></div>
                        <div><span class="single_profile_text_highlight">Area : </span><span class="single_profile_text_text">{{$user->area}}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 table-responsive">
                <h2 class="text-center">All Products<hr/></h2>
                <div style="overflow-y:scroll; overflow-x:hidden; height:400px;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Pieces</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($sales->count() ==! 0)
                            @foreach($sales as $sale)
                                <tr>
                                    <td>{{$sale->product_code}}</td>
                                    <td>{{$sale->product_name}}</td>
                                    <td>{{$sale->category}}</td>
                                    <td>{{$sale->price}}/-</td>
                                    <td>{{$sale->pieces}}pieces</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="12">No Product Available</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br/>
        @if($user->position == 'Sr.Manager' || $user->position == 'Manager' || $user->position == 'RM' || $user->position == 'ASM' || $user->position == 'Sr.Executive' || $user->position == 'Executive')
            {!! Form::open(['route' => 'hierarchy.report.single.page','method' => 'POST']) !!}
            <div class="row table-responsive">
                <div class="col-md-5">
                    <h2 class="text-center">Accounts<hr/></h2>
                    <div style="overflow-y:scroll; overflow-x:hidden; height:400px;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Challan No</th>
                                <th>Total Amount</th>
                                <th>Total Due</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($reports->count() ==! 0)
                                @foreach($reports as $sale)
                                    <tr>
                                        <td>{{$sale->challan_no}}</td>
                                        <td>{{$sale->total_amount}}/-</td>
                                        <td>{{$sale->total_outstanding}}/-</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7">No Transaction Available</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5 table-responsive">
                    <h2 class="text-center">Daily Report<hr/></h2>
                    <div style="overflow-y:scroll; overflow-x:hidden; height:400px;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Market Entry</th>
                                <th>Next Point Entry</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($daily_reports->count() ==! 0)
                                @foreach($daily_reports as $report)
                                    <?php
                                    $position = \App\User::where('id','=',$report->em_id)->first();
                                    $next_entry = \App\NextVisit::where('entry_id','=',$report->id)->get();
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="modal fade" id="entry_details_modal_{{$report->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h4 class="modal-title">Dealer Name : {{$report->dealer_name}}</h4>
                                                            <h4 class="modal-title">Visit Date : {{$report->date}}</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Employee Name : {{$report->em_name}}</p>
                                                            <p>Employee Email : {{$report->em_email}}</p>
                                                            <p>In Time : {{$report->in_time}}</p>
                                                            <p>Out Time : {{$report->out_time}}</p>
                                                            <p>Order Status : {{$report->order_status}}</p>
                                                            <p>Mode Of Transport : {{$report->mode_of_transport}}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-success cursor_pointer" data-toggle="modal" data-target="#entry_details_modal_{{$report->id}}">Dealer Name:{{$report->dealer_name}}</li>
                                            </ul>
                                        </td>
                                        @if($next_entry->count() ==! 0)
                                            <td>
                                                <ul class="list-group">
                                                    @foreach($next_entry as $entry)
                                                        <div class="modal fade" id="next_details_modal_{{$entry->id}}" role="dialog">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h4 class="modal-title">Dealer Name : {{$entry->dealer_name}}</h4>
                                                                        <h4 class="modal-title">Visit Date : {{$entry->date}}</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Employee Name : {{$entry->em_name}}</p>
                                                                        <p>Employee Email : {{$entry->em_email}}</p>
                                                                        <p>In Time : {{$entry->in_time}}</p>
                                                                        <p>Out Time : {{$entry->out_time}}</p>
                                                                        <p>Order Status : {{$entry->order_status}}</p>
                                                                        <p>Collection Status : {{$entry->collection_status}}</p>
                                                                        <p>Mode Of Transport : {{$entry->mode_of_transport}}</p>
                                                                        <p>Distance From Previous Station : {{$entry->distance_from_previous_station}}</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <li class="list-group-item list-group-item-info cursor_pointer" data-toggle="modal" data-target="#next_details_modal_{{$entry->id}}">Dealer Name:{{$entry->dealer_name}}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        @else
                                            <td>
                                                <ul class="list-group">
                                                    <li class="list-group-item list-group-item-danger">{{'No Next Entry Visit'}}</li>
                                                </ul>
                                            </td>
                                        @endif
                                        <td>{{$report->date}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9">No Report Created Yet</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-3 text-center">
                    <h2 >All Approved Sale<hr/></h2>
                </div>
            </div>
            @if($user->position == 'Sr.Manager' || $user->position == 'Manager')
                <input type="hidden" name="id" value="{{$user->id}}"/>
                <input type="hidden" name="position" value="{{$user->position}}"/>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="manager">Profile Holder :</label>
                            <select class="form-control" id="manager" name="manager">
                                <option selected value="{{$user->id}}">choose an option</option>
                                <option value="{{$user->id}}">{{$user->name}}({{$user->email}})</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="rm">RM:</label>
                            <select class="form-control rm" id="rm" name="rm">
                                <option selected value="0">choose an option</option>
                                @foreach($rm_s as $rm)
                                    <option value="{{$rm->regional_manager_id}}">{{$rm->regional_manager_name}}({{$rm->regional_manager_email}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="asm">ASM:</label>
                            <select class="form-control asm" id="asm" name="asm">
                                <option selected value="0">choose an option</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="executive">Sr.Executive/Executive:</label>
                            <select class="form-control executive" id="executive" name="executive">
                                <option selected value="0">choose an option</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="dealer">Dealer:</label>
                            <select class="form-control dealer" id="dealer" name="dealer">
                                <option selected value="0">choose an option</option>
                                @foreach($dealer_s as $dealer)
                                    <option value="{{$dealer->id}}">{{$dealer->dealer_name}}({{$dealer->dealer_code}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            @elseif($user->position == 'RM')
                <input type="hidden" name="id" value="{{$user->id}}"/>
                <input type="hidden" name="position" value="{{$user->position}}"/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="rm">Profile Holder :</label>
                            <select class="form-control" id="rm" name="rm">
                                <option selected value="{{$user->id}}">choose an option</option>
                                <option value="{{$user->id}}">{{$user->name}}({{$user->email}})</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="asm">ASM:</label>
                            <select class="form-control asm" id="asm" name="asm">
                                <option selected value="0">choose an option</option>
                                @foreach($asm_s as $asm)
                                    <option value="{{$asm->area_sales_manager_id}}">{{$asm->area_sales_manager_name}}({{$asm->area_sales_manager_email}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="executive">Sr.Executive/Executive:</label>
                            <select class="form-control executive" id="executive" name="executive">
                                <option selected value="0">choose an option</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="dealer">Dealer:</label>
                            <select class="form-control dealer" id="dealer" name="dealer">
                                <option selected value="0">choose an option</option>
                                @foreach($dealer_s as $dealer)
                                    <option value="{{$dealer->id}}">{{$dealer->dealer_name}}({{$dealer->dealer_code}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            @elseif($user->position == 'ASM')
                <input type="hidden" name="id" value="{{$user->id}}"/>
                <input type="hidden" name="position" value="{{$user->position}}"/>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <div class="form-group">
                            <label for="asm">Profile Holder :</label>
                            <select class="form-control" id="asm" name="asm">
                                <option selected value="{{$user->id}}">choose an option</option>
                                <option value="{{$user->id}}">{{$user->name}}({{$user->email}})</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="executive">Sr.Executive/Executive:</label>
                            <select class="form-control executive" id="executive" name="executive">
                                <option selected value="0">choose an option</option>
                                @foreach($executive_s as $executive)
                                    <option value="{{$executive->executive_id}}">{{$executive->executive_name}}({{$executive->executive_email}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="dealer">Dealer:</label>
                            <select class="form-control dealer" id="dealer" name="dealer">
                                <option selected value="0">choose an option</option>
                                @foreach($dealer_s as $dealer)
                                    <option value="{{$dealer->id}}">{{$dealer->dealer_name}}({{$dealer->dealer_code}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            @elseif($user->position == 'Sr.Executive' || $user->position == 'Executive')
                <input type="hidden" name="id" value="{{$user->id}}"/>
                <input type="hidden" name="position" value="{{$user->position}}"/>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="executive">Profile Holder :</label>
                            <select class="form-control" id="executive" name="executive">
                                <option selected value="{{$user->id}}">choose an option</option>
                                <option value="{{$user->id}}">{{$user->name}}({{$user->email}})</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="dealer">Dealer:</label>
                            <select class="form-control" id="dealer" name="dealer">
                                <option selected value="0">choose an option</option>
                                @foreach($dealer_s as $dealer)
                                    <option value="{{$dealer->id}}">{{$dealer->dealer_name}}({{$dealer->dealer_code}})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-2 col-md-offset-4">
                    <div class="form-group text-center">
                        <label for="sel1">Search Report</label>
                        <button type="submit" class="btn btn-success btn-block hierarchy_wise_report_search">Search</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        @else
            <div class="row table-responsive">
                <div class="col-md-10" >
                    <h2 class="text-center">Accounts<hr/></h2>
                    <div style="overflow-y:scroll; overflow-x:hidden; height:400px;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Challan No</th>
                                <th>Total Amount</th>
                                <th>Total Due</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($reports->count() ==! 0)
                                @foreach($reports as $sale)
                                    <tr>
                                        <td>{{$sale->challan_no}}</td>
                                        <td>{{$sale->total_amount}}/-</td>
                                        <td>{{$sale->total_outstanding}}/-</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7">No Transaction Available</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-3 text-center">
                    <h2 >All Approved Sale<hr/></h2>
                </div>
            </div>
        @endif
        <div class="row table-responsive">
            <div class="col-md-10">
                <div style="overflow-y:scroll; overflow-x:hidden; height:400px;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Challan No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Organization Name</th>
                            <th>Number</th>
                            <th>Total Amount</th>
                            <th>Total Due</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($reports->count() ==! 0)
                            @foreach($reports as $sale)
                                <tr>
                                    <td>{{$sale->challan_no}}</td>
                                    <td>{{$sale->em_name}}</td>
                                    <td>{{$sale->position}}</td>
                                    <td>{{$sale->organization_name}}</td>
                                    <td>{{$sale->mobile_number}}</td>
                                    <td>{{$sale->total_amount}}/-</td>
                                    <td>{{$sale->total_outstanding}}/-</td>
                                    <td>
                                        <a class="btn btn-success btn-xs btn-block" href="{{route('sale_report.show',$sale->id)}}" target="_blank">Details</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">No Sale Available</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('change','.rm',function(){
            $('.asm').empty();
            $('.dealer').empty();
            $.ajax({
                url : '/user/rm/find/asm',
                data : {rm:$(this).val()},
                success : function(data){
                    $('.asm').append('<option selected value="0">Choose An Option</option>');
                    jQuery.each( data[0], function( item, value ) {
                        $('.asm').append('<option value=' + value.area_sales_manager_id + '>' + value.area_sales_manager_name + '(' + value.area_sales_manager_email +')</option>');
                    });
                    $('.dealer').append('<option selected value="0">Choose An Option</option>');
                    jQuery.each( data[1], function( item, value ) {
                        $('.dealer').append('<option value=' + value.dealer_id + '>' + value.dealer_name + '(' + value.dealer_code +')</option>');
                    });
                }
            });
        });
        $(document).on('change','.asm',function(){
            $('.executive').empty();
            $('.dealer').empty();
            $.ajax({
                url : '/user/asm/find/executive',
                data : {asm:$(this).val()},
                success : function(data){
                    $('.executive').append('<option selected value="0">Choose An Option</option>');
                    jQuery.each( data[0], function( item, value ) {
                        $('.executive').append('<option value=' + value.executive_id + '>' + value.executive_name + '(' + value.executive_email +')</option>');
                    });
                    $('.dealer').append('<option selected value="0">Choose An Option</option>');
                    jQuery.each( data[1], function( item, value ) {
                        $('.dealer').append('<option value=' + value.dealer_id + '>' + value.dealer_name + '(' + value.dealer_code +')</option>');
                    });
                }
            });
        });
        $(document).on('change','.executive',function(){
            $('.dealer').empty();
            $.ajax({
                url : '/user/executive/find/dealer',
                data : {executive : $(this).val()},
                success : function(data){
                    $('.dealer').append('<option selected value="0">Choose An Option</option>');
                    jQuery.each( data[0], function( item, value ) {
                        $('.dealer').append('<option value=' + value.dealer_id + '>' + value.dealer_name + '(' + value.dealer_code +')</option>');
                    });
                }
            })
        })
    </script>
@endsection
