<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RcsController;

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