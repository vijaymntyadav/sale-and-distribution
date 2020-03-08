@extends('master')
@section('warehouse','active')
@section('stock_status','active')
@section('content')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Edit Product Availability</h3>
            </div>
            <div class="col-md-7 col-md-offset-2">
                <div class="text-center">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                {!! Form::open(['class'=>'form-horizontal','method'=>'PATCH','route'=>['warehouse.update',$edit->id]]) !!}
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Brand Name : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{$edit->brand_name}}" placeholder="Enter Brand Name" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Image : </label>
                    <div class="col-sm-8">
                        <?php
                        $product_image = \App\ProductCategory::where('product_code','=',$edit->product_code)->where('category','=',$edit->category)->first();
                        ?>
                        @if(!empty($product_image))
                            <img class="preview_image" src="{{asset('/assets/images/products/'.$product_image->product_image)}}" alt="product image"/>
                        @else
                            <div>Image Not Available</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Name : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{$edit->product_name}}" placeholder="Enter Brand Description" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Code : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="product_code" name="product_code" value="{{$edit->product_code}}" placeholder="Enter Brand Name" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Store : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="product_availability" name="product_availability" value="{{$edit->store}}" placeholder="Enter Enter Store Product Availability" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Update" />
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endsection
