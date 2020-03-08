<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $brands = Brand::orderBy('id','DESC')->get();
        $products = ProductCategory::orderBy('id','DESC')->paginate(24);
        return view('admin.product_category.product_categories',compact('products','brands'));
    }
    public function create()
    {
        $brands = Brand::orderBy('id','DESC')->get();
        return view('admin.product_category.product_create',compact('brands'));
    }
    public function store(Request $request)
    {
        $product_category_check = ProductCategory::where('product_code','=',$request->product_code)->where('category','=',$request->category)->first();
        if(empty($product_category_check)){
            $request->validate([
               'product_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $product_image = $request->file('product_image');
            $product_image_name = time().'.'.$product_image->getClientOriginalExtension();
            $product_image->move(public_path().'/assets/images/products/',$product_image_name);
            ProductCategory::create([
                'brand_name' => $request->brand_name,
                'product_image' => $product_image_name,
                'product_code' => $request->product_code,
                'product_name' => $request->product_name,
                'category' => $request->category,
                'price' => $request->price,
                'product_status' => $request->product_status,
            ]);
            Session::flash('success','Product Created Successfully');
            return redirect('product_category');
        }else{
            Session::flash('success','Product Are Already Exists');
            return redirect('product_category');
        }
    }
    public function show($id)
    {
        //

    }
    public function select(Request $request){
        $brands = Brand::orderBy('id','DESC')->get();
        if($request->product_brand == 'all'){
            $products = ProductCategory::orderBy('id','DESC')->paginate(24);
        }else{
            $products = ProductCategory::where('brand_name','=',$request->product_brand)->orderBy('id','DESC')->paginate(24);
        }
        return view('admin.product_category.product_categories',compact('products','brands'));
    }
    public function search(Request $request){
        $brands = Brand::orderBy('id','DESC')->get();
        $products = ProductCategory::where('brand_name','like','%'.$request->search.'%')
                                    ->orWhere('product_code','like','%'.$request->search.'%')
                                    ->paginate(24);
        return view('admin.product_category.product_categories',compact('products','brands'));
    }
    public function edit($id)
    {
        $brands = Brand::orderBy('id','DESC')->get();
        $edit = ProductCategory::find($id);
        return view('admin.product_category.product_edit',compact('edit','brands'));
    }
    public function update(Request $request, $id)
    {
        $product_name_duplicate_check = ProductCategory::where('id','!=',$id)->where('product_code','=',$request->product_code)->where('category','=',$request->category)->first();
        $update = ProductCategory::find($id);
        if(!empty($product_name_duplicate_check)){
            $request->validate([
                'product_code' => 'unique:product_categories',
            ]);
        }
        $product_image = $request->file('product_image');
        if(!empty($product_image)){
            $request->validate([
                'product_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $product_image_name = time().'.'.$product_image->getClientOriginalExtension();
            $product_image->move(public_path().'/assets/images/products/',$product_image_name);
            $update->update([
                'brand_name' => $request->brand_name,
                'product_image' => $product_image_name,
                'product_code' => $request->product_code,
                'product_name' => $request->product_name,
                'category' => $request->category,
                'price' => $request->price,
                'product_status' => $request->product_status,
            ]);
        }else{
            $update->update([
                'brand_name' => $request->brand_name,
                'product_code' => $request->product_code,
                'product_name' => $request->product_name,
                'category' => $request->category,
                'price' => $request->price,
                'product_status' => $request->product_status,
            ]);
        }
        Session::flash('success','Product Updated Successfully');
        return redirect('product_category');
    }
    public function destroy($id)
    {
        $delete = ProductCategory::find($id);
        $delete->delete();
        unlink('assets/images/products/'.$delete->product_image);
        Session::flash('success','Product Deleted Successfully');
        return redirect('product_category');
    }
}
