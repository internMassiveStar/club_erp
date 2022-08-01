@extends('layouts.master') 
@section('main-content')

 
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


@endsection