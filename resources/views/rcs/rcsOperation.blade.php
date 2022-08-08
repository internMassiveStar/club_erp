@extends('layouts.master')
@section('title') {{'RCS Operation'}} @endsection
@section('main-content')


<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Running Cost Share Operation</h2>
            <div class="basic-form">
                <form class="mt-5 mb-5 login-input" method="post" action="{{ @$editData ? route('update-rcs',$editData->id) : route('operation-rcs') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h6><b>Member ID</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Member ID" name="member_id" id="member_id" value='{{ @$editData->member_id }}' required>
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Receiving Date</b></h6>
                            <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Receiving Date" name="receiving_date" value='{{ @$editData->receiving_date }}' required>
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Receiving Amount</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Receiving Amount" name="receiving_amount" value='{{ @$editData->receiving_amount }}' required>
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Receiving Tool</b></h6>
                            <div class="col-lg-6">
                              
                                <select style="border: .01px solid #969393;" class="form-control"  name="receiving_tool" id="receiving_tool">
                                    <option value="{{ @$editData->receiving_tool }}">{{ @$editData ? $editData->receiving_tool : 'Plese Select' }}</option>
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
                    <button type="submit" class="btn mb-1 btn-success"> {{ @$editData ? 'Updata' :'Insert'}}</button>
                    <!--<button type="submit" class="btn mb-1 btn-danger" name="ADDelete"> Delete</button>-->
                </form>
            </div>
        </div>
    </div>
</div>

@isset($data)
    

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-center"><h4>RCS Operation Table</h4></a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration" id="Mytable">
                            <thead>
                                <tr>
                                    <th>MemberID</th>
                                    <th>Member Name</th>
                                    
                                    <th>ReceivingAmount</th>
                                    <th>ReceivingDate</th>
                                    <th>ReceivingTool</th>
                                    <th>Insert By</th>
                                    <th>Update by</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $item)
                                    
                                <td>{{ $item->member_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->receiving_amount }}</td>
                                <td>{{ $item->receiving_date }}</td>
                                <td>{{ $item->receiving_tool }}</td>
                                <td>{{ $item->insert_by }}</td>
                                <td>{{ $item->update_by }}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm"
                                     href="{{ route('rcs-update',$item->id) }}">update</a>
                                  
                                </td>
                              
                              
                         @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endisset
@endsection