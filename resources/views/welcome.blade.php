<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Mirpur Club Login</title>
    <!-- Favicon icon -->
    <!--<link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">-->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



</head>

<body class="h-100">
   
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
  
    <div class=" text-center">
      
        <div class="row">
           
            <div class="col-8 ">
                <img src={{ asset('photo/login.jpg') }} 
                class="img-fluid loginClass" alt="..."
            
                >
            </div>
          
            <div class="col-4">
                <div class="col-xl-12 pt-5 mt-5">
                    <div class="form-input-content form-section">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center">
                                    <img  src={{ asset('photo/mcllogo.jpg') }} alt="">
                                    <h4>Login</h4>
                                </a>

                                <form class="mt-5 mb-5 login-input" action="{{ route('login-member') }}" method="post">
                                    @csrf
                                    <div class="col-lg-8">
                                        <select style="border: .01px solid #969393;" class="form-control"
                                            name="login_type" id="login_type">
                                            <option value="">Please select login type</option>
                                            <option value="employee">Employee</option>
                                            <option value="Member">Member</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100" name="login"type="submit">Sign
                                        In</button>
                                </form>
                                <!-- <p class="mt-5 login-form__footer">Member account? <a href="Member.php" class="text-primary">Sign Up</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Employee account? <a href="Employee-register.php" class="text-primary">Sign Up</a> </p>   -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
        </div>





    {{-- <div class="login-form-bg h-100 "
        style="background-image:url('{{ asset('photo/login.jpg') }}'); background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 600px;">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content form-section">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center">
                                    <h4>Mirpur Club Login</h4>
                                </a>

                                <form class="mt-5 mb-5 login-input" action="page-login.php" method="post">

                                    <div class="col-lg-6">
                                        <select style="border: .01px solid #969393;" class="form-control"
                                            name="login_type" id="login_type">
                                            <option value="">Please select login type</option>
                                            <option value="employee">Employee</option>
                                            <option value="Member">Member</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100" name="login"type="submit">Sign
                                        In</button>
                                </form>
                                <!-- <p class="mt-5 login-form__footer">Member account? <a href="Member.php" class="text-primary">Sign Up</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Employee account? <a href="Employee-register.php" class="text-primary">Sign Up</a> </p>   -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}





    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/gleek.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
</body>

</html>
