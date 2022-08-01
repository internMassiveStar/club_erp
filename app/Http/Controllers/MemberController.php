<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function memberEntry(){
        return view('member.memberEntry');
    }
    public function memberTable(){
        return view('member.memberTable');
    }
    public function changePassword(){
        return view('member.changePassword');
    }
}
