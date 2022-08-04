@extends('layouts.master') 
@section('main-content')

  <div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100" style="margin-top:10%">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            
                                 <a class="text-center" href="index.php"> <h4>RCS Info</h4></a>
    
                            <form class="mt-5 mb-5 login-input" method="post" action="index.php">
                                <div class="form-group">
                                     <a><h4 class="card-title">RCSMonth</h4></a>
                                    <input type="month" class="form-control"  placeholder="RCSMonth" name="RCSMonth" required>
                                </div>
                            
                                
                                <button class="btn login-form__btn submit w-100" type="submit" name="RCS_Action">RCS_Action</button>
                            </form>
                                <!-- <p class="mt-5 login-form__footer">Have account <a href="page-login.html" class="text-primary"> Member login </a>  now</p>  -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection