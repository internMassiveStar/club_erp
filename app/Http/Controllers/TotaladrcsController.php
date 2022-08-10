<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\AdRcstotal;
use App\Models\Rcsmaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TotaladrcsController extends Controller
{
    public bool $press_active = true;
    

    public function totalAdRcsView(){
        $data = DB::table('ad_rcstotals')
                    ->select('ad_rcstotals.*','members.name')
                    ->leftJoin('members','ad_rcstotals.member_id','members.member_id')
                    ->get();
        //dd($data);
        $data = compact('data');
        return view('total_ad_rcs.total_ad_rcs')->with($data);
    }
    public function monthlyProcedure(){
        
        return view('rcs.monthlyProcedure');
    }
    public function monthlyProcedureCalculation(){
        // if we want to remove some member for the monthly procedure running.

        // public function index()

        // {

        //     $users = User::select("*")

        //                     ->whereNotIn('id', [4, 5, 6])

        //                     ->get();

        

        //     dd($users);                    

        // }

        // public function index()

        // {

        //     $myString = '1,2,3';

        //     $myArray = explode(',', $myString);

            

        //     $users = User::select("*")

        //                     ->whereNotIn('id', $myArray)

        //                     ->get();

        

        //     dd($users);                    

        // }
        $press = !$press_active;
        if(date('d')=='1' && $press == false){
            $press_active = false;
            calculation();
            return view('rcs.monthlyProcedure');
        }
        // elseif (date('d')=='2' && $press == false) {
        //     $press_active = false;
        //     calculation();
        // }
            

        
    }
    public function calculation(){
            $month = date('M');
            $date = date('Y-m-d');
            $member = DB::table('members')
                            ->select('members.*')
                            ->where('norcs','=','0')
                            ->get();
            foreach ($member as $key => $value) {
                $rcs_master = new Rcsmaster();$rcs_master->member_id = $value->member_id;
                $rcs_master->rcs_date = $date;
                $rcs_master->rcs_month = $month;
                $rcs_master->rcs_tobepaid = $value->rcs;
            }
            
            $rcs_masterinfo = DB::table('rcsmasters')
                                    ->select('member_id',DB::raw('count(rcs_tobepaid) as total_rcs'))
                                    ->groupby('member_id')
                                    ->get();
            foreach ($rcs_masterinfo as $key => $value) {
                $total_adrcs = AdRcstotal::findorFail($value->member_id);
                $total_adrcs->total_rcs = $value->total_rcs;
                $total_adrcs->total_paidrcs = $total_adrcs->cash_rcs+$total_adrcs->cheque_rcs;
                $total_adrcs->total_duercs = $value->total_rcs-$total_adrcs->total_paidrcs;
                $total_adrcs->update();
            }
    }
    public function noRcs(){
        $member_rcs = DB::table('members')
                            ->select('members.*')
                            ->where('norcs','=','0')
                            ->get();
        $member_norcs = DB::table('members')
                            ->select('members.*')
                            ->where('norcs','=','1')
                            ->get();
        $data = compact('member_rcs','member_norcs');
        return view('rcs.norcs')->with($data);
    }
    public function noRcs_deactive($id)
    {
        $db = Member::findorFail($id);
        $db->norcs = 1;
        $db->update();
        return redirect()->back();
    }
    public function noRcs_active($id)
    {
        $db = Member::findorFail($id);
        $db->norcs = 0;
        $db->update();
        return redirect()->back();
    }


}
