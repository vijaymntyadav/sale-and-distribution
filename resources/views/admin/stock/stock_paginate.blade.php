@php
    $s = 1;
    $m = 1;
@endphp
<table class="table table_stock_in">
    <thead>
    <tr>
        <th>Sl.no</th>
        <th>Image</th>
        <th>Name</th>
        <th>Code</th>
        <th>Category</th>
        <th>Stock Measurement</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if($products->count() ==! 0)
    @foreach($products as $product)
    <tr>
        <td>{{$s++}}</td>
        <td>
            <img class="preview_image" src="{{asset('/assets/images/products/'.$product->product_image)}}" alt="product image"/>
            <input type="hidden" id="product_image" name="product_image[]" value="{{$product->product_image}}"/>
        </td>
        <td><input type="text" id="product_name" name="product_name[]" value="{{$product->product_name}}" readonly/></td>
        <td><input type="text" id="product_code" name="product_code[]" value="{{$product->product_code}}" readonly/></td>
        <td><input type="text" id="category" name="category[]" value="{{$product->category}}" readonly/></td>
        <td><input type="text" id="stock_measurement" name="stock_measurement[]" value="0" required/></td>
    </tr>
    @endforeach
    @else
    <tr>
        <td colspan="11">No data </td>
    </tr>
    @endif
    </tbody>
</table>



