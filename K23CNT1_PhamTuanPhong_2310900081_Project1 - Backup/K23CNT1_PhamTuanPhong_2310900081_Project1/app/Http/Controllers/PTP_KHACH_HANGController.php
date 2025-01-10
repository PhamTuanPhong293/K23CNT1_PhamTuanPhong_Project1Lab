<?php

namespace App\Http\Controllers;

use App\Models\PTP_KHACH_HANG;
use App\Models\PTP_SAN_PHAM;
use Illuminate\Http\Request;

class PTP_KHACH_HANGController extends Controller
{
    public function ptpList() {
        $ptpKhachHang = PTP_KHACH_HANG::all();
        return view("ptpadmins.ptpkhachhang.ptplist", compact("ptpKhachHang"));
    }
    
    public function ptpCreate() {
        $ptpKhachHang = PTP_KHACH_HANG::all();
        return view('ptpadmins.ptpkhachhang.ptp-create', compact('ptpKhachHang'));
    }
    
    public function ptpCreateSubmit(Request $request) 
    {
        $validate = $request->validate([
            'ptpMaKhachHang' => 'required|unique:PTP_KHACH_HANG,ptpMaKhachHang',
            'ptpHoTenKhachHang' => 'required|string',
            'ptpEmail' => 'required|email|unique:PTP_KHACH_HANG,ptpEmail',
            'ptpMatKhau' => 'required|min:6',
            'ptpDienThoai' => 'required|numeric|unique:PTP_KHACH_HANG,ptpDienThoai',
            'ptpDiaChi' => 'required|string',
            'ptpNgayDangKy' => 'required|date',
            'ptpTrangThai' => 'required|in:0,1,2',
            ]);
    
        $ptpkhachhang = new PTP_KHACH_HANG;
        $ptpkhachhang->ptpMaKhachHang = $request->ptpMaKhachHang;
        $ptpkhachhang->ptpHoTenKhachHang = $request->ptpHoTenKhachHang;
        $ptpkhachhang->ptpEmail = $request->ptpEmail;
        $ptpkhachhang->ptpMatKhau = bcrypt($request->ptpMatKhau); // Mã hóa mật khẩu
        $ptpkhachhang->ptpDienThoai = $request->ptpDienThoai;
        $ptpkhachhang->ptpDiaChi = $request->ptpDiaChi;
        $ptpkhachhang->ptpNgayDangKy = $request->ptpNgayDangKy;
        $ptpkhachhang->ptpTrangThai = $request->ptpTrangThai;
    
        $ptpkhachhang->save();
    
        return redirect()->route('ptpadmins.ptpkhachhang.ptplist')->with('success', 'Tạo khách hàng thành công!');
        }
    
    public function ptpEdit($id)
    {
        // Lấy khách hàng theo id
        $ptpkhachhang = PTP_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$ptpkhachhang) {
            return redirect()->route('ptpadmins.ptpkhachhang.ptplist')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Trả về view để chỉnh sửa khách hàng
        return view('ptpadmins.ptpkhachhang.ptpedit', ['ptpkhachhang' => $ptpkhachhang]);
    }

#edit submit
public function ptpEditSubmit(Request $request, $id)
{
    $validate = $request->validate([
        'ptpMaKhachHang' => 'required|unique:PTP_KHACH_HANG,ptpMaKhachHang,' . $id,
        'ptpHoTenKhachHang' => 'required|string',
        'ptpEmail' => 'required|email|unique:PTP_KHACH_HANG,ptpEmail,' . $id,
        'ptpMatKhau' => 'nullable|min:6',
        'ptpDienThoai' => 'required|numeric|unique:PTP_KHACH_HANG,ptpDienThoai,' . $id,
        'ptpDiaChi' => 'required|string',
        'ptpNgayDangKy' => 'required|date',
        'ptpTrangThai' => 'required|in:0,1,2',
    ]);

    $ptpkhachhang = PTP_KHACH_HANG::where('id', $id)->first();

    if (!$ptpkhachhang) {
        return redirect()->route('ptpadmins.ptpkhachhang.ptplist')->with('error', 'Khách hàng không tồn tại!');
    }

    $ptpkhachhang->ptpMaKhachHang = $request->ptpMaKhachHang;
    $ptpkhachhang->ptpHoTenKhachHang = $request->ptpHoTenKhachHang;
    $ptpkhachhang->ptpEmail = $request->ptpEmail;

    if ($request->ptpMatKhau) {
        $ptpkhachhang->ptpMatKhau = bcrypt($request->ptpMatKhau); // Mã hóa mật khẩu nếu có thay đổi
    }

    $ptpkhachhang->ptpDienThoai = $request->ptpDienThoai;
    $ptpkhachhang->ptpDiaChi = $request->ptpDiaChi;
    $ptpkhachhang->ptpNgayDangKy = $request->ptpNgayDangKy;
    $ptpkhachhang->ptpTrangThai = $request->ptpTrangThai;

    $ptpkhachhang->save();

    return redirect()->route('ptpadmins.ptpkhachhang.ptplist')->with('success', 'Cập nhật khách hàng thành công!');
    }

}
