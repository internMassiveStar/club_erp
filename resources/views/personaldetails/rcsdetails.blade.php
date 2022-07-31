@extends('layouts.master')

@section('main-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-center"><h4>Cash RCS Details</h4></a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration" id="Mytable">
                            <thead>
                                <tr>
                                    <th>MemberID</th>
                                    <th>Member Name</th>
                                    <th>ReceivingDate</th>
                                    <th>ReceivingAmount</th>
                                    <th>EmployeeID</th>
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
                                    <th>EmployeeID</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-center"><h4>Cheque RCS Details</h4></a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration" id="Mtable">
                            <thead>
                            <tr>
                                    <th>Cheque No</th>
                                    <th>Cheque Type</th>
                                    <th>Bank Name</th>
                                    <th>Cheque Amount</th>
                                    <th>Cheque ReceivingDate</th>
                                    <th>Cheque Date</th>
                                    <th>Honored Date</th>
                                    <th>Dishonored Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    
                                    <th>Cheque No</th>
                                    <th>Cheque Type</th>
                                    <th>Bank Name</th>
                                    <th>Cheque Amount</th>
                                    <th>Cheque ReceivingDate</th>
                                    <th>Cheque Date</th>
                                    <th>Honored Date</th>
                                    <th>Dishonored Date</th>
                                    
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection