@extends('layouts.master') 
@section('main-content')
@if(Auth::guard('member')->check())
@php
header("Location: " . URL::to('/dashboard'), true, 302);
exit();
@endphp
@else
<div style="padding-top: 5%; font-size: 20px; color: #7571f9">


 <details>
    <summary>
        Member Information
    </summary>
    <div class="row justify-content-center">
        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">
                    <h2 class="text-center">Member Information</h2>

                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('member-professionentry') }}" method="post" enctype="multipart/form-data" >
                        
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Member ID </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member ID" name="MemberID" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label" for="val-username"><b>Member Name </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-username" name="val-username" placeholder="Member Name..">
                                </div>
                            </div>

                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label" for="val-email"><b>Email </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-email" name="val-email" placeholder="Email Address..">
                                </div>
                            </div>

                                <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label" for="val-password"><b>Password</b> <span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                                </div>
                            </div>

                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label" for="val-confirm-password"><b>Confirm Password </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                </div>
                            </div>

                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Mobile Number </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control" name="MemberNumber" placeholder="017-999-0000" required>
                                </div>
                            </div>
                            
                                <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Mobile Number Alternative
                                </b></h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member Number Alternative" name="MobileNoAlt">
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Member Address </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member Address" name="MemberAddress" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Area</b> <span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="Area" name="Area" required>
                                </div>
                            </div>
                                
                            
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label" ><b>Member Catagory </b><span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <select style="border: .01px solid #969393;" class="form-control"  name="MemberCatagory">
                                        <option value="">Please select</option>
                                        <option value="Sponser_Member">Sponser Member</option>
                                        <option value="Platinum_Member">Platinum Member</option>
                                        <option value="Gold_Member">Gold Member</option>
                                        <option value="Silver_Member">Silver Member</option>
                                        <option value="Bronze_Member">Bronze Member</option>
                                        <option value="Corporate_Member">Corporate Member</option>
                                        <option value="Senior_Member">Senior Member</option>
                                        <option value="Junior_Member">Junior Member</option>
                                        <option value="Intern_Associate">Intern Associate</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label" ><b>Member Type </b><span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <select style="border: .01px solid #969393;" class="form-control"  name="MemberType">
                                        <option value="">Please select</option>
                                        <option value="Genarel">Genarel Member</option>
                                        <option value="Associate">Associate Member</option>
                                        <option value="Student">Student</option>
                                        <option value="NUll">Null</option>
                                        <option value="NUll">Null</option>
                                        <option value="NUll">Null</option>
                                        <option value="NUll">Null</option>
                                        <option value="NUll">Null</option>
                                        <option value="Intern">Intern </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label" for="val-digits"><b>NID </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-digits" name="val-digits" placeholder="NID">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Joining Date </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="date" class="form-control"  placeholder="Joining Date" name="JoiningDate" required>
                                </div>
                            </div>
                                <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b> Asset Deposit </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-currency" name="ADtobePaid" placeholder="Asset Deposit (AD)" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> <b>Membership Status Point</b>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-website" name="MSP" placeholder="Membership Status Point (MSP)" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Monthly Running Cost Share </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control"name="MonthlyRCS" placeholder="Monthly Running Cost Share (RCS)" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Reference Member ID </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <input style="border: .01px solid #969393;" type="text" class="form-control" name="ReferenceMemberID" placeholder="Reference Member ID" required>
                                </div>
                            </div>

                        
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"><b>Remarks </b><span class="text-danger">*</span>
                                </h6>
                                <div class="col-lg-6">
                                    <textarea style="border: .01px solid #969393;" class="form-control"  name="Remarks" rows="5" placeholder="Enter Member AD,RCS Etc Details.." required></textarea>
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (Photo)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="photo" class="form-control-file" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (Hard copy Form)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="form" class="form-control-file" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (NID)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="nid" class="form-control-file" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (NOC)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="noc" class="form-control-file" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-1)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="Certificate-1" class="form-control-file" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-2)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="Certificate-2"class="form-control-file" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-3)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="Certificate-3" class="form-control-file" >
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label"><a href="#">Terms &amp; Conditions</a>  <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <h6 class="css-control css-control-primary css-checkbox" for="val-terms">
                                        <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span>  I agree to the terms</h6>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary" name="Member_Submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </details>

  <details>
    <summary>
        Member Profession Information
    </summary>
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
                            
                            
                        </div>    
                    
                        <button type="submit" class="btn mb-1 btn-secondary" name="MemberPfSkip"> Skip </button>
                        
                        <button type="submit" class="btn mb-1 btn-success" name="MemberPfInsert"> Insert </button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
 </details>
 <details>
    <summary>
        Member Education Information
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Member Education Information</h2>
                <div class="basic-form">
                    <form class="mt-5 mb-5 login-input" method="post" action="{{ route('member-personalentry') }}">
                        <div class="form-row">
                            <div class="card-body">
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
 </details>
  
 <details>
    <summary>
        Member Personal Information
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Member Personal Information</h2>
                <div class="basic-form">
                    <form class="mt-5 mb-5 login-input" method="post" action="index.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h6><b>Member Spouse Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Spouse Name" name="MemberSpouseName">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Father Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Father Name" name="MemberFatherName">
                            </div>    
                            
                            <div class="form-group col-md-6">
                                <h6><b>Member Mother Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Father Name" name="MemberMotherName">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Children Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 1" name="MemberChildrenName1">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Children Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 2" name="MemberChildrenName2">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Children Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 3" name="MemberChildrenName3">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <h6><b>Member Date Of Birth</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder="  Member Date Of Birth" name="MemberDateOfBirth">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Home District</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Home District" name="MemberHomeDistrict">
                            </div>
                        </div>    
                        <button type="submit" class="btn mb-1 btn-secondary" name="MemberPSkip"> Skip </button>
                        <!--  <div class="bootstrap-modal"> -->
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn mb-1 btn-success" name="MemberConfirm" id ="MemberConfirm"  >Confirm</button>
                            <!--<button type="button" class="btn mb-1 btn-success" name="MemberConfirm" data-toggle="modal" data-target="#exampleModalCenter">Confirm</button>-->
                            <!-- Modal -->
                            
                            <!--<div class="modal fade" id="exampleModalCenter">-->
                            <!--    <div class="modal-dialog modal-dialog-centered" role="document">-->
                            <!--        <div class="modal-content">-->
                            <!--            <div class="modal-header">-->
                            <!--                <h5 class="modal-title">Confirmation</h5>-->
                            <!--                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>-->
                            <!--                </button>-->
                            <!--            </div>-->
                            <!--            <div class="modal-body">-->
                            <!--                <p>Congratulation Sir/Madam, You are now offically member of Mirpur Club Ltd.</p>-->
                            <!--            </div>-->
                            <!--            <div class="modal-footer">-->
                                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <!--                <button type="button" class="btn btn-primary" name="MemberPoConfirm">Ok</button>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                        <!-- </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
 </details>
</div>
@endif

@endsection