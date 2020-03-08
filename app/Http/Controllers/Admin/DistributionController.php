<?php

namespace App\Http\Controllers\Admin;

use App\AllSale;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DistributionController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $sales = AllSale::where('distributor','=',1)->orderBy('id','DESC')->paginate(24);
        return view('admin.distribution.distribution_index',compact('sales'));
    }
    public function search(Request $request){
        $sales = AllSale::where('em_name','like','%'.$request->search.'%')->where('distributor','=',1)
            ->orWhere('em_area','like','%'.$request->search.'%')->where('distributor','=',1)
            ->orWhere('organization_name','like','%'.$request->search.'%')->where('distributor','=',1)
            ->orWhere('mobile_number','like','%'.$request->search.'%')->where('distributor','=',1)
            ->orWhere('total_amount','like','%'.$request->search.'%')->where('distributor','=',1)
            ->orWhere('total_outstanding','like','%'.$request->search.'%')->where('distributor','=',1)
            ->orderBy('id','DESC')->paginate(24);
        return view('admin.distribution.distribution_index',compact('sales'));
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
        return view('admin.distribution.sale_details',compact('show'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $user = User::where('email','=',$request->email)->first();
        $check = Hash::check($request->input('password'),$user->password);
        if($check){
            return response()->json($check);
        }else{
            return response()->json('password or email not matched');
        }
    }
    public function destroy($id)
    {
        //
    }
    public function distributionSearch(Request $request){
        $sales = Sale::where('sale_permission','=',1)->where('em_name','like','%'.$request->search.'%')
            ->where('sale_permission','=',1)->orWhere('em_area','like','%'.$request->search.'%')
            ->where('sale_permission','=',1)->orWhere('or_organisation_name','like','%'.$request->search.'%')
            ->where('sale_permission','=',1)->orWhere('or_number','like','%'.$request->search.'%')
            ->where('sale_permission','=',1)->orWhere('or_total_amount','like','%'.$request->search.'%')
            ->where('sale_permission','=',1)->orWhere('or_total_due','like','%'.$request->search.'%')
            ->orderBy('id','DESC')
            ->paginate(24);
        return view('admin.distribution.distribution_index',compact('sales'));
    }
}
