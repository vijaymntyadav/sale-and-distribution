<?php

namespace App\Http\Controllers\API;

use App\EntryVisit;
use App\NextVisit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class DailyReportController extends Controller
{
    public function employeeDailyReport(Request $request){
        $entry = EntryVisit::where('em_id','=',$request['em_id'])->orderBy('id','DESC')->get();
        $push= array();
        for($i = 0;$i < count($entry);$i++){
            $next = NextVisit::where('entry_id','=',$entry[$i]['id'])->get();
            $push[] = [
                'market_entry' => $entry[$i],
                'next_entry' => $next,
            ];
        }
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($push);
        $perPage = 10;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $daily_report= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $daily_report->setPath($request->url());
        return response()->json($daily_report);
    }
    public function entryVisit(Request $request){
          $check = EntryVisit::where('em_id','=',$request['em_id'])->where('date','=',$request['date'])->first();
          if(empty($check)){
              EntryVisit::create([
                 'em_id' => $request['em_id'],
                 'em_name' => $request['em_name'],
                 'em_email' => $request['em_email'],
                 'dealer_name' => $request['dealer_name'],
                 'date' => $request['date'],
                 'in_time' => $request['in_time'],
                 'out_time' => $request['out_time'],
                 'order_status' => $request['order_status'],
                 'mode_of_transport' => $request['mode_of_transport'],
              ]);
              return response()->json('Market Entry Created Successfully');
          }else{
              return response()->json('Market Entry Visit Already Inserted');
          }
    }
    public function nextVisit(Request $request){
        $check = EntryVisit::where('em_id','=',$request['em_id'])->where('date','=',$request['date'])->first();
        if(!empty($check)){
            NextVisit::create([
                'entry_id' => $check->id,
                'em_id' => $request['em_id'],
                'em_name' => $request['em_name'],
                'em_email' => $request['em_email'],
                'dealer_name' => $request['dealer_name'],
                'date' => $request['date'],
                'in_time' => $request['in_time'],
                'out_time' => $request['out_time'],
                'order_status' => $request['order_status'],
                'collection_status' => $request['collection_status'],
                'mode_of_transport' => $request['mode_of_transport'],
                'distance_from_previous_station' => $request['distance_from_previous_station'],
            ]);
            return response()->json('Next Entry Created Successfully');
        }else{
            return response()->json('Market Entry Visit Not Created');
        }
    }
    public function singleEntryShow($id){
        $market_entry = EntryVisit::find($id);
        $next_entry = NextVisit::where('entry_id','=',$market_entry->id)->get();
        $list = (object)[
            "market_entry" => $market_entry,
            "next_entry" => $next_entry
        ];
        return response()->json($list);
    }
    public function entryVisitEdit($id){
        $edit = EntryVisit::find($id);
        return response()->json($edit);
    }
    public function entryVisitUpdate(Request $request){
        $update = EntryVisit::find($request['id']);
        $update->update([
            'dealer_name' => $request['dealer_name'],
            'in_time' => $request['in_time'],
            'out_time' => $request['out_time'],
            'order_status' => $request['order_status'],
            'mode_of_transport' => $request['mode_of_transport'],
        ]);
        return response()->json('Market Entry Updated Successfully');
    }
    public function nextVisitEdit($id){
        $edit = NextVisit::find($id);
        return response()->json($edit);
    }
    public function nextVisitUpdate(Request $request){
        $update = NextVisit::find($request['id']);
        $update->update([
            'dealer_name' => $request['dealer_name'],
            'in_time' => $request['in_time'],
            'out_time' => $request['out_time'],
            'order_status' => $request['order_status'],
            'collection_status' => $request['collection_status'],
            'mode_of_transport' => $request['mode_of_transport'],
            'distance_from_previous_station' => $request['distance_from_previous_station'],
        ]);
        return response()->json('Next Entry Updated Successfully');
    }
    public function entryVisitDelete(Request $request){
        $delete = EntryVisit::find($request['id']);
        $check =  EntryVisit::find($request['id']);
        $next_visit = NextVisit::where('entry_id','=',$check->id);
        if(!empty($next_visit)){
            $next_visit->delete();
        }
        $delete->delete();
        return response()->json('Market Entry Deleted Successfully');
    }
    public function nextVisitDelete(Request $request){
        $delete = NextVisit::find($request['id']);
        $delete->delete();
        return response()->json('Next Entry Deleted Successfully');
    }
}
