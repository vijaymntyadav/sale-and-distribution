<?php

namespace App\Http\Controllers\Admin;

use App\ApprovedSale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SaleReportController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $sales = ApprovedSale::orderBy('id','DESC')->paginate(5);
        $managers = ApprovedSale::select('m_id','m_name','m_email')->distinct()->get(['m_id','m_name','m_email']);
        $divisions = ApprovedSale::select('division')->distinct()->get(['division']);
        if ($request->ajax()) {
            return view('admin.sale_report.paginate',compact('sales'))->render();
        }
        return view('admin.sale_report.index',compact('sales','managers','divisions'));
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
       $details = ApprovedSale::find($id);
       return view('admin.sale_report.details',compact('details'));
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
        $delete = ApprovedSale::find($id);
        $delete->delete();
        Session::flash('success','Sale Report Deleted Successfully');
        return redirect('sale_report');
    }
    public function managerWiseRMFind(Request $request){
        $rm = ApprovedSale::where('m_id','=',$request->m_id)->where('rm_id','!=',0)->distinct()->get(['rm_id','rm_name','rm_email']);
        $dealer = ApprovedSale::where('m_id','=',$request->m_id)->where('rm_id','=',0)->where('d_id','!=',0)->distinct()->get(['d_id','d_name','d_code']);
        return response()->json([$rm,$dealer]);
    }
    public function rmWiseASMFind(Request $request){
        $asm = ApprovedSale::where('m_id','=',$request->m_id)->where('rm_id','=',$request->rm_id)->where('asm_id','!=',0)->distinct()->get(['asm_id','asm_name','asm_email']);
        $dealer = ApprovedSale::where('m_id','=',$request->m_id)->where('rm_id','=',$request->rm_id)->where('asm_id','=',0)->where('d_id','!=',0)->distinct()->get(['d_id','d_name','d_code']);
        return response()->json([$asm,$dealer]);
    }
    public function asmWiseExecutiveFind(Request $request){
        $executive = ApprovedSale::where('m_id','=',$request->m_id)->where('rm_id','=',$request->rm_id)->where('asm_id','=',$request->asm_id)->where('e_id','!=',0)->distinct()->get(['e_id','e_name','e_email']);
        $dealer = ApprovedSale::where('m_id','=',$request->m_id)->where('rm_id','=',$request->rm_id)->where('asm_id','=',$request->asm_id)->where('e_id','=',0)->where('d_id','!=',0)->distinct()->get(['d_id','d_name','d_code']);
        return response()->json([$executive,$dealer]);
    }
    public function executiveWiseDealerFind(Request $request){
        $dealer = ApprovedSale::where('m_id','=',$request->m_id)->where('rm_id','=',$request->rm_id)->where('asm_id','=',$request->asm_id)->where('e_id','=',$request->e_id)->where('d_id','!=',0)->distinct()->get(['d_id','d_name','d_code']);
        $division = ApprovedSale::where('m_id','=',$request->m_id)->where('rm_id','=',$request->rm_id)->where('asm_id','=',$request->asm_id)->where('e_id','=',$request->e_id)->distinct()->get(['division']);
        return response()->json([$dealer,$division]);
    }
    public function divisionWiseDistrictFind(Request $request){
        $district = ApprovedSale::where('division','=',$request->division)->distinct()->get(['district']);
        return response()->json($district);
    }
    public function districtWiseSubLocalityFind(Request $request){
        $sub_locality = ApprovedSale::where('division','=',$request->division)->where('district','=',$request->district)->distinct()->get(['sub_district']);
        return response()->json($sub_locality);
    }
    public function subLocalityWisePostalCodeFind(Request $request){
        $postal_code = ApprovedSale::where('division','=',$request->division)->where('district','=',$request->district)->where('sub_district','=',$request->sub_district)->distinct()->get(['postal_code']);
        return response()->json($postal_code);
    }
    public function locationWiseReportFind(Request $request){
        if(($request->formData['division']) && !($request->formData['district']) && !($request->formData['sub_district']) && !($request->formData['postal_code'])){
            $sales = ApprovedSale::where('division','=',$request->formData['division'])->orderBy('id','DESC')->paginate(5);
        }elseif (($request->formData['division']) && ($request->formData['district']) && !($request->formData['sub_district']) && !($request->formData['postal_code'])){
            $sales = ApprovedSale::where('division','=',$request->formData['division'])->where('district','=',$request->formData['district'])->orderBy('id','DESC')->paginate(5);
        }elseif (($request->formData['division']) && ($request->formData['district']) && ($request->formData['sub_district']) && !($request->formData['postal_code'])){
            $sales = ApprovedSale::where('division','=',$request->formData['division'])->where('district','=',$request->formData['district'])->where('sub_district','=',$request->formData['sub_district'])->orderBy('id','DESC')->paginate(5);
        }elseif (($request->formData['division']) && ($request->formData['district']) && ($request->formData['sub_district']) && ($request->formData['postal_code'])){
            $sales = ApprovedSale::where('division','=',$request->formData['division'])->where('district','=',$request->formData['district'])->where('sub_district','=',$request->formData['sub_district'])->where('postal_code','=',$request->formData['postal_code'])->orderBy('id','DESC')->paginate(5);
        }else{
            $sales = ApprovedSale::orderBy('id','DESC')->paginate(5);
        }
        return view('admin.sale_report.paginate',compact('sales'))->render();
    }
    public function hierarchyWiseReportFind(Request $request){
        $sales = ApprovedSale::where('m_id','=',$request->formData['m_id'])->where('rm_id','=',$request->formData['rm_id'])
                             ->where('asm_id','=',$request->formData['asm_id'])->where('e_id','=',$request->formData['e_id'])
                             ->where('d_id','=',$request->formData['d_id'])->orderBy('id','DESC')->paginate(5);
        return view('admin.sale_report.paginate',compact('sales'))->render();
    }
}
