@extends('master')
@section('distribution','active')
@section('content')
    @php
        $product_code = explode(',',str_replace(str_split('[]""'),'',$show->product_code));
        $product_name = explode(',',str_replace(str_split('[]""'),'',$show->product_name));
        $category = explode(',',str_replace(str_split('[]""'),'',$show->category));
        $pieces = explode(',',str_replace(str_split('[]""'),'',$show->pieces));
        $s = 1;
    @endphp
    <div class="container"  id="printableArea">
        <div class="row">
            <div class="col-md-3 col-md-offset-2">
                <div><span>Number : </span><span>{{$show->number}}</span></div>
                <br/>
                <div ><span>Distributor Code : </span><span>{{$show->code}}</span></div>
                <br/>
                <div><span>Organization  Name : </span><span>{{$show->organization_name}}</span></div>
                <br/>
                <div><span>Address : </span><span>{{$show->address}}</span></div>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <div><span>Date : </span><span>{{$show->date}}</span></div>
                <br/>
                <div><span>Mobile Number : </span><span>{{$show->mobile_number}}</span></div>
                <br/>
                <div><span>P O Number : </span><span>{{$show->p_o_number}}</span></div>
                <br/>
                <div><span>Project : </span><span>{{$show->project}}</span></div>
            </div>
        </div>
        <div class="row table-responsive">
            <br/>
            <div class="col-md-10">
                <table class="table table-bordered_two">
                    <thead>
                    <tr>
                        <th>Sl.no</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Pieces</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0;$i < count(json_decode($show->product_code),COUNT_NORMAL);$i++)
                        <tr>
                            <td>{{$s++}}</td>
                            <td>{{$product_code[$i]}}</td>
                            <td>{{str_replace('\\','',$product_name[$i])}}</td>
                            <td>{{$category[$i]}}</td>
                            <td>{{$pieces[$i]}} pieces</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 text-center">
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

