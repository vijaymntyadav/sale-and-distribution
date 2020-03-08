<?php

namespace App\Http\Controllers\Admin;

use App\Commission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CommissionController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $commissions = Commission::orderBy('id','DESC')->paginate(20);
        return view('admin.commission.commission_index',compact('commissions'));
    }
     public function create()
     {
         return view('admin.commission.commission_create');
     }
     public function store(Request $request)
     {
         Commission :: create ([
             'commission' => $request->commission,
             'status' => $request->status,
         ]);
         Session::flash('success','Commission Created Successfully');
         return redirect('commission');
     }
     public function show($id)
     {

     }
     public function edit($id)
     {
         $edit = Commission::find($id);
         return view('admin.commission.commission_edit',compact('edit'));
     }
    public function update(Request $request, $id)
    {
        $updateCommission = Commission::find($id);
        $updateCommission->update([
            'commission'=>$request->commission,
             'status' => $request->status,
        ]);
        Session::flash('success','Commission Updated Successfully!');
        return redirect('commission');
    }

     public function destroy($id)
     {
         $deleteCommission = Commission::find($id);
         $deleteCommission->delete();
         Session::flash('success','Commission Deleted Successfully!');
         return redirect('commission');
     }
}
