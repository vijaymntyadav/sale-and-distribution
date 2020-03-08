<?php

namespace App\Http\Controllers\Admin;

use App\EntryVisit;
use App\NextVisit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class DailyReportController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
       $reports = EntryVisit::orderBy('id','DESC')->paginate(20);
       return view('admin.daily_report.index',compact('reports'));
    }
    public function dailyReportSearch(Request $request){
        $reports = EntryVisit::where('em_name','like','%'.$request->search.'%')->orWhere('date','like','%'.$request->search.'%')->orderBy('id','DESC')->paginate(20);
        return view('admin.daily_report.index',compact('reports'));
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
        $delete = EntryVisit::find($id);
        $check =  EntryVisit::find($id);
        $next_visit = NextVisit::where('entry_id','=',$check->id);
        if(!empty($next_visit)){
            $next_visit->delete();
        }
        $delete->delete();
        Session::flash('success','daily report deleted successfully');
        return redirect()->back();
    }
}
