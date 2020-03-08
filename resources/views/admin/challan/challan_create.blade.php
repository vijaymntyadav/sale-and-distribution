@extends('master')
@section('challan','active')
@section('content')
    @php
        $product_code = explode(',',str_replace(str_split('[]""'),'',$show->product_code));
        $product_name = explode(',',str_replace(str_split('[]""'),'',$show->product_name));
        $category = explode(',',str_replace(str_split('[]""'),'',$show->category));
        $pieces = explode(',',str_replace(str_split('[]""'),'',$show->pieces));
        $price = explode(',',str_replace(str_split('[]""'),'',$show->price));
        $total_price = explode(',',str_replace(str_split('[]""'),'',$show->total_price));
        $s = 1;
        $str = rand();
    @endphp
    <div class="row text-center">
        <div class="col-md-10">
            <h1>Challan Create</h1>
        </div>
    </div>
    {!! Form::open(['route' => 'challan.store','method' => 'POST']) !!}
    <input type="hidden" name="sale_id" value="{{$show->sale_id}}"/>
    <input type="hidden" name="all_sale_id" value="{{$show->id}}"/>
    <div class="container">
        <div class="row table-responsive">
            <br/>
            <div class="col-md-3 col-md-offset-2">
                <table class="">
                    <tbody>
                    <tr>
                        <td><b>Challan No </b></td>
                        <td>: {{$str}} </td>
                        <input type="hidden" name="challan_no" value="{{$str}}"/>
                    </tr>
                    <tr>
                        <td><b>Party Code </b></td>
                        <td> : {{$show->code}} </td>
                        <input type="hidden" name="code" value="{{$show->code}}"/>
                    </tr>
                    <tr>
                        <td><b>Party Name </b></td>
                        <td> : {{$show->organization_name}} </td>
                        <input type="hidden" name="party_name" value="{{$show->organization_name}}"/>
                    </tr>
                    <tr>
                        <td><b>Contact Name </b></td>
                        <td> : {{$show->organization_name}} </td>
                        <input type="hidden" name="contact_name" value="{{$show->organization_name}}"/>
                    </tr>
                    <tr>
                        <td><b>Mobile</b> </td>
                        <td> : {{$show->mobile_number}} </td>
                        <input type="hidden" name="mobile_number" value="{{$show->mobile_number}}"/>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 col-md-offset-2">
                <table class="">
                    <tbody>
                    <tr>
                        <td><b>Address</b> </td>
                        <td> : {{$show->address}} </td>
                        <input type="hidden" name="address" value="{{$show->address}}"/>
                    </tr>
                    <tr>
                        <td><b>Date</b></td>
                        <td> : {{$show->date}}</td>
                        <input type="hidden" name="date" value="{{$show->date}}"/>
                    </tr>
                    <tr>
                        <td><b>Sales Person</b></td>
                        <td> : {{$show->em_name}}</td>
                        <input type="hidden" name="em_name" value="{{$show->em_name}}"/>
                    </tr>
                    <tr>
                        <td><b>P.O.# </b></td>
                        <td> : {{$show->p_o_number}}</td>
                        <input type="hidden" name="p_o_number" value="{{$show->p_o_number}}"/>
                    </tr>
                    <tr>
                        <td><b>Project </b></td>
                        <td> : {{$show->project}}</td>
                        <input type="hidden" name="project" value="{{$show->project}}"/>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row table-responsive">
            <br/>
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th>S/L</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Order Quantity</th>
                        <th>Add Quantity</th>
                        <th>Product Available</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0;$i <  count(json_decode($show->product_code),COUNT_NORMAL) ;$i++)
                        <tr>
                            <td>{{$s++}}</td>
                            <td>
                                <div>{{$product_code[$i]}}</div>
                                <input type="hidden" name="product_code[]" value="{{$product_code[$i]}}"/>
                            </td>
                            <td>
                                <div>{{str_replace('\\','',$product_name[$i])}}</div>
                                <input type="hidden" name="product_name[]" value="{{str_replace('\\','',$product_name[$i])}}"/>
                            </td>
                            <td>
                                <div>{{$category[$i]}}</div>
                                <input type="hidden" name="category[]" value="{{$category[$i]}}"/>
                            </td>
                            <td>
                                <input type="text" name="pieces[]" value="{{$pieces[$i]}}" readonly/>
                            </td>
                            <td>
                                <input type="hidden" name="price[]" value="{{$price[$i]}}"/>
                                <input type="hidden" name="total_price[]" value="{{$total_price[$i]}}"/>
                                <input type="text" name="add_pieces[]" />
                            </td>
                            <td>
                                @php
                                    $check = \App\Warehouse::where('product_code','=',$product_code[$i])->where('category','=',$category[$i])->first();
                                @endphp
                                <div>
                                    @if(!empty($check))<span class="span_availability">{{$check->product_availability}} pieces</span>
                                    @else<span class="span_availability_none">{{'Not Available'}}</span>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 text-center">
                <input type="submit"  class="stock_create_button" value="Create"/>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection

