<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\AdRcstotal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TotaladrcsController extends Controller
{
    public function totalAdRcsView(){
        $data = DB::table('ad_rcstotals')
                    ->select('ad_rcstotals.*','members.name')
                    ->leftJoin('members','ad_rcstotals.member_id','members.member_id')
                    ->get();
        //dd($data);
        $data = compact('data');
        return view('total_ad_rcs.total_ad_rcs')->with($data);
    }
    
}
