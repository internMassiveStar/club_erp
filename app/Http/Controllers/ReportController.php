<?php

namespace App\Http\Controllers;

use App\Models\MspwithoutWeight;
use App\Models\MspwithWeight;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reports(){
        $flag='true';
        return view('reports.reports',compact('flag'));
    }

    public function generateReport(Request $request){

        $data=self::position();
      
        $position=$data->where('member_id',$request->member_id);

       
        $position=$position->keys()->first()+1;
       
        $memberwith=MspwithWeight::where('member_id',$request->member_id)->first();
        $memberwithout=MspwithoutWeight::where('member_id',$request->member_id)->first();
        return view('reports.reports',compact('memberwith','memberwithout','position'));
    }

    public function reportsWithweight(){
       
        $data=self::position();
        return view('reports.withweight',compact('data'));
    }
    public function reportsWithoutweight(){
        $data=MspwithoutWeight::all();
        return view('reports.withoutweight',compact('data'));
    }

    public function position(){
        $datas=MspwithWeight::where('status','1')->get();
      
        $data1 = $datas->sortByDesc("msp");
        $datas2=MspwithWeight::where('status','0')->get();
        $data2 = $datas2->sortByDesc("msp");
        $data=$data1->merge($data2);
        return $data;
    }
}
