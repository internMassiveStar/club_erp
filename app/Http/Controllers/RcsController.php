<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RcsController extends Controller
{
    public function rcsOperationView(){
        return view('rcs.rcsOperation');
    }
    public function memberRcsView(){ //id pass hobe member er
        return view('personaldetails.rcsdetails');
    }
    public function monthlyProcedure(){
        return view('rcs.monthlyProcedure');
    }
}
