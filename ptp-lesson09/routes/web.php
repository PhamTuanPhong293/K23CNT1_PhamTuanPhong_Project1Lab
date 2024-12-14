<?php

use App\Http\Controllers\PtpSinhVienController;
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

//sinhvien-model
Route::get('/ptp-sinhviens',[PtpSinhVienController::class,'ptpList'])->name('PtpSinhVien.ptpList');
Route::get('/ptp-sinhviens/create',[PtpSinhVienController::class,'ptpCreate'])->name('PtpSinhVien.ptpCreate');
Route::post('/ptp-sinhviens/create',[PtpSinhVienController::class,'ptpCreateSubmit'])->name('PtpSinhVien.ptpCreateSubmit');
