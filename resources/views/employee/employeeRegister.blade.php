@extends('layouts.master') 
@section('main-content')

<div class="col-lg-12">
    <h6></h6>
    <div class="card">
        <div class="card-body">
            
            <h2 class="text-center text-blue">Employee Information</h2>
            
            <div class="basic-form">
                <form class="mt-5 mb-5 login-input" method="post" action="{{ route('register-employee') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="form-row">
                    
                        <div class="form-group col-md-6">
                            <h6><b>Employee Name</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control"
                                placeholder=" Employee Name" name="employee_name" id="EmployeeName"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Employee Mobile</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control"
                                placeholder="  Employee Mobile" name="employee_mobile" id="EmployeeMobile"
                                required>
                        </div>

                        <div class="form-group col-md-6">
                            <h6><b>Employee Address</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control"
                                placeholder="  Employee Address" name="employee_address" id="EmployeeAddress"
                                required>
                        </div>
                        
                        <div class="form-group col-md-6">
                                <h6><b>Joining Date</b></h6>
                                <input style="border: .01px solid #969393;" type="date" class="form-control"
                                    placeholder="  Joining Date" name="joinining_date" id="JoiningDate">
                        </div>                                    
                        <div class="form-group col-md-6">
                            <h6><b>Resign Date</b></h6>
                            <input style="border: .01px solid #969393;" type="date" class="form-control"
                                    placeholder="   Resign Date" name="resign_date" id="ResignDate">
                        </div>  
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h6><b>Email</b></h6>
                            <input style="border: .01px solid #969393;" type="email" class="form-control"
                                placeholder="  Email" name="email" id="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Password</b></h6>
                            <input style="border: .01px solid #969393;" type="password" class="form-control"
                                placeholder="  Password" name="password" id="Password">
                        </div>
                         <div class="form-group col-md-6">
                            <h6><b>Employee NID</b></h6>
                            <input style="border: .01px solid #969393;" type="number" class="form-control"
                                placeholder="  Employee NID" name="employee_nid" id="EmployeeNID">
                        </div>
                    </div>
                    <div class="form-row">    
                         <div class="form-group col-md-3">
                           <h6><b>Employee Education Degree</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Degree" name="degree" id="EmployeeEducationDegree" >
                         </div>
                        <div class="form-group col-md-3">
                            <h6><b>Employee Education Institute</b></h6>
                               <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Employee Education Institute" name="institute" id="EmployeeEducationInstitute">
                        </div>
                        <div class="form-group col-md-3">
                            <h6><b>Employee Education Result</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Result" name="result" id="EmployeeEducationResult">
                        </div>
                        <div class="form-group col-md-3">
                            <h6><b>Employee Education Year</b></h6>
                            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Year" name="year" id="EmployeeEducationYear">
                        </div>
                        <div class="form-group row">
                                <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-1)<span class="text-danger"></span>
                                </h6>
                                <div class="col-lg-6">
                                    <input type="file" name="certificate" class="form-control-file" >
                                </div>
                        </div>

                    </div>
                    <button type="submit" class="btn mb-1 btn-success" name="EmployeeEntry"> Insert</button>
                    <button type="submit" class="btn mb-1 btn-warning" name="EmployeeUpdate"> Update</button>
                    <button type="submit" class="btn mb-1 btn-danger" name="EmployeeDelete"> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection