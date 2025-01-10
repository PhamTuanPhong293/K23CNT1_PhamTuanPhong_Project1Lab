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
        return view("ptpadmins.ptphoadon.ptplist", ['ptphoadon'=>$ptpHoaDon]);
    }
    

    public function show($hoaDonId,$sanPhamId)
    {
        // Lấy hóa đơn từ ID
        $hoaDon = PTP_HOA_DON::findOrFail($hoaDonId);
        $sanPham = PTP_HOA_DON::findOrFail($sanPhamId);

        // Trả về view để hiển thị thông tin hóa đơn
        return view('', compact('hoaDon','sanPham'));
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
    // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
    $validate = $request->validate([
        'ptpMaHoaDon' => 'required|unique:PTP_HOA_DON,ptpMaHoaDon',
        'ptpMaKhachHang' => 'required|exists:PTP_KHACH_HANG,id',
        'ptpNgayHoaDon' => 'required|date',  
        'ptpNgayNhan' => 'required|date',
        'ptpHoTenKhachHang' => 'required|string',  
        'ptpEmail' => 'required|email',
        'ptpDienThoai' => 'required|numeric',  
        'ptpDiaChi' => 'required|string',  
        'ptpTongGiaTri' => 'required|numeric',  // Đã thay đổi thành numeric (cho kiểu double)
        'ptpTrangThai' => 'required|in:0,1,2',
    ]);

    // Tạo một bản ghi hóa đơn mới
    $ptphoadon = new PTP_HOA_DON;

    // Gán dữ liệu xác thực vào các thuộc tính của mô hình
    $ptphoadon->ptpMaHoaDon = $request->ptpMaHoaDon;
    $ptphoadon->ptpMaKhachHang = $request->ptpMaKhachHang;  // Giả sử đây là khóa ngoại
    $ptphoadon->ptpHoTenKhachHang = $request->ptpHoTenKhachHang;
    $ptphoadon->ptpEmail = $request->ptpEmail;
    $ptphoadon->ptpDienThoai = $request->ptpDienThoai;
    $ptphoadon->ptpDiaChi = $request->ptpDiaChi;
    
    // Lưu 'ptpTongGiaTri' dưới dạng float (hoặc double) để phù hợp với kiểu dữ liệu trong cơ sở dữ liệu
    $ptphoadon->ptpTongGiaTri = (double) $request->ptpTongGiaTri; // Chuyển đổi sang double
    
    $ptphoadon->ptpTrangThai = $request->ptpTrangThai;

    // Đảm bảo định dạng đúng cho các trường ngày
    $ptphoadon->ptpNgayHoaDon = $request->ptpNgayHoaDon;
    $ptphoadon->ptpNgayNhan = $request->ptpNgayNhan;

    // Lưu bản ghi mới vào cơ sở dữ liệu
    $ptphoadon->save();

    // Chuyển hướng đến danh sách hóa đơn
    return redirect()->route('ptpadmins.ptphoadon.ptplist');
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
    $ptphoadon = PTP_HOA_DON::where('id', $id)->first();
    $ptpkhachhang = PTP_KHACH_HANG::all();
    return view('ptpadmins.ptphoadon.ptpedit',['ptpkhachhang'=>$ptpkhachhang,'ptphoadon'=>$ptphoadon]);
}

public function ptpeditsubmit(Request $request, $id)
{
    // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
    $validate = $request->validate([
        'ptpMaHoaDon' => 'required|unique:PTP_HOA_DON,ptpMaHoaDon,'. $id,
        'ptpMaKhachHang' => 'required|exists:PTP_KHACH_HANG,id',
        'ptpNgayHoaDon' => 'required|date',  
        'ptpNgayNhan' => 'required|date',
        'ptpHoTenKhachHang' => 'required|string',  
        'ptpEmail' => 'required|email',
        'ptpDienThoai' => 'required|numeric',  
        'ptpDiaChi' => 'required|string',  
        'ptpTongGiaTri' => 'required|numeric', 
        'ptpTrangThai' => 'required|in:0,1,2',
    ]);

    $ptphoadon = PTP_HOA_DON::where('id', $id)->first();
    // Gán dữ liệu xác thực vào các thuộc tính của mô hình
    $ptphoadon->ptpMaHoaDon = $request->ptpMaHoaDon;
    $ptphoadon->ptpMaKhachHang = $request->ptpMaKhachHang;  // Giả sử đây là khóa ngoại
    $ptphoadon->ptpHoTenKhachHang = $request->ptpHoTenKhachHang;
    $ptphoadon->ptpEmail = $request->ptpEmail;
    $ptphoadon->ptpDienThoai = $request->ptpDienThoai;
    $ptphoadon->ptpDiaChi = $request->ptpDiaChi;
    
    // Lưu 'ptpTongGiaTri' dưới dạng float (hoặc double) để phù hợp với kiểu dữ liệu trong cơ sở dữ liệu
    $ptphoadon->ptpTongGiaTri = (double) $request->ptpTongGiaTri; // Chuyển đổi sang double
    
    $ptphoadon->ptpTrangThai = $request->ptpTrangThai;

    // Đảm bảo định dạng đúng cho các trường ngày
    $ptphoadon->ptpNgayHoaDon = $request->ptpNgayHoaDon;
    $ptphoadon->ptpNgayNhan = $request->ptpNgayNhan;

    // Lưu bản ghi mới vào cơ sở dữ liệu
    $ptphoadon->save();

    // Chuyển hướng đến danh sách hóa đơn
    return redirect()->route('ptpadmins.ptphoadon.ptplist');
}

#delete
public function ptpdelete($id)
{
    $ptpHoaDon = PTP_HOA_DON::findOrFail($id);
    $ptpHoaDon->delete();
    return redirect()->route('ptpadmins.ptphoadon.ptplist')->with('message', 'Hóa đơn đã được xoá thành công!');
}


}
