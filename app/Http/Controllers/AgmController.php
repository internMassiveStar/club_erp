<?php

namespace App\Http\Controllers;

use App\Models\Agm;
use Illuminate\Http\Request;

class AgmController extends Controller
{
   public function agm(){
    $data=Agm::all();
    return view('agm.agm',compact('data'));
   }
}
