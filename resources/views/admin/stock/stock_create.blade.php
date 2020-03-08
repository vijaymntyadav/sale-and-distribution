@extends('master')
@section('stock','active')
@section('stock_create','active')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <select class="select_product_category_design_two brand_name" id="brand_name" name="brand_name">
                      @foreach($brands as $brand)
                         <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
                      @endforeach
                </select>
                <button class="select_button_design brand_select">Select</button>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row table-responsive">
        <div class="col-md-10 text-center">
            <h2 class="text-primary" id="product_brand_show"></h2>
            {!! Form::open(['route' => 'stock.store','method' => 'POST']) !!}
            <h4 id="store_date_display">Store Date :  <input type="date" id="store_date" name="store_date" required/></h4>
            <input type="hidden" id="product_brand_name_store" name="product_brand_name_store"/>
            <div class="pagination_data">
                @include('admin.stock.stock_paginate')
            </div>
            <div id="stock_store_button"><input type="submit"  class="stock_create_button" value="Stock"/></div>
            {!! Form::close() !!}
        </div>
    </div>
    <script>
        $(document).on('click','.brand_select',function(){
            document.getElementById('product_brand_name_store').value = document.getElementById('brand_name').value;
            let brand_name = document.getElementById('brand_name').value;
            document.getElementById('store_date_display').style.display = 'block';
            document.getElementById('stock_store_button').style.display = 'block';
            $.ajax({
                url : '/brand/select/' + brand_name,
                success : function(data){
                    $('.pagination_data').html(data)
                }
            })
        })
    </script>
@endsection
