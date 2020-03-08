<?php

namespace App\Http\Controllers\Admin;

use App\ReturnProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReturnController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $returns = ReturnProduct::orderBy('id','DESC')->paginate(20);
        return view('admin.return.index',compact('returns'));
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
        //
    }
}
