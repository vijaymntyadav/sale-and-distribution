                    @php
                    $s = 1;
                    @endphp
                    <style>
                        .table-bordered_two {
                            border: 2px solid black !important;
                        }
                        .tr ,.th,.td{
                            text-align: center;
                            border: 2px solid black !important;
                        }
                        .th{
                            color : #0a57c3;
                        }
                    </style>
<div class="container">
    <div class="row">
        <h1 style="text-align: center">{{'Stock Report'}}</h1>
        <h3 style="text-align: center">Voucher Id : {{$slug}}</h3>
        <div style="text-align: center">Created Date : {{$created_at[0]}}</div>
        <div style="text-align: center">Store Date : {{$store_date}}</div>
        <br/><br/>
        <table class="table-bordered_two">
            <thead>
            <tr class="tr">
                <th class="th">Sl.no</th>
                <th class="th">Product Name</th>
                <th class="th">Product Code</th>
                <th class="th">Category</th>
                <th class="th">Stock Measurement</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0;$i < count(json_decode($show->product_code),COUNT_NORMAL);$i++)
                @if($stock_measurement[$i] != 0)
                <tr>
                    <td class="td">{{$s++}}</td>
                    <td class="td">{{str_replace("\\","",$product_name[$i])}}</td>
                    <td class="td">{{$product_code[$i]}}</td>
                    <td class="td">{{$category[$i]}}</td>
                    <td class="td">{{$stock_measurement[$i]}}</td>
                </tr>
                @endif
            @endfor
            </tbody>
        </table>
    </div>
</div>

