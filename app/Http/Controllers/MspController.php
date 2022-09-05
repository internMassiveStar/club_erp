<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MspController extends Controller
{
    public function policyView(){

        return view('msp.policy');

    }

    public function especialRcs(){
        return view('msp.especialRcs');
    }
    public function program(){
        return view('msp.program');
    }

    // public function mspForm(Request $request, $id = null){

    // }
}
