
@extends('layouts.master') 
@section('main-content')

    <div class="col-lg-12">
        <h4></h4>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center" style = "color: solid #6577B3;">Cheque Information</h2>
                <div class="basic-form">
                    <form class="mt-5 mb-5 login-input" method="post" action=" {{@$editData ? route('cheque-managementUpdate',$editData->id) : route('cheque-management') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <!--  <div class="form-group col-md-8">
                                <h6>Cheque ID :</h6>
                             </div>
-->

                            <div class="form-group col-md-4">
                                <h6><b>Member ID</b></h6>
                                <input style="border: .02px solid #969393;" type="text" class="form-control" placeholder="   Member Id" name="member_id" id="member_id" value='{{ @$editData->member_id }}' required>
                            </div>
                         
                              
                
                            <div class="form-group col-md-4">
                               <h6><b>Choose AD or RCS</b></h6>
                                <div class="basic-form">
                                    <select style="border: .03px solid #969393;"class="form-control"  name="ad_rcs" id="ad_rcs" required>
                                        <option value='{{ @$editData->ad_rcs }}'>{{ @$editData ? $editData->ad_rcs : "Please select" }}</option>
                                        <option value="AD">AD</option>
                                        <option value="RCS">RCS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                               <h6><b>Cheque Type</b></h6>
                                <div class="basic-form">
                                    <select style="border: 1px solid #969393;" class="form-control"  name="type" id="type" required>
                                        <option value="{{ @$editData->type }}">{{ @$editData ? $editData->type : "Please select" }}</option>
                                        <option vaPayable="AccountsPayable">Accounts Payable</option>
                                        <option value="CashCheque">Cash Cheque</option>
                                        <option value="BankTransfer">Bank Transfer</option>
                                    </select>
                                </div>
                            </div>
                             
                            <div class="form-group col-md-4">
                                <h6><b>Bank Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Bank Name" name="bank_name" id="bank_name"  value='{{ @$editData->bank_name }}' required>
                            </div> 

                            <div class="form-group col-md-4">
                                <h6><b>Cheque No</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Cheque No:" name="cheque_no" id="cheque_no"  value='{{ @$editData->cheque_no }}' required>
                            </div>
                            <div class="form-group col-md-4">
                                <h6><b>Cheque Amount</b></h6>
                                <input style="border: .01px solid #969393;" type="Number" class="form-control" placeholder=" Cheque Amount" name="receiving_amount" id="receiving_amount"  value='{{ @$editData->receiving_amount }}' required>
                            </div>

                            <div class="form-group col-md-4">
                                <h6><b>Cheque Receive Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Receive Date" name="receiving_date" id="receiving_date"   value='{{ @$editData->receiving_date }}' required>
                            </div>

                            <div class="form-group col-md-4">
                                <h6><b>Cheque Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Date" name="cheque_date" id="cheque_date"  value='{{ @$editData->cheque_date }}' required>
                            </div>
                           
                            <div class="form-group col-md-4">
                                <h6><b>Cheque Honored Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Honored Date" name="honored_date" id="honored_date" value='{{ @$editData->honored_date }}'>  
                            </div>
                            <div class="form-group col-md-4">
                                <h6><b>Cheque Dishonored Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque dishonored Date" name="dishonored_date" id="dishonored_date"  value='{{ @$editData->dishonored_date }}'> 
                            </div>
                            <div class="form-group col-md-4">
                                <h6><b>Old Dishonored Cheque No</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Dishonored Cheque No" name="oldcheque_no" id="oldcheque_no"  value='{{ @$editData->oldcheque_no }}'>
                            </div>

                             <div class="form-group col-md-4">
                                <h6><b>Cheque In By</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Cheque In By" name="cheque_inby" id="cheque_inby"  value='{{ @$editData->cheque_inby }}' required>
                            </div> 
                             <!-- <div class="form-group col-md-3">
                                <h6><b>Cheque Out By</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder=" Cheque Out By" name="ChequeOutBy" id="ChequeOutBy" required>
                            </div>  -->
                            
                            <div class="col-lg-12">
                                
                                <h6><b>Dishonoured cheque Remarks</b></h6>
                                <div class="form-group">
                                    <textarea style="border: 1px solid #969393;" class="form-control h-150px" placeholder=" Cheque dishonor reason" rows="2" name="Remarks" id="Remarks"  value='{{ @$editData->Remarks }}'></textarea>
                                
                                </div>
                            </div>
                            

                            
                            <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (Cheque)<span class="text-danger"></span>
                            </h6>
                            <div class="col-lg-6">
                                <input type="file" name="attachment" class="form-control-file" >
                            </div>
                    </div>
                        </div>    
                  
                        <button type="submit" class="btn mb-1 btn-success" name="ChequeEntry"> {{ @$editData ? 'Update' : 'Insert' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @isset($data)
    
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
                                    <th>Cheque Managed By</th>
                                    <th>Cheque Out By</th>
                                    <th>Remarks</th>
                                    <th>Attatchment</th>
                                    <th>Insert By</th>
                                    <th>Update By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <form action="{{ route('cheque-managementEdit',$item->id)}}" method="get">
                                        <td>{{ $item->member_id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->ad_rcs }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->bank_name }}</td>
                                        <td>{{ $item->cheque_no  }}</td>
                                        <td>{{ $item->receiving_amount }}</td>
                                        <td>{{ $item->receiving_date }}</td>
                                        <td>{{ $item->cheque_date }}</td>
                                        <td>{{ $item->honored_date }}</td>
                                        <td>{{ $item->dishonored_date }}</td>
                                        <td>{{ $item->oldcheque_no }}</td>
                                        <td>{{ $item->cheque_inby }}</td>
                                        <td>{{ $item->cheque_managedby }}</td>
                                        <td>{{ $item->cheque_outby }}</td>
                                        <td>{{ $item->Remarks }}</td>
                                        <td>{{ $item->attachment }}</td>
                                        <td>{{ $item->insert_by }}</td>
                                        <td>{{ $item->update_by }}</td>
                                        <td><input type="submit" 
                                            class="btn btn-outline-danger rounded-pill"
                                            value="Edit" name="edit"></td>
                                    </form>
                                    
                                </tr>
                                @endforeach
                                
                                
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
                                    <th>Cheque Managed By</th>
                                    <th>Cheque Out By</th>
                                    <th>Remarks</th>
                                    <th>Attatchment</th>
                                    <th>Insert By</th>
                                    <th>Update By</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endisset
    
    @endsection