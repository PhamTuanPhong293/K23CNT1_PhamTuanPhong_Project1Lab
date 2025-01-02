<?php

use App\Http\Controllers\PTP_CT_HOA_DONController;
use App\Http\Controllers\PTP_HOA_DONController;
use App\Http\Controllers\PTP_KHACH_HANGController;
use App\Http\Controllers\PTP_LOAI_SAN_PHAMController;
use App\Http\Controllers\PTP_QUAN_TRIController;
use App\Http\Controllers\PTP_SAN_PHAMController;
use App\Http\Controllers\ptpAdminController;
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
Route::get('ptp-admins/ptp-hoa-don/ptp-detail/{id}', [PTP_HOA_DONController::class,'ptpDetail'])
                ->name('ptpadmins.ptphoadon.ptpdetail');
#create 
Route::get('ptp-admins/ptp-hoa-don/ptp-create',[PTP_HOA_DONController::class,'ptpCreate'])
->name('ptpadmins.ptphoadon.ptpcreate');
#create submit
Route::post('ptp-admins/ptp-hoa-don/ptp-create',[PTP_HOA_DONController::class,'ptpCreateSubmit'])
->name('ptpadmins.ptphoadon.ptpcreatesubmit');
#edit
Route::get('ptp-admins/ptp-hoa-don/ptp-edit/{id}', [PTP_HOA_DONController::class, 'ptpEdit'])
    ->name('ptpadmins.ptphoadon.ptp-edit');
#edit submit
Route::post('ptp-admins/ptp-hoa-don/ptp-edit/{id}', [PTP_HOA_DONController::class, 'ptpEditSubmit'])
    ->name('ptpadmins.ptphoadon.ptpeditsubmit');
#delete hoa đơn
Route::get('ptp-admins/ptp-hoa-don/ptp-delete/{id}',[PTP_HOA_DONController::class,'ptpDelete'])
        ->name('ptpadmins.ptphoadon.ptpdelete');



//khách hàng
Route::get('/ptp-admins/ptp-khack-hang', [PTP_KHACH_HANGController::class, 'ptpList'])
                ->name('ptpadmins.ptpkhachhang.ptplist');
Route::get('/ptp-admins/ptp-khack-hang/ptpedit/{id}', [PTP_KHACH_HANGController::class, 'ptpedit'])
                ->name('ptpadmins.ptpkhachhang.ptp-edit');
#edit submit
Route::post('/ptp-admins/ptp-khack-hang/ptpedit/{id}', [PTP_KHACH_HANGController::class, 'ptpeditsubmit'])
                ->name('ptpadmins.ptpkhachhang.ptpeditsubmit');
// Create
Route::get('/ptp-admins/ptp-khack-hang/ptp-create', [PTP_KHACH_HANGController::class,'ptpCreate'])
                ->name('ptpadmins.ptpkhachhang.ptpcreate');
Route::post('/ptp-admins/ptp-khack-hang/ptp-create', [PTP_KHACH_HANGController::class,'ptpCreateSubmit'])
                ->name('ptpadmins.ptpkhachhang.ptpcreatesubmit');

//CTHD
Route::get('/ptp-admins/ptp-ct-hoa-don', [PTP_CT_HOA_DONController::class, 'ptpList'])
->name('ptpadmins.ptpcthoadon.ptplist');

# Thêm mới
Route::get('/ptp-admins/ptp-ct-hoa-don/ptp-create', [PTP_CT_HOA_DONController::class, 'ptpCreate'])
->name('ptpadmins.ptpcthoadon.ptpcreate');

# Thêm mới submit
Route::post('/ptp-admins/ptp-ct-hoa-don/ptp-create', [PTP_CT_HOA_DONController::class, 'ptpCreateSubmit'])
->name('ptpadmins.ptpcthoadon.ptpcreatesubmit');

# Chi tiết
Route::get('/ptp-admins/ptp-ct-hoa-don/ptp-detail/{id}', [PTP_CT_HOA_DONController::class, 'ptpDetail'])
->name('ptpadmins.ptpcthoadon.ptpdetail');

# Edit
Route::get('/ptp-admins/ptp-ct-hoa-don/ptp-edit/{id}', [PTP_CT_HOA_DONController::class, 'ptpEdit'])
->name('ptpadmins.ptpcthoadon.ptpedit');

# Edit submit
Route::post('/ptp-admins/ptp-ct-hoa-don/ptp-edit/{id}', [PTP_CT_HOA_DONController::class, 'ptpEditSubmit'])
->name('ptpadmins.ptpcthoadon.ptpeditsubmit');

# Delete
Route::get('/ptp-admins/ptp-ct-hoa-don/ptp-delete/{id}', [PTP_CT_HOA_DONController::class, 'ptpDelete'])
->name('ptpadmins.ptpcthoadon.ptpdelete');


//quantriadmin
Route::get('/ptp-admins/ptp-admin',[ptpAdminController::class, 'ptpList'])
        ->name('ptpadmins.ptpadmin.ptplist');
Route::get('/ptp-admins/ptp-admin/ptp-view/{id}', [ptpAdminController::class, 'ptpView'])
        ->name('ptpadmins.ptpadmin.ptpview');
Route::get('/ptp-admins/ptp-admin/ptp-edit/{id}', [ptpAdminController::class, 'ptpEdit'])
        ->name('ptpadmins.ptpadmin.ptpedit');
Route::delete('/ptp-admins/ptp-admin/ptp-delete/{id}', [ptpAdminController::class, 'ptpDelete'])
        ->name('ptpadmins.ptpadmin.ptpdelete');

