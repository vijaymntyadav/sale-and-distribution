<?php

namespace App\Http\Controllers\Admin;

use App\AllSale;
use App\Sale;
use App\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function __construct()
    {
     return $this->middleware('auth');
    }
    public function index()
    {
       $sales = AllSale::where('sm_approved','=',1)->orderBy('id','DESC')->paginate(24);
       return view('admin.account.index',compact('sales'));
    }
    public function saleSearch(Request $request){
        $sales = AllSale::where('em_name','like','%'.$request->search.'%')->where('sm_approved','=',1)
                        ->orWhere('em_area','like','%'.$request->search.'%')->where('sm_approved','=',1)
                        ->orWhere('organization_name','like','%'.$request->search.'%')->where('sm_approved','=',1)
                        ->orWhere('number','like','%'.$request->search.'%')->where('sm_approved','=',1)
                        ->orWhere('total_amount','like','%'.$request->search.'%')->where('sm_approved','=',1)
                        ->orWhere('total_outstanding','like','%'.$request->search.'%')->where('sm_approved','=',1)
                        ->orderBy('id','DESC')->paginate(24);
        return view('admin.account.index',compact('sales'));
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
        $show = AllSale::find($id);
        return view('admin.sale.sale_show',compact('show'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $update = AllSale::find($id);
        $update->update([
            'division' => $request->division,
            'district' => $request->district,
            'sub_district' => $request->sub_district,
            'postal_code' => $request->postal_code,
        ]);
        Session::flash('success','Location Updated Successfully');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $delete = AllSale::find($id);
        if($delete->cancel == 0) {
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
        }
        $delete->delete();
        Session::flash('success','Sale Deleted Successfully');
        return redirect()->back();
    }
    public function pending($id){
        $all_sale = AllSale::find($id);
        $sale = Sale::find($all_sale->sale_id);
        $all_sale->update([
            'account_approved' => 1,
            'account_name' => Auth::user()->name,
            'account_email' => Auth::user()->email,
        ]);
        $sale->update([
            'permission' => '1'
        ]);
        Session::flash('success','Sale Approved Successfully');
        return redirect()->back();
    }
    public function cancel(Request $request){
        $cancel = AllSale::find($request->id);
        $permission = Sale::where('id','=',$cancel->sale_id);
        $cancel->update([
            'cancel' => 1,
            'cancel_u_name' => Auth::user()->name,
            'cancel_u_email' => Auth::user()->email,
            'cancel_description' => $request->cancel_description,
        ]);
        $permission->update([
            'permission' => 1,
        ]);
        $product_code = explode(',',str_replace(str_split('[]""'),'',$cancel->product_code));
        $category = explode(',',str_replace(str_split('[]""'),'',$cancel->category));
        $pieces = explode(',',str_replace(str_split('[]""'),'',$cancel->pieces));
        for($i = 0;$i < count(json_decode($cancel->product_code),COUNT_NORMAL);$i++){
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
        Session::flash('success','Sale Cancel Successfully');
        return redirect()->back();
    }
}
