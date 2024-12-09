<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PtpSessionController extends Controller
{
    #Đọc dữ liệu từ session
    public function PtpSessionData(Request $request)
    {
        if($request->session()->has("K23CNT1_PhamTuanPhong"))
        {
         echo "<h2> Session Data". $request->session()->get("K23CNT1_PhamTuanPhong");
        }
        else
        {
        echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }
    #Lưu dữ liệu vào session
    public function ptpStoreSessionData(Request $request)
    {
        $request->session()->put('K23CNT1_PhamTuanPhong','K23CNT1 - PhamTuanPhong - 2310900081');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }
    #Xóa dữ liệu trong session
    public function ptpDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT1_PhamTuanPhong');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }
}