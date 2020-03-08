<?php

namespace App\Http\Controllers\Admin;

use App\AllSale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CancelController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $cancels = AllSale::where('cancel','=',1)->orderBy('id','DESC')->paginate(20);
        return view('admin.cancel_sale.index',compact('cancels'));
    }
    public function cancelSaleSearch(Request $request){
        $cancels = AllSale::where('em_name','like','%'.$request->search.'%')->where('cancel','=',1)->orWhere('position','like','%'.$request->search.'%')->where('cancel','=',1)
            ->orWhere('organization_name','like','%'.$request->search.'%')->where('cancel','=',1)
            ->orWhere('project','like','%'.$request->search.'%')->where('cancel','=',1)
            ->orWhere('cancel_u_name','like','%'.$request->search.'%')->where('cancel','=',1)
            ->orWhere('cancel_description','like','%'.$request->search.'%')->where('cancel','=',1)
            ->orWhere('created_at','like','%'.$request->search.'%')->where('cancel','=',1)
            ->orderBy('id','DESC')->paginate(20);
        return view('admin.cancel_sale.index',compact('cancels'));
    }
    public function create()
    {
        //
    }
    public function cancelSaleInvoice($id){
        $invoice = AllSale::find($id);
        return view('admin.cancel_sale.invoice_details',compact('invoice'));
    }
    public function cancelSaleChallan($id){
        $challan = AllSale::find($id);
        return view('admin.cancel_sale.challan_details',compact('challan'));
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
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
        $delete = AllSale::find($id);
        $delete->delete();
        Session::flash('success','Sale Deleted Successfully');
        return redirect()->back();
    }
}
