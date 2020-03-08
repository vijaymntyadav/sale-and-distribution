<?php

namespace App\Http\Controllers\API;

use App\AllSale;
use App\ApprovedSale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public $successStatus = 200;
    public function login(Request $request){
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            $user = Auth::user();
            $cancel = AllSale::where('em_id','=',$user->id)->where('cancel','=',1)->get();
            $approve = ApprovedSale::where('em_id','=',$user->id)->get();
            if($cancel->count() ==! 0){
                $sale_cancel = count($cancel);
            }else{
                $sale_cancel = 0;
            }
            if($approve->count() ==! 0){
                $sale_approve = count($approve);
            }else{
                $sale_approve = 0;
            }
            $list = (object) [
                'user' => $user,
                'cancel_sale' => $sale_cancel,
                'approve_sale' => $sale_approve,
            ];
            return response()->json($list);
        }
        else{
            return response()->json(['error'=>'password or email not matched'], 401);
        }
    }
    public function logout() {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
    public function approveCancelSale($id){
        $cancel = AllSale::where('em_id','=',$id)->where('cancel','=',1)->get();
        $approve = ApprovedSale::where('em_id','=',$id)->get();
        if($cancel->count() ==! 0){
            $sale_cancel = count($cancel);
        }else{
            $sale_cancel = 0;
        }
        if($approve->count() ==! 0){
            $sale_approve = count($approve);
        }else{
            $sale_approve = 0;
        }
        $list = (object) [
            'cancel_sale' => $sale_cancel,
            'approve_sale' => $sale_approve,
        ];
        return response()->json($list);
    }
}
