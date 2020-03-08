<?php

namespace App\Http\Controllers\Admin;

use App\LocationWiseProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LocationWiseProductController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $locations = LocationWiseProduct::orderBy('id','DESC')->paginate(20);
        return view('admin.location_wise_product.index',compact('locations'));
    }
    public function locationWiseProductSearch(Request $request){
        $locations = LocationWiseProduct::where('division','like','%'.$request->search.'%')
                                        ->orWhere('district','like','%'.$request->search.'%')
                                        ->orWhere('sub_district','like','%'.$request->search.'%')
                                        ->orWhere('postal_code','like','%'.$request->search.'%')
                                        ->orWhere('product_code','like','%'.$request->search.'%')
                                        ->orWhere('product_name','like','%'.$request->search.'%')
                                        ->orWhere('category','like','%'.$request->search.'%')
                                        ->orWhere('price','like','%'.$request->search.'%')
                                        ->orWhere('pieces','like','%'.$request->search.'%')
                                        ->orderBy('id','DESC')->paginate(20);
        return view('admin.location_wise_product.index',compact('locations'));
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
       $delete = LocationWiseProduct::find($id);
       $delete->delete();
       Session::flash('success','Track Deleted Successfully');
       return redirect('location_wise_product');
    }
}
