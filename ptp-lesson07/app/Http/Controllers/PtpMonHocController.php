<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PtpMonHocController extends Controller
{
    public function ptpList()
    {
        $ptpMonHocs = DB::table('ptpmonhoc')->get();
        return view('ptpMonHoc.ptpList',['ptpMonHocs'=> $ptpMonHocs]);
    }
    //delete
    public function ptpDelete($mamh)
    {
        $monhoc = DB::delete('delete from ptpmonhoc where PTPMAMH =?',[$mamh]);
        return redirect('/monhocs');
    }
    //edit
    public function ptpEdit($mamh)
    {
        $monhoc = DB::select("Select * from ptpmonhoc Where ptpmamh=?", [$mamh])[0];
        return view('Ptpmonhoc.ptpEdit',['monhoc'=> $monhoc]);
    }
    //EditSubmit
    public function ptpEditSubmit(Request $request)
    {
        $mamh = $request->input('PTPMAMH');
        $tenmh = $request->input('PTPTENMH');
        DB::update("UPDATE ptpmonhoc SET PTPTENMH = ? WHERE PTPMAMH = ?", [$tenmh,$mamh]);
        return redirect('/monhocs');
    }
    //insert
    public function ptpInsert()
    {
        return view('ptpMonHoc.ptpInsert');
    }
    //submit insert
    public function ptpInsertSubmit(Request $request)
    {
            $validate = $request->validate([
                'PTPMAMH'=> 'required|max:3',
                'PTPTENMH'=> 'required|max:50',
            ],
            [
                'PTPMAMH.required' => 'Vui lòng nhập mã môn học.',
                'PTPMAMH.max' => 'Mã môn học tối đa 3 ký tự.',
                'PTPTENMH.required' => 'Vui lòng nhập tên môn học.',
                'PTPTENMH.max' => 'Tên môn học tối đa 50 ký tự.',
            ]
        );
        $mamh = $request->input('PTPMAMH');
        $tenmh = $request->input('PTPTENKH');
        DB::insert("INSERT INTO ptpmonhoc (PTPMAMH, PTPTENMH) VALUES (?, ?)", [$mamh, $tenmh]);

        return redirect("/monhocs");
    }
    public function ptpGetMonHoc($mamh)
    {
        $monhoc = DB::select("Select * from ptpmonhoc Where ptpmamh=?", [$mamh])[0];
        return view('Ptpmonhoc.ptpDetail',['monhoc'=> $monhoc]);
    }
}
