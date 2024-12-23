<?php

use App\Http\Controllers\PTP_LOAI_SAN_PHAMController;
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

#admins
Route::get('/ptp-admins', function () {
    return view('ptpAdmins.index');

});

Route::get('/ptp-admins/ptp-loai-san-pham',[PTP_LOAI_SAN_PHAMController::class,'ptpList'])->name('ptpadmins.ptploaisanpham');
Route::get('/ptp-admins/ptp-loai-san-pham/ptp-create',[PTP_LOAI_SAN_PHAMController::class,'ptpCreate'])->name('ptpadmins.ptploaisanpham.ptpcreate');
Route::post('/ptp-admins/ptp-loai-san-pham/ptp-create',[PTP_LOAI_SAN_PHAMController::class,'ptpCreateSubmit'])->name('ptpadmins.ptploaisanpham.ptpcreatesubmit');
//edit
Route::get('/ptp-admins/ptp-loai-san-pham/ptp-edit/{id}',[PTP_LOAI_SAN_PHAMController::class,'ptpEdit'])
        ->name('ptpadmins.ptploaisanpham.ptpedit');
Route::post('/ptp-admins/ptp-loai-san-pham/ptp-edit',[PTP_LOAI_SAN_PHAMController::class,'ptpEditSubmit'])
        ->name('ptpadmins.ptploaisanpham.ptpeditsubmit');
//delete
Route::get('/ptp-admins/ptp-loai-san-pham/ptp-delete/{id}',[PTP_LOAI_SAN_PHAMController::class,'ptpDelete'])
        ->name('ptpadmins.ptploaisanpham.ptpdelete');

