@extends('layouts.master') 
@section('main-content')

<div class="col-lg-12">
    <h6></h6>
    <div class="card">
        <div class="card-body">
            
            <h2 class="text-center text-blue">Employee Information</h2>
            
            <div class="basic-form">
                <form class="mt-5 mb-5 login-input" method="post" action="{{ @$editData ? route('update-employee',$editData->id) : route('register-employee') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                            <h6><b>Employee Name</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control"
                                placeholder=" Employee Name" name="employee_name" value="{{ @$editData->name }}"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Employee Mobile</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control"
                                placeholder="  Employee Mobile" name="employee_mobile" value="{{ @$editData->mobile }}"
                                required>
                        </div>

                        <div class="form-group col-md-6">
                            <h6><b>Employee Address</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control"
                                placeholder="  Employee Address" name="employee_address" value="{{ @$editData->address }}"
                                required>
                        </div>
                        
                        <div class="form-group col-md-6">
                                <h6><b>Joining Date</b></h6>
                                <input style="border: .01px solid #969393;" type="{{ @$editData ? 'text' : 'date' }}" class="form-control"
                                    placeholder="  Joining Date" name="joinining_date" value="{{ @$editData->joining_date }}">
                        </div>                                    
                        <div class="form-group col-md-6">
                            <h6><b>Resign Date</b></h6>
                            <input style="border: .01px solid #969393;" type="{{ @$editData ? 'text' : 'date' }}" class="form-control"
                                    placeholder="   Resign Date" name="resign_date" value="{{ @$editData->resiging_date }}">
                        </div>  
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h6><b>Email</b></h6>
                            <input style="border: .01px solid #969393;" type="email" class="form-control"
                                placeholder="  Email" name="email" value="{{ @$editData->email }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Password</b></h6>
                            <input style="border: .01px solid #969393;" type="password" class="form-control"
                                placeholder="  Password" name="password" id="Password">
                        </div>
                     
                         <div class="form-group col-md-6">
                            <h6><b>Employee NID</b></h6>
                            <input style="border: .01px solid #969393;" type="{{ @$editData ? 'text' : 'number' }}" class="form-control"
                                placeholder="Employee NID" name="employee_nid" value="{{ @$editData->nid }}">
                        </div>
                    </div>
                    <div class="form-row">    
                         <div class="form-group col-md-3">
                           <h6><b>Employee Education Degree</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Degree" name="degree" value="{{ @$editData->last_degree }}">
                         </div>
                        <div class="form-group col-md-3">
                            <h6><b>Employee Education Institute</b></h6>
                               <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Employee Education Institute" name="institute" value="{{ @$editData->last_institute }}">
                        </div>
                        <div class="form-group col-md-3">
                            <h6><b>Employee Education Result</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Result" name="result" value="{{ @$editData->last_result }}">
                        </div>
                        <div class="form-group col-md-3">
                            <h6><b>Employee Education Year</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Year" name="year" value="{{ @$editData->last_year }}">
                        </div>
                        <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-1)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="certificate" class="form-control-file" >
                                </div>
                        </div>

                    </div>
                    <button type="submit" class="btn mb-1 btn-success" name="EmployeeEntry"> {{ @$editData ? 'Update' : 'Insert' }}</button>

                </form>
            </div>
        </div>
    </div>
</div>


@isset($data)
    

<div class="col-lg-12">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="text-center"><h4>Employee List</h4></a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration" id="adopttable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Joining  Date</th>
                                    <th>Degree</th>
                                    <th>Institute</th>
                                    <th>Result</th>
                                    <th>passing Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($data as $item)
                                    
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->joining_date }}</td>
                                        <td>{{ $item->last_degree }}</td>
                                        <td>{{ $item->last_institute }}</td>
                                        <td>{{ $item->last_result }}</td>
                                        <td>{{ $item->last_year }}</td>
                                        <td>
                                            <a class="btn btn-danger btn-sm"
                                             href="{{ route('employee-update',$item->id) }}">update</a>
                                          
                                        </td>
                                    </tr>
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