<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function adOperationView(){
        return view('ad.adOperation');
    }

    public function memberAdView(){ //id pass hobe member er
        return view('personaldetails.addetails');
    }
}
