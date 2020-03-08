@extends('master')
@section('cancel','active')
@section('cancel_index','active')
@section('content')
    @php
        $product_code = explode(',',str_replace(str_split('[]""'),'',$invoice->product_code));
        $product_name = explode(',',str_replace(str_split('[]""'),'',$invoice->product_name));
        $category = explode(',',str_replace(str_split('[]""'),'',$invoice->category));
        $pieces = explode(',',str_replace(str_split('[]""'),'',$invoice->pieces));
        $price = explode(',',str_replace(str_split('[]""'),'',$invoice->price));
        $total_price = explode(',',str_replace(str_split('[]""'),'',$invoice->total_price));
        $s = 1;
    @endphp
    <div class="container" id="printableArea">
        <div class="row">
            <div class="col-xs-3 text-center invoice_table"><img src="{{asset('assets/images/icon/Logo-sattar-png.png')}}" alt=""></div>
            <div class="col-xs-3 col-xs-offset-1 text-center">
                <h2>SATTAR AGENCIES</h2>
                <p>80/5 North Jatrabari (Bibir bagicha 3 no gate)</p>
                <p>Demra Road, Dhaka-1204</p>
                <span style="border: 3px solid black;padding: 4px 1em;"><b class="th_color">INVOICE</b></span>
            </div>
            <div class="col-xs-2 col-xs-offset-1 text-center print_date" id="print_date">
                Print Date::<span id="print_date_show"></span>
            </div>
        </div><br/><br/>
        <div class="row table-responsive">
            <br/>
            <div class="col-xs-5 col-xs-offset-1">
                <table>
                    <tr>
                        <td><b>Number&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->number}}</td>
                    </tr>
                    <tr>
                        <td><b>Distributor Code&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->code}}</td>
                    </tr>
                    <tr>
                        <td><b>Organization  Name&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->organization_name}}</td>
                    </tr>
                    <tr>
                        <td><b>Address&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->address}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-xs-4" style="float: right">
                <table>
                    <tr>
                        <td><b>Date&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->date}}</td>
                    </tr>
                    <tr>
                        <td><b>Mobile Number&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->mobile_number}}</td>
                    </tr>
                    <tr>
                        <td><b>P O Number&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->p_o_number}}</td>
                    </tr>
                    <tr>
                        <td><b>Project&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->project}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <br/>
        <div class="row"><div class="col-xs-10 border_dotted_bottom"></div></div>
        <br/>
        <div class="row table-responsive">
            <div class="col-xs-10 invoice_table">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="th_color table_center">S/L</th>
                        <th class="th_color table_center">Product Code</th>
                        <th class="th_color table_center">Product Name</th>
                        <th class="th_color table_center">Category</th>
                        <th class="th_color table_center">Quantity</th>
                        <th class="th_color table_center">price</th>
                        <th class="th_color table_center">Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0;$i < count(json_decode($invoice->product_code),COUNT_NORMAL);$i++)
                        <tr>
                            <td class="table_center">{{$s++}}</td>
                            <td class="table_center">{{$product_code[$i]}}</td>
                            <td class="table_center">{{str_replace('\\','',$product_name[$i])}}</td>
                            <td class="table_center"><div>{{$category[$i]}}</div></td>
                            <td class="table_center"><div>{{$pieces[$i]}}</div></td>
                            <td class="table_center"><div>{{$price[$i]}}/-</div></td>
                            <td class="table_center"><div>{{$total_price[$i]}}/-</div></td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row"><div class="col-xs-10 border_dotted_top"></div></div>
        <br/>
        <div class="row table-responsive">
            <div class="col-xs-6"><div><span>Word :</span><span>{{$invoice->amount_writing_store}}</span></div></div>
            <div class="col-xs-4" style="float: right">
                <table>
                    <tr>
                        <td><b>Total Amount&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->total_amount}}/-</td>
                    </tr>
                    <tr>
                        <td><b>Commission&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->commission}}%</td>
                    </tr>
                    <tr>
                        <td><b>Current Amount&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->current_amount}}/-</td>
                    </tr>
                    <tr>
                        <td><b>Old OutStanding&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->old_outstanding}}/-</td>
                    </tr>
                    <tr>
                        <td><b>Total OutStanding&nbsp;&nbsp;</b></td>
                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                        <td>&nbsp;&nbsp;{{$invoice->total_outstanding}}/-</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 text-center">
                <br/>
                <input type="button" class="print_button" onclick="printDiv('printableArea')" value="print" />
            </div>
        </div>
    </div>
    <script>
        function printDiv(divName)
        {
            var d = new Date();
            var month = d.getMonth()+1;
            var day = d.getDate();
            var output = d.getFullYear() + '/' +
                (month<10 ? '0' : '') + month + '/' +
                (day<10 ? '0' : '') + day;
            let print_date = document.getElementById('print_date');
            print_date.style.display = 'block';
            document.getElementById('print_date_show').innerHTML = output;
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
