@extends('master')
@section('product','active')
@section('brand_index','active')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Brands<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'exist.brand.search','method' => 'POST']) !!}
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
                        <th>Brand Name</th>
                        <th>Brand Description</th>
                        <th>Brand status</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($brands->count() ==! 0)
                    @foreach($brands as $brand)
                    <tr>
                        <td>{{ ($brands->currentpage()-1) * $brands ->perpage() + $loop->index + 1 }}</td>
                        <td>{{$brand->brand_name}}</td>
                        <td>{{$brand->brand_description}}</td>
                        <td>{{$brand->brand_status}}</td>
                        <td>
                            @can('brands_edit',Auth::user())
                            <a class="btn btn-info btn-xs btn-block product_edit_button" href="{{route('brand.edit',$brand->id)}}">Edit</a>
                            @endcan
                            @can('brands_delete',Auth::user())
                            <div class="modal fade" id="delete_modal_{{$brand->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Brand Delete</h4>
                                        </div>
                                        <div class="modal-body text-center text-danger">
                                            <p>Are You Want To Delete This Brand ?</p>
                                            <p>Once You Delete These Brand,This Brand Record Will Be Delete Permanently</p>
                                        </div>
                                        {!! Form::open(['route'=>['brand.destroy',$brand->id],'method' => 'DELETE']) !!}
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$brand->id}}">Delete</button>
                            @endcan
                        </td>
                    </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">No Brand Create Yet</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                {!! $brands->links() !!}
            </div>
        </div>
    </div>
@endsection
