@extends('layouts.master') 
@section('main-content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a class="text-center"><h4>Search Cheque By Date</h4></a>
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
                                <th>Old Dishonored Cheque No</th>
                                <th>Cheque In By</th>
                                <th>Cheque Managed By</th>
                                <th>Cheque Out By</th>
                                <th>Remarks</th>
                                <th>Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->member_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->bank_name }}</td>
                                <td>{{ $item->ad_rcs }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->cheque_no}}</td>
                                <td>{{ $item->receiving_amount}}</td>
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
                            </tr>
                                
                            @endforeach
                     
                            
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
                                <th>Cheque Managed By</th>
                                <th>Cheque Out By</th>
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