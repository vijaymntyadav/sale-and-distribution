<?php

namespace App\Http\Controllers\Admin;

use App\ApprovedSale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ApprovedSaleController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $approved = ApprovedSale::orderBy('id','DESC')->paginate(20);
        return view('admin.approved_sale.approved_sale_index',compact('approved'));
    }
    public function search(Request $request){
        $approved = ApprovedSale::where('em_name','like','%'.$request->search.'%')->orWhere('position','like','%'.$request->search.'%')
                                ->orWhere('challan_no','like','%'.$request->search.'%')->orWhere('organization_name','like','%'.$request->search.'%')
                                ->orWhere('created_at','like','%'.$request->search.'%')->orWhere('brand_name','like','%'.$request->search.'%')->orderBy('id','DESC')->paginate(20);
        return view('admin.approved_sale.approved_sale_index',compact('approved'));
    }
    public function approvedChallanDetails($id){
        $details = ApprovedSale::find($id);
        return view('admin.approved_sale.approved_challan_details',compact('details'));
    }

    public function approvedAdditionalChallanDetails($id){
        $details = ApprovedSale::find($id);
        return view('admin.approved_sale.approved_additional_challan_details',compact('details'));
    }
    public function approvedTotalChallanDetails($id){
        $details = ApprovedSale::find($id);
        return view('admin.approved_sale.approved_total_challan_details',compact('details'));
    }
    public function approvedInvoiceDetails($id){
        $details = ApprovedSale::find($id);
        return view('admin.approved_sale.approved_invoice_details',compact('details'));
    }
    public function approvedAdditionalInvoiceDetails($id){
        $details = ApprovedSale::find($id);
        return view('admin.approved_sale.approved_additional_invoice_details',compact('details'));
    }
    public function approvedTotalInvoiceDetails($id){
        $details = ApprovedSale::find($id);
        return view('admin.approved_sale.approved_total_invoice_details',compact('details'));
    }
    public function destroy($id){
        $delete = ApprovedSale::find($id);
        $delete->delete();
        Session::flash('success','Approved Sale Deleted Successfully');
        return redirect()->back();
    }
}
