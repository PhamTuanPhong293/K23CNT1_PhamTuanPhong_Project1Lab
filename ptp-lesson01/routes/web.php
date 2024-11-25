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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/greeting', function () {
    return "<h1>Hello,Pham Tuan Phong </h1>";
});

#Redirect
Route::redirect('/here', '/there');

Route::get('/there', function () {  
    return '<h1>Redirect: here to there</h1>';  
});

#Router return view
Route::get('/phong-pham', function () {
    return view('phongpham');
});

#Router parameter
Route::get('/devmaster/{id}', function ($id){
    return "<h1> Devmaster ".$id . "</h1>";
});

#Optional Parameters
Route::get('/dev/{name?}', function ($name ="Phong Phạm") {  
    return "<h1> Xin chào ".$name ."</h1>";  
});


Route::get('/ptp-account',[PtpAccountController ::class,'index'])->name('ptpAccount.index');

Route::get('/ptp-account-create',[PtpAccountController ::class,'create']);