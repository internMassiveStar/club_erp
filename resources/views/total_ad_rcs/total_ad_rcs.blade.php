@extends('layouts.master')

@section('title')
    Total AD & RCS Table
@endsection 

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
                            @isset($data)
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->member_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->total_ad }}</td>
                                    <td>{{ $item->total_paidad }}</td>
                                    <td>{{ $item->total_duead }}</td>
                                    <td>{{ $item->total_rcs }}</td>
                                    <td>{{ $item->total_paidrcs }}</td>
                                    <td>{{ $item->total_duercs }}</td>
                                </tr>
                                @endforeach
                            @endisset                                                                  
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