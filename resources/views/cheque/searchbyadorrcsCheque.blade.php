@extends('layouts.master') 
@section('main-content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a class="text-center"><h4>Search Cheque By AD or RCS</h4></a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                        <thead>
                            <tr>
                                <th>Member Id</th>
                                <th>Member Name</th>
                                <th>Bank Name</th>
                                <th>AD or RCS</th>
                                <th>Cheque Type</th>
                                <th>Cheque No</th>
                                <th>Cheque Amount</th>
                                <th>Cheque Receive Date</th>
                                <th>Cheque Date</th>
                                <th>Honored Date</th>
                                <th>Dishonored Date</th>
                                <th>Dishonored Date</th>
                                <th>Old Dishonored Cheque No</th>
                                <th>Cheque Out By</th>
                                <th>Cheque Managed By</th>
                                <th>Remarks</th>
                                <th>Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                     
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Member Id</th>
                                <th>Member Name</th>
                                <th>Bank Name</th>
                                <th>AD or RCS</th>
                                <th>Cheque Type</th>
                                <th>Cheque No</th>
                                <th>Cheque Amount</th>
                                <th>Cheque Receive Date</th>
                                <th>Cheque Date</th>
                                <th>Honored Date</th>
                                <th>Dishonored Date</th>
                                <th>Old Dishonored Cheque No</th>
                                <th>Cheque In By</th>
                                <th>Cheque Out By</th>
                                <th>Cheque Managed By</th>
                                <th>Remarks</th>
                                <th>Attachment</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection