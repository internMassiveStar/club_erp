<?php

namespace App\Http\Controllers;

use App\Models\Employee;

use App\Models\Member;
use App\Models\Memberpersonal;
use App\Models\Memberprofession;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{


    public function loginMember(Request $request){
        if($request->login_type=='Member'){
            

            $password=Member::select('password','role')->where('email',$request->email)->first();
          
            if (Hash::check($request->password,$password->password) && $password->role==0) {
                Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'));

                return redirect('/dashboard');     
            }else if(Hash::check($request->password,$password->password) && $password->role==1){
                Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'));
                Session::put('id',Auth::guard('admin')->user()->member_id);
                return redirect('/dashboard');    
            }else{
                return redirect('/');

            }
          
            
         }
         else if($request->login_type=='employee'){
            $password=Employee::select('password')->where('email',$request->email)->first();
            if (Hash::check($request->password,$password->password)) {
                Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'));
                Session::put('id',Auth::guard('employee')->user()->employee_id);
                return redirect('/dashboard');  
            }else{
            return redirect('/');

            }
           
         }
       
         else{
            return redirect('/');
         }
        }
       
    public function memberEntry(){

     //   dd(Auth::guard('employee')->user()->name);
        return view('member.memberEntry');
    }
  
    public function memberTable(){
        $data=Member::get();
       
        return view('member.memberTable',compact('data'));
    }
    public function memberUpdate($id){
        $data=Member::get();
        $editData=Member::findOrfail($id);
        return view('member.memberTable',compact('editData','data'));

    }
    public function updateMember(Request $request,$id){
        $member=Member::findOrfail($id);
        $member->member_id=$request->member_id;
        $member->name=$request->name;
        $member->email=$request->email;
     
        $member->mobile=$request->mobile;
        $member->alt_mobile=$request->alt_mobile;
        $member->address=$request->address;
        $member->area=$request->area;
        $member->category=$request->category;
        $member->type=$request->type;
        $member->nid=$request->nid;
        $member->joining_date=$request->joining_date;
        $member->ad=$request->ad;
        $member->msp=$request->msp;
        $member->rcs=$request->rcs;
        $member->reference_id=$request->reference_id;
        $member->update_by=Session::get('id');
        $member->update();
        return redirect()->back();
    }


    public function professionalInfo(){
        $data=DB::table('memberprofessions')
                 ->leftjoin('members','members.member_id','memberprofessions.member_id')
                 ->select('members.name','memberprofessions.*')
                 ->get();
       
        return view('member.professionalInfo',compact('data'));
    }
    public function updateprofessionalInfo($id){
        $data=DB::table('memberprofessions')
                 ->leftjoin('members','members.member_id','memberprofessions.member_id')
                 ->select('members.name','memberprofessions.*')
                 ->get();
        $editData=Memberprofession::findOrfail($id);

        return view('member.professionalInfo',compact('data','editData'));
    }
    public function professionalInfoUpdate(Request $request,$id){
        $member_profession=Memberprofession::findOrfail($id);
        $member_profession->member_id=$request->member_id;
        $member_profession->member_profession=$request->member_profession;
        $member_profession->member_designation=$request->member_designation;
        $member_profession->office_name=$request->office_name;
        $member_profession->office_address=$request->office_address;
        $member_profession->update_by=Session::get('id');
        $member_profession->update();
        return redirect()->back();
    }
    public function personalInfo(){
        $data=DB::table('memberpersonals')
        ->leftjoin('members','members.member_id','memberpersonals.member_id')
        ->leftjoin('memberprofessions','memberprofessions.member_id','memberpersonals.member_id')
        ->select('members.name','memberprofessions.member_profession','memberpersonals.*')
        ->get();
      
        return view('member.personalInfo',compact('data'));
    }
    public function updatepersonalInfo($id){
        $data=DB::table('memberpersonals')
        ->leftjoin('members','members.member_id','memberpersonals.member_id')
        ->leftjoin('memberprofessions','memberprofessions.member_id','memberpersonals.member_id')
        ->select('members.name','memberprofessions.member_profession','memberpersonals.*')
        ->get();
        $editData=Memberpersonal::findOrfail($id);
        return view('member.personalInfo',compact('data','editData'));
    }

    public function personalInfoUpdate(Request $request,$id){

        $member_personal=Memberpersonal::findOrfail($id);
        $member_personal->member_id=$request->member_id;
        $member_personal->sopouse_name=$request->sopouse_name;
        $member_personal->father_name=$request->father_name;
        $member_personal->mother_name=$request->mother_name;
        $member_personal->children_name_1=$request->children_name_1;
        $member_personal->children_name_2=$request->children_name_2;
        $member_personal->children_name_3=$request->children_name_3;
        $member_personal->date_birth=$request->date_birth;
        $member_personal->home_district=$request->home_district;
        $member_personal->update_by=Session::get('id');
        $member_personal->update();
        return redirect()->back();
    }
    public function changePassword(){
        return view('member.changePassword');
    }
    
    public function memberCompleteEntry(Request $request){

        $member= new Member();
        $member->member_id=$request->member_id;
        $member->name=$request->name;
        $member->email=$request->email;
        $member->password=Hash::make($request->password);
        $member->mobile=$request->mobile;
        $member->alt_mobile=$request->alt_mobile;
        $member->address=$request->address;
        $member->area=$request->area;
        $member->category=$request->category;
        $member->type=$request->type;
        $member->nid=$request->nid;
        $member->joining_date=$request->joining_date;
        $member->ad=$request->ad;
        $member->msp=$request->msp;
        $member->rcs=$request->rcs;
        $member->reference_id=$request->reference_id;
        $member->insert_by=Session::get('id');
        $member->save();

        $member_profession=new Memberprofession();
        $member_profession->member_id=$request->member_id;
        $member_profession->member_profession=$request->member_profession;
        $member_profession->member_designation=$request->member_designation;
        $member_profession->office_name=$request->office_name;
        $member_profession->office_address=$request->office_address;
        $member_profession->insert_by=Session::get('id');
        $member_profession->save();

        $member_personal=new Memberpersonal();
        $member_personal->member_id=$request->member_id;
        $member_personal->sopouse_name=$request->sopouse_name;
        $member_personal->father_name=$request->father_name;
        $member_personal->mother_name=$request->mother_name;
        $member_personal->children_name_1=$request->children_name_1;
        $member_personal->children_name_2=$request->children_name_2;
        $member_personal->children_name_3=$request->children_name_3;
        $member_personal->date_birth=$request->date_birth;
        $member_personal->home_district=$request->home_district;
        $member_personal->insert_by=Session::get('id');
        $member_personal->save();
        
        return redirect()->back();



    }


}
