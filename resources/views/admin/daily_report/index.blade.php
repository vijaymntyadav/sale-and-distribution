@extends('master')
@section('daily_report','active')
@section('daily_report.index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>Daily Report<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'daily.report.search','method' => 'POST']) !!}
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
                        <th>Market Entry</th>
                        <th>Next Point Entry</th>
                        <th>Date</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($reports->count() ==! 0)
                        @foreach($reports as $report)
                            <?php
                            $position = \App\User::where('id','=',$report->em_id)->first();
                            $next_entry = \App\NextVisit::where('entry_id','=',$report->id)->get();
                            ?>
                            <tr>
                                <td>{{ ($reports->currentpage()-1) * $reports ->perpage() + $loop->index + 1 }}</td>
                                <td>
                                    <a href="#" data-toggle="em_email" title="{{$report->em_email}}">{{$report->em_name}}</a>
                                </td>
                                <td>
                                    @if(empty($position))
                                        <div class="text-danger">User Deleted</div>
                                    @else
                                        {{$position->position}}</td>
                                    @endif
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
                                <td>
                                    @can('daily_report_delete',Auth::user())
                                    <div class="modal fade" id="delete_modal_{{$report->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Daily Report Delete</h4>
                                                </div>
                                                <div class="modal-body text-center text-danger">
                                                    <p>Are You Want To Delete This Daily Report?</p>
                                                    <p>Once You Delete These Daily Report,This Daily Report Record Will Be Delete Permanently</p>
                                                </div>
                                                {!! Form::open(['route'=>['daily_report.destroy',$report->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$report->id}}">Delete</button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">No Report Created Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $reports->links() !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="em_email"]').tooltip();
        });
    </script>
@endsection

