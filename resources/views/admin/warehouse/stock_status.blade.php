@extends('master')
@section('warehouse','active')
@section('stock_status','active')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Products<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'warehouse.search','method' => 'POST']) !!}
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
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Category</th>
                        <th>Store</th>
                        <th>Booking</th>
                        <th>Product Availability</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($warehouses->count() ==! 0)
                        @foreach($warehouses as $warehouse)
                            <tr>
                                <td>{{ ($warehouses->currentpage()-1) * $warehouses ->perpage() + $loop->index + 1 }}</td>
                                <td>
                                    <?php
                                    $product_image = \App\ProductCategory::where('product_code','=',$warehouse->product_code)->where('category','=',$warehouse->category)->first();
                                    ?>
                                    @if(!empty($product_image))
                                        <img class="preview_image" src="{{asset('/assets/images/products/'.$product_image->product_image)}}" alt="product image"/>
                                    @else
                                        <div>Image Not Available</div>
                                    @endif
                                </td>
                                <td>{{$warehouse->product_name}}</td>
                                <td>{{$warehouse->product_code}}</td>
                                <td>{{$warehouse->category}}</td>
                                <td>{{$warehouse->store}}</td>
                                <td>{{$warehouse->booking_product}}</td>
                                <td>{{$warehouse->product_availability}}</td>
                                <td>
                                    @can('warehouse_edit',Auth::user())
                                    <a class="btn btn-info btn-xs btn-block product_edit_button" href="{{route('warehouse.edit',$warehouse->id)}}">Edit</a>
                                    @endcan
                                    @can('warehouse_delete',Auth::user())
                                    <div class="modal fade" id="delete_modal_{{$warehouse->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Stock Product Delete</h4>
                                                </div>
                                                <div class="modal-body text-center text-danger">
                                                    <p>Are You Want To Delete This Stock Product ?</p>
                                                    <p>Once You Delete These Stock Product,This Stock Product Record Will Be Delete Permanently</p>
                                                </div>
                                                {!! Form::open(['route'=>['warehouse.destroy',$warehouse->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$warehouse->id}}">Delete</button>
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
                {!! $warehouses->links() !!}
            </div>
        </div>
    </div>
@endsection