<?php

namespace App\Http\Controllers;

use App\Models\Employee;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{


    public function loginMember(Request $request){
        if($request->login_type=='Member'){
            

            $password=Member::select('password')->where('email',$request->email)->first();
            if (Hash::check($request->password,$password->password)) {
                Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'));
                Session::put('login', 'login');
                return redirect('/dashboard');     
            }else{
                return redirect('/');

            }
          
            
         }
         else if($request->login_type=='employee'){
            $password=Employee::select('password')->where('email',$request->email)->first();
            if (Hash::check($request->password,$password->password)) {
                Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'));
                Session::put('emp_id',Auth::guard('employee')->user()->employee_id);
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
    public function memberpersonalEntry(){
        return view('member.memberpersonalEntry');
    }
    public function memberprofessionEntry(){
        return view('member.memberprofessionEntry');
    }
    public function memberTable(){
        return view('member.memberTable');
    }

    public function professionalInfo(){
        return view('member.professionalInfo');
    }
    public function personalInfo(){
        return view('member.personalInfo');
    }
    public function changePassword(){
        return view('member.changePassword');
    }
}
