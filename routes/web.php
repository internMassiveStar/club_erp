<?php

use App\Http\Controllers\ChequeManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RcsController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\TotaladrcsController;

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
});

Route::get('/sample', function () {
    return view('sample');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//member
Route::get('/member-entry', [MemberController::class, 'memberEntry'])->name('member-entry');
Route::get('/member-table', [MemberController::class, 'memberTable'])->name('member-table');

//rcs
Route::get('/rcs-operation',[RcsController::class,'rcsOperationView'])->name('rcs-operation');


//cheque management

Route::get('/cheque-management',[ChequeManagementController::class,'chequeMangement'])->name('cheque-management');
Route::get('/all-cheque',[ChequeManagementController::class,'allCheque'])->name('all-cheque');
Route::get('/today-cheque',[ChequeManagementController::class,'todayCheque'])->name('today-cheque');
Route::get('/tomorrow-cheque',[ChequeManagementController::class,'tomorrowCheque'])->name('tomorrow-cheque');
Route::get('/searchbydate-cheque',[ChequeManagementController::class,'searchbydateCheque'])->name('searchbydate-cheque');



//ad
Route::get('/ad-operation',[AdController::class,'adOperationView'])->name('ad-operation');

//Total ad & rcs
Route::get('/total-ad&rcs',[TotaladrcsController::class,'totalAdRcsView'])->name('total-ad&rcs');

//Member personal Ad & Rcs cash & cheque details

Route::get('/ad-member_personal',[AdController::class,'memberAdView'])->name('ad-member_personal');
Route::get('/rcs-member_personal',[RcsController::class,'memberRcsView'])->name('rcs-member_personal');