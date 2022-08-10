@extends('layouts.master') 
@section('main-content')

@section('title') {{'Member  Info.'}} @endsection
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a class="text-center">
                    <h4>Member Table</h4>
                </a>

              
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration"
                        id="Membertable">
                        <thead>
                            <tr>
                                <th>MemberID</th>
                                <th>MemberName</th>
                                <th>MemberMail</th>
                                <th>MobileNo</th>
                                <th>MobileNoAlt</th>
                                <th>MemberAddress</th>
                                <th>Area</th>
                                <th>Member Catagory</th>
                                <th>Member type</th>
                                <th>Member NID</th>
                                <th>Joining Date</th>
                                <th>AD</th>
                                <th>MSP</th>
                                <th>RCS</th>
                                <th>Ref ID</th>
                                <th>Remarks</th>
                                <th> Photo </th>
                                <th>Nid</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach ($data as $item )
                                
                  
                            <td>{{ $item->member_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>{{ $item->alt_mobile }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->area }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->nid }}</td>
                            <td>{{ $item->joining_date }}</td>
                            <td>{{ $item->ad }}</td>
                            <td>{{ $item->msp }}</td>
                            <td>{{ $item->rcs }}</td>
                            <td>{{ $item->reference_id }}</td>
                            <td>{{ $item->Remarks }}</td>
                     



                            <td> 
                               
                              
                                <button class="detail" data-toggle="modal" data-target="#myModal" data-id="{{ $item->id }}">  <img style="width: 50px;height:50px;"
                                    src="{{ @$item->a_photo ? url('/' . $item->a_photo) : url('a_photo/no-image.png') }}"
                                    alt=""></button>
                               
                            </td>
                      
                            <td>
                                 <button class="detail1" data-toggle="modal" data-target="#myModal1" n-id="{{ $item->id }}">  <img style="width: 50px;height:50px;"
                                    src="{{ @$item->a_nid ? url('/' . $item->a_nid) : url('a_nid/no-image.png') }}"
                                    alt=""></button>
                               
                                </td>
                            <td>
                                <a class="btn btn-danger btn-sm"
                                 href="{{ route('member-update',$item->id) }}">update</a>
                           
                              
                            </td>
                           
                        </tr>
                        
                        @endforeach
                        </tbody>
                      
                    </table>


                    <div class="modal" tabindex="-1" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                            
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <img id="member_photo"  style="width: 80%;height:70%;" />
                               
                              <p id="product-desc">
                               

                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal" tabindex="-1" id="myModal1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                            
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                
                                <img id="member_nid"  style="width: 80%;height:70%;" />
                              <p id="product-desc">
                               

                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                            </div>
                          </div>
                        </div>
                      </div>





                </div>
@isset($editData)
    

            <div class="card-body">
                <h6></h6>
                <h2 class="text-center">Member Information</h2>
               <div class="form-validation">
                    <form class="form-valide" action="{{ route('update-member',$editData->id) }}" method="post" enctype="multipart/form-data" >
                    @csrf
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Member ID </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member ID" name="member_id" value="{{ $editData->member_id }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label" for="val-username"><b>Member Name </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-username" name="name" value="{{ $editData->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label" for="val-email"><b>Email </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-email" name="email"  value="{{ $editData->email }}">
                            </div>
                        </div>

                      

                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Mobile Number </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="mobile"  value="{{ $editData->mobile }}">
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Mobile Number Alternative
                            </b></h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control"  name="alt_mobile"  value="{{ $editData->alt_mobile }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Member Address </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control"   name="address"  value="{{ $editData->address }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Area</b> <span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control"  name="area"  value="{{ $editData->area }}">
                            </div>
                        </div>
                         
                      
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label" ><b>Member Catagory </b><span class="text-danger"></span>
                            </h6>
                            <div class="col-lg-6">
                                <select style="border: .01px solid #969393;" class="form-control"  name="category"  value="{{ $editData->category }}">
                                    <option  value="{{ $editData->category }}">{{ $editData->category }}</option>
                                    <option value="Sponser_Member">Sponser Member</option>
                                    <option value="Platinum_Member">Platinum Member</option>
                                    <option value="Gold_Member">Gold Member</option>
                                    <option value="Silver_Member">Silver Member</option>
                                    <option value="Bronze_Member">Bronze Member</option>
                                    <option value="Corporate_Member">Corporate Member</option>
                                    <option value="Senior_Member">Senior Member</option>
                                    <option value="Junior_Member">Junior Member</option>
                                    <option value="Intern_Associate">Intern Associate</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label" ><b>Member Type </b><span class="text-danger"></span>
                            </h6>
                            <div class="col-lg-6">
                                <select style="border: .01px solid #969393;" class="form-control"  name="type" >
                                    <option value="{{ $editData->type }}">{{ $editData->type }}</option>
                                    <option value="Genarel">Genarel Member</option>
                                    <option value="Associate">Associate Member</option>
                                    <option value="Student">Student</option>
                                    <option value="NUll">Null</option>
                                    <option value="NUll">Null</option>
                                    <option value="NUll">Null</option>
                                    <option value="NUll">Null</option>
                                    <option value="NUll">Null</option>
                                    <option value="Intern">Intern </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label" for="val-digits"><b>NID </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-digits" name="nid" value="{{ $editData->nid }}">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Joining Date </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="date" class="form-control"  placeholder="Joining Date .." name="joining_date" value="{{ $editData->joining_date }}" >
                            </div>
                        </div>
                         <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b> Asset Deposit </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="ADtobePaid" name="ad"  value="{{ $editData->ad }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> <b>Membership Status Point</b>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="MSP" name="msp" value="{{ $editData->msp }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Monthly Running Cost Share </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="rcs"  value="{{ $editData->rcs }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Reference Member ID </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="reference_id" value="{{ $editData->reference_id }}">
                            </div>
                        </div>

                    
                       <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"><b>Remarks </b><span class="text-danger">*</span>
                            </h6>
                            <div class="col-lg-6">
                                <textarea style="border: .01px solid #969393;" class="form-control"  name="remarks" >{{ $editData->remarks }}</textarea>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (Photo)<span class="text-danger"></span>
                            </h6>
                            <img id="output"  style="width: 50px;height:50px;" src="{{  url('/' . $editData->a_photo) }}" />
                            <div class="col-lg-6">
                                
                                <input type="file" name="a_photo" class="form-control-file" accept="image/*" onchange="loadFile(event)" >
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (Hard copy Form)<span class="text-danger"></span>
                            </h6>
                            <img id="output1" style="width: 50px;height:50px;" src="{{  url('/' . $editData->a_form) }}"/>
                            <div class="col-lg-6">
                              
                                <input type="file" name="a_form" class="form-control-file"  accept="image/*" onchange="loadFile1(event)" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (NID)<span class="text-danger"></span>
                            </h6>
                            <img id="output2" style="width: 50px;height:50px;" src="{{  url('/' . $editData->a_nid) }}"/>
                            <div class="col-lg-6">
                                <input type="file" name="a_nid" class="form-control-file" accept="image/*" onchange="loadFile2(event)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (NOC)<span class="text-danger"></span>
                            </h6>
                            <img id="output3" style="width: 50px;height:50px;" src="{{  url('/' . $editData->a_noc) }}"/>
                            <div class="col-lg-6">
                                <input type="file" name="a_noc" class="form-control-file" accept="image/*" onchange="loadFile3(event)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-1)<span class="text-danger"></span>
                            </h6>
                            <img id="output4" style="width: 50px;height:50px;" src="{{  url('/' . $editData->a_certifacte_1) }}"/>
                            <div class="col-lg-6"> a_certifacte_1
                                <input type="file" name="a_certificate_1" class="form-control-file" accept="image/*" onchange="loadFile4(event)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-2)<span class="text-danger"></span>
                            </h6>
                            <img id="output5" style="width: 50px;height:50px;" src="{{  url('/' . $editData->a_certifacte_2) }}"/>
                            <div class="col-lg-6">
                                <input type="file" name="a_certificate_2"class="form-control-file" accept="image/*" onchange="loadFile5(event)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-3)<span class="text-danger"></span>
                            </h6>
                            <img id="output6" style="width: 50px;height:50px;" src="{{  url('/' . $editData->a_certifacte_3) }}"/>
                            <div class="col-lg-6">
                                <input type="file" name="a_certificate_3" class="form-control-file" accept="image/*" onchange="loadFile6(event)" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary" name="Member_Update">UPDATE</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        @endisset
    </div>
        </div>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


<script>
    $('#myModal').modal('hide');
    $(document).ready(function() {
      $('.detail').click(function() {
        const id = $(this).attr('data-id');
        $.ajax({
          url: 'member-detail/'+id,
          type: 'GET',
         
          data: {
            "id": id
          },
          success:function(data) {
            console.log(data);
            // $('#product-title').html(data.name);
            // $('#product-desc').html(data.member_id);
            $('#member_photo').attr('src', data.a_photo);
            //  $('#member_nid').attr('src', data.a_nid);
          }
        })
      
      });
    })


  
</script>

<script>
    $('#myModal1').modal('hide');
    $(document).ready(function() {
      $('.detail1').click(function() {
        const id = $(this).attr('n-id');
        $.ajax({
          url: 'member-detail/'+id,
          type: 'GET',
        
          data: {
            "id": id
          },
          success:function(data) {
            console.log(data);
            // $('#product-title').html(data.name);
            // $('#product-desc').html(data.member_id);
          
             $('#member_nid').attr('src', data.a_nid);
          }
        })
      
      });
    })


  
</script>


<script>


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
   

</script>
    <script>
        $(document).ready(function () {
            $("#Membertable").dataTable();
        });

    </script>
 
    <script>
        $(document).ready(function () {
            $("#Mpertable").dataTable();
        });

    </script>

    <script>
        $(document).ready(function() {
            $("#Mptable").dataTable();
        });

    </script>

</script>
