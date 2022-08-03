@extends('layouts.master')
@section('main-content')
@if(Auth::guard('member')->check())
@php
header("Location: " . URL::to('/dashboard'), true, 302);
exit();
@endphp
@else
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Asset Deposit Operation</h2>
                        <div class="basic-form">
                            <form class="mt-5 mb-5 login-input" method="post" action="AdOpt.php">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h6><b>Member ID</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Member ID" name="MemberID" id="MemberID" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Receiving Date</b></h6>
                                        <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Receiving Date" name="ReceivingDate" id="ReceivingDate" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Receiving Amount</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Receiving Amount" name="ReceivingAmount" id="ReceivingAmount" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Receiving Tool</b></h6>
                                        <div class="col-lg-6">
                                            <select style="border: .01px solid #969393;" class="form-control"  name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="form-group col-md-6">
                                        <h6><b>Employee ID</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Employee ID" name="EmployeeID" id="EmployeeID" required>
                                    </div>        
                            
                                                                            
                                </div>    
                                <button type="submit" class="btn mb-1 btn-success" name="ADInsert"> Insert </button>  
                                <button type="submit" class="btn mb-1 btn-warning" name="ADUpdate"> Update</button>
                                <!--<button type="submit" class="btn mb-1 btn-danger" name="ADDelete"> Delete</button>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center"><h4>AD Operation Table</h4></a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="adopttable">
                                        <thead>
                                            <tr>
                                                <th>MemberID</th>
                                                <th>Member Name</th>
                                                <th>ReceivingDate</th>
                                                <th>ReceivingAmount</th>
                                                <th>ReceivingTool</th>
                                                <th>Insert EmployeeID</th>
                                            </tr>
                                        </thead>
                                        <tbody>   
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>MemberID</th>
                                                <th>Member Name</th>
                                                <th>ReceivingDate</th>
                                                <th>ReceivingAmount</th>
                                                <th>ReceivingTool</th>
                                                <th>Insert EmployeeID</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            @endif
@endsection

