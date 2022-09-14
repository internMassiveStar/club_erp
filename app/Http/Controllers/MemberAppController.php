<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberAppController extends Controller
{
    public function getMember(Request $request){
        $request->validate([
            'member_id' => 'required',
            
        ]);
        
        $member = Member::where('member_id', $request->member_id)->first();

        if (Hash::check($request->password,$member->password)) {
            return response()->json($member);
            
        
    }
}
}
