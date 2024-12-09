<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PtpAccountController extends Controller
{
    public function ptpLogin(){
        return view("ptp-login");
    }
    public function ptpLoginSubmit(Request $request)
      {
          $validation = $request->validate([
              'ptpEmail' => 'required|email',
              'ptpPass' => 'required|min:6'
            ]);
            $ptpEmail = $request->input('ptpEmail');
            $ptpPass = $request->input('ptpPass');

            $ptpLoginSession = [
               'ptpEmail'=>$ptpEmail,
               'ptpPass'=>$ptpPass
           ];
            $ptp_json = json_encode($ptpLoginSession);

            if($ptpEmail == "ptp@gmail.com" && $ptpPass == "123456a@"){
                $request->session()->put('K23CNT1-PhamTuanPhong',$ptpEmail);
                return redirect('/');
            }
        return redirect()->back()->with('ptp-error','Lỗi đăng nhập');
     }

     public function ptpLogout(Request $request)
    {
        $request->session()->forget('K23CNT1_PhamTuanPhong');
        $request->session()->flush();
        return redirect('/');
    }
}
