<?php

use App\Http\Controllers\PtpKhoaController;
use App\Http\Controllers\PtpMonHocController;
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
Route::get('/khoas',[PtpKhoaController::class,'ptpGetAllKhoa'])->name('ptpkhoa.ptpgetallkhoa');
Route::get('/khoas/detail/{makh}',
        [PtpKhoaController::class,'ptpGetKhoa'])->name('ptpkhoa.ptpgetKhoa');
Route::get('/khoas/edit/{makh}',
        [PtpKhoaController::class,'ptpEdit'])->name('ptpkhoa.ptpEdit');
Route::post('/khoas/edit/',
        [PtpKhoaController::class,'ptpEditSubmit'])->name('ptpkhoa.ptpEditSubmit');
Route::get('/khoas/delete/{makh}',[PtpKhoaController::class,'ptpDelete'])->name('ptpkhoa.ptpDelete');
Route::get('/khoas/insert',[PtpKhoaController::class,'ptpInsert'])->name('ptpkhoa.ptpInsert');
Route::post('/khoas/insert',[PtpKhoaController::class,'ptpInsertSubmit'])->name('ptpkhoa.ptpInsertSubmit');


//MonHoc
Route::get('/monhocs',
        [PtpMonHocController::class,'ptpList'])->name('ptpmonhoc.ptpList');
Route::get('/monhocs/delete/{mamh}',[PtpMonHocController::class,'ptpDelete'])->name('ptpmonhoc.ptpDelete');
Route::get('/monhocs/edit/{mamh}',
        [PtpMonHocController::class,'ptpEdit'])->name('ptpmonhoc.ptpEdit');
Route::post('/monhocs/edit/',
        [PtpMonHocController::class,'ptpEditSubmit'])->name('ptpmonhoc.ptpEditSubmit');
Route::get('/monhocs/detail/{mamh}',
        [PtpMonHocController::class,'ptpGetMonHoc'])->name('ptpmonhoc.ptpGetMonHoc');
Route::get('/monhocs/insert',
        [PtpMonHocController::class,'ptpInsert'])->name('ptpmonhoc.ptpInsert');
Route::post('/monhocs/insert',
        [PtpMonHocController::class,'ptpInsertSubmit'])->name('ptpmonhoc.ptpInsertSubmit');