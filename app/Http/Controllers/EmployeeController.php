<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeeRegister(){
        return view('employee.employeeRegister');
    }
}
