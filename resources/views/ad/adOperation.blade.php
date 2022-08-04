@extends('layouts.master')
@section('main-content')

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Asset Deposit Operation</h2>
                        <div class="basic-form">
                            <form class="mt-5 mb-5 login-input" method="post" action="{{ route('ad-operation') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h6><b>Member ID</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Member ID" name="member_id" id="member_id" value='{{ old('member_id') }}' required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Receiving Date</b></h6>
                                        <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Receiving Date" name="receiving_date" id="receiving_date" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Receiving Amount</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Receiving Amount" name="receiving_amount" id="receiving_amount" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Receiving Tool</b></h6>
                                        <div class="col-lg-6">
                                            <select style="border: .01px solid #969393;" class="form-control"  name="receiving_tool" id="receiving_tool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                    </div>  
                                    {{-- <div class="form-group col-md-6">
                                        <h6><b>Employee ID</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Employee ID" name="EmployeeID" id="EmployeeID" required>
                                    </div>         --}}
                            
                                                                            
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
                                                <th>Insert by ID</th>
                                                <th>Update by ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            @foreach ($data as $item)
                                                <tr>
                                                    <form action="" method="get">
                                                    <td>{{ $item->member_id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->receiving_date }}</td>
                                                    <td>{{ $item->receiving_amount }}</td>
                                                    <td>{{ $item->receiving_tool }}</td>
                                                    <td>{{ $item->insert_emp_id }}</td>
                                                    <td>{{ $item->update_emp_id }}</td>
                                                    <td><input type="submit" 
                                                        class="btn btn-outline-danger rounded-pill"
                                                        value="Update" name="update">Update</td>
                                                        </form>
                                                </tr>
                                            @endforeach  
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>MemberID</th>
                                                <th>Member Name</th>
                                                <th>ReceivingDate</th>
                                                <th>ReceivingAmount</th>
                                                <th>ReceivingTool</th>
                                                <th>Insert EmployeeID</th>
                                                <th>Update by ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
      
@endsection

