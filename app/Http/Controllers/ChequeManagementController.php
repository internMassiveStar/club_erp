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
        $honored = $req->get('honored_date');  
        $dishonored = $req->get('dishonored_date');  
        $db->member_id = $req->get('member_id');
        $db->ad_rcs = $req->get('ad_rcs');
        $db->type = $req->get('type');
        $db->bank_name = $req->get('bank_name');
        $db->cheque_no  = $req->get('cheque_no');
        $db->receiving_amount = $req->get('receiving_amount');
        $db->receiving_date = $req->get('receiving_date');
        $db->cheque_date = $req->get('cheque_date');
        $db->honored_date = $honored;
        $db->dishonored_date = $dishonored;
        $db->oldcheque_no = $req->get('oldcheque_no');
        $db->cheque_inby = $req->get('cheque_inby');
        $db->Remarks = $req->get('Remarks');
        if(!$honored && !$dishonored && ($db->status==1) && ($db->process == 1)){
            $db->status = 0;
            $db->process = 0;
        }
        elseif($honored || $dishonored){
            $db->status = 1;
            $db->process = 1;
        }

        
        if($attachment){
            $db->attachment=$last_img; 
        }
        $db->update_by = Session::get('id');
        $db->update();
        // need some change code here
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



    // Cheque Queue

    public function chequeQueue(){
        $all_cheque = DB::table('cheques')
                        ->select('cheques.*','members.name')
                        ->leftJoin('members','cheques.member_id','members.member_id')
                        ->where([['cheques.status','=','0'],['cheques.process','=','0']])
                        ->get();

        $process = DB::table('cheques')
                        ->select('cheques.*','members.name')
                        ->leftJoin('members','cheques.member_id','members.member_id')
                        ->where([['cheques.status','=','0'],['cheques.process','=','1']])
                        ->get();

        $bank_approval = DB::table('cheques')
                        ->select('cheques.*','members.name')
                        ->leftJoin('members','cheques.member_id','members.member_id')
                        ->where([['cheques.status','=','1'],['cheques.process','=','0']])
                        ->get();
        $honored = DB::table('cheques')
                        ->select('cheques.*','members.name')
                        ->leftJoin('members','cheques.member_id','members.member_id')
                        ->where([['cheques.status','=','1'],['cheques.process','=','1']])
                        ->whereNotNull('cheques.honored_date')
                        ->whereNull('dishonored_date')
                        ->get();
        $dishonored = DB::table('cheques')
                        ->select('cheques.*','members.name')
                        ->leftJoin('members','cheques.member_id','members.member_id')
                        ->where([['cheques.status','=','1'],['cheques.process','=','1']])
                        ->whereNotNull('cheques.dishonored_date')
                        ->whereNull('cheques.honored_date')
                        ->get();
                        
        $After_dishonored_newc_cheque = DB::table('cheques')
                        ->select('cheques.*','members.name')
                        ->leftJoin('members','cheques.member_id','members.member_id')
                        ->where([['cheques.status','=','0'],['cheques.process','=','0'],['cheques.dishonored_date','=','NULL'],['cheques.honored_date','=','NULL'],['cheques.oldcheque_no','!=','NULL']])
                        ->get();
        $data = compact('all_cheque','process','bank_approval','honored','dishonored','After_dishonored_newc_cheque');
                        
        return view ('cheque.chequeQueue')->with($data);
    }

    public function chequeQueueProcess($id){
        $db = Cheque::findorFail($id);
        $db->process = 1;
        $db->update();
        return redirect()->back();
    }

    public function chequeQueueUpdate(Request $req){
        $data = DB::table('cheques')
                    ->select('cheques.*')
                    ->where([['cheques.status','=','0'],['cheques.process','=','1']])
                    ->get();
                    //dd($data);
        foreach ($data as $key => $value) {

            $db = Cheque::findorFail($value->id);
            if($db){
                $db->status = 1;
                $db->process = 0;
                $db->cheque_managedby = $req->get('val-username');
                $db->cheque_outby = $req->get('CarriedName');
                $db->update();
            }
        }
        return redirect()->back();
    }
    
}
