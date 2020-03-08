@extends('master')
@section('stock','active')
@section('stock_in','active')
@section('content')
                    @php
                    $s = 1;
                    $product_name = explode(',',str_replace(str_split('[]""'),'',$show->product_name));
                    $product_code = explode(',',str_replace(str_split('[]""'),'',$show->product_code));
                    $category = explode(',',str_replace(str_split('[]""'),'',$show->category));
                    $stock_measurement = explode(',',str_replace(str_split('[]""'),'',$show->stock_measurement));
                    $created_at = explode(' ',$show->created_at);
                    @endphp
    <div class="container"  id="printableArea">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1 style="text-align: center">{{'Stock Report'}}</h1>
                <h4>Voucher Id : {{$show->slug}}</h4>
                <h4>Created Date : {{$created_at[0]}}</h4>
                <h4>Store Date : {{$show->store_date}}</h4>
            <br/><br/>
            <table class="table table-bordered_two">
                <thead>
                <tr>
                    <th>Sl.no</th>
                    <th >Product Name</th>
                    <th>Product Code</th>
                    <th>Category</th>
                    <th>Stock Measurement</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0;$i < count(json_decode($show->product_code),COUNT_NORMAL);$i++)
                    @if($stock_measurement[$i] != 0)
                    <tr>
                        <td>{{$s++}}</td>
                        <td>{{str_replace('\\','',$product_name[$i])}}</td>
                        <td>{{$product_code[$i]}}</td>
                        <td>{{$category[$i]}}</td>
                        <td>{{$stock_measurement[$i]}}</td>
                    </tr>
                    @endif
                @endfor
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-md-12 text-center">
           <input type="button" class="print_button" onclick="printDiv('printableArea')" value="print" />
       </div>
    </div>
    <script>
       function printDiv(divName)
           {
           var printContents = document.getElementById(divName).innerHTML;
           var originalContents = document.body.innerHTML;
           document.body.innerHTML = printContents;
           window.print();
           document.body.innerHTML = originalContents;
           }
    </script>
@endsection