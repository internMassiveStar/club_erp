<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChequeManagementController extends Controller
{
    public function chequeMangement(){
        return view('cheque.chequeMangement');
    }
}
