<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RcsController extends Controller
{
    public function rcsOperationView(){
        return view('rcs.rcsOperation');
    }
}
