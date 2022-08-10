<?php

namespace App\Http\Controllers;
use App\Models\Adoperation;
use App\Models\Adrcstotal;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    public function adOperationView(){
        $data = DB::table('adoperations')
                    ->select('adoperations.*','members.name')
                    ->leftJoin('members','adoperations.member_id','members.member_id')
                    ->get();
        $data = compact('data');
        //dd($data); 
        return view('ad.adOperation')->with($data);
    }
    public function adOperationInsert(Request $req ){

        $member_id = $req->get('member_id');
        $receiving_date = $req->get('receiving_date');
        $receiving_amount = $req->get('receiving_amount');
        $receiving_tool = $req->get('receiving_tool');
        
        $db = new Adoperation();

        $db->member_id = $member_id;
        $db->receiving_date = $receiving_date;
        $db->receiving_amount = $receiving_amount;
        $db->receiving_tool = $receiving_tool;
        $db->insert_emp_id = Session::get('id');
        //dd( Session::get('emp_id'));
        
        $db->save();

        if($receiving_tool == 'Cash'){
            $db = Adrcstotal::findorFail($member_id);
            $db->cash_ad = $receiving_amount;
            $db->total_paidad += $receiving_amount;
            $db->total_duead -= $receiving_amount;
            $db->update();
        }
       

        return redirect('/ad-operation');
    }

    public function adOperationEdit($id){
        // $data = DB::table('adoperations')
        //             ->select('adoperations.*','members.name')
        //             ->leftJoin('members','adoperations.member_id','members.member_id')
        //             ->get();
        $editData = Adoperation::findorFail($id);
        
        //dd($data); 
        //return view('ad.adOperation', compact('editData' , 'data'));
        return view('ad.adOperation', compact('editData'));
    }

    public function adOperationUpdate(Request $req, $id ){
        $member_id = $req->get('member_id');
        $receiving_date = $req->get('receiving_date');
        $receiving_amount = $req->get('receiving_amount');
        $receiving_tool = $req->get('receiving_tool');
        
        $db = Adoperation::findorFail($id);
        
        $db->member_id = $member_id;
        $db->receiving_date = $receiving_date;
        $db->receiving_amount = $receiving_amount;
        $db->receiving_tool = $receiving_tool;
        $db->update_emp_id = Session::get('id');
        $db->save();
        return redirect('/ad-operation');
    }

    public function memberAdView(){ //id pass hobe member er
        return view('personaldetails.adDetails');
    }
}
