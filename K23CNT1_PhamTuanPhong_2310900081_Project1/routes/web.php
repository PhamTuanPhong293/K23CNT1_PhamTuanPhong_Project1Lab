<?php

use App\Http\Controllers\PTP_QUAN_TRIController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins/ptp-login', [PTP_QUAN_TRIController::class, 'ptpLogin'])->name('admins.ptpLogin');
Route::post('/admins/ptp-login', [PTP_QUAN_TRIController::class, 'ptpLoginSubmit'])->name('admins.ptpLoginSubmit');
