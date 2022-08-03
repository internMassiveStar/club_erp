<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EmployeeController extends Controller
{
    public function employeeRegister(){
    
    //   $a= Auth::guard('employee')->user()->name;
    //   dd($a);
 
        return view('employee.employeeRegister');
    }

    // public function loginEmployee(Request $request){
    //     if($request->login_type=='employee'){
    //         Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'));
    //         return redirect('/dashboard');
    //      }else{
    //         return redirect('/');
    //      }
    //     }
}
