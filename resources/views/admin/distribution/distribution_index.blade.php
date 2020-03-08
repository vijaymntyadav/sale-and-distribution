@extends('master')
@section('distribution','active')
@section('distribution.index','active')
@section('content')
    <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-3 text-center">
                        <h2>All Sale<hr/></h2>
                        <div class="search_margin">
                            {!! Form::open(['route' => 'distributor.search','method' => 'POST']) !!}
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
                        <th>Organization Name</th>
                        <th>Organization Number</th>
                        <th>Total Amount</th>
                        <th>Total Due</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($sales->count() ==! 0)
                        @foreach($sales as $sale)
                            <tr>
                                <td>{{ ($sales->currentpage()-1) * $sales ->perpage() + $loop->index + 1 }}</td>
                                <td>{{$sale->em_name}}</td>
                                <td>{{$sale->position}}</td>
                                <td>{{$sale->organization_name}}</td>
                                <td>{{$sale->mobile_number}}</td>
                                <td>{{$sale->total_amount}}</td>
                                <td>{{$sale->total_outstanding}}</td>
                                <td>
                                    <a class="btn btn-success btn-xs " href="{{route('distribution.show',$sale->id)}}" target="_blank">Details</a>
                                    <?php
                                    $check = \App\Challan::where('all_sale_id','=',$sale->id)->first();
                                    ?>
                                    @if(empty($check))
                                    <a class="btn btn-info btn-xs " href="{{route('distribution.challan.create',$sale->id)}}">Challan</a>
                                    @endif
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
@endsection


