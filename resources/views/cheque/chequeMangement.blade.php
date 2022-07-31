
@extends('layouts.master') 
@section('main-content')
    <div class="col-lg-12">
        <h4></h4>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center" style = "color: solid #6577B3;">Cheque Information</h2>
                <div class="basic-form">
                    <form class="mt-5 mb-5 login-input" method="post" action="Cheque-management.php" enctype="multipart/form-data">
                        <div class="form-row">
                            <!--  <div class="form-group col-md-8">
                                <h6>Cheque ID :</h6>
                             </div>
-->

                            <div class="form-group col-md-4">
                                <h6><b>Member ID</b></h6>
                                <input style="border: .02px solid #969393;" type="text" class="form-control" placeholder="   Member Id" name="MemberID" id="MemberID" required>
                            </div>
                         
                              
                
                            <div class="form-group col-md-4">
                               <h6><b>Choose AD or RCS</b></h6>
                                <div class="basic-form">
                                    <select style="border: .03px solid #969393;"class="form-control"  name="ADORRCS" id="ADORRCS" required>
                                        <option value="">Please select</option>
                                        <option value="AD">AD</option>
                                        <option value="RCS">RCS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                               <h6><b>Cheque Type</b></h6>
                                <div class="basic-form">
                                    <select style="border: 1px solid #969393;" class="form-control"  name="Chequetype" id="Chequetype" required>
                                        <option value="">Please select</option>
                                        <option vaPayable="AccountsPayable">Accounts Payable</option>
                                        <option value="CashCheque">Cash Cheque</option>
                                        <option value="BankTransfer">Bank Transfer</option>
                                    </select>
                                </div>
                            </div>
                             
                            <div class="form-group col-md-4">
                                <h6><b>Bank Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Bank Name" name="BankName" id="BankName" required>
                            </div> 

                            <div class="form-group col-md-4">
                                <h6><b>Cheque No</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Cheque No:" name="ChequeNo" id="ChequeNo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <h6><b>Cheque Amount</b></h6>
                                <input style="border: .01px solid #969393;" type="Number" class="form-control" placeholder=" Cheque Amount" name="ChequeAmount" id="ChequeAmount"required>
                            </div>

                            <div class="form-group col-md-4">
                                <h6><b>Cheque Receive Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Receive Date" name="ChequeReceiveDate" id="ChequeReceiveDate" required>
                            </div>

                            <div class="form-group col-md-4">
                                <h6><b>Cheque Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Date" name="ChequeDate" id="ChequeDate" required>
                            </div>
                           
                            <div class="form-group col-md-4">
                                <h6><b>Cheque Honored Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Honored Date" name="ChequeHonoredDate" id="ChequeHonoredDate">
                            </div>
                            <div class="form-group col-md-4">
                                <h6><b>Cheque Dishonored Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque dishonored Date" name="ChequedishonoredDate" id="ChequedishonoredDate">
                            </div>
                            <div class="form-group col-md-4">
                                <h6><b>Old Dishonored Cheque No</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Dishonored Cheque No" name="oldcheque" id="oldcheque">
                            </div>

                             <div class="form-group col-md-4">
                                <h6><b>Cheque In By</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Cheque In By" name="ChequeInBy" id="ChequeInBy" required>
                            </div> 
                             <!-- <div class="form-group col-md-3">
                                <h6><b>Cheque Out By</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder=" Cheque Out By" name="ChequeOutBy" id="ChequeOutBy" required>
                            </div>  -->
                            
                            <div class="col-lg-12">
                                
                                <h6><b>Dishonoured cheque Remarks</b></h6>
                                <div class="form-group">
                                    <textarea style="border: 1px solid #969393;" class="form-control h-150px" placeholder=" Cheque dishonor reason" rows="2" name="Remarks" id="comment"></textarea>
                                
                                </div>
                            </div>
                            

                            
                            <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (Cheque)<span class="text-danger"></span>
                            </h6>
                            <div class="col-lg-6">
                                <input type="file" name="cheque" class="form-control-file" >
                            </div>
                    </div>
                             
                        </div>    
                  
                        <button type="submit" class="btn mb-1 btn-success" name="ChequeEntry"> Insert </button>  
                        <button type="submit" class="btn mb-1 btn-warning" name="ChequeUpdate"> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-center"><h4>Cheque Management Table</h4></a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration" id="cheque">
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Member Name</th>
                                    <th>AD or RCS</th>
                                    <th>cheque Type</th>
                                    <th>Bank Name</th>
                                    <th>Cheque No</th>
                                    <th>Cheque Amount</th>
                                    <th>Cheque ReceivingDate</th>
                                    <th>Cheque Date</th>
                                    <th>Honored Date</th>
                                    <th>Dishonored Date</th>
                                    <th>Old Cheque No</th>
                                    <th>Cheque In By</th>
                                    <th>Remarks</th>
                                    <th>Attatchment</th>
                                    <th>Preview</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Member Name</th>
                                    <th>AD or RCS</th>
                                    <th>Cheque Type</th>
                                    <th>Bank Name</th>
                                    <th>Cheque No</th>
                                    <th>Cheque Amount</th>
                                    <th>Cheque ReceivingDate</th>
                                    <th>Cheque Date</th>
                                    <th>Honored Date</th>
                                    <th>Dishonored Date</th>
                                    <th>Old Cheque No</th>
                                    <th>Cheque In By</th>
                                    <th>Remarks</th>
                                    <th>Attatchment</th>
                                    <th>Preview</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection