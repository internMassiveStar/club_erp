@extends('layouts.master') 
@section('main-content')
<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="change_password.php"> <h4>Update Your Password</h4></a>
    
                            <form class="mt-5 mb-5 login-input" action= "change_password.php" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="oldpassword" class="form-control" placeholder="Old Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="newpassword" class="form-control" placeholder="New Password">
                                </div>
                                <button class="btn login-form__btn submit w-100" name="pass_update"type="submit">Update</button>
                            </form>
                         

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection