<?php

namespace App\Http\Controllers\Admin;

use App\HierarchyWiseProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HierarchyWiseProductController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $hierarchies = HierarchyWiseProduct::orderBy('id','DESC')->paginate(20);
        return view('admin.hierarchy_wise_product.index',compact('hierarchies'));
    }
    public function hierarchyWiseProductSearch(Request $request){
        $hierarchies = HierarchyWiseProduct::where('m_name','like','%'.$request->search.'%')
                                            ->orWhere('rm_name','like','%'.$request->search.'%')
                                            ->orWhere('asm_name','like','%'.$request->search.'%')
                                            ->orWhere('e_name','like','%'.$request->search.'%')
                                            ->orWhere('d_code','like','%'.$request->search.'%')
                                            ->orWhere('product_code','like','%'.$request->search.'%')
                                            ->orWhere('product_name','like','%'.$request->search.'%')
                                            ->orWhere('category','like','%'.$request->search.'%')
                                            ->orWhere('price','like','%'.$request->search.'%')
                                            ->orWhere('pieces','like','%'.$request->search.'%')
                                            ->orderBy('id','DESC')->paginate(20);
        return view('admin.hierarchy_wise_product.index',compact('hierarchies'));
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
        $delete = HierarchyWiseProduct::find($id);
        $delete->delete();
        Session::flash('success','Track Deleted Successfully');
        return redirect('hierarchy_wise_product');
    }
}
