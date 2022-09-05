<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MspController extends Controller
{
    public function policyView(){

        return view('msp.policy');

    }
    public function donationView(){
        return view('msp.donation');
    }
    public function specialRcs(){
        return view('msp.especialRcs');
    }
    public function program(){
        return view('msp.program');
    }
    public function mspForm(Request $request, $id = null){

 
   




        return view('msp.msp-form');
    }
}
