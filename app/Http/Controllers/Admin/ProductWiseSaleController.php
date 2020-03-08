<?php

namespace App\Http\Controllers\Admin;

use App\ProductWiseSale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductWiseSaleController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
       $products = ProductWiseSale::orderBy('id','DESC')->paginate(20);
       return view('admin.product_wise.index',compact('products'));
    }
    public function productWiseSaleSearch(Request $request){
        $products = ProductWiseSale::where('product_code','like','%'.$request->search.'%')
                                    ->orWhere('product_name','like','%'.$request->search.'%')
                                    ->orWhere('category','like','%'.$request->search.'%')
                                    ->orWhere('price','like','%'.$request->search.'%')
                                    ->orWhere('pieces','like','%'.$request->search.'%')
                                    ->orderBy('id','DESC')->paginate(20);
        return view('admin.product_wise.index',compact('products'));
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
        $delete = ProductWiseSale::find($id);
        $delete->delete();
        Session::flash('success','Track Deleted Successfully');
        return redirect('product_wise_sale');
    }
}
