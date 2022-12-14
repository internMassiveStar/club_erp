<?php

namespace App\Http\Controllers;

use App\Models\MspwithoutWeight;
use App\Models\MspwithWeight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
       if($memberwith){
        $memberwithout=MspwithoutWeight::where('member_id',$request->member_id)->first();
        $highest=MspwithWeight::all();
        //$max= DB::table('mspwith_weights')->where('msp', DB::raw("(select max(`msp`) from mspwith_weights)"))->get();
        
        // $max=MspwithWeight::select('msp')->max('msp');
        // dd($max);
        $max=MspwithWeight::select( 'member_name','msp')->where('msp','10')->first();
        dd($max);
        return view('reports.reports',compact('memberwith','memberwithout','position','max','highest'));
       }else{
        Session::flash('error',"Invalid Member Id");
        return redirect()->back();
       }
         
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
