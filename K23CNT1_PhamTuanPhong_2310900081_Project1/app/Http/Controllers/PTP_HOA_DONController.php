<?php

namespace App\Http\Controllers;

use App\Models\PTP_HOA_DON;
use App\Models\PTP_KHACH_HANG;
use App\Models\PTP_QUAN_TRI;
use Illuminate\Http\Request;

class PTP_HOA_DONController extends Controller
{
    //
    public function ptpList(){
        $ptpHoaDon = PTP_HOA_DON::all();
        return view("ptpadmins.ptphoadon.ptplist", compact("ptpHoaDon"));
    }
    

#insert
public function ptpcreate()
{
    // Lấy danh sách khách hàng để chọn
    $ptpkhachhang = PTP_KHACH_HANG::all();
    return view('ptpadmins.ptphoadon.ptpcreate', ['ptpkhachhang' => $ptpkhachhang]);
}

#insert submit
public function ptpcreatesubmit(Request $request)
{
    // Xác thực dữ liệu
    $request->validate([
        'ptpMakhachhang' => 'required|exists:PTP_KHACH_HANG,id',
        'ptpMaHoaDon' => 'required|string|unique:PTP_HOA_DON,ptpMaHoaDon',
        'ptpNgayHoaDon' => 'required|date',
        'ptpHotenKhachHang' => 'required|string|max:255',
        'ptpEmail' => 'nullable|email|max:255',
        'ptpDienThoai' => 'nullable|string|max:255',
        'ptpDiaChi' => 'nullable|string|max:255',
        'ptpTongGiaTri' => 'required|numeric|min:0',
        'ptpTrangThai' => 'required|boolean',
    ]);

    // Giới hạn giá trị ptpTongGiaTri (ví dụ giới hạn tối đa là 99999999999999.99)
    $maxTongGiaTri = 99999999999999.99;  // Giới hạn giá trị tối đa
    $ptpTongGiaTri = min($request->ptpTongGiaTri, $maxTongGiaTri);  // Giới hạn giá trị nếu vượt quá

    // Tạo hóa đơn mới
    $ptpHoaDon = new PTP_HOA_DON();
    $ptpHoaDon->ptpMaHoaDon = $request->ptpMaHoaDon;
    $ptpHoaDon->ptpMakhachhang = $request->ptpMaKhachHang;
    $ptpHoaDon->ptpNgayHoaDon = $request->ptpNgayHoaDon;
    $ptpHoaDon->ptpHoTenKhachHang = $request->ptpHoTenKhachHang;
    $ptpHoaDon->ptpEmail = $request->ptpEmail;
    $ptpHoaDon->ptpDienThoai = $request->ptpDienThoai;
    $ptpHoaDon->ptpDiaChi = $request->ptpDiaChi;
    $ptpHoaDon->ptpTongGiaTri = $ptpTongGiaTri;  // Lưu giá trị đã được giới hạn
    $ptpHoaDon->ptpTrangThai = $request->ptpTrangThai;

    // Lưu vào cơ sở dữ liệu
    $ptpHoaDon->save();

    return redirect()->route('ptpadmins.ptphoadon.ptplist')->with('success', 'Thêm hóa đơn thành công!');
}

#chi tiết
public function ptpDetail($id)
{
    // Truy vấn dữ liệu từ bảng PTP_HOA_DON theo id
    $ptpHoaDon = PTP_HOA_DON::find($id);

    // Nếu không tìm thấy Hóa Đơn
    if (!$ptpHoaDon) {
        return redirect()->route('ptpadmins.ptphoadon.ptplist')
                         ->with('error', 'Không tìm thấy Hóa đơn.');
    }

    // Lấy danh sách loại Khách Hàng
    $ptpLoaiKhachHang = PTP_KHACH_HANG::all();

    // Trả về view với dữ liệu Hóa Đơn và Loại Khách Hàng
    return view('ptpadmins.ptphoadon.ptpdetail', compact('ptpHoaDon', 'ptpLoaiKhachHang'));
}


#edit
public function ptpEdit($id)
{
    // Truy vấn dữ liệu từ bảng ptp_HoaDon theo id
    $ptpHoaDon = PTP_HOA_DON::find($id);

    // Nếu không tìm thấy Hoa Don
    if (!$ptpHoaDon) {
        return redirect()->route('ptpadmins.ptphoadon.ptplist')->with('error', 'Không tìm thấy Hóa đơn.');
    }

    // Lấy danh sách loại Hoa Don
    $ptpLoaiKhachHang = PTP_KHACH_HANG::all();

    // Trả về view với dữ liệu Hoa Don và loại Hoa Don
    return view('ptpadmins.ptphoadon.ptpedit', compact('ptpHoaDon', 'ptpLoaiKhachHang'));
}

public function ptpeditsubmit(Request $request, $id)
{
    // Xác thực dữ liệu
    $request->validate([
        'ptpMaKhachHang' => 'required|exists:PTP_KHACH_HANG,id',
        'ptpMaHoaDon' => "required|string|unique:PTP_HOA_DON,ptpMaHoaDon,{$id}",
        'ptpNgayHoaDon' => 'required|date',
        'ptpHoTenKhachHang' => 'required|string|max:255',
        'ptpEmail' => 'nullable|email|max:255',
        'ptpDienThoai' => 'nullable|string|max:255',
        'ptpDiaChi' => 'nullable|string|max:255',
        'ptpTongGiaTri' => 'required|numeric|min:0',
        'ptpTrangThai' => 'required|boolean',
    ]);

    // Tìm hóa đơn theo ID
    $ptpHoaDon = PTP_HOA_DON::find($id);

    // Kiểm tra nếu không tìm thấy
    if (!$ptpHoaDon) {
        return redirect()->route('ptpadmins.ptphoadon.ptplist')->with('error', 'Không tìm thấy hóa đơn.');
    }

    // Giới hạn giá trị ptpTongGiaTri
    $maxTongGiaTri = 9999999999.99; // Giới hạn giá trị tối đa
    $ptpTongGiaTri = min($request->ptpTongGiaTri, $maxTongGiaTri);

    // Cập nhật dữ liệu
    $ptpHoaDon->ptpMaHoaDon = $request->ptpMaHoaDon;
    $ptpHoaDon->ptpMaKhachHang = $request->ptpMaKhachHang;
    $ptpHoaDon->ptpNgayHoaDon = $request->ptpNgayHoaDon;
    $ptpHoaDon->ptpHoTenKhachHang = $request->ptpHoTenKhachHang;
    $ptpHoaDon->ptpEmail = $request->ptpEmail;
    $ptpHoaDon->ptpDienThoai = $request->ptpDienThoai;
    $ptpHoaDon->ptpDiaChi = $request->ptpDiaChi;
    $ptpHoaDon->ptpTongGiaTri = $ptpTongGiaTri; // Gán giá trị đã được giới hạn
    $ptpHoaDon->ptpTrangThai = $request->ptpTrangThai;

    // Lưu vào cơ sở dữ liệu
    $ptpHoaDon->save();

    return redirect()->route('ptpadmins.ptphoadon.ptplist')->with('success', 'Cập nhật hóa đơn thành công!');
}

#delete
public function ptpdelete($id)
{
    $ptpHoaDon = PTP_HOA_DON::findOrFail($id);
    $ptpHoaDon->delete();
    return redirect()->route('ptpadmins.ptphoadon.ptplist')->with('message', 'Hóa đơn đã được xoá thành công!');
}


}
