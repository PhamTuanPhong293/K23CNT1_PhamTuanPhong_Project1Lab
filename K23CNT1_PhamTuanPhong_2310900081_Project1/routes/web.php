<?php

use App\Http\Controllers\PTP_HOA_DONController;
use App\Http\Controllers\PTP_KHACH_HANGController;
use App\Http\Controllers\PTP_LOAI_SAN_PHAMController;
use App\Http\Controllers\PTP_QUAN_TRIController;
use App\Http\Controllers\PTP_SAN_PHAMController;
use App\Models\PTP_SAN_PHAM;
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

//view
// routes/web.php
Route::get('/ptp-admins/ptp-loai-san-pham/ptp-view/{id}', [PTP_LOAI_SAN_PHAMController::class, 'ptpView'])
        ->name('ptpadmins.ptploaisanpham.ptpview');

//sanpham
Route::get('/ptp-admins/ptp-san-pham',[PTP_SAN_PHAMController::class,'ptpList'])
        ->name('ptpadmins.ptpsanpham.ptplist');
Route::get('/ptp-admins/ptp-san-pham/ptp-create',[PTP_SAN_PHAMController::class,'ptpCreate'])
        ->name('ptpadmins.ptpsanpham.ptpcreate');
Route::post('/ptp-admins/ptp-san-pham/ptp-create',[PTP_SAN_PHAMController::class,'ptpCreateSubmit'])
        ->name('ptpadmins.ptpsanpham.ptpcreatesubmit');
Route::get('/ptp-admins/ptp-san-pham/ptp-edit/{id}',[PTP_SAN_PHAMController::class, 'ptpEdit'])
                ->name('ptpadmins.ptpsanpham.ptpedit');
Route::post('/ptp-admins/ptp-san-pham/ptp-edit/{id}',[PTP_SAN_PHAMController::class, 'ptpEditSubmit'])
                ->name('ptpadmins.ptpsanpham.ptpeditsubmit');
Route::get('/ptp-admins/ptp-san-pham/ptp-detail/{id}',[PTP_SAN_PHAMController::class, 'ptpDetail'])
                ->name('ptpadmins.ptpsanpham.ptp-detail');
Route::delete('/ptp-admins/ptp-san-pham/ptp-delete',[PTP_SAN_PHAMController::class, 'ptpDelete'])
                ->name('ptpadmins.ptpsanpham.ptpdelete');

//Hóa Đơn
Route::get('ptp-admins/ptp-hoa-don',[PTP_HOA_DONController::class, 'ptpList'])
                ->name('ptpadmins.ptphoadon.ptplist');
//khách hàng
Route::get('/ptp-admins/ptp-khack-hang', [PTP_KHACH_HANGController::class, 'ptpList'])
                ->name('ptpadmins.ptpkhachhang.ptplist');
// Create
Route::get('/ptp-admin/ptp-khack-hang/ptp-create', [PTP_KHACH_HANGController::class,'ptpCreate'])
                ->name('ptpadmins.ptpkhachhang.ptpcreate');
Route::post('/ptp-admin/ptp-khack-hang/ptp-create', [PTP_KHACH_HANGController::class,'ptpCreateSubmit'])
                ->name('ptpadmins.ptpkhachhang.ptpcreatesubmit');



