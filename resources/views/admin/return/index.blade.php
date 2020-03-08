@extends('master')
@section('return','active')
@section('return_index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Returns<hr/></h2>
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
                        <th>Email</th>
                        <th>Position</th>
                        <th>Party Name</th>
                        <th>Project</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($returns->count() ==! 0)
                        @foreach($returns as $return)
                            <tr>
                                <td>{{ ($returns->currentpage()-1) * $returns ->perpage() + $loop->index + 1 }}</td>
                                <td>{{$return->em_name}}</td>
                                <td>{{$return->em_email}}</td>
                                <td>{{$return->position}}</td>
                                <td>{{$return->organization_name}}</td>
                                <td>{{$return->project}}</td>
                                <td>
                                    <a class="btn btn-success btn-xs btn-block" href="" target="_blank">Details</a>
                                    <a class="btn btn-danger btn-xs btn-block" style="margin-top: 5px" data-toggle="modal" data-target="#delete_modal_{{$return->id}}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">No Product Return Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $returns->links() !!}
            </div>
        </div>
    </div>
    @endsection
