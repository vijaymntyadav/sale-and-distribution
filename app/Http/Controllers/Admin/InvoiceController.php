<?php

namespace App\Http\Controllers\Admin;

use App\AdditionalInvoice;
use App\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $invoices = Invoice::orderBy('id','DESC')->paginate(20);
        return view('admin.invoice.invoice_index',compact('invoices'));
    }
    public function search(Request $request){
        $invoices = Invoice::where('em_name','like','%'.$request->search.'%')->orWhere('position','like','%'.$request->search.'%')
                            ->orWhere('challan_no','like','%'.$request->search.'%')->orWhere('organization_name','like','%'.$request->search.'%')
                            ->orWhere('created_at','like','%'.$request->search.'%')->orWhere('brand_name','like','%'.$request->search.'%')->orderBy('id','DESC')->paginate(20);
        return view('admin.invoice.invoice_index',compact('invoices'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
    }
    public function show($id)
    {
        $details = Invoice::find($id);
        return view('admin.invoice.invoice_details',compact('details'));
    }
    public function additionInvoiceDetails($id)
    {
        $details = Invoice::find($id);
        return view('admin.invoice.additional_invoice_details',compact('details'));
    }
    public function totalInvoiceDetails($id){
        $details = Invoice::find($id);
        return view('admin.invoice.total_details',compact('details'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $delete = Invoice::find($id);
        $additional_invoice_delete = AdditionalInvoice::where('challan_id','=',$delete->challan_id);
        if(!empty($additional_invoice_delete)){
            $additional_invoice_delete->delete();
        }
        $delete->delete();
        return redirect('invoice');
    }
}
