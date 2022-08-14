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
        $db->save();
        //dd( Session::get('emp_id'));
       
      

      
       

        return redirect('/ad-operation');
    }
    public function adConfirm($id){
        $ad=Adoperation::findOrfail($id);
        $db = Adrcstotal::where('member_id',$ad->member_id)->first();
            $db->cash_ad += $ad->receiving_amount;
            $db->total_paidad += $ad->receiving_amount;
            $db->total_duead -= $ad->receiving_amount;
            $db->update();
        $ad->status=1;
        $ad->update();
        return redirect()->back();   
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
       
        $db->update();
        return redirect('/ad-operation');
    }

    public function memberAdView(){ //id pass hobe member er
        $data=DB::table('adoperations')->where('receiving_tool','Cash')->where('member_id',Session::get('id'))->get();
        $cheques_data=DB::table('adoperations')
                          ->join('cheques','cheques.member_id','adoperations.member_id')
                          ->select('cheques.*','adoperations.receiving_tool','adoperations.receiving_date')
                          ->where('adoperations.receiving_tool','Cheque')
                          ->where('cheques.ad_rcs','AD')
                          ->where('adoperations.member_id',Session::get('id'))
                          ->get();
                         
        return view('personaldetails.adDetails',compact('data','cheques_data'));
    }
}
