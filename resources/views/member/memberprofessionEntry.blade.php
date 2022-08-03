@extends('layouts.master')
@section('main-content')
@if(Auth::guard('member')->check())
@php
header("Location: " . URL::to('/dashboard'), true, 302);
exit();
@endphp
@else
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Member Profession Information</h2>
                <div class="basic-form">
                    <form class="mt-5 mb-5 login-input" method="post" action="{{ route('member-personalentry') }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h6><b>Member Profession</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder="  Member Profession" name="MemberProfession" >
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Designation</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Designation" name="MemberDesignation">
                            </div>    
                            
                            <div class="form-group col-md-6">
                                <h6><b>Member Office Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Office Name" name="MemberOfficeName">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Office Address</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Office Address" name="MemberOfficeAddress">
                            </div>
                            
                            
                            <div class="card-body">
                                <h2 class="text-center">Member Education Information</h2><br>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Degree-1</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-1" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Institute-1</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-1">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Result-1</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-1">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Year-1</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-1">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Degree-2</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-2" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Institute-2</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-2">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Result-2</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-2">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Year-2</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-2">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Degree-3</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-3" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Institute-2</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-3">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Result-3</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-3">
                                    </div>
                                        <div class="form-group col-md-3">
                                        <h6><b>Member Education Year-3</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-3">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Degree-4</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-4" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Institute-4</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-4">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Result-4</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-4">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Year-4</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-4">
                                    </div>

                                        <div class="form-group col-md-3">
                                        <h6><b>Member Education Degree-5</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-5" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Institute-5</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-5">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Result-5</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-5">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Member Education Year-5</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-5">
                                    </div>
                                </div>
                            </div>
                            </div>    
                    
                        <button type="submit" class="btn mb-1 btn-secondary" name="MemberPfSkip"> Skip </button>
                        
                        <button type="submit" class="btn mb-1 btn-success" name="MemberPfInsert"> Insert </button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
@endsection