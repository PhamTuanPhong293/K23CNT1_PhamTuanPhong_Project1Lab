<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PTP_QUAN_TRIController extends Controller
{
    public function ptpLogin(){
        return view('PtpLogin.ptp-login');
    }

    public function ptpLoginSubmit(Request $request){
        return view('PtpLogin.ptp-login');
    }
}
