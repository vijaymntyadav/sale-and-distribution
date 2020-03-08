<?php

namespace App\Http\Controllers\API;

use App\ApprovedSale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprovedSaleController extends Controller
{
    public function approvedAllSaleShow(Request $request){
        $approved_sale_show = ApprovedSale::select('id','challan_no','number','code','organization_name','address','date','mobile_number','p_o_number','project','brand_name', 'product_code','product_name','category','price','final_total_pieces','amount_of_total_pieces','final_total_price','amount_of_total_price','commission','amount_of_current_amount','old_outstanding','amount_of_total_outstanding')->where('em_id','=',$request['em_id'])->orderBy('id','DESC')->paginate(20);
        return response()->json($approved_sale_show);
    }
    public function ApprovedSaleShow($id){
       $show = ApprovedSale::select('id','challan_no','number','code','organization_name','address','date','mobile_number','p_o_number','project','brand_name', 'product_code','product_name','category','price','final_total_pieces','amount_of_total_pieces','final_total_price','amount_of_total_price','commission','amount_of_current_amount','old_outstanding','amount_of_total_outstanding')->find($id);
       $details['challan_no'] = $show['challan_no'];
       $details['number'] = $show['number'];
       $details['code'] = $show['code'];
       $details['organization_name'] = $show['organization_name'];
       $details['address'] = $show['address'];
       $details['date'] = $show['date'];
       $details['mobile_number'] = $show['mobile_number'];
       $details['p_o_number'] = $show['p_o_number'];
       $details['project'] = $show['project'];
       $details['brand_name'] = $show['brand_name'];
       $details['product_code'] = json_decode($show['product_code']);
       $details['product_name'] = json_decode($show['product_name']);
       $details['category'] = json_decode($show['category']);
       $details['price'] = json_decode($show['price']);
       $details['pieces'] = json_decode($show['final_total_pieces']);
       $details['total_price'] = json_decode($show['final_total_price']);
       $details['total_pieces'] = $show['amount_of_total_pieces'];
       $details['total_amount'] = $show['amount_of_total_price'];
       $details['commission'] = $show['commission'];
       $details['current_amount'] = $show['amount_of_current_amount'];
       $details['old_outstanding'] = $show['old_outstanding'];
       $details['total_outstanding'] = $show['amount_of_total_outstanding'];
       return response()->json($details);
    }
}
