<?php

use App\Http\Controllers\ChequeManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RcsController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\EmployeeController;
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



    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::group(['middleware' => ['MemberMiddleware']], function () {
    if(['middleware' => ['auth:employee']] || ['middleware' => ['auth:admin']]){
        Route::group([], function(){
       
          
            Route::get('/member-entry', [MemberController::class, 'memberEntry'])->name('member-entry');
            
            Route::get('/member-table', [MemberController::class, 'memberTable'])->name('member-table');
            Route::get('/Professional-information', [MemberController::class, 'professionalInfo'])->name('professional-info');
            Route::get('/update-profession/{id}', [MemberController::class, 'updateprofessionalInfo'])->name('update-profession');
            Route::post('/profession-update/{id}', [MemberController::class, 'professionalInfoUpdate'])->name('profession-update');

            Route::get('/personal-information', [MemberController::class, 'personalInfo'])->name('personal-info');
            Route::get('/update-personal/{id}', [MemberController::class, 'updatepersonalInfo'])->name('update-personal');
            Route::post('/personal-update/{id}', [MemberController::class, 'personalInfoUpdate'])->name('personal-update');

            Route::post('member-complete-entry',[MemberController::class,'memberCompleteEntry'])->name('member-complete-entry');
            Route::get('member-update/{id}',[MemberController::class,'memberUpdate'])->name('member-update');
            Route::post('update-member/{id}',[MemberController::class,'updateMember'])->name('update-member');

             //employee
                
             Route::get('/employee-register',[EmployeeController::class,'employeeRegister'])->name('employee-register');
             Route::post('/employee-register',[EmployeeController::class,'registerEmployee'])->name('register-employee');
             Route::get('/employee-update/{id}',[EmployeeController::class,'employeeUpdate'])->name('employee-update');
             Route::post('/update-employee/{id}',[EmployeeController::class,'updateEmployee'])->name('update-employee');

            //ad
            Route::get('/ad-operation',[AdController::class,'adOperationView'])->name('ad-operation');
          
            Route::post('/ad-operation',[AdController::class,'adOperationInsert'])->name('ad-operation');

              //rcs
              Route::get('/rcs-operation',[RcsController::class,'rcsOperationView'])->name('rcs-operation');
              Route::post('/rcs-operation',[RcsController::class,'rcsOperationInsert'])->name('operation-rcs');
              Route::get('/rcs-update/{id}',[RcsController::class,'rcsUpate'])->name('rcs-update');
              Route::post('/update-rcs/{id}',[RcsController::class,'updateRcs'])->name('update-rcs');

                //Total ad & rcs
                
                //Member personal Ad & Rcs cash & cheque details
            
               
                
               
                Route::get('/total-ad&rcs',[TotaladrcsController::class,'totalAdRcsView'])->name('total-ad&rcs');
            
                Route::get('/cheque-management',[ChequeManagementController::class,'chequeMangement'])->name('cheque-management');
                Route::get('/all-cheque',[ChequeManagementController::class,'allCheque'])->name('all-cheque');
                Route::get('/today-cheque',[ChequeManagementController::class,'todayCheque'])->name('today-cheque');
                Route::get('/tomorrow-cheque',[ChequeManagementController::class,'tomorrowCheque'])->name('tomorrow-cheque');
                Route::get('/searchbydate-cheque',[ChequeManagementController::class,'searchbydateCheque'])->name('searchbydate-cheque');
                Route::get('/searchbyadorrcsCheque-cheque',[ChequeManagementController::class,'searchbyadorrcsCheque'])->name('searchbyadorrcs-cheque');
                Route::get('/chequeQueue-cheque',[ChequeManagementController::class,'chequeQueue'])->name('chequeQueue-cheque');
                
               
           
         
                 Route::get('/change-password', [MemberController::class, 'changePassword'])->name('change-password');
                     
                //  Route::get('/ad-member_personal',[AdController::class,'memberAdView'])->name('ad-member_personal');
                //  Route::get('/rcs-member_personal',[RcsController::class,'memberRcsView'])->name('rcs-member_personal');
            
          });
    } 
    });

        Route::group(['middleware' => ['auth:member']], function(){
       
            Route::get('/change-password', [MemberController::class, 'changePassword'])->name('change-password');
            Route::get('/ad-member_personal',[AdController::class,'memberAdView'])->name('ad-member_personal');
            Route::get('/rcs-member_personal',[RcsController::class,'memberRcsView'])->name('rcs-member_personal');
          });
    


          Route::group(['middleware' => ['auth:admin']], function(){
          
            Route::get('/ad-member_personal',[AdController::class,'memberAdView'])->name('ad-member_personal');
            Route::get('/rcs-member_personal',[RcsController::class,'memberRcsView'])->name('rcs-member_personal');
            Route::get('/monthly-procedure',[RcsController::class,'monthlyProcedure'])->name('monthly-procedure');
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


  
   