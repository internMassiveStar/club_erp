<?php

use App\Http\Controllers\ChequeManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RcsController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PinController;
use App\Http\Controllers\TotaladrcsController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('page');



Route::get('/logout', function () {
if(Auth::guard('member')->check()){
    Auth::guard('member')->logout();
 
       
    return redirect('/');
}else if(Auth::guard('admin')->check()){
    Auth::guard('admin')->logout();
 
       
    return redirect('/');
}else{
    Auth::guard('employee')->logout();
       
    return redirect('/');
}
   
 
 
})->name('logout');


Route::post('/login-member',[MemberController::class,'loginMember'])->name('login-member');






   
    Route::group(['middleware' => ['EmployeeMiddleware']], function () {
   
        
          
        Route::get('/member-entry', [MemberController::class, 'memberEntry'])->name('member-entry');
        Route::get('/member-entry-employee', [MemberController::class, 'memberEntryEmp'])->name('member-entry-emp');
        Route::post('/member-table-employee', [MemberController::class, 'membertableEmp'])->name('member-table-employee');
        Route::post('/member-personalInfo-table-employee', [MemberController::class, 'memberpersonaltableEmp'])->name('member-personalInfo-table-employee');
        Route::post('/member-educationInfo-table-employee', [MemberController::class, 'membereducationtableEmp'])->name('member-educationInfo-table-employee');
        
        Route::post('/member-professionalInfo-table-employee', [MemberController::class, 'memberprofessiontableEmp'])->name('member-professionalInfo-table-employee');

        Route::post('/member-entry-employee', [MemberController::class, 'memberEntryEmployee'])->name('member-entry-employee');

        Route::get('/member-table', [MemberController::class, 'memberTable'])->name('member-table');

        Route::get('/Professional-information', [MemberController::class, 'professionalInfo'])->name('professional-info');
        Route::post('/Professional-information', [MemberController::class, 'professionalInfoEntry'])->name('professional-info-entry');
        Route::get('/update-profession/{id}', [MemberController::class, 'updateprofessionalInfo'])->name('update-profession');
        Route::post('/profession-update/{id}', [MemberController::class, 'professionalInfoUpdate'])->name('profession-update');

        Route::get('/personal-information', [MemberController::class, 'personalInfo'])->name('personal-info');
        Route::post('/personal-information', [MemberController::class, 'personalInfoEntry'])->name('personal-info-entry');
        Route::get('/update-personal/{id}', [MemberController::class, 'updatepersonalInfo'])->name('update-personal');
        Route::post('/personal-update/{id}', [MemberController::class, 'personalInfoUpdate'])->name('personal-update');

        Route::get('/eduction-info', [MemberController::class, 'educationInfo'])->name('education-info');
        Route::post('/eduction-info-entry', [MemberController::class, 'educationInfoEntry'])->name('education-info-entry');
        Route::get('/update-education/{id}', [MemberController::class, 'updateEducation'])->name('update-education');
        Route::post('/education-update/{id}', [MemberController::class, 'educationUpdate'])->name('education-update');


        Route::post('member-complete-entry',[MemberController::class,'memberCompleteEntry'])->name('member-complete-entry');
        Route::get('member-update/{id}',[MemberController::class,'memberUpdate'])->name('member-update');
        Route::post('update-member/{id}',[MemberController::class,'updateMember'])->name('update-member');
        Route::get('member-detail/{id}',[MemberController::class,'memberDetail'])->name('member-detail');

        
              
        
        //employee

            
         Route::get('/employee-register',[EmployeeController::class,'employeeRegister'])->name('employee-register');
         Route::post('/employee-register',[EmployeeController::class,'registerEmployee'])->name('register-employee');
         Route::get('/employee-update/{id}',[EmployeeController::class,'employeeUpdate'])->name('employee-update');
         Route::post('/update-employee/{id}',[EmployeeController::class,'updateEmployee'])->name('update-employee');
         Route::get('/employee-detail/{id}',[EmployeeController::class,'employeeDetail']);
         Route::post('/employee-entry-employee',[EmployeeController::class,'employeeentryEmployee'])->name('employee-entry-employee');
         Route::post('/employee-table-employee',[EmployeeController::class,'employeetableEmployee'])->name('employee-table-employee');

        //ad
        Route::get('/ad-operation',[AdController::class,'adOperationView'])->name('ad-operation');
        Route::post('/ad-operation',[AdController::class,'adOperationInsert'])->name('ad-operation');  
        Route::get('/ad-confirm/{id}',[AdController::class,'adConfirm'])->name('ad-confirm');
        Route::post('/ad-operation-employee',[AdController::class,'adoperationEmployee'])->name('ad-operation-employee');
        Route::post('/ad-operation-table',[AdController::class,'adOperationTable'])->name('ad-operation-table');


        Route::get('/ad-operation/{id}',[AdController::class,'adOperationEdit'])->name('ad-operationEdit');  
        Route::post('/ad-operation/{id}',[AdController::class,'adOperationUpdate'])->name('ad-operationUpdate'); 

          //rcs
          Route::get('/rcs-operation',[RcsController::class,'rcsOperationView'])->name('rcs-operation');

          Route::post('/rcs-operation',[RcsController::class,'rcsOperationInsert'])->name('operation-rcs');
          Route::get('/rcs-confirm/{id}',[RcsController::class,'rcsConfirm'])->name('rcs-confirm');

          Route::get('/rcs-update/{id}',[RcsController::class,'rcsUpdate'])->name('rcs-update');
          Route::post('/update-rcs/{id}',[RcsController::class,'updateRcs'])->name('update-rcs');
          Route::post('/rcs-operation-employee',[RcsController::class,'rcsoperationEmployee'])->name('rcs-operation-employee');
          Route::post('/rcs-operation-table',[RcsController::class,'rcsoperationTable'])->name('rcs-operation-table');

            
        //Total ad & rcs
        Route::get('/total-ad&rcs',[TotaladrcsController::class,'totalAdRcsView'])->name('total-ad&rcs');
        Route::post('/total-ad-rcs-employee',[TotaladrcsController::class,'totalAdRcsViewEmployee'])->name('total-ad-rcs-employee');
        Route::post('/old-total-ad&rcs-employee',[TotaladrcsController::class,'oldtotalAdRcsViewEmployee'])->name('old-total-ad&rcs-employee');
        Route::post('/old-total-ad&rcs-employee-table',[TotaladrcsController::class,'oldtotalAdRcsTableEmployee'])->name('old-total-ad&rcs-employee-table');

        Route::get('/old-total-ad&rcs',[TotaladrcsController::class,'oldtotalAdRcsView'])->name('old-total-ad&rcs');
        Route::post('/old-ad&rcs-insert',[TotaladrcsController::class,'oldtotalAdRcsInsert'])->name('old-ad&rcs-insert');
        Route::get('/old-ad&rcs-update/{id}',[TotaladrcsController::class,'oldtotalAdRcsUpdateView'])->name('old-ad&rcs-update');
        Route::post('/old-ad&rcs-update-employee/{id}',[TotaladrcsController::class,'oldtotalAdRcsUpdate'])->name('old-ad&rcs-update-employee');

     
        
        //Cheque management    
        Route::get('/cheque-management',[ChequeManagementController::class,'chequeMangement'])->name('cheque-management');
        Route::post('/cheque-management-employee',[ChequeManagementController::class,'chequeMangementEmployee'])->name('cheque-management-employee');
        Route::post('/cheque-management-table',[ChequeManagementController::class,'chequeMangementTable'])->name('cheque-management-table');

        Route::post('/cheque-management',[ChequeManagementController::class,'chequeMangementInsert'])->name('cheque-management');
        Route::get('/cheque-management/{id}',[ChequeManagementController::class,'chequeMangementEdit'])->name('cheque-managementEdit');
        Route::post('/cheque-management/{id}',[ChequeManagementController::class,'chequeMangementUpdate'])->name('cheque-managementUpdate');
        Route::get('/cheque-detail/{id}',[ChequeManagementController::class,'chequeDetail']);
        Route::get('/all-cheque',[ChequeManagementController::class,'allCheque'])->name('all-cheque');
        Route::post('/all-cheque-employee',[ChequeManagementController::class,'allChequeEmployee'])->name('all-cheque-employee');
        Route::post('/today-cheque-employee',[ChequeManagementController::class,'todayChequeEmployee'])->name('today-cheque-employee');
        Route::post('/tomorrow-cheque-employee',[ChequeManagementController::class,'tomorrowChequeEmployee'])->name('tomorrow-cheque-employee');
        Route::post('/searchBydate-cheque-employee',[ChequeManagementController::class,'searchBydateChequeEmployee'])->name('searchBydate-cheque-employee');
        Route::post('/adrcs-cheque-employee',[ChequeManagementController::class,'adrcsChequeEmployee'])->name('adrcs-cheque-employee');



        Route::get('/today-cheque',[ChequeManagementController::class,'todayCheque'])->name('today-cheque');
        Route::get('/tomorrow-cheque',[ChequeManagementController::class,'tomorrowCheque'])->name('tomorrow-cheque');
        Route::get('/searchbydate-cheque',[ChequeManagementController::class,'searchbydateCheque'])->name('searchbydate-cheque');
        Route::get('/searchbyadorrcsCheque-cheque',[ChequeManagementController::class,'searchbyadorrcsCheque'])->name('searchbyadorrcs-cheque');
        
        //Cheque Queue
        Route::get('/chequeQueue-cheque',[ChequeManagementController::class,'chequeQueue'])->name('chequeQueue-cheque');
        Route::get('/chequeQueueProcess-cheque/{id}',[ChequeManagementController::class,'chequeQueueProcess'])->name('chequeQueueProcess-cheque');
        Route::post('/chequeQueueUpdate-cheque',[ChequeManagementController::class,'chequeQueueUpdate'])->name('chequeQueueUpdate-cheque');
            
          
            
     
            //  Route::get('/change-password', [MemberController::class, 'changePassword'])->name('change-password');
            //  Route::post('/password-change', [MemberController::class, 'passwordChange'])->name('password-change');  

            //  Route::get('/ad-member_personal',[AdController::class,'memberAdView'])->name('ad-member_personal');
            //  Route::get('/rcs-member_personal',[RcsController::class,'memberRcsView'])->name('rcs-member_personal');
        


});








    Route::group(['middleware' => ['MemberMiddleware']], function () {
      
        Route::get('/ad-member_personal',[AdController::class,'memberAdView'])->name('ad-member_personal');
        Route::get('/rcs-member_personal',[RcsController::class,'memberRcsView'])->name('rcs-member_personal');


        });


    
        Route::group(['middleware' => ['auth:admin']], function(){

        
            Route::get('/monthly-procedure',[TotaladrcsController::class,'monthlyProcedure'])->name('monthly-procedure');
            Route::get('/monthly-procedure-calculation',[TotaladrcsController::class,'monthlyProcedureCalculation'])->name('monthly-procedure-calculation');
            Route::get('/norcs',[TotaladrcsController::class,'noRcs'])->name('noRcs');
            Route::get('/norcs/{id}',[TotaladrcsController::class,'noRcs_active'])->name('noRcs_active');
            Route::get('/norcs-calculation/{id}',[TotaladrcsController::class,'noRcs_deactive'])->name('noRcs_deactive');
            Route::get('/set-pin',[PinController::class,'pinView'])->name('set-pin');
            Route::post('/generate-pin',[PinController::class,'generatePin'])->name('generate-pin');
            Route::get('/remove-pin/{id}',[PinController::class,'removePin'])->name('remove-pin');
            Route::get('/task',[PinController::class,'task'])->name('task');




        });


    
          
        Route::group(['middleware' => ['AllAcessMiddleware']], function(){
            
            
             Route::get('/dashboard', [TotaladrcsController::class, 'dashboardData'])->name('dashboard');
          
            Route::get('/change-password', [MemberController::class, 'changePassword'])->name('change-password');
            Route::post('/password-change', [MemberController::class, 'passwordChange'])->name('password-change');  
          });
 
 



    // Route::get('/change-password', [MemberController::class, 'changePassword'])->name('change-password');
         
    // Route::get('/ad-member_personal',[AdController::class,'memberAdView'])->name('ad-member_personal');
    // Route::get('/rcs-member_personal',[RcsController::class,'memberRcsView'])->name('rcs-member_personal');
    
    // //rcs
    // Route::get('/rcs-operation',[RcsController::class,'rcsOperationView'])->name('rcs-operation');
    
    
    // //cheque management
    
    // Route::get('/cheque-management',[ChequeManagementController::class,'chequeMangement'])->name('cheque-management');
    // Route::get('/all-cheque',[ChequeManagementController::class,'allCheque'])->name('all-cheque');
    // Route::get('/today-cheque',[ChequeManagementController::class,'todayCheque'])->name('today-cheque');
    // Route::get('/tomorrow-cheque',[ChequeManagementController::class,'tomorrowCheque'])->name('tomorrow-cheque');
    // Route::get('/searchbydate-cheque',[ChequeManagementController::class,'searchbydateCheque'])->name('searchbydate-cheque');
    // Route::get('/searchbyadorrcsCheque-cheque',[ChequeManagementController::class,'searchbyadorrcsCheque'])->name('searchbyadorrcs-cheque');
    // Route::get('/chequeQueue-cheque',[ChequeManagementController::class,'chequeQueue'])->name('chequeQueue-cheque');
    
    
    
    
    // //ad
    // Route::get('/ad-operation',[AdController::class,'adOperationView'])->name('ad-operation');
    // Route::post('/ad-operation',[AdController::class,'adOperationInsert'])->name('ad-operation');
    
    // //Total ad & rcs
    // Route::get('/total-ad&rcs',[TotaladrcsController::class,'totalAdRcsView'])->name('total-ad&rcs');
    
    //Member personal Ad & Rcs cash & cheque details


  
   