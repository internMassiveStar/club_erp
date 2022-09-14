
@extends('layouts.master')
@section('title') {{'Reports.'}} @endsection


@section('main-content')
@isset($flag)

<form class="mt-5 mb-5 login-input" method="post" action="{{ route('generate-reports') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-3">
            <h6><b>Member Id</b></h6>
            <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="Member Id" name="member_id" required>
        </div>
       

                                                
    </div>    
   <button type="submit" class="btn mb-1 btn-success" name="AdoptEntry">Generate Report</button>
</form>
@endisset


@isset($member)
    

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<style>
    #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
<div class="toolbar hidden-print">
    <div class="text-right">
        <button id="printInvoice" onclick="printDiv('invoice')" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
       
    </div>
    <hr>
</div>

<div id="invoice" >
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <img style="width: 150;height:100px; border-radius: 50%; float: left;"
                        src="{{ $member->a_photo ? url('/' . $member->a_photo) : url('a_photo/no-image.png') }}"
                        alt="">
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                          <a target="_blank" href="#">
                          {{ $member->name}}
                            </a>
                        </h2>
                        <div>{{ $member->email }}</div>
                        <div>{{ $member->mobile }}</div>
                        <div>{{ $member->address }}</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">Report from:</div>
                        <h2 class="to">Mirpur Club Ltd.</h2>
                       
                       
                    </div>
                    <div class="col invoice-details">
                        <h5 class="invoice-id">Report#2</h5>
                        <div class="date">Date of Report:{{ date('Y-m-d') }} </div>
                       
                    </div>
                </div>
              
              
                <table border="0" cellspacing="10" cellpadding="5">
                    <thead>
                        <tr>
                         
                            <th class="text-left">Ad</th>
                            <th class="text-right">Rcs</th>
                            <th class="text-right">Msp</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                  
                        <tr>
                          
                                
                        
                         
                            <td class="text-left"><h3>
                             {{ $member->ad }}
                            </td>
                            <td class="unit">{{ $member->rcs }}</td>
                            <td class="qty">{{ $member->msp }}</td>
                           
                        </tr>
                   
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Highest Msp</td>
                            <td>9.5</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Your Position</td>
                            <td>12th</td>
                        </tr>
                        
                    </tfoot>
                </table>
           
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">notice text goes here</div>
                </div>
            </main>
            <footer>
                Report was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
      
    </div>
</div>
@endisset          
@endsection

<script>
   
//    $('#printInvoice').click(function(){
//             Popup($('.invoice').outerHTML);
//             function Popup(data) 
//             {
//                 window.print();
//                 return true;
//             }
//         });

function printDiv(divName) {
  
     var printContents = document.getElementById(divName).innerHTML;
     var newWin = window.open('', '', 'height=650, width=650');
            newWin.document.write('');
            newWin.document.write('<title>Print Content of Div element by  using Javascript</title>');
            newWin.document.write(' <h1>Content of Div element: <br>');
            newWin.document.write(printContents);
            newWin.document.write('');
            newWin.document.close();
            newWin.print();
}

</script>
