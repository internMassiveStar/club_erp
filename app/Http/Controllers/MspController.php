<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\PaidDonation;
use App\Models\PaidSpecialRcs;
use App\Models\Rcsepecial;
use App\Models\Weightage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class MspController extends Controller
{
   
    public function mspForm(Request $request, $id = null){
        $donations=Donation::all();
        $rcs_specials=Rcsepecial::all();
        return view('msp.msp-form',compact('donations','rcs_specials'));
    }
  public function weightage(){
    $data=Weightage::all();
    return view('msp.weightage',compact('data'));
  }

  public function weightageEntry(Request $request){
    if($request->msp1+$request->msp2+$request->msp3+$request->msp4+$request->msp5+$request->msp6+
    $request->msp7+$request->msp8+$request->msp9+$request->msp10 == 100){
        $msp=new Weightage();
        $msp->msp1=$request->msp1;
        $msp->msp2=$request->msp2;
        $msp->msp3=$request->msp3;
        $msp->msp4=$request->msp4;
        $msp->msp5=$request->msp5;
        $msp->msp6=$request->msp6;
        $msp->msp7=$request->msp7;
        $msp->msp8=$request->msp8;
        $msp->msp9=$request->msp9;
        $msp->msp10=$request->msp10;
        $msp->save();
        Session::flash('success',"weightage save");
        

    }else{
        Session::flash('error',"Tolal wieghtage greater or less than 100");
    }
    return redirect()->back();
  }
  public function weightageShow($id){

    $editData=Weightage::findOrfail($id);
    return view('msp.weightage',compact('editData'));
    
  }

  public function weightageUpdate(Request $request,$id){


    if($request->msp1+$request->msp2+$request->msp3+$request->msp4+$request->msp5+$request->msp6+
    $request->msp7+$request->msp8+$request->msp9+$request->msp10 == 100){
        $msp=Weightage::findOrfail($id);
        $msp->msp1=$request->msp1;
        $msp->msp2=$request->msp2;
        $msp->msp3=$request->msp3;
        $msp->msp4=$request->msp4;
        $msp->msp5=$request->msp5;
        $msp->msp6=$request->msp6;
        $msp->msp7=$request->msp7;
        $msp->msp8=$request->msp8;
        $msp->msp9=$request->msp9;
        $msp->msp10=$request->msp10;
        $msp->update();
        Session::flash('success',"weightage update");
        return redirect('/weightage');

    }else{
        Session::flash('error',"Tolal wieghtage greater or less than 100");
        return redirect()->back();
    }
    

  }
    public function paidDonation(Request $request){
        $member_id=180100051;
        if($member_id && $request->donation_name != null){
            $donation_name = $request->donation_name;
            $amount = $request->amount;
            for( $i=0; $i < count($donation_name); $i++){
            
                $paid_donation=new PaidDonation();
                $paid_donation->member_id= $member_id;
                
                $paid_donation->donation_name =$donation_name[$i];
                $paid_donation->amount=$amount[$i];

                $paid_donation->save();

            }
            Session::flash('success',"Doantion save");
        }
        return redirect()->back();
    }
    public function paidspecailRcs(Request $request){
        $member_id=180100051;
        if($member_id && $request->rcs_name != null){
            $rcs_name = $request->rcs_name;
          
            for( $i=0; $i < count($rcs_name); $i++){
                $amount=Rcsepecial::select('amount')->where('rcs_name',$rcs_name[$i])->first();
                $paid_special_rcs=new PaidSpecialRcs();
                $paid_special_rcs->member_id= $member_id;
                $paid_special_rcs->rcs_name =$rcs_name[$i];
                $paid_special_rcs->amount=$amount->amount;
                $paid_special_rcs->save();
            }
            Session::flash('success',"Specail Rcs Paid");
        }
        return redirect()->back();
    }
}
