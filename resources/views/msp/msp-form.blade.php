@extends('layouts.master') 
@section('main-content')
@section('title') {{'Member Entry'}} @endsection

<div style="padding-top: 5%; font-size: 20px; color: #7571f9">

@php
    $success = Session::get('success');
    $error = Session::get('error');

@endphp
@if ($success)
    <div class="alert alert-success">{{ $success }}</div>
@elseif ($error)
    <div class="alert alert-danger">{{ $error }}</div>
@endif

 @if(session()->has('memberEntry') || Auth::guard('admin')->check()) 
<details>
    <summary>
        Member
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Member MSP Insert Form</h2>
                <div class="basic-form">
                    <form class="form-valide" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h6><b>Member ID</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder="Member ID" name="member_id" maxlength="10">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Name</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Name" name="member_name">
                            </div>    
                            <div class="form-group col-md-6">
                                <h6><b>Reference By(ID)</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder="Reference By" name="member_reference" maxlength="10">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <h6><b>Member Total Reference</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Enter Reference Digit" name="member_reference">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Total Attend Formation Meeting</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Enter Digit" name="member_attend_clubmeeting">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Total Attend Club Program</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder=" Enter Digit" name="member_attend_clubprogram">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Total Attend Community Program</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Enter Digit" name="member_attend_communityprogram">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Responsibility Rate</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Out Of 10" name="member_responsibility">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Gap Between Responsibility & Performance</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Out Of 10" name="member_responsibility_gap">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Bein Consume Rate</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Out Of 10" name="member_consume">
                            </div>
                            
                            
                        </div>

                        <button type="submit" class="btn mb-1 btn-success" name="MemberProfession" id ="MemberProfession" >Save</button>    


                        <button type="submit" class="btn mb-1 btn-success" name="Member" id ="Member"  >save</button>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>

</details>
<details>

 </details>
<details>
    <summary>
       Donation 
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Paid Donation</h2>
                <div class="basic-form">

                    <form class="form-valide" action="{{ route('paid-donation') }}" method="post" enctype="multipart/form-data">
                        @csrf
                          <table class="table table-striped table-inverse table-responsive" style="border: 1px solid black">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Donation Name</th>
                                    <th>Amount</th>
                                    <th><a class="btn mb-1 btn-success" style="margin-top: 30%" onclick="create_tr('table_id')" ><i class="fa fa-plus"></i></a></th>
                                </tr>
                                </thead>
                                <tbody id="table_id">
                                    <tr>
                                        <td>   
                                     <select style="border: .01px solid #969393;" class="form-control"  name="donation_name[]" id="receiving_tool">
                                            @foreach ($donations as $donation )
                                                
                                           
                                            <option value="{{ $donation->donation_name }}">{{ $donation->donation_name }}</option>
                                        
                                            @endforeach
                                        </select></td>
                                        <td><input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="Amount" name="amount[]"></td>
                                        
                                        <td><a class="btn mb-1 btn-danger" style="margin-top: 10%; color:white" onclick="remove_tr(this)" ><i class="fa fa-close"></i></a></td>
                                        
                                    </tr>
                                </tbody>
                        </table>
                        <button type="submit" class="btn mb-1 btn-success" name="MemberEducation" id ="MemberEducation"  >Donation save</button> 
                    </form>  
                        
                </div>
              
            </div>
                            
        </div>
    </div>
</details>
<details>
    <summary>
       Special RCS 
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Paid Special RCS</h2>
                <div class="basic-form">

                    <form class="form-valide" action="{{ route('paid-specail-rcs') }}" method="post" enctype="multipart/form-data">
                        @csrf
                          <table class="table table-striped table-inverse table-responsive" style="border: 1px solid black">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Special RCS Type</th>
                                    <th><a class="btn mb-1 btn-success" style="margin-top: 30%" onclick="create_tr('table_id_special_rcs')" ><i class="fa fa-plus"></i></a></th>
                                </tr>
                                </thead>
                                <tbody id="table_id_special_rcs">
                                    <tr>
                                        <td>   
                                            <select style="border: .01px solid #969393;" class="form-control"  name="rcs_name[]" id="receiving_tool">
                                                   @foreach ($rcs_specials as $rcs_special )
                                                       
                                                  
                                                   <option value="{{ $rcs_special->rcs_name }}">{{ $rcs_special->rcs_name }}</option>
                                               
                                                   @endforeach
                                               </select></td>                                        
                                        <td><a class="btn mb-1 btn-danger" style="margin-top: 10%; color:white" onclick="remove_tr(this)" ><i class="fa fa-close"></i></a></td>
                                        
                                    </tr>
                                </tbody>
                        </table>
                        <button type="submit" class="btn mb-1 btn-success" name="MemberEducation" id ="MemberEducation"  >special rcs save</button> 
                    </form>  
                        
                </div>
              
            </div>
                            
        </div>
    </div>
</details>
  <details>

    <summary>
       Donation 
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Paid Donation</h2>
                <div class="basic-form">

                    <form class="form-valide" action=" " method="post" enctype="multipart/form-data">
                        @csrf

                          <table class="table table-striped table-inverse table-responsive" style="border: 1px solid black">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Donation Type</th>
                                    <th>Amount</th>
                                    <th><a class="btn mb-1 btn-success" style="margin-top: 30%" onclick="create_tr('table_id')" ><i class="fa fa-plus"></i></a></th>
                                </tr>
                                </thead>
                                <tbody id="table_id">
                                    <tr>
                                        <td><input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Donation Type" name="degree[]" ></td>
                                        <td><input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="Amount" name="institute[]"></td>
                                        
                                        <td><a class="btn mb-1 btn-danger" style="margin-top: 10%; color:white" onclick="remove_tr(this)" ><i class="fa fa-close"></i></a></td>
                                        
                                    </tr>
                                </tbody>
                        </table>
                        <button type="submit" class="btn mb-1 btn-success" name="MemberEducation" id ="MemberEducation"  >Donation save</button> 
                    </form>  
                        
                </div>
              
            </div>
                            
        </div>
    </div>
</details>
<details>
    <summary>
       Special RCS 
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Paid Special RCS</h2>
                <div class="basic-form">

                    <form class="form-valide" action=" " method="post" enctype="multipart/form-data">
                        @csrf
                          <table class="table table-striped table-inverse table-responsive" style="border: 1px solid black">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Special RCS Type</th>
                                    <th><a class="btn mb-1 btn-success" style="margin-top: 30%" onclick="create_tr('table_id_special_rcs')" ><i class="fa fa-plus"></i></a></th>
                                </tr>
                                </thead>
                                <tbody id="table_id_special_rcs">
                                    <tr>
                                        <td><input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Special RCS Type" name="degree[]" ></td>
                                        
                                        <td><a class="btn mb-1 btn-danger" style="margin-top: 10%; color:white" onclick="remove_tr(this)" ><i class="fa fa-close"></i></a></td>
                                        
                                    </tr>
                                </tbody>
                        </table>
                        <button type="submit" class="btn mb-1 btn-success" name="MemberEducation" id ="MemberEducation"  >special rcs save</button> 
                    </form>  
                        
                </div>
              
            </div>
                            
        </div>
    </div>
</details>
<details>
<summary>
    Member Club Fund Amount
</summary>
<div class="col-lg-12">
    <h6></h6>
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Member Club fund Amount</h2>
            <div class="basic-form">
                <form class="form-valide" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h6><b>AD</b></h6>
                            <input style="border: .01px solid #969393;" type="number" class="form-control input-default" placeholder="Member paid AD" name="member_ad" >
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>RCS</b></h6>
                            <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member paid RCS" name="member_rcs">
                        </div>    
                        
                        <div class="form-group col-md-6">
                            <h6><b>Special RCS</b></h6>
                            <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member Pais Special RCS" name="member_special_rcs">
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Donation</b></h6>
                            <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member paid Donation" name="member_donation">
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Name Value</b></h6>
                            <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member Name Value" name="member_name_value">
                        </div>
                        <div class="form-group col-md-6">
                            <h6><b>Activities</b></h6>
                            <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member Activities" name="member_activities">
                        </div>
                        
                        
                    </div>
                    <button type="submit" class="btn mb-1 btn-success" name="MemberProfession" id ="MemberProfession"  >Club Fund Save</button>    
                </form>
                

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <h6><b>AD</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control input-default" placeholder="Member paid AD" name="member_ad" >
                            </div>
                            <div class="form-group col-md-3">
                                <h6><b>Name Value</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member Name Value" name="member_name_value">
                            </div>
                            <div class="form-group col-md-3">
                                <h6><b>Activities Value</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member Activities" name="member_activities">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <h6><b>RCS</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member paid RCS" name="member_rcs">
                            </div>    
                            <div class="form-group col-md-4">
                                <h6><b>Point</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member paid RCS" name="member_rcs">
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <h6><b>Special RCS</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member Pais Special RCS" name="member_special_rcs">
                            </div>
                            <div class="form-group col-md-4">
                                <h6><b>Point</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member Pais Special RCS" name="member_special_rcs">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <h6><b>Donation</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member paid Donation" name="member_donation">
                            </div>
                          
                            <div class="form-group col-md-4">
                                <h6><b>Point</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member paid Donation" name="member_donation">
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <h6><b>Invesment</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member paid Donation" name="member_donation">
                            </div>
                          
                            <div class="form-group col-md-4">
                                <h6><b>Point</b></h6>
                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Member paid Donation" name="member_donation">
                            </div>
                        </div>
                        <button type="submit" class="btn mb-1 btn-success" name="MemberProfession" id ="MemberProfession"  >Club Fund Save</button>    
                    </form>
                  
                </div>

            </div>
        </div>
    </div>
</div>
</details>

  <details>
    <summary>
        Member Reference's Club Fund Total Amount
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Member Reference's Club Fund Total Amount</h2>
                <div class="basic-form">
                    <form class="form-valide" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h6><b>AD</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder="Member_ref paid AD" name="member_ref_ad" >
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>RCS</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member_ref paid RCS" name="member_ref_rcs">
                            </div>    
                            
                            <div class="form-group col-md-6">
                                <h6><b>Special RCS</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member_ref Pais Special RCS" name="member_ref_special_rcs">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Donation</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member_ref paid Donation" name="member_ref_donation">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Name Value</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member_ref Name Value" name="member_ref_name_value">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Activities</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member_ref Activities" name="member_ref_activities">
                            </div>
                            
                            
                        </div>
                        <button type="submit" class="btn mb-1 btn-success" name="MemberProfession" id ="MemberProfession"  >Reference Club Fund Save</button>    
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
 </details>
  
 <details>
    <summary>
        Member Given Time Value For Community Build
    </summary>
    <div class="col-lg-12">
        <h6></h6>
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Member Given Time Value For Community Build</h2>
                <div class="basic-form">
                    <form class="mt-5 mb-5 login-input" method="post" action="">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h6><b>Member Given Time</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Given Time" name="member_given_time">
                            </div>
                            <div class="form-group col-md-6">
                                <h6><b>Member Asume Salary</b></h6>
                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Asume Salary" name="member_asume_salary">
                            </div>    

                        </div>    
                        <button type="submit" class="btn mb-1 btn-success" name="build_value_insert" id ="build_value_insert"  >Build Value Save</button>
                     
                            
                          
                    </form>
                </div>
            </div>
        </div>
    </div>
 </details>
</div>

@endif
@endsection



<script>
    var clicks = 0;

    function create_tr(table_id){
        //console.log(table_body);
        let table_body = document.getElementById(table_id);
        first_tr = table_body.firstElementChild
        tr_clone = first_tr.cloneNode(true);

        table_body.append(tr_clone);

        clean_first_tr(table_body.firstElementChild);
        //console.log(tr_clone);

    }
    function clean_first_tr(firstTr){
        let children = firstTr.children;
        
        children = Array.isArray(children) ? children : Object.values(children);
        //console.log(children);
        children.forEach(element => {
            if(element !== firstTr.lastElementChild){
                element.firstElementChild.value = '';
            }
        });
    }

    function remove_tr(This){
        
        //console.log(This.closest('tr'));
        if(This.closest('tbody').childElementCount == 1){
            alert("You Don't have Permission to Delete This.")
        }else{
        This.closest('tr').remove();
        }
    }
    

//   if(clicks==2){
//     var y = document.getElementById("2");
//     if (y.style.display === "none") {
//     y.style.display = "inline";
//   }
 
// }
// if(clicks==3){
//     var z= document.getElementById("3");
//     if (z.style.display === "none") {
//     z.style.display = "inline";
//   }
//   }





  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output1');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output2');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile3 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output3');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile4 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output4');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile5= function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output5');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile6 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output6');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  
// var clicks = 0;

// function rowAdd(){

//     clicks += 1;
  

//     for(var i = 0; i < clicks; i++){
//    // Change the content
    
 
//     document.getElementsByClassName('myDiv')[i].innerHTML=` <div class="row" id="addrow">
//                                     <div class="form-group col-md-2">
                                     
//                                         <input style="border: .01px solid #969393;" type="text" class="form-control"  name="degree[]" >
//                                     </div>
//                                     <div class="form-group col-md-2">
                                     
//                                         <input style="border: .01px solid #969393;" type="text" class="form-control" name="institute[]" >
//                                     </div>
//                                     <div class="form-group col-md-2">
                                    
//                                         <input style="border: .01px solid #969393;" type="text" class="form-control" name="result[]">
//                                     </div>
//                                     <div class="form-group col-md-2">
                                      
//                                         <input style="border: .01px solid #969393;" type="text" class="form-control" name="year[]" >
//                                     </div>

//                                 </div>`
//                             }
// }



    </script>