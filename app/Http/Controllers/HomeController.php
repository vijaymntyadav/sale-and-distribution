<?php

namespace App\Http\Controllers;

use App\Dealer;
use App\Hierarchy;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $manager = Hierarchy::distinct()->get('manager_id');
        $rm = Hierarchy::where('regional_manager_id','!=',null)->distinct()->get('regional_manager_id');
        $asm = Hierarchy::where('area_sales_manager_id','!=',null)->distinct()->get('area_sales_manager_id');
        $e = Hierarchy::where('executive_id','!=',null)->distinct()->get('executive_id');
        $dealer = Dealer::distinct()->get('dealer_code');
        $admin = User::distinct()->get('position');
        return view('home',compact('manager','rm','asm','e','dealer','admin'));
    }
}
