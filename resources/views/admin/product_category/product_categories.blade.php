@extends('master')
@section('product','active')
@section('product_categories','active')
@section('content')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3 text-center">
                <h2>All Products<hr/></h2>
                <div class="search_margin">
                    {!! Form::open(['route' => 'exist.product_category.search','method' => 'POST']) !!}
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
                          <th>Product Brand</th>
                          <th>Product Image</th>
                          <th>Product code</th>
                          <th>Product name</th>
                          <th>category</th>
                          <th>price</th>
                          <th>status</th>
                          <th>Option</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($products->count() ==! 0)
                    @foreach($products as $product)
                    <tr>
                        <td>{{ ($products->currentpage()-1) * $products ->perpage() + $loop->index + 1 }}</td>
                        <td>{{$product->brand_name}}</td>
                        <td><img class="preview_image" src="{{asset('/assets/images/products/'.$product->product_image)}}" alt="product image"/></td>
                        <td>{{$product->product_code}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->product_status}}</td>
                        <td>
                            @can('product_categories_edit',Auth::user())
                            <a class="btn btn-info btn-xs btn-block product_edit_button" href="{{route('product_category.edit',$product->id)}}">Edit</a>
                            @endcan
                            @can('product_categories_delete',Auth::user())
                            <div class="modal fade" id="delete_modal_{{$product->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Product Category Delete</h4>
                                        </div>
                                        <div class="modal-body text-center text-danger">
                                            <p>Are You Want To Delete This Product Category ?</p>
                                            <p>Once You Delete These Product Category,This Product Category Record Will Be Delete Permanently</p>
                                        </div>
                                        {!! Form::open(['route'=>['product_category.destroy',$product->id],'method' => 'DELETE']) !!}
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-danger" value="Delete"/>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-xs btn-block" data-toggle="modal" data-target="#delete_modal_{{$product->id}}">Delete</button>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                        @else
                        <tr>
                            <td colspan="5">No Product Category Create Yet</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection

