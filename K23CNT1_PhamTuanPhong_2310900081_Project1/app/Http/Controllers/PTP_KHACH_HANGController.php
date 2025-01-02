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
    public function ptpedit($id)
{
    // Find the customer by ID
    $ptpkhachHang = PTP_KHACH_HANG::find($id);

    // If customer doesn't exist, redirect with an error message
    if (!$ptpkhachHang) {
        return redirect()->route('ptpadmins.ptpkhachhang.ptplist')->with('error', 'Khách hàng không tồn tại.');
    }

    // Return the view with customer data
    return view('ptpadmins.ptpkhachhang.ptp-edit', compact('ptpkhachHang'));
}

#edit submit
public function ptpeditsubmit(Request $request, $id)
{
    // Validate the incoming data
    $request->validate([
        'ptpHotenkhachhang' => 'required|string|max:255',
        'ptpEmail' => 'required|email|max:255',
        'ptpDienThoai' => 'required|string|max:255',
        'ptpDiaChi' => 'required|string|max:255',
        'ptpNgayDK' => 'required|date',
        'ptpTrangThai' => 'required|boolean',
    ]);

    // Find the customer by ID
    $ptpkhachHang = PTP_KHACH_HANG::find($id);

    // If customer doesn't exist, redirect with an error message
    if (!$ptpkhachHang) {
        return redirect()->route('ptpadmins.ptpkhachhang.ptplist')->with('error', 'Khách hàng không tồn tại.');
    }

    // Update the customer with the form data
    $ptpkhachHang->ptpHotenkhachhang = $request->ptpHotenkhachhang;
    $ptpkhachHang->ptpEmail = $request->ptpEmail;
    $ptpkhachHang->ptpDienThoai = $request->ptpDienThoai;
    $ptpkhachHang->ptpDiaChi = $request->ptpDiaChi;
    $ptpkhachHang->ptpNgayDK = $request->ptpNgayDK;
    $ptpkhachHang->ptpTrangThai = $request->ptpTrangThai;

    // Save the updated customer details
    $ptpkhachHang->save();

    // Redirect back with a success message
    return redirect()->route('ptpadmins.ptpkhachhang.ptplist')->with('success', 'Khách hàng đã được cập nhật thành công.');
}

}
