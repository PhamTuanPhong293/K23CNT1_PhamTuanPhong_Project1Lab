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
    
    public function ptpCreateSubmit(Request $request) {
        // Validate dữ liệu từ form
        $validatedData = $request->validate([
            'ptpTenSanPham' => 'required|string|max:255',
            'ptpSoLuong' => 'required|integer|min:1',
            'ptpDonGia' => 'required|numeric|min:0',
            'ptpMaLoai' => 'required',
            'ptpTrangThai' => 'required|in:1,0',
            'ptpHinhAnh' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ], [
            'ptpTenSanPham.required' => 'Tên sản phẩm là bắt buộc.',
            'ptpSoLuong.required' => 'Số lượng sản phẩm là bắt buộc.',
            'ptpDonGia.required' => 'Đơn giá là bắt buộc.',
            'ptpHinhAnh.image' => 'Hình ảnh phải có định dạng hợp lệ (jpg, jpeg, png, gif).',
            'ptpHinhAnh.max' => 'Hình ảnh không được vượt quá 2MB.',
        ]);
    
        // Tạo đối tượng sản phẩm mới
        $ptpSanPham = new PTP_SAN_PHAM;
        $ptpSanPham->ptpMaSanPham = $request->ptpMaSanPham;
        $ptpSanPham->ptpTenSanPham = $request->ptpTenSanPham;
        $ptpSanPham->ptpSoLuong = $request->ptpSoLuong;
        $ptpSanPham->ptpDonGia = $request->ptpDonGia;
        $ptpSanPham->ptpMaLoai = $request->ptpMaLoai;
        $ptpSanPham->ptpTrangThai = $request->ptpTrangThai;
    
        // Xử lý hình ảnh nếu có
        if ($request->hasFile('ptpHinhAnh')) {
            $image = $request->file('ptpHinhAnh');
            if ($image->isValid()) {
                // Tạo tên file ảnh duy nhất
                $fileName = time() . '_' . $image->getClientOriginalName();
                // Di chuyển tệp vào thư mục lưu trữ cố định
                $image->move(public_path('images/san-pham'), $fileName);
    
                // Lưu đường dẫn vào CSDL
                $ptpSanPham->ptpHinhAnh = 'images/san-pham/' . $fileName;
            } else {
                return redirect()->back()->with('error', 'Ảnh không hợp lệ hoặc không được chọn.');
            }
        }
    
        try {
            $ptpSanPham->save();
            return redirect()->route('ptpadmins.ptpSanPham')->with('ptp-success', 'Thêm sản phẩm thành công!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi thêm sản phẩm: ' . $e->getMessage());
        }
    }
     
}
