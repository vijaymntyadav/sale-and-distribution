@extends('master')
@section('product','active')
@section('add_product_categories','active')
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
                {!! Form::open(['class'=>'form-horizontal','method'=>'POST','route'=>['product_category.store'],'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender">Brand :</label>
                    <div class="col-sm-8">
                        <select class="select_product_category_design" name="brand_name" required>
                            @foreach($brands as $brand)
                                <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Image : </label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="product_image" name="product_image" placeholder="Enter Product Image" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Code : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Product Code" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Product Name : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender">Category :</label>
                    <div class="col-sm-8">
                        <select class="select_product_category_design" name="category" required>
                            <option value="Coaster A+ Head">Coaster A+ Head</option>
                            <option value="Essco Head">Essco Head</option>
                            <option value="Star Head">Star Head</option>
                            <option value="Single Lever">Single Lever</option>
                            <option value="Others">Others</option>
                            <option value="Diamond">Diamond</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Price : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="gender">Status :</label>
                    <div class="col-sm-8">
                    <select class="select_product_category_design" name="product_status" required>
                        <option>active</option>
                        <option>deactivate</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit" />
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

