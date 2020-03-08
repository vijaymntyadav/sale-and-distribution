@extends('master')
@section('stock','active')
@section('stock_in','active')
@section('content')
                    @php
                    $s = 1;
                    $product_name = explode(',',str_replace(str_split('[]""'),'',$edit->product_name));
                    $product_code = explode(',',str_replace(str_split('[]""'),'',$edit->product_code));
                    $category = explode(',',str_replace(str_split('[]""'),'',$edit->category));
                    $stock_measurement = explode(',',str_replace(str_split('[]""'),'',$edit->stock_measurement));
                    @endphp
                    {!! Form::open(['route' => ['stock.update',$edit->id],'method' => 'PATCH']) !!}
    <div class="row table-responsive">
       <div class="col-md-10 text-center">
           <h2 class="text-primary">{{$edit->brand_name}}</h2>
           <h4>Store Date :  <input type="date" id="store_date" name="store_date" value="{{$edit->store_date}}" required/></h4>
       <input type="hidden" id="product_brand_name_store" name="product_brand_name_store" value="{{$edit->brand_name}}"/>
        <table class="table table_stock_in">
            <thead>
            <tr>
                <th>Sl.no</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Category</th>
                <th>Stock Measurement</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0;$i < count(json_decode($edit->product_code),COUNT_NORMAL);$i++)
            <tr>
                <td>{{$s++}}</td>
                <td>
                    <?php
                    $product_image = \App\ProductCategory::where('product_code','=',$product_code[$i])->where('category','=',$category[$i])->first();
                    ?>
                    @if(!empty($product_image))
                            <img class="preview_image" src="{{asset('/assets/images/products/'.$product_image->product_image)}}" alt="product image"/>
                        @else
                        <div>Image Not Available</div>
                    @endif
                </td>
                <td><input type="text" id="product_name" name="product_name[]" value="{{$product_name[$i]}}" readonly/></td>
                <td><input type="text" id="product_code" name="product_code[]" value="{{$product_code[$i]}}" readonly/></td>
                <td><input type="text" id="category" name="category[]" value="{{$category[$i]}}" readonly/></td>
                @if($stock_measurement[$i] == 'null')
                <td><input type="text" id="stock_measurement" name="stock_measurement[]" value="0" required/></td>
                @else
                <td><input type="text" id="stock_measurement" name="stock_measurement[]" value="{{$stock_measurement[$i]}}" required/></td>
                @endif
            </tr>
                @endfor
            </tbody>
        </table>
         <br/>
           <input type="submit"  class="stock_create_button" value="Update"/>
                     {!! Form::close() !!}
       </div>
    </div>
@endsection
