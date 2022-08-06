<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cheque;
use App\Models\Member;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ChequeManagementController extends Controller
{
    public function chequeMangement(){
        $data = DB::table('cheques')
                    ->select('cheques.*','members.name')
                    ->leftJoin('members','cheques.member_id','members.member_id')
                    ->get();
        $data = compact('data');
        //dd($data);
        return view('cheque.chequeMangement')->with($data);
    }
    public function chequeMangementInsert(Request $req){
        $member_id = $req->get('member_id');
        $attachment = $req->file('attachment');
        if ($attachment) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($attachment->getClientOriginalExtension());
            $img_name = $name_gen . "." . $img_ext;
            $up_location = 'cheque/';
            $last_img = $up_location . $img_name;
            $attachment->move($up_location, $img_name);
        }
        $db = new Cheque();
        //dd($db);
        $db->member_id = $member_id;
        $db->ad_rcs = $req->get('ad_rcs');
        $db->type = $req->get('type');
        $db->bank_name = $req->get('bank_name');
        $db->cheque_no = $req->get('cheque_no');
        $db->receiving_amount = $req->get('receiving_amount');
        $db->receiving_date = $req->get('receiving_date');
        $db->cheque_date = $req->get('cheque_date');
        $db->oldcheque_no = $req->get('oldcheque_no');
        $db->cheque_inby = $req->get('cheque_inby');
        if($attachment){
            $db->attachment=$last_img; 
        }
        $db->insert_by = Session::get('id');
        $db->save();
        return redirect('/cheque-management');
    }

    public function chequeMangementEdit($id){
        $editData = Cheque::findorFail($id);
        $editData = compact('editData');
         return view('cheque.chequeMangement')->with($editData);
    }

    public function chequeMangementUpdate(Request $req, $id){
        $db = Cheque::findorFail($id);
        $attachment = $req->file('attachment');
  
        if ($attachment) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($attachment->getClientOriginalExtension());
            $img_name = $name_gen . "." . $img_ext;
            $up_location = 'cheque/';
            $last_img = $up_location . $img_name;
            $attachment->move($up_location, $img_name);
            $path = public_path('/' . $db->attachment);
            if (File::exists($path)) {
                @unlink($path);
            }


        }
        $db->member_id = $req->get('member_id');
        $db->ad_rcs = $req->get('ad_rcs');
        $db->type = $req->get('type');
        $db->bank_name = $req->get('bank_name');
        $db->cheque_no  = $req->get('cheque_no');
        $db->receiving_amount = $req->get('receiving_amount');
        $db->receiving_date = $req->get('receiving_date');
        $db->cheque_date = $req->get('cheque_date');
        $db->honored_date = $req->get('honored_date');
        $db->dishonored_date = $req->get('dishonored_date');
        $db->oldcheque_no = $req->get('oldcheque_no');
        $db->cheque_inby = $req->get('cheque_inby');
        $db->Remarks = $req->get('Remarks');
        
        if($attachment){
            $db->attachment=$last_img; 
        }
        $db->update_by = Session::get('id');
        $db->update();
        return redirect('/cheque-management');

    }
    public function allCheque(){
        $data = DB::table('cheques')
                    ->select('cheques.*','members.name')
                    ->leftJoin('members','cheques.member_id','members.member_id')
                    ->get();
        $data = compact('data');
        return view('cheque.allCheque')->with($data);
    }
    public function todayCheque(){
        $date = date('Y-m-d');
        
        $data = DB::table('cheques')
            ->select('cheques.*','members.name')
            ->leftJoin('members','cheques.member_id','members.member_id')
            ->where('cheque_date',$date)
            ->get();
        $data = compact('data');
        //dd($data);
        return view('cheque.todayCheque')->with($data);
    }
    public function tomorrowCheque(){
        $date = date('Y-m-d',strtotime("1 days"));
        //dd($date);
        $data = DB::table('cheques')
            ->select('cheques.*','members.name')
            ->leftJoin('members','cheques.member_id','members.member_id')
            ->where('cheque_date',$date)
            ->get();
        $data = compact('data');
        return view('cheque.tomorrowCheque')->with($data);
    }
    public function searchbydateCheque(){
        $data = DB::table('cheques')
                    ->select('cheques.*','members.name')
                    ->leftJoin('members','cheques.member_id','members.member_id')
                    ->get();
        $data = compact('data');
        return view('cheque.searchbydateCheque')->with($data);
    }
    public function searchbyadorrcsCheque(){
        $data = DB::table('cheques')
                    ->select('cheques.*','members.name')
                    ->leftJoin('members','cheques.member_id','members.member_id')
                    ->get();
        $data = compact('data');
        return view('cheque.searchbyadorrcsCheque')->with($data);
    }

    public function chequeQueue(){
        return view ('cheque.chequeQueue');
    }
    
}
