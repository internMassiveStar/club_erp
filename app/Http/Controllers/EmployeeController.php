<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class EmployeeController extends Controller
{
    public function employeeRegister(){
    
    //   $a= Auth::guard('employee')->user()->name;
    //   dd($a);
    

    $data=Employee::get();

 
        return view('employee.employeeRegister',compact('data'));
    }

    public function registerEmployee(Request $request){
        $validateData = $request->validate([
            'employee_name' => 'required',

            'employee_nid' => 'required',


        ]);
       
        $data=DB::table('employees')->select( DB::raw("COUNT(id) as count"))
        ->whereYear('created_at', date('Y'))
        ->first();
        $employee_id=date('y').'00'. $data->count+001;

        $certificate = $request->file('certificate');
  
        if ($certificate) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($certificate->getClientOriginalExtension());
            $img_name = $name_gen . "." . $img_ext;
            $up_location = 'emp_certificate/';
            $last_img = $up_location . $img_name;
            $certificate->move($up_location, $img_name);


        }

        $employee=new Employee();
        $employee->employee_id= $employee_id;
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
        if($certificate){
            $employee->certificate=$last_img; 
        }
        $employee->last_year=$request->year;
        $employee->insert_by=  Session::get('id');
        $employee->save();
        return redirect()->back();

    }

    public function employeeUpdate($id){
   
        $editData=Employee::findOrfail($id);
        return view('employee.employeeRegister',compact('editData'));
    }

    public function updateEmployee(Request $request,$id){

        $employee=Employee::findOrfail($id);
        $certificate = $request->file('certificate');
  
        if ($certificate) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($certificate->getClientOriginalExtension());
            $img_name = $name_gen . "." . $img_ext;
            $up_location = 'emp_certificate/';
            $last_img = $up_location . $img_name;
            $certificate->move($up_location, $img_name);
            $path = public_path('/' . $employee->certificate);
            if (File::exists($path)) {
                @unlink($path);
            }


        }

    
        $employee->name=$request->employee_name;
        $employee->email=$request->email;
       
        $employee->mobile=$request->employee_mobile;
        $employee->address=$request->employee_address;
        $employee->nid=$request->employee_nid;
        $employee->joining_date=$request->joinining_date;
        $employee->resigning_date=$request->resign_date;
        $employee->last_degree=$request->degree;
        $employee->last_institute=$request->institute;
        $employee->last_result=$request->result;
        if($certificate){
            $employee->certificate=$last_img; 
        }
        $employee->last_year=$request->year;
        $employee->update_by=Session::get('id');
        $employee->update();
        return redirect(route('rcs-operation'));

    }
}
