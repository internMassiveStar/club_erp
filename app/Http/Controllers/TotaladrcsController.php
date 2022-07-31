<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotaladrcsController extends Controller
{
    public function totalAdRcsView(){
        return view('total_ad_rcs.total_ad_rcs');
    }
}
