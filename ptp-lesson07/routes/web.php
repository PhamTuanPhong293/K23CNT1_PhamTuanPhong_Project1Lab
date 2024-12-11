<?php

use App\Http\Controllers\PtpKhoaController;
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