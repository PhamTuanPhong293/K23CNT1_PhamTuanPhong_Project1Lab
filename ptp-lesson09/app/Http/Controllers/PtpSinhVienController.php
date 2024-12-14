<?php

namespace App\Http\Controllers;

use App\Models\PtpSinhVien;
use Illuminate\Http\Request;

class PtpSinhVienController extends Controller
{
    //
    public function ptpList()
    {
    $ptpSinhViens = PtpSinhVien::all();
    return view('PtpSinhVien.ptp-list',['PtpSinhViens'=> $ptpSinhViens]);
    }
    // Create (Insert)
    public function ptpCreate()
    {
        return view('PtpSinhVien.ptp-create');
    }
    public function ptpCreateSubmit(Request $request)
    {
        $ptpSinhVien = new PtpSinhVien();
        $ptpSinhVien->ptpMaSV = $request->ptpMaSV;
        $ptpSinhVien->ptpHoSV = $request->ptpHoSV;
        $ptpSinhVien->ptpTenSV = $request->ptpTenSV;
        $ptpSinhVien->ptpPhai = $request->ptpPhai;
        $ptpSinhVien->ptpNgaySinh = $request->ptpNgaySinh;
        $ptpSinhVien->ptpNoiSinh = $request->ptpNoiSinh;
        $ptpSinhVien->ptpMaKH = $request->ptpMaKH;
        //
        $ptpSinhVien->save();
        return back()->with('PtpSinhVien_created','Đã thêm mới một sinh viên thành công!');
    }
}
