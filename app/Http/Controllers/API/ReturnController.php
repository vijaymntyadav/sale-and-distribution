<?php

namespace App\Http\Controllers\API;

use App\ReturnProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReturnController extends Controller
{
   public function employeeSaleReturnShow(Request $request){
       $show = ReturnProduct::where('em_id','=',$request['em_id'])->orderBy('id','DESC')->paginate(20);
       return response()->json($show);
   }
   public function store(Request $request){
       ReturnProduct::create([
           'approved_sale_id' => $request['approved_sale_id'],
           'em_id' => $request['em_id'],
           'em_name' => $request['em_name'],
           'em_email' => $request['em_email'],
           'position' => $request['position'],
           'challan_no' => $request['challan_no'],
           'number' => $request['number'],
           'code' => $request['code'],
           'organization_name' => $request['organization_name'],
           'address' => $request['address'],
           'date' => $request['date'],
           'mobile_number' => $request['mobile_number'],
           'p_o_number' => $request['p_o_number'],
           'project' => $request['project'],
           'product_code' => json_encode($request['product_code']),
           'product_name' => json_encode($request['product_name']),
           'category' => json_encode($request['category']),
           'pieces' => json_encode($request['pieces']),
       ]);
       return response()->json('Return Product Information Created Successfully');
   }
}
