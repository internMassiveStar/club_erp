@extends('layouts.master') 
@section('main-content')
@if(Auth::guard('member')->check())
@php
header("Location: " . URL::to('/dashboard'), true, 302);
exit();
@endphp
@else

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a class="text-center">
                    <h4>Member Table</h4>
                </a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration"
                        id="Membertable">
                        <thead>
                            <tr>
                                <th>MemberID</th>
                                <th>MemberName</th>
                                <th>MemberMail</th>
                                <th>MobileNo</th>
                                <th>MobileNoAlt</th>
                                <th>MemberAddress</th>
                                <th>Area</th>
                                <th>Member Catagory</th>
                                <th>Member type</th>
                                <th>Member NID</th>
                                <th>Joining Date</th>
                                <th>AD</th>
                                <th>MSP</th>
                                <th>RCS</th>
                                <th>Ref ID</th>
                                <th>Remarks</th>
                                <th>Attatchment photo</th>
                                <th>Attatchment Form</th>
                                <th>Attatchment NID</th>
                                <th>Attatchment NOC</th>
                                <th>Attatchment Certificate-1</th>
                                <th>Attatchment Certificate-2</th>
                                <th>Attatchment Certificate-3</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                        </tr>
                        

                        </tbody>
                        <tfoot>
                            <tr>
                              
                                
                            </tr>
                        </tfoot>
                    </table>
                </div>
            <div class="card-body">
                <h6></h6>
                <h2 class="text-center">Member Information</h2>
               <div class="form-validation">
                    <form class="form-valide" action="MemberTable.php" method="post" enctype="multipart/form-data" >
                    
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Member ID </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member ID" name="MemberID" id="MemberID"required>
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

                        <!-- <div class="form-group row">-->
                        <!--    <h6 class="col-lg-4 col-form-label" for="val-password"><b>Password</b> <span class="text-danger">*</span>-->
                        <!--    </h6>-->
                        <!--    <div class="col-lg-6">-->
                        <!--        <input style="border: .01px solid #969393;" type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="form-group row">-->
                        <!--    <h6 class="col-lg-4 col-form-label" for="val-confirm-password"><b>Confirm Password </b><span class="text-danger">*</span>-->
                        <!--    </h6>-->
                        <!--    <div class="col-lg-6">-->
                        <!--        <input style="border: .01px solid #969393;" type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Mobile Number </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="MemberNumber" id="MemberNumber"placeholder="017-999-0000" required>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Mobile Number Alternative
                            </b></h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member Number Alternative" name="MobileNoAlt" id="MobileNoAlt">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Member Address </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member Address" name="MemberAddress" id="MemberAddress"required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Area</b> <span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="Area" name="Area" id ="Area" required>
                            </div>
                        </div>
                         
                      
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label" ><b>Member Catagory </b><span class="text-danger"></span>
                            </h6>
                            <div class="col-lg-6">
                                <select style="border: .01px solid #969393;" class="form-control"  name="MemberCatagory" id="MemberCatagory">
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
                                <select style="border: .01px solid #969393;" class="form-control"  name="MemberType" id="MemberType">
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
                                <input style="border: .01px solid #969393;" type="date" class="form-control"  placeholder="Joining Date .." name="joiningdate" id="joiningdate" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b> Asset Deposit </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="ADtobePaid" name="ADtobePaid" placeholder="Asset Deposit (AD)" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> <b>Membership Status Point</b>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="MSP" name="MSP" placeholder="Membership Status Point (MSP)" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Monthly Running Cost Share </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="MonthlyRCS" id="MonthlyRCS" placeholder="Monthly Running Cost Share (RCS)" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Reference Member ID </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="ReferenceMemberID"id="ReferenceMemberID" placeholder="Reference Member ID" required>
                            </div>
                        </div>

                    
                       <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Remarks </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <textarea style="border: .01px solid #969393;" class="form-control"  name="Remarks" id="Remarks" rows="5" placeholder="Enter Member AD,RCS Etc Details.." required></textarea>
                            </div>
                        </div>
                        

                     <!--    <div class="form-group row">
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
                        </div> -->

                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary" name="Member_Update">UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
        </div>
    </div>
</div>
@endif
@endsection

<script>


   
    <script>
        $(document).ready(function () {
            $("#Membertable").dataTable();
        });

    </script>
 
    <script>
        $(document).ready(function () {
            $("#Mpertable").dataTable();
        });

    </script>

    <script>
        $(document).ready(function() {
            $("#Mptable").dataTable();
        });

    </script>

</script>
