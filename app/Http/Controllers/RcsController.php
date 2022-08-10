<?php

namespace App\Http\Controllers;

use App\Models\Rcsoperation;
use App\Models\Adrcstotal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class RcsController extends Controller
{
    public function rcsOperationView(){
        $data=DB::table('rcsoperations')
                ->leftjoin('members','rcsoperations.member_id','members.member_id')
                ->select('rcsoperations.*','members.name')
                ->get();
                // dd($data);
        return view('rcs.rcsOperation',compact('data'));
    }
    public function memberRcsView(){ //id pass hobe member er
        return view('personaldetails.rcsDetails');
    }

    public function rcsOperationInsert(Request $request){

        $validateData = $request->validate([
            'member_id' => 'required',

            'receiving_amount' => 'required',


        ]);

        $rcs= new Rcsoperation();
        $rcs->member_id=$request->member_id;
        $rcs->receiving_date=$request->receiving_date;
        $rcs->receiving_amount=$request->receiving_amount;
        $rcs->receiving_tool=$request->receiving_tool;
        $rcs->insert_by= Session::get('id');
        $rcs->save();
        if($request->receiving_tool == 'Cash'){
            $db = Adrcstotal::findorFail($request->member_id);
            $db->cash_rcs = $request->receiving_amount;
            $db->total_paidrcs += $request->receiving_amount;
            $db->total_duercs -= $request->receiving_amount;
            $db->update();
        }
        return redirect()->back();

    }
    public function rcsUpdate($id){
        $editData=Rcsoperation::findOrfail($id);
        return view('rcs.rcsOperation',compact('editData'));
    }
    public function updateRcs(Request $request,$id){
        $validateData = $request->validate([
            'member_id' => 'required',

            'receiving_amount' => 'required',


        ]);
        $rcs=Rcsoperation::findOrfail($id);
        $rcs->member_id=$request->member_id;
        $rcs->receiving_date=$request->receiving_date;
        $rcs->receiving_amount=$request->receiving_amount;
        $rcs->receiving_tool=$request->receiving_tool;
        $rcs->update_by= Session::get('id');
        $rcs->update();
        return redirect(route('rcs-operation'));

    }
   
}
