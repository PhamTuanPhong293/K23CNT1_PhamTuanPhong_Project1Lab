<?php

use App\Http\Controllers\PtpAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ptpLoginController;
use App\Http\Controllers\PtpSessionController;

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
Route::get('/login', [ptpLoginController::class, 'ptpIndex'])->name('login.form');
Route::post('/login', [ptpLoginController::class, 'ptpLogin'])->name('login.submit');
Route::get('/ptp-session/get', [PtpSessionController::class, 'PtpSessionData'])->name('ptpsession.get');
Route::get('/ptp-session/set', [PtpSessionController::class, 'ptpStoreSessionData'])->name('ptpsession.get');
Route::get('/ptp-session/delete', [PtpSessionController::class, 'ptpDeleteSessionData'])->name('ptpsession.get');
Route::get('/ptp-login', [PtpAccountController::class, 'ptplogin'])->name('ptpaccount.ptplogin');
Route::get('/ptp-logout', [PtpAccountController::class, 'ptpLogout'])->name('ptpaccount.ptpLogout');
Route::post('/ptp-login', [PtpAccountController::class, 'ptpLoginSubmit'])->name('ptpaccount.ptpLoginSubmit');