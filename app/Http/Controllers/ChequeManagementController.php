<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChequeManagementController extends Controller
{
    public function chequeMangement(){
        return view('cheque.chequeMangement');
    }
    public function allCheque(){
        return view('cheque.allCheque');
    }
    public function todayCheque(){
        return view('cheque.todayCheque');
    }
    public function tomorrowCheque(){
        return view('cheque.tomorrowCheque');
    }
    public function searchbydateCheque(){
        return view('cheque.searchbydateCheque');
    }
    public function searchbyadorrcsCheque(){
        return view('cheque.searchbyadorrcsCheque');
    }

    public function chequeQueue(){
        return view ('cheque.chequeQueue');
    }
    
}
