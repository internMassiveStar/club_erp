@extends('layouts.master')
@section('main-content')



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="text-center">
                                <h4> Cheque Details</h4>
                            </a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                    <thead>
                                        <tr>
                                            <th>Cheque No</th>
                                            <th>Member Id</th>
                                            <th>Member Name</th>
                                            <th>Bank Name</th>
                                            <th>AD or RCS</th>
                                            <th>Cheque Type</th>
                                            <th>Cheque Amount</th>
                                            <th>Cheque Receive Date</th>
                                            <th>Cheque Date</th>
                                            <th>Honored Date</th>
                                            <th>Dishonored Date</th>
                                            <th>Dishonored Cheque No</th>
                                            <th>Cheque In By</th>
                                            <th>Cheque Out By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cheque No</th>
                                            <th>Member Id</th>
                                            <th>Member Name</th>
                                            <th>Bank Name</th>
                                            <th>AD or RCS</th>
                                            <th>Cheque Type</th>
                                            <th>Cheque Amount</th>
                                            <th>Cheque Receive Date</th>
                                            <th>Cheque Date</th>
                                            <th>Honored Date</th>
                                            <th>Dishonored Date</th>
                                            <th>Dishonored Cheque No</th>
                                            <th>Cheque In By</th>
                                            <th>Cheque Out By</th>
                                            
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
            <!-- #/ container -->

        <div class="container-fluid">
            <!--**********************************
                        row-2
                ***********************************-->

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4>All Cheque </h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <!-- <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div> -->

                                </form>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="AllCheque">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span> 
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> Cheque In Process</h4>
                                </a>
                                <!-- <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control" placeholder=" Search" name="Search" id="Search" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"  name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn mb-1 btn-success" name="search"> Search </button>    
                                    </div>
                                    
                                 </form> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Chequeprocess">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                                <form class="mt-5 mb-5 login-input" method="post" action="server.php">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Account's Name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="val-username"
                                            placeholder="Account's Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email"> Carried Name<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="CarriedName"
                                            placeholder="Carried Name">
                                    </div>
                                </div>
                                <button type="submit" class="btn mb-1 btn-warning" name="Chequestatusupdate">
                                            UPDATE</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> Wait For Bank Approval Cheque</h4>
                                </a>
                                <!-- <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="bankApproval">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> Honored Cheque</h4>
                                </a>
                                <!-- <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="honoredCheque">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> Dishonored Cheque</h4>
                                </a>
                                <!-- <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="dishonoredCheque">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4>All Cheque Against Dishonored Cheque</h4>
                                </a>
                                <!-- <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="againstdishonoredCheque">
                                        <thead>
                                            <tr>
                                                <th>New Cheque Id</th>
                                                <th>New Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                                <th>Dishonored Cheque No</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>New Cheque Id</th>
                                                <th>New Cheque No</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                                <th>Dishonored Cheque No</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>



            <!-- #/ container -->
    
@endsection