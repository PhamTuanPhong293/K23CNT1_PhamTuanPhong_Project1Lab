<?php

namespace App\Http\Controllers;

use App\Models\PTP_LOAI_SAN_PHAM;
use App\Models\PTP_SAN_PHAM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PTP_SAN_PHAMController extends Controller
{
    //

    public function ptpList()
    {
        $ptpSanPhams = PTP_SAN_PHAM::where('ptpTrangThai',0)->get();
        return view('ptpAdmins.ptpSanPham.ptp-list',['ptpSanPhams'=>$ptpSanPhams]);
    }

    public function ptpCreate()
{
    
    
        $ptpLoaiSanPham = PTP_LOAI_SAN_PHAM::all();
        return view('ptpAdmins.ptpSanPham.ptp-create',['ptpLoaiSanPham'=>$ptpLoaiSanPham]);
    
}

public function ptpCreateSubmit(Request $request)
{

    // Validate input
    $validatedData = $request->validate([
        'ptpMaSanPham' => 'required|unique:ptp_SAN_PHAM,ptpMaSanPham',
        'ptpTenSanPham' => 'required|string|max:255',
        'ptpHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Kiểm tra hình ảnh và loại định dạng
        'ptpSoLuong' => 'required|numeric|min:1',
        'ptpDonGia' => 'required|numeric',
        'ptpMaLoai' => 'required|exists:ptp_LOAI_SAN_PHAM,id',
        'ptpTrangThai' => 'required|in:0,1',
    ]);

    // Khởi tạo đối tượng ptp_SAN_PHAM và lưu thông tin vào cơ sở dữ liệu
    $ptpsanpham = new ptp_SAN_PHAM;
    $ptpsanpham->ptpMaSanPham = $request->ptpMaSanPham;
    $ptpsanpham->ptpTenSanPham = $request->ptpTenSanPham;

    // Kiểm tra nếu có tệp hình ảnh
    if ($request->hasFile('ptpHinhAnh')) {
        // Lấy tệp hình ảnh
        $file = $request->file('ptpHinhAnh');

        // Kiểm tra nếu tệp hợp lệ
        if ($file->isValid()) {
            // Tạo tên tệp dựa trên mã sản phẩm
            $fileName = $request->ptpMaSanPham . '.' . $file->extension();

            // Lưu tệp vào thư mục public/img/san_pham
            $file->storeAs('public/img/san_pham', $fileName); // Lưu tệp vào thư mục storage/app/public/img/san_pham

            // Lưu đường dẫn vào cơ sở dữ liệu
            $ptpsanpham->ptpHinhAnh = 'img/san_pham/' . $fileName; // Lưu đường dẫn tương đối trong CSDL
        }
    }

    // Lưu các thông tin còn lại vào cơ sở dữ liệu
    $ptpsanpham->ptpSoLuong = $request->ptpSoLuong;
    $ptpsanpham->ptpDonGia = $request->ptpDonGia;
    $ptpsanpham->ptpMaLoai = $request->ptpMaLoai;
    $ptpsanpham->ptpTrangThai = $request->ptpTrangThai;

    // Lưu dữ liệu vào cơ sở dữ liệu
    $ptpsanpham->save();

    // Chuyển hướng người dùng về trang danh sách sản phẩm
    return redirect()->route('ptpadmins.ptpsanpham.ptplist');
}



    
public function ptpEdit($id)
{
    // Find the product or fail if it doesn't exist
    $ptpSanPham = PTP_SAN_PHAM::findOrFail($id);

    // Fetch all product categories for the dropdown
    $ptpLoaiSanPham = PTP_LOAI_SAN_PHAM::all();

    // Return the edit view with the required data
    return view('ptpAdmins.ptpSanPham.ptp-edit', compact('ptpSanPham', 'ptpLoaiSanPham'));
}


// Cập nhật sản phẩm
public function ptpEditSubmit(Request $request, $id)
{
    // Validate dữ liệu
    $request->validate([
        'ptpMaSanPham' => 'required|max:20',
        'ptpTenSanPham' => 'required|max:255',
        'ptpHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'ptpSoLuong' => 'required|integer',
        'ptpDonGia' => 'required|numeric',
        'ptpMaLoai' => 'required|max:10',
        'ptpTrangThai' => 'required|in:0,1',
    ]);

    // Tìm sản phẩm cần chỉnh sửa
    $ptpSanPham = ptp_SAN_PHAM::findOrFail($id);

    // Cập nhật thông tin sản phẩm
    $ptpSanPham->ptpMaSanPham = $request->ptpMaSanPham;
    $ptpSanPham->ptpTenSanPham = $request->ptpTenSanPham;
    $ptpSanPham->ptpSoLuong = $request->ptpSoLuong;
    $ptpSanPham->ptpDonGia = $request->ptpDonGia; 
    $ptpSanPham->ptpMaLoai = $request->ptpMaLoai;
    $ptpSanPham->ptpTrangThai = $request->ptpTrangThai;

    // Kiểm tra nếu có hình ảnh mới
    if ($request->hasFile('ptpHinhAnh')) {
        // Kiểm tra và xóa hình ảnh cũ nếu tồn tại
        if ($ptpSanPham->ptpHinhAnh && Storage::disk('public')->exists('img/san_pham/' . $ptpSanPham->ptpHinhAnh)) {
            // Xóa file cũ nếu tồn tại
            Storage::disk('public')->delete('img/san_pham/' . $ptpSanPham->ptpHinhAnh);
        }
        // Lưu hình ảnh mới
        $imagePath = $request->file('ptpHinhAnh')->store('img/san_pham', 'public');
        $ptpSanPham->ptpHinhAnh = $imagePath;
    }

    // Lưu thông tin sản phẩm đã chỉnh sửa
    $ptpSanPham->save();

    // Redirect về trang danh sách sản phẩm
    return redirect()->route('ptpadmins.ptpsanpham.ptplist')->with('success', 'Sản phẩm đã được cập nhật thành công.');
}


    public function ptpDetail($id)
    {
        // Truy vấn dữ liệu từ bảng ptpsanpham theo mã loại sản phẩm
        $ptpSanPham = PTP_SAN_PHAM::where('id', $id)->first();

        // Nếu không tìm thấy loại sản phẩm
        if (!$ptpSanPham) {
            return redirect()->route('ptpAdmins.ptpSanPham.ptp-list');
        }

        // Trả về view với dữ liệu loại sản phẩm
        return view('ptpAdmins.ptpSanPham.ptp-detail', compact('ptpSanPham'));
    }
    public function ptpdeletesp($id){
        $ptpSanPham = PTP_SAN_PHAM::findOrFail($id);
        $ptpSanPham->delete();

        return redirect()->route('ptpAdmins.ptpSanPham.ptp-list')->with('message', 'Loại sản phẩm đã được xoá thành công!');
    }
}
