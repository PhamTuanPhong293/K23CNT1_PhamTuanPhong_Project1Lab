<?php

namespace App\Http\Controllers;

use App\Models\PTP_LOAI_SAN_PHAM;
use Illuminate\Http\Request;

class PTP_LOAI_SAN_PHAMController extends Controller
{
    //admins

    //list
    public function ptpList(){
        $ptpLoaiSanPhams = PTP_LOAI_SAN_PHAM::all();
        return view('ptpAdmins.ptpLoaiSanPham.ptp-List', ['ptpLoaiSanPhams'=> $ptpLoaiSanPhams]);
    }

    #create
    public function ptpCreate(Request $request){
        return view('ptpAdmins.ptpLoaiSanPham.ptp-create');
    }
    //crt submit
    public function ptpCreateSubmit(Request $request){

        $validationDate = $request->validate([
            'ptpMaLoai'=> 'required|unique',
            'ptpTenLoai'=> 'required|unique',
        ]);

        $ptpLoaiSanPhan = new PTP_LOAI_SAN_PHAM;
        $ptpLoaiSanPhan->ptpMaLoai = $request->ptpMaLoai;
        $ptpLoaiSanPhan->ptpTenLoai = $request->ptpTenLoai;
        $ptpLoaiSanPhan->ptpTrangThai = $request->ptpTrangThai;

        $ptpLoaiSanPhan->save();

        return redirect()->route('ptpadmins.ptploaisanpham');
    }

    public function ptpEdit($id){
        $ptpLoaiSanPhams = PTP_LOAI_SAN_PHAM::find($id);
        return view('ptpAdmins.ptpLoaiSanPham.ptp-edit',['ptpLoaiSanPham'=> $ptpLoaiSanPhams]);
    }
    //ed sbm
    public function ptpEditSubmit(Request $request){
        $ptpLoaiSanPham = PTP_LOAI_SAN_PHAM::find($request->id);
        $ptpLoaiSanPham->ptpMaLoai = $request->ptpMaLoai;
        $ptpLoaiSanPham->ptpTenLoai = $request->ptpTenLoai;
        $ptpLoaiSanPham->ptpTrangThai = $request->ptpTrangThai;

        $ptpLoaiSanPham->save();

        return redirect()->route('ptpadmins.ptploaisanpham');
    }
    //delete
    public function ptpDelete($id){
    $ptpLoaiSanPham = PTP_LOAI_SAN_PHAM::find($id);
    $ptpLoaiSanPham->delete();
    }
    //view
    public function ptpView($id)
{
    $ptpLoaiSanPham = PTP_LOAI_SAN_PHAM::find($id);

    if (!$ptpLoaiSanPham) {
        abort(404); // Xử lý nếu không tìm thấy
    }

    return view('ptpAdmins.ptpLoaiSanPham.ptp-view', compact('ptpLoaiSanPham'));
}
}
