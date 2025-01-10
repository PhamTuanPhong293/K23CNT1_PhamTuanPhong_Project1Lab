<?php

namespace App\Http\Controllers;

use App\Models\PTP_CT_HOA_DON;
use App\Models\PTP_HOA_DON;
use App\Models\PTP_KHACH_HANG;
use App\Models\PTP_SAN_PHAM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PTP_CT_HOA_DONController extends Controller
{
    public function ptpList()
    {
        $ptpcthoadons = PTP_CT_HOA_DON::all();
        return view('ptpadmins.ptpcthoadon.ptplist',['ptpcthoadons'=>$ptpcthoadons]);
    }
    
    public function show($sanPhamId)
{
    $sanPham = PTP_SAN_PHAM::find($sanPhamId);

    // Lấy Mã Khách Hàng từ session
    $userId = Session::get('ptpMaKhachHang');

    // Kiểm tra khách hàng tồn tại trong hệ thống
    $khachHang = PTP_KHACH_HANG::find($userId);

    // Truyền thông tin qua view
    return view('', [
        'sanPham' => $sanPham,
        'khachHang' => $khachHang, // Truyền thông tin khách hàng vào view
    ]);
}
    #insert
    public function ptpCreate()
    {
        // Lấy danh sách Hoa Don và San Pham để chọn
        $ptpHoaDon = PTP_HOA_DON::all();
        $ptpSanPham = PTP_SAN_PHAM::all();
    
        return view('ptpadmins.ptpcthoadon.ptpcreate', [
            'ptpHoaDon' => $ptpHoaDon,
            'ptpSanPham' => $ptpSanPham
        ]);
    }
    
    #insert submit
    public function ptpCreateSubmit(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'ptpHoaDonID' => 'required|exists:PTP_HOA_DON,id',
            'ptpSanPhamID' => 'required|exists:PTP_SAN_PHAM,id',
            'ptpSoLuongMua' => 'required',
            'ptpDonGiaMua' => 'required|numeric|min:0|max:9999999999.99',
            'ptpThaptpien' => 'nullable',
            'ptpTrangThai' => 'required|boolean',
        ]);
    
        // Tạo hóa đơn mới
        $CThoaDon = new PTP_CT_HOA_DON();
        $CThoaDon->ptpHoaDonID = $request->ptpHoaDonID;
        $CThoaDon->ptpSanPhamID = $request->ptpSanPhamID;
        $CThoaDon->ptpSoLuongMua = $request->ptpSoLuongMua;
        $CThoaDon->ptpDonGiaMua = $request->ptpDonGiaMua;
        $CThoaDon->ptpThaptpien = $request->ptpThaptpien;
        $CThoaDon->ptpTrangThai = $request->ptpTrangThai;
    
        // Lưu vào cơ sở dữ liệu
        $CThoaDon->save();
    
        return redirect()->route('ptpadmins.ptpcthoadon.ptplist')->with('success', 'Thêm hóa đơn thành công!');
    }
    
    #chi tiết
    public function ptpDetail($id)
    {
        // Truy vấn dữ liệu từ bảng ptp_HoaDon theo id
        $ptpCTHoaDon = PTP_CT_HOA_DON::find($id);
    
        // Nếu không tìm thấy Hoa Don
        if (!$ptpCTHoaDon) {
            return redirect()->route('ptpadmins.ptpcthoadon.ptplist')->with('error', 'Không tìm thấy Hoa Don.');
        }
    
        // Lấy danh sách loại ID Hoa Don
        $ptpIDHoaDon = PTP_HOA_DON::all();
        // Lấy danh sách loại ID San Pham
        $ptpIDSanPham = PTP_SAN_PHAM::all();
    
        // Trả về view với dữ liệu Hoa Don và loại Hoa Don
        return view('ptpadmins.ptpcthoadon.ptpdetail', compact('ptpCTHoaDon', 'ptpIDHoaDon', 'ptpIDSanPham'));
    }
    
    #edit
    public function ptpEdit($id)
    {
        // Truy vấn dữ liệu từ bảng ptp_HoaDon theo id
        $ptpCTHoaDon = PTP_CT_HOA_DON::find($id);
    
        // Nếu không tìm thấy Hoa Don
        if (!$ptpCTHoaDon) {
            return redirect()->route('ptpadmins.ptpcthoadon.ptplist')->with('error', 'Không tìm thấy Hoa Don.');
        }
    
        // Lấy danh sách loại ID Hoa Don
        $ptpHoaDon = PTP_HOA_DON::all();
        // Lấy danh sách loại ID San Pham
        $ptpSanPham = PTP_SAN_PHAM::all();
    
        // Trả về view với dữ liệu Hoa Don và loại Hoa Don
        return view('ptpadmins.ptpcthoadon.ptpedit', compact('ptpCTHoaDon', 'ptpHoaDon', 'ptpSanPham'));
    }
    
    public function ptpEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'ptpHoaDonID' => 'required|exists:PTP_HOA_DON,id',
            'ptpSanPhamID' => 'required|exists:PTP_SAN_PHAM,id',
            'ptpSoLuongMua' => 'required|integer|min:1',
            'ptpDonGiaMua' => 'required|numeric|min:0|max:9999999999.99',
            'ptpThaptpien' => 'nullable|numeric|min:0|max:9999999999.99',
            'ptpTrangThai' => 'required|boolean',
        ]);
    
        // Tìm chi tiết hóa đơn theo ID
        $ptpCTHoaDon = PTP_CT_HOA_DON::find($id);
    
        // Kiểm tra nếu không tìm thấy
        if (!$ptpCTHoaDon) {
            return redirect()->route('ptpadmins.ptpcthoadon.ptplist')->with('error', 'Không tìm thấy chi tiết hóa đơn.');
        }
    
        // Cập nhật dữ liệu
        $ptpCTHoaDon->ptpHoaDonID = $request->ptpHoaDonID;
        $ptpCTHoaDon->ptpSanPhamID = $request->ptpSanPhamID;
        $ptpCTHoaDon->ptpSoLuongMua = $request->ptpSoLuongMua;
        $ptpCTHoaDon->ptpDonGiaMua = $request->ptpDonGiaMua;
        $ptpCTHoaDon->ptpThaptpien = $request->ptpThaptpien ?? $ptpCTHoaDon->ptpSoLuongMua * $ptpCTHoaDon->ptpDonGiaMua;
        $ptpCTHoaDon->ptpTrangThai = $request->ptpTrangThai;
    
        // Lưu vào cơ sở dữ liệu
        $ptpCTHoaDon->save();
    
        return redirect()->route('ptpadmins.ptpcthoadon.ptplist')->with('success', 'Cập nhật chi tiết hóa đơn thành công!');
    }
    
    #delete
    public function ptpDelete($id)
    {
        $ptpCTHoaDon = PTP_CT_HOA_DON::findOrFail($id);
        $ptpCTHoaDon->delete();
        return redirect()->route('ptpadmins.ptpcthoadon.ptplist')->with('message', 'Loại sản phẩm đã được xoá thành công!');
    }
    
}
