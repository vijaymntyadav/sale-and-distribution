<?php

namespace App\Http\Controllers\API;

use App\AllSale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CancelController extends Controller
{
    public function cancelAllSaleShow(Request $request){
        $cancel_sale_show = AllSale::select('id','number','code','organization_name','address','date','mobile_number','p_o_number','project','product_code','product_name','category','price','pieces','total_price','total_amount','commission','current_amount','old_outstanding','total_outstanding','amount_writing_store','cancel_description')->where('em_id','=',$request['em_id'])->where('cancel','=',1)->orderBy('id','DESC')->paginate(20);
        return response()->json($cancel_sale_show);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function cancelSaleShow($id){
        $show = AllSale::select('id','number','code','organization_name','address','date','mobile_number','p_o_number','project','product_code','product_name','category','price','pieces','total_price','total_amount','commission','current_amount','old_outstanding','total_outstanding','amount_writing_store','cancel_description')->find($id);
        $show['product_code'] = json_decode($show['product_code']);
        $show['product_name'] = json_decode($show['product_name']);
        $show['category'] = json_decode($show['category']);
        $show['price'] = json_decode($show['price']);
        $show['pieces'] = json_decode($show['pieces']);
        $show['total_price'] = json_decode($show['total_price']);
        return response()->json($show);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
}
