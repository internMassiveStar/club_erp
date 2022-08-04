@extends('layouts.master')
@section('main-content')



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
 
@endsection