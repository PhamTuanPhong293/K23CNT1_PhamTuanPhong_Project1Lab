<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PtpKhoaController extends Controller
{
    public function ptpGetAllKhoa(){
        $ptpKhoas = DB::select('Select * from ptpkhoa');
        return view('PtpKhoa.ptpList',['ptpKhoas'=> $ptpKhoas]);
    }
    public function ptpGetKhoa($makh)
    {
        $khoa = DB::select("Select * from ptpkhoa Where ptpmakh=?", [$makh])[0];
        return view('PtpKhoa.ptpDetail',['khoa'=> $khoa]);
    }
    public function ptpEdit($makh)
    {
        $khoa = DB::select("Select * from ptpkhoa Where ptpmakh=?", [$makh])[0];
        return view('PtpKhoa.ptpEdit',['khoa'=> $khoa]);
    }
    public function ptpEditSubmit(Request $request)
    {
        $makh = $request->input('PTPMAKH');
        $tenkh = $request->input('PTPTENKH');
        DB::update("UPDATE ptpkhoa SET PTPTENKH = ? WHERE PTPMAKH = ?", [$tenkh,$makh]);
        return redirect('/khoas');
    }
}
