<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function employeeRegister(){
    
    //   $a= Auth::guard('employee')->user()->name;
    //   dd($a);
 
        return view('employee.employeeRegister');
    }

    public function registerEmployee(Request $request){
        $validateData = $request->validate([
            'employee_name' => 'required',

            'employee_nid' => 'required',


        ]);
       
        // $data=DB::table('employees')->select( DB::raw("COUNT(id) as count"))
        // ->groupBy(DB::raw("Year(created_at)"))
        // ->first();
        // dd($data);

        $employee=new Employee();
        $employee->employee_id=220002;
        $employee->name=$request->employee_name;
        $employee->email=$request->email;
        $employee->password=Hash::make($request->password);
        $employee->mobile=$request->employee_mobile;
        $employee->address=$request->employee_address;
        $employee->nid=$request->employee_nid;
        $employee->joining_date=$request->joinining_date;
        $employee->resigning_date=$request->resign_date;
        $employee->last_degree=$request->degree;
        $employee->last_institute=$request->institute;
        $employee->last_result=$request->result;
        $employee->last_year=$request->year;
        $employee->save();
        return redirect()->back();

    }
}
