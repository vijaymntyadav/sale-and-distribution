<?php

namespace App\Http\Controllers\API;

use App\AllSale;
use App\Brand;
use App\Commission;
use App\Dealer;
use App\Hierarchy;
use App\ProductCategory;
use App\Sale;
use App\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function employeeSaleShow(Request $request){
        $sales = Sale::where('em_id','=',$request['em_id'])->orderBy('id','DESC')->paginate(20);
        return response()->json($sales);
    }
    public function create()
    {
        $commission = Commission::where('status','=','active')->orderBy('id','DESC')->first();
        if(!empty($commission)){
            $commission_percent = $commission;
        }else{
            $commission_percent = 0;
        }
        $fetchApi= array();
        $push= array();
        $brands = Brand::distinct()->get(['brand_name']);
        foreach ($brands as $brand){
            $fetch = ProductCategory::where('brand_name','=',$brand->brand_name)->get(['product_image','product_code','product_name','category','price']);;
            foreach ($fetch as $i => $a)
            {
                if (in_array($a->product_code, $fetchApi))
                {}
                else
                {
                    $fetchApi[] = $a->product_code;
                    $fetchRow = ProductCategory::where('product_code','=',$a->product_code)->get();
                    $category = array();
                    foreach ($fetchRow as $p => $s)
                    {
                        $product_availability = Warehouse::where('product_code','=',$a->product_code)->where('category','=',$s->category)->first();
                        if(empty($product_availability)){
                            $availability = 0;
                        }else{
                            $availability = $product_availability->product_availability;
                        }
                        $category[$p]['name'] = $s->category ;
                        $category[$p]['price'] = $s->price ;
                        $category[$p]['product_availability'] = $availability;
                    }
                    $push[] = [
                        'brand_name' => $fetchRow[0]->brand_name,
                        'product_image' => asset('/assets/images/products/'.$fetchRow[0]->product_image),
                        'product_code' => $fetchRow[0]->product_code,
                        'product_name' => $fetchRow[0]->product_name,
                        'category' => $category,
                        'product_status' => $fetchRow[0]->product_status,
                    ];
                }
            }
        }
        $list = (object) [
            'commission' => $commission_percent,
            'brands' => $brands,
            'product' => $push
        ];
        return response()->json($list);
    }
    public function store(Request $request){
        for($i = 0;$i < count($request['product_code']);$i++){
            $check = Warehouse::where('product_code','=',$request['product_code'][$i])->where('category','=',$request['category'][$i])->first();
            if(empty($check)){
                return response()->json('product not in stock');
            }else if($request['pieces'][$i] > $check->product_availability){
                return response()->json('stock limited');
            }else{
                $booking_update = $check->booking_product + $request['pieces'][$i];
                $product_availability_update = $check->product_availability - $request['pieces'][$i];
                $check->update([
                    'booking_product' => $booking_update,
                    'product_availability' => $product_availability_update,
                ]);
            }
        }
        if($request['position'] == 'Sr.Manager' || $request['position'] == 'Manager'){
            $manager = Hierarchy::where('manager_id','=',$request['em_id'])->where('regional_manager_id','=',null)->first();
            $m_id = $manager->manager_id;$m_name = $manager->manager_name;$m_email = $manager->manager_email;
            $r_id = 0;$r_name = 0;$r_email = 0;$asm_id = 0;$asm_name = 0;$asm_email = 0;$e_id = 0;$e_name = 0;$e_email = 0;
            $d_id = 0;$d_name = 0;$d_code = 0;
        }else if($request['position'] == 'RM'){
            $rm = Hierarchy::where('regional_manager_id','=',$request['em_id'])->where('area_sales_manager_id','=',null)->first();
            $m_id = $rm->manager_id;$m_name = $rm->manager_name;$m_email = $rm->manager_email;$r_id = $rm->regional_manager_id;$r_name = $rm->regional_manager_name;
            $r_email = $rm->regional_manager_email;$asm_id = 0;$asm_name = 0;$asm_email = 0;$e_id = 0;$e_name = 0;$e_email = 0;
            $d_id = 0;$d_name = 0;$d_code = 0;
        }else if($request['position'] == 'ASM'){
            $asm = Hierarchy::where('area_sales_manager_id','=',$request['em_id'])->where('executive_id','=',null)->first();
            $m_id = $asm->manager_id;$m_name = $asm->manager_name;$m_email = $asm->manager_email;$r_id = $asm->regional_manager_id;$r_name = $asm->regional_manager_name;
            $r_email = $asm->regional_manager_email;$asm_id = $asm->area_sales_manager_id;$asm_name = $asm->area_sales_manager_name;$asm_email = $asm->area_sales_manager_email;$e_id = 0;$e_name = 0;$e_email = 0;
            $d_id = 0;$d_name = 0;$d_code = 0;

        }else if($request['position'] == 'Sr.Executive' || $request['position'] == 'Executive'){
            $e = Hierarchy::where('executive_id','=',$request['em_id'])->first();
            $m_id = $e->manager_id;$m_name = $e->manager_name;$m_email = $e->manager_email;$r_id = $e->regional_manager_id;$r_name = $e->regional_manager_name;
            $r_email = $e->regional_manager_email;$asm_id = $e->area_sales_manager_id;$asm_name = $e->area_sales_manager_name;$asm_email = $e->area_sales_manager_email;$e_id = $e->executive_id;
            $e_name = $e->executive_name;$e_email = $e->executive_email; $d_id = 0;$d_name = 0;$d_code = 0;
        }else if($request['position'] == 'Dealer'){
            $dealer = Dealer::where('user_id','=',$request['em_id'])->first();
            $m_id = $dealer->manager_id;$m_name = $dealer->manager_name;$m_email = $dealer->manager_email;$r_id = $dealer->regional_manager_id;$r_name = $dealer->regional_manager_name;
            $r_email = $dealer->regional_manager_email;$asm_id = $dealer->area_sales_manager_id;$asm_name = $dealer->area_sales_manager_name;$asm_email = $dealer->area_sales_manager_email;$e_id = $dealer->executive_id;
            $e_name = $dealer->executive_name;$e_email = $dealer->executive_email;
            $d_id = $dealer->id;$d_name = $dealer->dealer_name;$d_code = $dealer->dealer_code;
        }else{
            $m_id = 0;$m_name = 0;$m_email = 0;$r_id = 0;$r_name = 0;$r_email = 0;$asm_id = 0;$asm_name = 0;$asm_email = 0;$e_id = 0;$e_name = 0;$e_email = 0;
            $d_id = 0;$d_name = 0;$d_code = 0;
        }
        $sale = Sale::create([
            'em_id' => $request['em_id'],'em_name' => $request['em_name'],'em_email' => $request['em_email'],'position' => $request['position'],'number' => $request['number'],
            'code' => $request['code'],'organization_name' => $request['organization_name'],'address' => $request['address'],'date' => $request['date'],
            'mobile_number' => $request['mobile_number'],'p_o_number' => $request['p_o_number'],'project' => $request['project'],'brand_name' => $request['brand_name'],
            'product_code' => json_encode($request['product_code']),'product_name' => json_encode($request['product_name']),'category' => json_encode($request['category']),'price' => json_encode($request['price']),
            'pieces' => json_encode($request['pieces']),'total_price' => json_encode($request['total_price']), 'total_amount' => $request['total_amount'],'commission' => $request['commission'],
            'current_amount' => $request['current_amount'], 'old_outstanding' => $request['old_outstanding'],'total_outstanding' => $request['total_outstanding'],'amount_writing_store' => $request['amount_writing_store'],
            'permission' => 0
        ]);
        $sale->AllSale()->create([
            'em_id' => $request['em_id'],'em_name' => $request['em_name'],'em_email' => $request['em_email'],'position' => $request['position'],
            'm_id' => $m_id,'m_name' => $m_name,'m_email' => $m_email,'rm_id' => $r_id,'rm_name' => $r_name,'rm_email' => $r_email,'asm_id' => $asm_id,'asm_name' => $asm_name,'asm_email' => $asm_email,
            'e_id' => $e_id,'e_name' => $e_name,'e_email' => $e_email,'d_id' => $d_id,'d_name' => $d_name,'d_code' => $d_code,'division' => $request['division'],'district' => $request['district'],
            'sub_district' => $request['sub_district'],'postal_code' => $request['postal_code'], 'number' => $request['number'], 'code' => $request['code'],'organization_name' => $request['organization_name'],
            'address' => $request['address'],'date' => $request['date'],'mobile_number' => $request['mobile_number'],'p_o_number' => $request['p_o_number'],'project' => $request['project'],
            'brand_name' => $request['brand_name'],'product_code' => json_encode($request['product_code']),'product_name' => json_encode($request['product_name']),
            'category' => json_encode($request['category']),'price' => json_encode($request['price']), 'pieces' => json_encode($request['pieces']),'total_price' => json_encode($request['total_price']), 'total_amount' => $request['total_amount'],
            'commission' => $request['commission'], 'current_amount' => $request['current_amount'], 'old_outstanding' => $request['old_outstanding'],'total_outstanding' => $request['total_outstanding'],'amount_writing_store' => $request['amount_writing_store'],
            'cancel' => 0,'cancel_u_name' => 0,'cancel_u_email' => 0,'cancel_description' => 0,'sm_approved' => 0,'sm_name' => 0,'sm_email' => 0,'account_approved' => 0,'account_name' => 0,'account_email' => 0,'md_approved' => 0,'md_name' => 0,
            'md_email' => 0,'distributor' => 0,
        ]);
        return response()->json('sale created successful');
    }
    public function show($id)
    {
        $show = Sale::find($id);
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
        $edit = Sale::find($id);
        $edit['product_code'] = json_decode($edit['product_code']);
        $edit['product_name'] = json_decode($edit['product_name']);
        $edit['category'] = json_decode($edit['category']);
        $edit['price'] = json_decode($edit['price']);
        $edit['pieces'] = json_decode($edit['pieces']);
        $edit['total_price'] = json_decode($edit['total_price']);
        return response()->json($edit);
    }
    public function update(Request $request){
        $update = Sale::find($request['id']);
        $product_code = explode(',',str_replace(str_split('[]""'),'',$update->product_code));
        $category = explode(',',str_replace(str_split('[]""'),'',$update->category));
        $pieces = explode(',',str_replace(str_split('[]""'),'',$update->pieces));
        for($i = 0;$i < count(json_decode($update->product_code),COUNT_NORMAL);$i++){
            $find = Warehouse::where('product_code','=',$product_code[$i])->where('category','=',$category[$i])->first();
            if(!empty($find)){
                $booking_availability_back = $find->booking_product - $pieces[$i];
                $product_availability_back = $find->product_availability + $pieces[$i];
                $find->update([
                    'booking_product' => $booking_availability_back,
                    'product_availability' => $product_availability_back
                ]);
            }
        }
        for($i = 0;$i < count($request['product_code']);$i++){
            $check = Warehouse::where('product_code','=',$request['product_code'][$i])->where('category','=',$request['category'][$i])->first();
            if(empty($check)){
                return response()->json('product not in stock');
            }else if($request['pieces'][$i] > $check->product_availability){
                return response()->json('stock limited');
            }else{
                $booking_update = $check->booking_product + $request['pieces'][$i];
                $product_availability_update = $check->product_availability - $request['pieces'][$i];
                $check->update([
                    'booking_product' => $booking_update,
                    'product_availability' => $product_availability_update,
                ]);
            }
        }
        $update->update([
            'number' => $request['number'],
            'code' => $request['code'],'organization_name' => $request['organization_name'],'address' => $request['address'],'date' => $request['date'],'mobile_number' => $request['mobile_number'],'p_o_number' => $request['p_o_number'],'project' => $request['project'],
            'product_code' => json_encode($request['product_code']),'product_name' => json_encode($request['product_name']),'category' => json_encode($request['category']),'price' => json_encode($request['price']),
            'pieces' => json_encode($request['pieces']),'total_price' => json_encode($request['total_price']), 'total_amount' => $request['total_amount'],'commission' => $request['commission'],
            'current_amount' => $request['current_amount'], 'old_outstanding' => $request['old_outstanding'],'total_outstanding' => $request['total_outstanding'],'amount_writing_store' => $request['amount_writing_store'],
        ]);
        $all_sale_update = AllSale::where('sale_id','=',$update->id)->first();
        $all_sale_update->update([
            'number' => $request['number'],
            'code' => $request['code'],'organization_name' => $request['organization_name'],'address' => $request['address'],'date' => $request['date'],'mobile_number' => $request['mobile_number'],'p_o_number' => $request['p_o_number'],'project' => $request['project'],
            'product_code' => json_encode($request['product_code']),'product_name' => json_encode($request['product_name']),'category' => json_encode($request['category']),'price' => json_encode($request['price']),
            'pieces' => json_encode($request['pieces']),'total_price' => json_encode($request['total_price']), 'total_amount' => $request['total_amount'],'commission' => $request['commission'],
            'current_amount' => $request['current_amount'], 'old_outstanding' => $request['old_outstanding'],'total_outstanding' => $request['total_outstanding'],'amount_writing_store' => $request['amount_writing_store'],
        ]);
        return response()->json('sale updated successfully');
    }
    public function destroy(Request $request)
    {
        $delete = Sale::find($request['sale_id']);
        $all_sale_delete = AllSale::where('sale_id','=',$delete->id)->first();
        if ($delete->permission == 0){
            $product_code = explode(',',str_replace(str_split('[]""'),'',$delete->product_code));
            $category = explode(',',str_replace(str_split('[]""'),'',$delete->category));
            $pieces = explode(',',str_replace(str_split('[]""'),'',$delete->pieces));
            for($i = 0;$i < count(json_decode($delete->product_code),COUNT_NORMAL);$i++){
                $find = Warehouse::where('product_code','=',$product_code[$i])->where('category','=',$category[$i])->first();
                if(!empty($find)){
                    $booking_availability_one_back = $find->booking_product - $pieces[$i];
                    $product_availability_one_back = $find->product_availability + $pieces[$i];
                    $find->update([
                        'booking_product' => $booking_availability_one_back,
                        'product_availability' => $product_availability_one_back
                    ]);
                }
            }
            $all_sale_delete->delete();
        }
        $delete->delete();
        return response()->json('sale deleted successfully');
    }
}
