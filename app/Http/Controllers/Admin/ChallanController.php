<?php

namespace App\Http\Controllers\Admin;


use App\AllSale;
use App\ApprovedSale;
use App\Challan;
use App\HierarchyWiseProduct;
use App\Invoice;
use App\LocationWiseProduct;
use App\ProductWiseSale;
use App\Warehouse;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ChallanController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $challans = Challan::orderBy('id','DESC')->paginate(20);
        return view('admin.challan.challan_index',compact('challans'));
    }
    public function search(Request $request){
        $challans = Challan::where('em_name','like','%'.$request->search.'%')->orWhere('position','like','%'.$request->search.'%')
                            ->orWhere('challan_no','like','%'.$request->search.'%')->orWhere('organization_name','like','%'.$request->search.'%')
                            ->orWhere('created_at','like','%'.$request->search.'%')->orWhere('brand_name','like','%'.$request->search.'%')->orderBy('id','DESC')->paginate(24);
        return view('admin.challan.challan_index',compact('challans'));
    }
    public function create($id)
    {
       $show = AllSale::find($id);
       return view('admin.challan.challan_create',compact('show'));
    }
    public function store(Request $request)
    {
       $information = AllSale::where('id','=',$request->all_sale_id)->first();
       $final_total_pieces = array();
       $final_total_price = array();
       $add_pieces_total_price = array();
       for ($p = 0;$p < count($request->product_code);$p++){
           if($request->add_pieces[$p] == null || $request->add_pieces[$p] == 0){
               $add_pieces[$p] = 0;
               $final_total_pieces[$p] = $request->pieces[$p];
               $final_total_price[$p] = $request->total_price[$p];
               $add_pieces_total_price[$p] = 0 * $request->price[$p];
           }else{
               $add_pieces[$p] = $request->add_pieces[$p];
               $final_total_pieces[$p] = $request->pieces[$p] + $request->add_pieces[$p];
               $final_total_price[$p] = $request->total_price[$p] + $request->add_pieces[$p] * $request->price[$p];
               $add_pieces_total_price[$p] = $request->add_pieces[$p] * $request->price[$p];
           }
       }
       $pieces_total = array_sum($request->pieces);
       $add_pieces_total = array_sum($add_pieces);
       $amount_of_total_pieces = array_sum($final_total_pieces);
       $amount_of_total_price = array_sum($final_total_price);
       $sum_of_add_pieces_total_price = array_sum($add_pieces_total_price);
       $amount_of_current_amount = $amount_of_total_price - ($amount_of_total_price * $information->commission)/100;
       $amount_of_total_outstanding = $amount_of_current_amount + $information->old_outstanding;
        for($i = 0;$i < count($request['product_code']);$i++){
            $check = Warehouse::where('product_code','=',$request['product_code'][$i])->where('category','=',$request['category'][$i])->first();
            if(empty($check)){
                return response()->json('product not in stock');
            }else if($request['pieces'][$i] > $check->product_availability){
                return response()->json('stock limited');
            }else{
                $booking_update = $check->booking_product - $request->pieces[$i];
                $store_update = $check->store - $final_total_pieces[$i];
                $product_availability = $check->product_availability - $add_pieces[$i];
                $check->update([
                    'booking_product' => $booking_update,
                    'store' => $store_update,
                    'product_availability' => $product_availability,
                ]);
            }
        }
        Challan::create([
            'sale_id' => $request->sale_id,'all_sale_id' => $request->all_sale_id,'em_id' => $information->em_id,'em_name' => $information->em_name,'em_email' => $information->em_email,
            'position' => $information->position,'challan_no' => $request->challan_no,'number' => $information->number,'code' => $information->code, 'organization_name' => $information->organization_name,'address' => $information->address,
            'date' => $information->date,'mobile_number' => $information->mobile_number, 'p_o_number' => $information->p_o_number,'project' => $information->project,'brand_name' => $information->brand_name,'product_code' => json_encode($request->product_code),
            'product_name' => json_encode($request->product_name), 'category' => json_encode($request->category),'pieces' => json_encode($request->pieces),'pieces_total' => $pieces_total ,'add_pieces' => json_encode($add_pieces),
            'add_pieces_total' => $add_pieces_total,'final_total_pieces' => json_encode($final_total_pieces), 'amount_of_total_pieces' => $amount_of_total_pieces
        ]);
        Invoice::create([
            'sale_id' => $request->sale_id,'all_sale_id' => $request->all_sale_id,'em_id' => $information->em_id,'em_name' => $information->em_name,'em_email' => $information->em_email,
            'position' => $information->position,'challan_no' => $request->challan_no,'number' => $information->number,'code' => $information->code, 'organization_name' => $information->organization_name,
            'address' => $information->address, 'date' => $information->date,'mobile_number' => $information->mobile_number, 'p_o_number' => $information->p_o_number,'project' => $information->project,'brand_name' => $information->brand_name,
            'product_code' => json_encode($request->product_code), 'product_name' => json_encode($request->product_name), 'category' => json_encode($request->category),'price' => json_encode($request->price),
            'pieces' => json_encode($request->pieces),'pieces_total' => $pieces_total,'total_price' => json_encode($request->total_price),'add_pieces' => json_encode($add_pieces),
            'add_pieces_total_price' =>  json_encode( $add_pieces_total_price),'sum_of_add_pieces_total_price' => $sum_of_add_pieces_total_price, 'add_pieces_total' => $add_pieces_total,
            'final_total_pieces' => json_encode($final_total_pieces), 'amount_of_total_pieces' => $amount_of_total_pieces, 'total_amount' => $information->total_amount,'commission' => $information->commission,
            'current_amount' => $information->current_amount, 'old_outstanding' => $information->old_outstanding, 'total_outstanding' => $information->total_outstanding, 'amount_writing_store' => $information->amount_writing_store,
            'final_total_price' => json_encode($final_total_price), 'amount_of_total_price' => $amount_of_total_price, 'amount_of_current_amount' => $amount_of_current_amount, 'amount_of_total_outstanding' => $amount_of_total_outstanding,
        ]);
        ApprovedSale::create([
            'sale_id' => $request->sale_id,'all_sale_id' => $request->all_sale_id,'em_id' => $information->em_id,'em_name' => $information->em_name,'em_email' => $information->em_email,
            'position' => $information->position,'challan_no' => $request->challan_no,'m_id' => $information->m_id,'m_name' => $information->m_name,'m_email' => $information->m_email,'rm_id' => $information->rm_id,'rm_name' => $information->rm_name,
            'rm_email' => $information->rm_email,'asm_id' => $information->asm_id,'asm_name' => $information->asm_name,'asm_email' => $information->asm_email,'e_id' => $information->e_id,
            'e_name' => $information->e_name,'e_email' => $information->e_email,'d_id' => $information->d_id,'d_name' => $information->d_name,'d_code' => $information->d_code,'division' => $information->division,
            'district' => $information->district,'sub_district' => $information->sub_district,'postal_code' => $information->postal_code,'number' => $information->number,'code' => $information->code,
            'organization_name' => $information->organization_name,'address' => $information->address,'date' => $information->date,'mobile_number' => $information->mobile_number,
            'p_o_number' => $information->p_o_number,'project' => $information->project,'brand_name' => $information->brand_name, 'product_code' => json_encode($request->product_code), 'product_name' => json_encode($request->product_name), 'category' => json_encode($request->category),
            'price' => json_encode($request->price), 'pieces' => json_encode($request->pieces),'pieces_total' => $pieces_total,'total_price' => json_encode($request->total_price),'add_pieces' => json_encode($add_pieces),
            'add_pieces_total_price' =>  json_encode( $add_pieces_total_price),'sum_of_add_pieces_total_price' => $sum_of_add_pieces_total_price, 'add_pieces_total' => $add_pieces_total,
            'final_total_pieces' => json_encode($final_total_pieces), 'amount_of_total_pieces' => $amount_of_total_pieces, 'total_amount' => $information->total_amount,'commission' => $information->commission,
            'current_amount' => $information->current_amount, 'old_outstanding' => $information->old_outstanding, 'total_outstanding' => $information->total_outstanding, 'amount_writing_store' => $information->amount_writing_store,
            'final_total_price' => json_encode($final_total_price), 'amount_of_total_price' => $amount_of_total_price, 'amount_of_current_amount' => $amount_of_current_amount, 'amount_of_total_outstanding' => $amount_of_total_outstanding,
        ]);
        for($i = 0;$i < count($request->product_code); $i++){
            $hierarchy_wise_check = HierarchyWiseProduct::where('m_id','=',$information->m_id)->where('rm_id','=',$information->rm_id)->where('asm_id','=',$information->asm_id)->where('e_id','=',$information->e_id)->where('d_id','=',$information->d_id)->where('product_code','=',$request->product_code[$i])->where('category','=',$request->category[$i])->first();
            $location_wise_check = LocationWiseProduct::where('division','=',$information->division)->where('district','=',$information->district)->where('sub_district','=',$information->sub_district)->where('postal_code','=',$information->postal_code)->where('product_code','=',$request->product_code[$i])->where('category','=',$request->category[$i])->first();
            $product_wise_check = ProductWiseSale::where('product_code','=',$request->product_code[$i])->where('category','=',$request->category[$i])->first();
            if(empty($hierarchy_wise_check)){
                HierarchyWiseProduct::create([
                    'm_id' => $information->m_id,'m_name' => $information->m_name,'m_email' => $information->m_email,'rm_id' => $information->rm_id,'rm_name' => $information->rm_name,
                    'rm_email' => $information->rm_email,'asm_id' => $information->asm_id,'asm_name' => $information->asm_name,'asm_email' => $information->asm_email,'e_id' => $information->e_id,
                    'e_name' => $information->e_name,'e_email' => $information->e_email,'d_id' => $information->d_id,'d_name' => $information->d_name,'d_code' => $information->d_code,
                    'product_code' => $request->product_code[$i],'product_name' => $request->product_name[$i],'category' => $request->category[$i],'price' => $request->price[$i], 'pieces' => $final_total_pieces[$i]
                ]);
            }else{
                $pieces_update = $hierarchy_wise_check->pieces + $final_total_pieces[$i];
                $hierarchy_wise_check->update([
                     'pieces' => $pieces_update,
                ]);
            }
            if(empty($location_wise_check)){
                LocationWiseProduct::create([
                    'division' => $information->division,'district' => $information->district,'sub_district' => $information->sub_district,'postal_code' => $information->postal_code,
                    'product_code' => $request->product_code[$i], 'product_name' => $request->product_name[$i], 'category' => $request->category[$i], 'price' => $request->price[$i], 'pieces' => $final_total_pieces[$i]
                ]);
            }else{
                $pieces_update = $location_wise_check->pieces + $final_total_pieces[$i];
                $location_wise_check->update([
                    'pieces' => $pieces_update,
                ]);
            }
            if(empty($product_wise_check)){
                ProductWiseSale::create([
                    'product_code' => $request->product_code[$i], 'product_name' => $request->product_name[$i], 'category' => $request->category[$i], 'price' => $request->price[$i], 'pieces' => $final_total_pieces[$i]
                ]);
            }else{
                $pieces_update = $product_wise_check->pieces + $final_total_pieces[$i];
                $product_wise_check->update([
                    'pieces' => $pieces_update,
                ]);
            }
        }
        Session::flash('success','Challan Created Successfully');
//        return redirect()->back();
//        return redirect('challan');
        return redirect('distribution');
    }
    public function show($id)
    {
        $details = Challan::find($id);
        return view('admin.challan.challan_details',compact('details'));
    }
    public function additionalChallanDetails($id){
        $details = Challan::find($id);
        return view('admin.challan.additional_challan_details',compact('details'));
    }
    public function totalChallanDetails($id){
        $details = Challan::find($id);
        return view('admin.challan.total_details',compact('details'));
    }
    public function edit($id)
    {
        $edit = Challan::find($id);
        return view('admin.challan.challan_edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $delete = Challan::find($id);
        $additional_challan_delete = AdditionalChallan::where('challan_id','=',$delete->id);
        $delete->delete();
        if(!empty($additional_challan_delete)){
            $additional_challan_delete->delete();
        }
        Session::flash('success','challan deleted successfully');
//        return redirect()->back();
//        return redirect('challan');
        return redirect('distribution');
    }
}
