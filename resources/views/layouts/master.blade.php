<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    
          <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
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

                        <div class="container-fluid">
                            @yield('main-content')
            
                        </div>
                        <!-- #/ container -->
                    </div>
                  
                    <!---Container Fluid-->
        
           
                 @include('layouts.footer.footer')
                <!-- Footer -->
                
         
            
        </div>


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

     Table Start Data print Module 
    <script type="text/Javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>


    <script type="text/Javascript" >
        $('#Membertable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', 'copy', 'csv'
        ]
    } );

    </script>
    <!-- Table End Data print Module -->
   
       {{-- <script type="text/Javascript" >
        $('#Mptable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', 'copy', 'csv'
        ]
    } );

    </script> --}}
    <!-- Table End Data print Module -->

        {{-- <script type="text/Javascript" >
        $('#Mpertable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print','copy', 'csv'
        ]
    } );

    </script> --}}
    <!-- Table End Data print Module -->
    <script>
    
        
        var table = document.getElementById("Membertable"),rIndex;
        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex);
              // echo (rIndex);
 
                document.getElementById("MemberID").value = this.cells[0].innerHTML;
                document.getElementById("val-username").value = this.cells[1].innerHTML;
                document.getElementById("val-email").value = this.cells[2].innerHTML;
                document.getElementById("MemberNumber").value = this.cells[3].innerHTML;
                document.getElementById("MobileNoAlt").value = this.cells[4].innerHTML;
                document.getElementById("MemberAddress").value = this.cells[5].innerHTML;
                document.getElementById("Area").value = this.cells[6].innerHTML;
                document.getElementById("MemberCatagory").value = this.cells[7].innerHTML;
                document.getElementById("MemberType").value = this.cells[8].innerHTML;
                document.getElementById("val-digits").value = this.cells[9].innerHTML;
                document.getElementById("joiningdate").value = this.cells[10].innerHTML;
                document.getElementById("ADtobePaid").value = this.cells[11].innerHTML;
                document.getElementById("MSP").value = this.cells[12].innerHTML;
                document.getElementById("MonthlyRCS").value = this.cells[13].innerHTML;
                document.getElementById("ReferenceMemberID").value = this.cells[14].innerHTML;
                document.getElementById("Remarks").value = this.cells[15].innerHTML;
                
              }
            }
        
        
    </script>
    {{-- <script>
        var table1 = document.getElementById("Mptable"), rIndex;
        for (var i = 1; i < table1.rows.length; i++) {
            table1.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("MemberIDs").value = this.cells[0].innerHTML;
                document.getElementById("val-username").value = this.cells[1].innerHTML;
                document.getElementById("MemberProfession").value = this.cells[2].innerHTML;
                document.getElementById("MemberDesignation").value = this.cells[3].innerHTML;
                document.getElementById("MemberOfficeName").value = this.cells[4].innerHTML;
                document.getElementById("MemberOfficeAddress").value = this.cells[5].innerHTML;
                document.getElementById("MemberEducationDegree-1").value = this.cells[6].innerHTML;
                document.getElementById("MemberEducationInstitute-1").value = this.cells[7].innerHTML;
                document.getElementById("MemberEducationResult-1").value = this.cells[8].innerHTML;
                document.getElementById("MemberEducationDegree-2").value = this.cells[9].innerHTML;
                document.getElementById("MemberEducationInstitute-2").value = this.cells[10].innerHTML;
                document.getElementById("MemberEducationResult-2").value = this.cells[11].innerHTML;
                document.getElementById("MemberEducationDegree-3").value = this.cells[12].innerHTML;
                document.getElementById("MemberEducationInstitute-3").value = this.cells[13].innerHTML;
                document.getElementById("MemberEducationResult-3").value = this.cells[14].innerHTML;
                document.getElementById("MemberEducationDegree-4").value = this.cells[15].innerHTML;
                document.getElementById("MemberEducationInstitute-4").value = this.cells[16].innerHTML;
                document.getElementById("MemberEducationResult-4").value = this.cells[17].innerHTML;
                document.getElementById("MemberEducationDegree-5").value = this.cells[18].innerHTML;
                document.getElementById("MemberEducationInstitute-5").value = this.cells[19].innerHTML;
                document.getElementById("MemberEducationResult-5").value = this.cells[20].innerHTML;
                
            }
        }
    
    </script>
    <script>
      
        var table2 = document.getElementById("Mpertable"), rIndex;
        for (var i = 1; i < table2.rows.length; i++) {
            table2.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("MemberIDss").value = this.cells[0].innerHTML;
                document.getElementById("MemberSpouseName").value = this.cells[2].innerHTML;
                document.getElementById("MemberFatherName").value = this.cells[3].innerHTML;
                document.getElementById("MemberMotherName").value = this.cells[4].innerHTML;
                document.getElementById("MemberChildrenName1").value = this.cells[5].innerHTML;
                document.getElementById("MemberChildrenName2").value = this.cells[6].innerHTML;
                document.getElementById("MemberChildrenName3").value = this.cells[7].innerHTML;
                document.getElementById("MemberDateOfBirth").value = this.cells[8].innerHTML;
                document.getElementById("MemberHomeDistrict").value = this.cells[9].innerHTML;
                
            }
        }
    
    </script> --}}

     
    </body>
</html>
