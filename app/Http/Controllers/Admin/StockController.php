<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\ProductCategory;
use App\Stock;
use App\Warehouse;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $brands = Brand::orderBy('id','DESC')->get();
        $stocks = Stock::orderBy('id','DESC')->paginate(24);
        return view('admin.stock.stock_in',compact('brands','stocks'));
    }
    public function create()
    {
        $products = ProductCategory::where('product_status','=','nothing')->orderBy('id','DESC')->get();
        $brands = Brand::orderBy('id','DESC')->get();
        return view('admin.stock.stock_create',compact('brands','products'));
    }
    public function store(Request $request)
    {
        for ($i = 0;$i < count($request->product_code);$i++){
            $product_check = Warehouse::where('product_code','=',$request->product_code[$i])->where('category','=',$request->category[$i])->first();
            if(empty($product_check)){
                Warehouse::create([
                    'brand_name' => $request->product_brand_name_store,
                    'product_name' => $request->product_name[$i],
                    'product_code' => $request->product_code[$i],
                    'category' => $request->category[$i],
                    'store' => $request->stock_measurement[$i],
                    'booking_product' => 0,
                    'product_availability' => $request->stock_measurement[$i],
                ]);
            }else{
                $update_store = $product_check->store + $request->stock_measurement[$i];
                $update_product_availability = $product_check->product_availability + $request->stock_measurement[$i];
                $product_check->update([
                    'store' => $update_store,
                    'product_availability' => $update_product_availability,
                ]);
            }
        }
        $slug = rand();
        Stock::create([
            'brand_name' => $request->product_brand_name_store,
            'product_name' =>json_encode($request->product_name, JSON_UNESCAPED_UNICODE),
            'product_code' => json_encode($request->product_code,JSON_UNESCAPED_UNICODE),
            'category' => json_encode($request->category,JSON_UNESCAPED_UNICODE),
            'stock_measurement' => json_encode($request->stock_measurement),
            'store_date' => $request->store_date,
            'slug' => $slug
        ]);
        Session::flash('success','Your Stock Created Successfully');
        return redirect('stock');
    }
    public function show($id)
    {
        $show = Stock::find($id);
        return view('admin.stock.stock_details',compact('show'));
    }
    public function edit($id)
    {
       $edit = Stock::find($id);
       $products = ProductCategory::where('brand_name','=',$edit->brand_name)->orderBy('id','DESC')->get();
       return view('admin.stock.stock_edit',compact('edit','products'));
    }
    public function update(Request $request, $id)
    {
        $update = Stock::find($id);
        $product_code = explode(',',str_replace(str_split('[]""'),'',$update->product_code));
        $category = explode(',',str_replace(str_split('[]""'),'',$update->category));
        $stock_measurement = explode(',',str_replace(str_split('[]""'),'',$update->stock_measurement));
        $update->update([
            'brand_name' => $request->product_brand_name_store,
            'product_name' =>json_encode($request->product_name, JSON_UNESCAPED_UNICODE),
            'product_code' => json_encode($request->product_code,JSON_UNESCAPED_UNICODE),
            'category' => json_encode($request->category,JSON_UNESCAPED_UNICODE),
            'stock_measurement' => json_encode($request->stock_measurement),
            'store_date' => $request->store_date,
        ]);
        for ($i = 0;$i < count(json_decode($update->product_code),COUNT_NORMAL);$i++){
            $product_check = Warehouse::where('product_code','=',$product_code[$i])->where('category','=',$category[$i])->first();
            if(empty($product_check)){
                Warehouse::create([
                    'brand_name' => $request->product_brand_name_store,
                    'product_name' => $request->product_name[$i],
                    'product_code' => $request->product_code[$i],
                    'category' => $request->category[$i],
                    'store' => $request->stock_measurement[$i],
                    'booking_product' => 0,
                    'product_availability' => $request->stock_measurement[$i],
                ]);
            }else{
                if(!empty($product_check)){
                    $store_product_back = $product_check->store - $stock_measurement[$i];
                    $product_availability_back = $product_check->product_availability - $stock_measurement[$i];
                    $product_check->update([
                        'store' => $store_product_back,
                        'product_availability' => $product_availability_back,
                    ]);
                }
                $update_store = $product_check->store + $request->stock_measurement[$i];
                $update_product_availability = $product_check->product_availability + $request->stock_measurement[$i];
                $product_check->update([
                    'store' => $update_store,
                    'product_availability' => $update_product_availability,
                ]);
            }
        }
        Session::flash('success','Your Stock Updated Successfully');
        return redirect('stock');
    }
    public function destroy($id)
    {
        $stock_delete = Stock::find($id);
        $warehouse_update = Stock::find($id);
        $product_code = explode(',',str_replace(str_split('[]""'),'',$warehouse_update->product_code));
        $category = explode(',',str_replace(str_split('[]""'),'',$warehouse_update->category));
        $stock_measurement = explode(',',str_replace(str_split('[]""'),'',$warehouse_update->stock_measurement));
        for($i = 0;$i < count(json_decode($warehouse_update->product_code),COUNT_NORMAL) ; $i++){
            $product_check = Warehouse::where('product_code','=',$product_code[$i])->where('category','=',$category[$i])->first();
            if(!empty($product_check)){
                $store_product_back = $product_check->store - $stock_measurement[$i];
                $product_availability_back = $product_check->product_availability - $stock_measurement[$i];
                $product_check->update([
                    'store' => $store_product_back,
                    'product_availability' => $product_availability_back,
                ]);
            }
        }
        $stock_delete->delete();
        Session::flash('success','Stock Deleted Successfully');
        return redirect('stock');
    }
    public function brandSelect($brand_name){
        $brands = Brand::orderBy('id','DESC')->get();
        $products = ProductCategory::where('brand_name','=',$brand_name)->get();
        return view('admin.stock.stock_paginate',compact('products','brands'))->render();
    }
    public function stockBrandSelect(Request $request){
        $brands = Brand::orderBy('id','DESC')->get();
        if($request->brand_name == 'all'){
            $stocks = Stock::orderBy('id','DESC')->paginate(24);
        }else{
            $stocks = Stock::where('brand_name','=',$request->brand_name)->orderBy('id','DESC')->paginate(24);
        }
        return view('admin.stock.stock_in',compact('brands','stocks'));
    }
    public function stockSearch(Request $request){
        $brands = Brand::orderBy('id','DESC')->get();
        $stocks = Stock::where('brand_name','like','%'.$request->search.'%')
                        ->orWhere('store_date','like','%'.$request->search.'%')
                        ->orWhere('created_at','like','%'.$request->search.'%')
                        ->orderBy('id','DESC')->paginate(24);
        return view('admin.stock.stock_in',compact('brands','stocks'));
    }
    public function stockPDFDownload($id){
        $show = Stock::find($id);
        $data = [
          'brand_name' => $show->brand_name,
          'slug' => $show->slug,
          'created_at' => explode(' ',$show->created_at),
          'store_date' => $show->store_date,
          'product_name' => explode(',',str_replace(str_split('[]""'),'',$show->product_name)),
          'product_code' => explode(',',str_replace(str_split('[]""'),'',$show->product_code)),
          'category' => explode(',',str_replace(str_split('[]""'),'',$show->category)),
          'stock_measurement' => explode(',',str_replace(str_split('[]""'),'',$show->stock_measurement)),
          'show' => Stock::find($id),
        ];
        $pdf = PDF::loadView('admin.stock.stock_pdf_download',$data);
        return $pdf->download('stock.pdf');
    }
}
