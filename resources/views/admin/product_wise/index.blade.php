@extends('master')
@section('report','active')
@section('product_wise_sale.index','active')
@section('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Products<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'product_wise_sale.search','method' => 'POST']) !!}
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
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Pieces</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($products->count() ==! 0)
                        @foreach($products as $product)
                            <tr>
                                <td>{{ ($products->currentpage()-1) * $products ->perpage() + $loop->index + 1 }}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->price}}/-</td>
                                <td>{{$product->pieces}}pieces</td>
                                <td>
                                    <div class="modal fade" id="delete_modal_{{$product->id}}" role="dialog">
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
                                                {!! Form::open(['route'=>['product_wise_sale.destroy',$product->id],'method' => 'DELETE']) !!}
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-xs " data-toggle="modal" data-target="#delete_modal_{{$product->id}}">Delete</button>
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
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection