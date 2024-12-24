<?php

namespace App\Http\Controllers;

use App\Models\PTP_LOAI_SAN_PHAM;
use App\Models\PTP_SAN_PHAM;
use Illuminate\Http\Request;

class PTP_SAN_PHAMController extends Controller
{
    //

    public function ptpList()
    {
        $ptpSanPhams = PTP_SAN_PHAM::where('ptpTrangThai',0)->get();
        return view('ptpAdmins.ptpSanPham.ptp-list',['ptpSanPhams'=>$ptpSanPhams]);
    }

    public function ptpCreate()
    {
        $ptpLoaiSanPhams = PTP_LOAI_SAN_PHAM::all();
        return view('ptpAdmins.ptpSanPham.ptp-create',['ptpLoaiSanPhams'=>$ptpLoaiSanPhams]);
    }
    public function ptpCreateSubmit()
    {
        return redirect()->route('ptpadmins.ptpsanpham.ptplist');
    }
}
