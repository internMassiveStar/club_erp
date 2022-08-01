
@extends('layouts.master') 
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a class="text-center">
                    <h4> </h4>
                    <h4>Personal Information Table</h4>
                </a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration" id="Mpertable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Spouse Name</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Children</th>
                                <th>Children</th>
                                <th>Children</th>
                                <th>Date Of Birth</th>
                                <th>Home District</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Spouse Name</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Children</th>
                                <th>Children</th>
                                <th>Children</th>
                                <th>Date Of Birth</th>
                                <th>Home District</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
      
               <h4 class="text-center">Personal Information Table</h4>
                <div class="basic-form">
                    <form class="mt-5 mb-5 login-input" method="post" action="MemberTable.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h6><b>Member ID</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Member ID" name="MemberID" id ="MemberIDss">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Spouse Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Spouse Name" name="MemberSpouseName" id ="MemberSpouseName">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Father Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Father Name" name="MemberFatherName" id ="MemberFatherName">
                            </div>    
                            
                            <div class="form-group col-md-6">
                                <h6><b>Member Mother Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Father Name" name="MemberMotherName" id="MemberMotherName">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Children Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 1" name="MemberChildrenName1" id="MemberChildrenName1">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Children Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 2" name="MemberChildrenName2" id="MemberChildrenName2">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Children Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 3" name="MemberChildrenName3" id="MemberChildrenName3">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <h6><b>Member Date Of Birth</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder="  Member Date Of Birth" name="MemberDateOfBirth" id="MemberDateOfBirth">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Home District</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Home District" name="MemberHomeDistrict" id="MemberHomeDistrict">
                            </div>
                        </div>    

                        </div>
                        <button type="submit" class="btn mb-1 btn-warning" name="MemberPUpdate">
                            Update</button>
                        <!--<button type="submit" class="btn mb-1 btn-danger" name="MemberPDelete">-->
                        <!--    Delete</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection