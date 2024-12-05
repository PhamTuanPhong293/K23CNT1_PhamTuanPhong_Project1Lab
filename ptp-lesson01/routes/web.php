<?php

use App\Http\Controllers\PtpAccountController;
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

// Default welcome route
Route::get('/', function () {
    return view('welcome');
});

// Greeting route
Route::get('/greeting', function () {
    return "<h1>Hello, Pham Tuan Phong</h1>";
});

// Redirect route
Route::redirect('/here', '/there');

Route::get('/there', function () {
    return '<h1>Redirect: here to there</h1>';
});

// Route returning a view
Route::get('/phong-pham', function () {
    return view('phongpham'); // Ensure the 'phongpham' view exists
});

// Route with parameter
Route::get('/devmaster/{id}', function ($id) {
    return "<h1> Devmaster " . $id . "</h1>";
});

// Route with optional parameter
Route::get('/dev/{name?}', function ($name = "Phong Phạm") {
    return "<h1> Xin chào " . $name . "</h1>";
});

// Routes for PtpAccountController
Route::get('/ptp-account', [PtpAccountController::class, 'index'])->name('ptpAccount.index');
Route::get('/ptp-account-create', [PtpAccountController::class, 'create'])->name('ptpAccount.create');
Route::get('/ptp-account-show-data', [PtpAccountController::class, 'ptpShowData'])->name('ptpAccount.ptpShowData');
Route::get('/ptp-account-list-data', [PtpAccountController::class, 'ptpList'])->name('ptpAccount.ptpList');
Route::get('/ptp-account-list', [PtpAccountController::class, 'ptpGetAll'])->name('ptpAccount.ptpGetAll');

#Views
Route::get('/ptp-view1',function(){
    return view('ptp-view1',['name'=>'K23CNT1 - Project 1 - Phong Pham']);
});
Route::get('/ptp-view2',function(){
    return view('ptp-view2',[
                'name' =>'K23CNT1 - Project 1 - Phong Pham',
                'array' => [1,3,2,6,9]
            ]);
});
Route::get('/ptp-view3',function(){
    return view('ptp-view3',[
                'name'  =>["Phong","Pham","Tuan"],
                'arr'   => [12,22,21,33,55,35],
                'users' =>[]
            ]);
});
// Route::get('/test', function () {
//     return view('test');
// });
Route::get('/test',[PtpAccountController::class,'ptpIndex']);