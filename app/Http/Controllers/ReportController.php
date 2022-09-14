<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reports(){
        $flag='true';
        return view('reports.reports',compact('flag'));
    }

    public function generateReport(Request $request){
        $member=Member::where('member_id',$request->member_id)->first();
        return view('reports.reports',compact('member'));
    }
}
