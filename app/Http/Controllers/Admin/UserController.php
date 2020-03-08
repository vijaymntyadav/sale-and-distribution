<?php

namespace App\Http\Controllers\Admin;

use App\ApprovedSale;
use App\Dealer;
use App\EntryVisit;
use App\Hierarchy;
use App\HierarchyWiseProduct;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(24);
        return view('admin.user.all_user',compact('users'));
    }
    public function create()
    {
        $hierarchies = Hierarchy::distinct()->get(['manager_id','manager_name','manager_email']);
        $roles = Role::where('status','!=','super_admin')->orderBy('id','DESC')->get();
        return view('admin.user.create_user',compact('hierarchies','roles'));
    }
    public function store(Request $request)
    {

        $nid_check = User::where('nid','=',$request->nid)->first();
        if(!empty($nid_check)){
            $request->validate([
                'nid' => 'unique:users',
            ]);
        }
        if($request->password != $request->confirm_password){
            $request->validate([
                'password' => 'confirmed',
            ]);
        }
        $request->validate([
            'email' => 'unique:users',
//            'nid' => 'required|min:13|max:13',
        ]);
        if($request->account_for == 'Dealer'){
            $check_dealer_code = Dealer::where('dealer_code','=',$request->dealer_code)->first();
            if(!empty($check_dealer_code)){
                $request->validate([
                    'dealer_code' => 'unique:dealers'
                ]);
            }
        }
        $user_image = $request->file('image');
        $user_image_name = time().'.'.$user_image->getClientOriginalExtension();
        $user_image->move(public_path().'/assets/images/employee_image/',$user_image_name);
        $user = User::create([
            'name' => $request->first_name.' '.$request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'image' => $user_image_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nid' => $request->nid,
            'address' => $request->address,
            'area' => $request->area,
            'position' => $request->position,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
        if($request->account_for == 'Sr.Manager' || $request->account_for == 'Manager'){
            $user->h_manager()->create([
                'manager_name' => $request->first_name.' '.$request->last_name,
                'manager_email' => $request->email,
            ]);
        }else if($request->account_for == 'RM'){
            $manager = Hierarchy::where('manager_id','=',$request->manager)->first();
            $user->h_regional_manager()->create([
                'manager_id' => $manager->manager_id,
                'manager_name' => $manager->manager_name,
                'manager_email' => $manager->manager_email,
                'regional_manager_name' => $request->first_name.' '.$request->last_name,
                'regional_manager_email' => $request->email,
            ]);
        }else if($request->account_for == 'ASM'){
            $manager = Hierarchy::where('manager_id','=',$request->manager)->first();
            $regional_manager = Hierarchy::where('regional_manager_id','=',$request->regional_manager)->first();
            $user->h_area_sales_manager()->create([
                'manager_id' => $manager->manager_id,
                'manager_name' => $manager->manager_name,
                'manager_email' => $manager->manager_email,
                'regional_manager_id' => $regional_manager->regional_manager_id,
                'regional_manager_name' => $regional_manager->regional_manager_name,
                'regional_manager_email' => $regional_manager->regional_manager_email,
                'area_sales_manager_name' => $request->first_name.' '.$request->last_name,
                'area_sales_manager_email' => $request->email,
            ]);
        }else if($request->account_for == 'Sr.Executive' || $request->account_for == 'Executive'){
            $manager = Hierarchy::where('manager_id','=',$request->manager)->first();
            $regional_manager = Hierarchy::where('regional_manager_id','=',$request->regional_manager)->first();
            $area_sales_manger = Hierarchy::where('area_sales_manager_id','=',$request->area_sales_manager)->first();
            $user->h_executive()->create([
                'manager_id' => $manager->manager_id,
                'manager_name' => $manager->manager_name,
                'manager_email' => $manager->manager_email,
                'regional_manager_id' => $regional_manager->regional_manager_id,
                'regional_manager_name' => $regional_manager->regional_manager_name,
                'regional_manager_email' => $regional_manager->regional_manager_email,
                'area_sales_manager_id' => $area_sales_manger->area_sales_manager_id,
                'area_sales_manager_name' => $area_sales_manger->area_sales_manager_name,
                'area_sales_manager_email' => $area_sales_manger->area_sales_manager_email,
                'executive_name' => $request->first_name.' '.$request->last_name,
                'executive_email' => $request->email,
            ]);
        }else if($request->account_for == 'Dealer'){
            if(($request->manager) && (!$request->regional_manager) && (!$request->area_sales_manager) && (!$request->executive)){
                $manager = Hierarchy::where('manager_id','=',$request->manager)->first();
                $m_id = $manager->manager_id ; $m_name = $manager->manager_name ; $m_email = $manager->manager_email ; $rm_id = 0 ; $rm_name = 0 ; $rm_email = 0 ; $asm_id = 0 ; $asm_name = 0 ; $asm_email = 0;
                $e_id = 0 ; $e_name = 0 ; $e_email = 0;
            }elseif (($request->manager) && ($request->regional_manager) && (!$request->area_sales_manager) && (!$request->executive)){
                $manager = Hierarchy::where('manager_id','=',$request->manager)->first();
                $regional_manager = Hierarchy::where('regional_manager_id','=',$request->regional_manager)->first();
                $m_id = $manager->manager_id ; $m_name = $manager->manager_name ; $m_email = $manager->manager_email ; $rm_id = $regional_manager->regional_manager_id ; $rm_name = $regional_manager->regional_manager_name ; $rm_email = $regional_manager->regional_manager_email ; $asm_id = 0 ; $asm_name = 0 ; $asm_email = 0;
                $e_id = 0 ; $e_name = 0 ; $e_email = 0;
            }elseif (($request->manager) && ($request->regional_manager) && ($request->area_sales_manager) && (!$request->executive)){
                $manager = Hierarchy::where('manager_id','=',$request->manager)->first();
                $regional_manager = Hierarchy::where('regional_manager_id','=',$request->regional_manager)->first();
                $area_sales_manger = Hierarchy::where('area_sales_manager_id','=',$request->area_sales_manager)->first();
                $m_id = $manager->manager_id ; $m_name = $manager->manager_name ; $m_email = $manager->manager_email ; $rm_id = $regional_manager->regional_manager_id ; $rm_name = $regional_manager->regional_manager_name ; $rm_email = $regional_manager->regional_manager_email ;
                $asm_id = $area_sales_manger->area_sales_manager_id ; $asm_name = $area_sales_manger->area_sales_manager_name ; $asm_email = $area_sales_manger->area_sales_manager_email;$e_id = 0 ; $e_name = 0 ; $e_email = 0;
            }elseif (($request->manager) && ($request->regional_manager) && ($request->area_sales_manager) && ($request->executive)){
                $manager = Hierarchy::where('manager_id','=',$request->manager)->first();
                $regional_manager = Hierarchy::where('regional_manager_id','=',$request->regional_manager)->first();
                $area_sales_manger = Hierarchy::where('area_sales_manager_id','=',$request->area_sales_manager)->first();
                $executive = Hierarchy::where('executive_id','=',$request->executive)->first();
                $m_id = $manager->manager_id ; $m_name = $manager->manager_name ; $m_email = $manager->manager_email ; $rm_id = $regional_manager->regional_manager_id ; $rm_name = $regional_manager->regional_manager_name ; $rm_email = $regional_manager->regional_manager_email ;
                $asm_id = $area_sales_manger->area_sales_manager_id ; $asm_name = $area_sales_manger->area_sales_manager_name ; $asm_email = $area_sales_manger->area_sales_manager_email;
                $e_id = $executive->executive_id ; $e_name = $executive->executive_name ; $e_email = $executive->executive_email;
            }
            $user->dealer()->create([
                'manager_id' => $m_id,
                'manager_name' => $m_name,
                'manager_email' => $m_email,
                'regional_manager_id' => $rm_id,
                'regional_manager_name' => $rm_name,
                'regional_manager_email' => $rm_email,
                'area_sales_manager_id' => $asm_id,
                'area_sales_manager_name' => $asm_name,
                'area_sales_manager_email' => $asm_email,
                'executive_id' => $e_id,
                'executive_name' => $e_name,
                'executive_email' => $e_email,
                'dealer_name' => $request->first_name.' '.$request->last_name,
                'dealer_code' => $request->dealer_code,
            ]);
        }
        $user->roles()->sync($request->role);
        Session::flash('success','User Created Successfully');
        return redirect('user');
    }
    public function show(Request $request,$id)
    {
        $full_name = explode('_',$id);
        $find_id = end($full_name);
        $user = User::find($find_id);
        if($user->position == 'Sr.Manager' || $user->position == 'Manager'){
            $sales = HierarchyWiseProduct::where('m_id','=',$user->id)->orderBy('id','DESC')->get();
            $reports = ApprovedSale::where('m_id','=',$user->id)->orderBy('id','DESC')->get();
            $daily_reports = EntryVisit::where('em_id','=',$user->id)->orderBy('id','DESC')->get();
            $rm_s = Hierarchy::where('manager_id','=',$user->id)->where('regional_manager_id','!=',null)->distinct()->get(['regional_manager_id','regional_manager_name','regional_manager_email']);
            $asm_s = 0;
            $executive_s =0;
            $dealer_s = Dealer::where('manager_id','=',$user->id)->where('regional_manager_id','=',0)->distinct()->get(['id','dealer_name','dealer_code']);
        }elseif ($user->position == 'RM'){
            $sales = HierarchyWiseProduct::where('rm_id','=',$user->id)->orderBy('id','DESC')->get();
            $reports = ApprovedSale::where('rm_id','=',$user->id)->orderBy('id','DESC')->get();
            $daily_reports = EntryVisit::where('em_id','=',$user->id)->orderBy('id','DESC')->get();
            $rm_s = 0;
            $asm_s = Hierarchy::where('regional_manager_id','=',$user->id)->where('area_sales_manager_id','!=',null)->distinct()->get(['area_sales_manager_id','area_sales_manager_name','area_sales_manager_email']);
            $executive_s = 0;
            $dealer_s = Dealer::where('regional_manager_id','=',$user->id)->where('area_sales_manager_id','=',0)->distinct()->get(['id','dealer_name','dealer_code']);
        }elseif ($user->position == 'ASM'){
            $sales = HierarchyWiseProduct::where('asm_id','=',$user->id)->orderBy('id','DESC')->get();
            $reports = ApprovedSale::where('asm_id','=',$user->id)->orderBy('id','DESC')->get();
            $daily_reports = EntryVisit::where('em_id','=',$user->id)->orderBy('id','DESC')->get();
            $rm_s = 0;
            $asm_s = 0;
            $executive_s = Hierarchy::where('area_sales_manager_id','=',$user->id)->where('executive_id','!=',null)->distinct()->get(['executive_id','executive_name','executive_email']);
            $dealer_s = Dealer::where('area_sales_manager_id','=',$user->id)->where('executive_id','=',0)->distinct()->get(['id','dealer_name','dealer_code']);
        }elseif ($user->position == 'Sr.Executive' || $user->position == 'Executive'){
            $sales = HierarchyWiseProduct::where('e_id','=',$user->id)->orderBy('id','DESC')->get();
            $reports = ApprovedSale::where('e_id','=',$user->id)->orderBy('id','DESC')->get();
            $daily_reports = EntryVisit::where('em_id','=',$user->id)->orderBy('id','DESC')->get();
            $rm_s = 0;
            $asm_s = 0;
            $executive_s =0;
            $dealer_s = Dealer::where('executive_id','=',$user->id)->distinct()->get(['id','dealer_name','dealer_code']);
        }elseif ($user->position == 'Dealer'){
            $find = Dealer::where('user_id','=',$user->id)->first();
            $sales = HierarchyWiseProduct::where('d_id','=',$find->id)->orderBy('id','DESC')->get();
            $reports = ApprovedSale::where('d_id','=',$find->id)->orderBy('id','DESC')->get();
            $rm_s = 0;
            $asm_s = 0;
            $executive_s =0;
            $dealer_s = 0;
            $daily_reports = 0;
        }else{
            return view('admin.user.admin_show',compact('user'));
        }
        return view('admin.user.show_user',compact('user','sales','reports','daily_reports','rm_s','asm_s','executive_s','dealer_s'));
    }
    public function allUserEdit($id){
        $role_user = DB::table('role_user')->where('user_id','=',$id)->first();
        $roles = Role::where('status','!=','super_admin')->orderBy('id','DESC')->get();
        $edit = User::find($id);
        return view('admin.user.all_edit_user',compact('edit','roles','role_user'));
    }
    public function allUserUpdate(Request $request){
        $request->validate([
            'nid' => 'required|min:13',
        ]);
        $image_delete = User::find($request->id);
        $check = User::find($request->id);
        $update = User::find($request->id);
        $user_image = $request->file('image');
        if(!empty($user_image)){
            $user_image_name = time().'.'.$user_image->getClientOriginalExtension();
            $user_image->move(public_path().'/assets/images/employee_image/',$user_image_name);
            $update->update([
                'name' => $request->first_name.' '.$request->last_name,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'image' => $user_image_name,
                'phone' => $request->phone,
                'nid' => $request->nid,
                'address' => $request->address,
                'area' => $request->area,
                'position' => $request->position,
                'role' => $request->role,
            ]);
            unlink('assets/images/employee_image/'.$image_delete->image);
        }else{
            $update->update([
                'name' => $request->first_name.' '.$request->last_name,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'nid' => $request->nid,
                'address' => $request->address,
                'area' => $request->area,
                'position' => $request->position,
                'category' => $request->category,
                'role' => $request->role,
            ]);
        }
        $mail_unique = User::where('id','!=',$request->id)->where('email','=',$request->email)->first();
        if(empty($mail_unique)){
            $update->update([
                'email' => $request->email,
            ]);
        }else{
            $request->validate([
                'email' => 'unique:users',
            ]);
        }
        if(!empty($request->password)){
            if($request->password == $request->confirm_password){
                $update->update([
                    'password' => bcrypt($request->password),
                ]);
            }
            elseif($request->password != $request->confirm_password){
                $request->validate([
                    'password' => 'confirmed',
                ]);
            }
        }
        if($request->position == 'Dealer'){
            $dealer_update = Dealer::where('user_id','=',$check->id);
            if(!empty($dealer_update)){
                $dealer_update->update([
                    'dealer_name' => $request->first_name.' '.$request->last_name,
                    'dealer_code' => $request->dealer_code,
                ]);
            }
        }else if($request->position == 'Sr.Manager' || $request->position == 'Manager'){
            $manager_update = Hierarchy::where('manager_id','=',$check->id);
            $manager_dealer = Dealer::where('manager_id','=',$check->id);
            if(!empty($manager_update)){
                $manager_update->update([
                    'manager_name' => $request->first_name.' '.$request->last_name,
                    'manager_email' => $request->email,
                ]);
            }
            if(!empty($manager_dealer)){
                $manager_dealer->update([
                    'manager_name' => $request->first_name.' '.$request->last_name,
                    'manager_email' => $request->email,
                ]);
            }
        }else if($request->position == 'RM'){
            $rm_update = Hierarchy::where('regional_manager_id','=',$check->id);
            $rm_dealer = Dealer::where('regional_manager_id','=',$check->id);
            if(!empty($rm_update)){
                $rm_update->update([
                    'regional_manager_name' => $request->first_name.' '.$request->last_name,
                    'regional_manager_email' => $request->email,
                ]);
            }
            if(!empty($rm_dealer)){
                $rm_dealer->update([
                    'manager_name' => $request->first_name.' '.$request->last_name,
                    'manager_email' => $request->email,
                ]);
            }
        }else if($request->position == 'ASM'){
            $asm_update = Hierarchy::where('area_sales_manager_id','=',$check->id);
            $asm_dealer = Dealer::where('area_sales_manager_id','=',$check->id);
            if(!empty($asm_update)){
                $asm_update->update([
                    'area_sales_manager_name' => $request->first_name.' '.$request->last_name,
                    'area_sales_manager_email' => $request->email,
                ]);
            }
            if(!empty($asm_dealer)){
                $asm_dealer->update([
                    'area_sales_manager_name' => $request->first_name.' '.$request->last_name,
                    'area_sales_manager_email' => $request->email,
                ]);
            }
        }else if($request->position == 'Sr.Executive' || $request->position == 'Executive'){
            $executive_update = Hierarchy::where('executive_id','=',$check->id);
            $executive_dealer = Dealer::where('executive_id','=',$check->id);
            if(!empty($executive_update)){
                $executive_update->update([
                    'executive_name' => $request->first_name.' '.$request->last_name,
                    'executive_email' => $request->email,
                ]);
            }
            if(!empty($executive_dealer)){
                $executive_dealer->update([
                    'executive_name' => $request->first_name.' '.$request->last_name,
                    'executive_email' => $request->email,
                ]);
            }
        }
        if(($request->role)){
            $update->roles()->sync($request->role);
        }
        Session::flash('success','User Updated Successfully');
        return redirect('user');
    }
    public function destroy($id)
    {
        $delete = User::find($id);
        $check = User::find($id);
        if($check->position == 'Dealer'){
            $dealer_delete = Dealer::where('user_id','=',$check->id);
            if(!empty($dealer_delete)){
                $dealer_delete->delete();
            }
        }else if($check->position == 'Sr.Manager' || $check->position == 'Manager'){
            $manager_delete = Hierarchy::where('manager_id','=',$check->id);
            if(!empty($manager_delete)){
                $manager_delete->delete();
            }
        }else if($check->position == 'RM'){
            $rm_delete = Hierarchy::where('regional_manager_id','=',$check->id);
            if(!empty($rm_delete)){
                $rm_delete->delete();
            }
        }else if($check->position == 'ASM'){
            $asm_delete = Hierarchy::where('area_sales_manager_id','=',$check->id);
            if(!empty($asm_delete)){
                $asm_delete->delete();
            }
        }else if($check->position == 'Sr.Executive' || $check->position == 'Executive'){
            $executive_delete = Hierarchy::where('executive_id','=',$check->id);
            if(!empty($executive_delete)){
                $executive_delete->delete();
            }
        }
        $delete->delete();
        unlink('assets/images/employee_image/'.$delete->image);
        Session::flash('success','User Deleted Successfully');
        return redirect('user');
    }
    public function search(Request $request){
        $users = User::where('name','like','%'.$request->user_search.'%')->orderBy('id','DESC')->paginate(24);
        return view('admin.user.all_user',compact('users'));
    }
    public function hierarchyManager($manager_id){
        $hierarchies = Hierarchy::where('manager_id','=',$manager_id)->where('regional_manager_id','!=',null)->distinct()->get(['regional_manager_id','regional_manager_name','regional_manager_email']);
        return response()->json($hierarchies);
    }
    public function hierarchyRegionalManager($manager_id,$regional_manager_id){
        $hierarchies = Hierarchy::where('manager_id','=',$manager_id)->where('regional_manager_id','=',$regional_manager_id)->where('area_sales_manager_id','!=',null)->distinct()->get(['area_sales_manager_id','area_sales_manager_name','area_sales_manager_email']);
        return response()->json($hierarchies);
    }
    public function hierarchyAreaSalesManager($manager_id,$regional_manager_id,$area_sales_manager_id){
        $hierarchies = Hierarchy::where('manager_id','=',$manager_id)->where('regional_manager_id','=',$regional_manager_id)->where('area_sales_manager_id','=',$area_sales_manager_id)->where('executive_id','!=',null)->distinct()->get(['executive_id','executive_name','executive_email']);
        return response()->json($hierarchies);
    }
    public function dealerEdit($id){
        $dealer_edit = Dealer::where('user_id','=',$id)->first();
        return response()->json($dealer_edit);
    }
    public function rmEdit($id){
        $rm = Hierarchy::where('regional_manager_id','=',$id)->where('area_sales_manager_id','=',null)->first();
        return response()->json($rm);
    }
    public function asmEdit($id){
        $asm = Hierarchy::where('area_sales_manager_id','=',$id)->where('executive_id','=',null)->first();
        return response()->json($asm);
    }
    public function executiveEdit($id){
        $executive = Hierarchy::where('executive_id','=',$id)->first();
        return response()->json($executive);
    }
    public function manager(){
        $manager = Hierarchy::distinct()->get(['manager_id','manager_name','manager_email']);
        return response()->json($manager);
    }
    public function hierarchyReportSinglePage(Request $request){
        $user = User::find($request->id);
        if($request->position == 'Sr.Manager' || $request->position == 'Manager'){
            $sales = HierarchyWiseProduct::where('m_id','=',$request->manager)->orderBy('id','DESC')->paginate(5);
            $reports = ApprovedSale::where('m_id','=',$request->manager)->where('rm_id','=',$request->rm)->where('asm_id','=',$request->asm)->where('e_id','=',$request->executive)->where('d_id','=',$request->dealer)->orderBy('id','DESC')->paginate(6);
            $daily_reports = EntryVisit::where('em_id','=',$request->id)->orderBy('id','DESC')->paginate(6);
            $rm_s = Hierarchy::where('manager_id','=',$request->id)->where('regional_manager_id','!=',null)->distinct()->get(['regional_manager_id','regional_manager_name','regional_manager_email']);
            $asm_s = 0;
            $executive_s =0;
            $dealer_s = Dealer::where('manager_id','=',$request->id)->where('regional_manager_id','=',0)->distinct()->get(['id','dealer_name','dealer_code']);
        }elseif ($request->position == 'RM'){
            $sales = HierarchyWiseProduct::where('rm_id','=',$request->id)->orderBy('id','DESC')->paginate(6);
            $reports = ApprovedSale::where('rm_id','=',$request->rm)->where('asm_id','=',$request->asm)->where('e_id','=',$request->executive)->where('d_id','=',$request->dealer)->orderBy('id','DESC')->paginate(6);
            $daily_reports = EntryVisit::where('em_id','=',$request->id)->orderBy('id','DESC')->paginate(6);
            $rm_s = 0;
            $asm_s = Hierarchy::where('regional_manager_id','=',$request->id)->where('area_sales_manager_id','!=',null)->distinct()->get(['area_sales_manager_id','area_sales_manager_name','area_sales_manager_email']);
            $executive_s = 0;
            $dealer_s = Dealer::where('regional_manager_id','=',$request->id)->where('area_sales_manager_id','=',0)->distinct()->get(['id','dealer_name','dealer_code']);
        }elseif ($request->position == 'ASM'){
            $sales = HierarchyWiseProduct::where('asm_id','=',$request->id)->orderBy('id','DESC')->paginate(6);
            $reports = ApprovedSale::where('asm_id','=',$request->asm)->where('e_id','=',$request->executive)->where('d_id','=',$request->dealer)->orderBy('id','DESC')->paginate(6);
            $daily_reports = EntryVisit::where('em_id','=',$request->id)->orderBy('id','DESC')->paginate(6);
            $rm_s = 0;
            $asm_s = 0;
            $executive_s = Hierarchy::where('area_sales_manager_id','=',$request->id)->where('executive_id','!=',null)->distinct()->get(['executive_id','executive_name','executive_email']);
            $dealer_s = Dealer::where('area_sales_manager_id','=',$request->id)->where('executive_id','=',0)->distinct()->get(['id','dealer_name','dealer_code']);
        }elseif ($request->position == 'Sr.Executive' || $request->position == 'Executive'){
            $sales = HierarchyWiseProduct::where('e_id','=',$request->e_id)->orderBy('id','DESC')->paginate(6);
            $reports = ApprovedSale::where('e_id','=',$request->executive)->where('d_id','=',$request->dealer)->orderBy('id','DESC')->paginate(6);
            $daily_reports = EntryVisit::where('em_id','=',$request->id)->orderBy('id','DESC')->paginate(6);
            $rm_s = 0;
            $asm_s = 0;
            $executive_s =0;
            $dealer_s = Dealer::where('executive_id','=',$request->id)->distinct()->get(['id','dealer_name','dealer_code']);
        }
        return view('admin.user.show_user',compact('user','sales','reports','daily_reports','rm_s','asm_s','executive_s','dealer_s'));
    }
    public function userRMFindASM(Request $request){
        $asm = Hierarchy::where('regional_manager_id','=',$request->rm)->where('area_sales_manager_id','!=',null)->distinct()->get(['area_sales_manager_id','area_sales_manager_name','area_sales_manager_email']);
        $dealer = Dealer::where('regional_manager_id','=',$request->rm)->where('area_sales_manager_id','=',0)->distinct()->get(['id','dealer_name','dealer_code']);
        return response()->json([$asm,$dealer]);
    }
    public function userASMFindExecutive(Request $request){
        $asm = Hierarchy::where('area_sales_manager_id','=',$request->asm)->where('executive_id','!=',null)->distinct()->get(['executive_id','executive_name','executive_email']);
        $dealer = Dealer::where('area_sales_manager_id','=',$request->asm)->where('executive_id','=',0)->distinct()->get(['id','dealer_name','dealer_code']);
        return response()->json([$asm,$dealer]);
    }
    public function userExecutiveFindDealer(Request $request){
        $dealer = Dealer::where('executive_id','=',$request->executive)->distinct()->get(['id','dealer_name','dealer_code']);
        return response()->json([$dealer]);
    }
}
