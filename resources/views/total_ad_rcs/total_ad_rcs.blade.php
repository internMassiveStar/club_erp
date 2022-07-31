@extends('layouts.master')
@section('main-content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-center"><h4>Total AD & RCS Table</h4></a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration" id="totaltable">
                            <thead>
                                <tr>
                                    <th>MemberID</th>
                                    <th>Member Name</th>
                                    <th>TotalAD</th>
                                    <th>Total Paid AD</th>
                                    <th>Total Due AD</th>
                                    <th>Total RCS</th>
                                    <th>Total Paid RCS</th>
                                    <th>Total Due RCS</th>
                                </tr>
                            </thead>
                            <tbody>                                          
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th>MemberID</th>
                                    <th>Member Name</th>
                                    <th>TotalAD</th>
                                    <th>Total Paid AD</th>
                                    <th>Total Due AD</th>
                                    <th>Total RCS</th>
                                    <th>Total Paid RCS</th>
                                    <th>Total Due RCS</th>
                                </tr>
                            </tfoot> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection