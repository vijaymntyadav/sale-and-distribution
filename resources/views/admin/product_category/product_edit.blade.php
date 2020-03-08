@extends('master')
@section('product','active')
@section('product_categories','active')
@section('content')
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Create Product Category</h3>
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
                @if(Session::has('success'))
                    <h3 class="success_text">{{Session::get('success')}}</h3>
                @endif
                <br/>
                {!! Form::open(['class'=>'form-horizontal','method'=>'PATCH','route'=>['product_category.update',$edit->id],'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender">Product Brand :</label>
                    <div class="col-sm-8">
                        <select class="select_product_category_design" name="brand_name" required>
                            @foreach($brands as $brand)
                                <option value="{{$brand->brand_name}}" @if($edit->product_brand == $brand->brand_name) selected="selected" @endif>{{$brand->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-4">
                    <img class="preview_image" src="{{asset('/assets/images/products/'.$edit->product_image)}}" alt="product image"/>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Image : </label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="product_image" name="product_image"  placeholder="Enter Product Image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Code : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="product_code" name="product_code" value="{{$edit->product_code}}" placeholder="Enter Product Code" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Name : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{$edit->product_name}}" placeholder="Enter Product Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender">Category :</label>
                    <div class="col-sm-8">
                        <select class="select_product_category_design" name="category" required>
                            <option value="Coaster A+ Head" @if($edit->category == 'Coaster A+ Head') selected="selected" @endif>Coaster A+ Head</option>
                            <option value="Essco Head" @if($edit->category == 'Essco Head') selected="selected" @endif>Essco Head</option>
                            <option value="Star Head" @if($edit->category == 'Star Head') selected="selected" @endif>Star Head</option>
                            <option value="Single Lever" @if($edit->category == 'Single Lever') selected="selected" @endif>Single Lever</option>
                            <option value="Others" @if($edit->category == 'Others') selected="selected" @endif>Others</option>
                            <option value="Diamond" @if($edit->category == 'Diamond') selected="selected" @endif>Diamond</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Price : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="price" name="price" value="{{$edit->price}}" placeholder="Enter Product Price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender">Status :</label>
                    <div class="col-sm-8">
                        <select class="select_product_category_design" name="product_status" required>
                            <option @if($edit->product_status == 'active') selected="selected" @endif>active</option>
                            <option @if($edit->product_status == 'deactivate') selected="selected" @endif>deactivate</option>
                        </select>
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
