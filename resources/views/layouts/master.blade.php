<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>MCL-ERP - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
        <link href="{{ asset('media/css/jquery.dataTables.min.css') }}" rel="stylesheet">
          <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/mcllogo.jpg') }}">
    <link href="{{ asset('media/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

      
      
    <script>
        $(document).ready(function () {
            $("#Membertable").dataTable();
        });

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
       
        
    </head>

    <body id="page-top">
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <div id="main-wrapper">
            <!-- Sidebar -->
            @include('layouts.header.header')
            <!-- Sidebar -->
      
             
                    <!-- TopBar -->
        
                    <!-- Topbar -->

                    <!-- Container Fluid-->
                    @include('layouts.sidebar.sidebar')
                    <div class="content-body">

                        <div class="container-fluid" style="padding-top: 10%">
                            @yield('main-content')
                       
                        </div>
                        <!-- #/ container -->
                       
                    </div>
                    @include('layouts.footer.footer')
                    <!---Container Fluid-->
        
           
                 
                <!-- Footer -->
                
         
            
        </div>


        <!-- Table Start Data print Module -->
    <script type="text/Javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('media/js/jquery.dataTables.min.js') }}"></script>
   
    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src=" {{ asset('js/custom.min.js') }} "></script>
    <script src=" {{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/gleek.js') }} "></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('./plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('./plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('./plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

   

   
     
    </body>
</html>
