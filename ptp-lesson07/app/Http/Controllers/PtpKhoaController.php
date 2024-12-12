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
    // delete -> $makh
    public function ptpDelete($makh)
    {
        $khoa = DB::delete('delete from ptpkhoa where PTPMAKH =?',[$makh]);
        return redirect('/khoas');
    }
    public function ptpInsert()
    {
        return view('PtpKhoa.ptpInsert');
    }
    public function ptpInsertSubmit(Request $request)
    {
            $validate = $request->validate([
                'PTPMAKH'=> 'required|max:10',
                'PTPTENKH'=> 'required|max:50',
            ],
            [
                'PTPMAKH.required' => 'Vui lòng nhập mã khoa.',
                'PTPMAKH.max' => 'Mã khoa tối đa 2 ký tự.',
                'PTPTENKH.required' => 'Vui lòng nhập tên khoa.',
                'PTPTENKH.max' => 'Tên khoa tối đa 50 ký tự.',
            ]
        );
        $makh = $request->input('PTPMAKH');
        $tenkh = $request->input('PTPTENKH');
        DB::insert("INSERT INTO ptpkhoa (PTPMAKH, PTPTENKH) VALUES (?, ?)", [$makh, $tenkh]);

        return redirect("/khoas");
    }
}
