<?php

namespace App\Http\Controllers;

use App\Models\PTP_HOA_DON;
use App\Models\PTP_QUAN_TRI;
use Illuminate\Http\Request;

class PTP_HOA_DONController extends Controller
{
    //
    public function ptpList(){
        $ptpHoaDon = PTP_HOA_DON::all();
        return view("ptpadmins.ptphoadon.ptplist", compact("ptpHoaDon"));
    }
    
    public function ptpCreate(){
        return view('ptpadmin.ptpAdmin.ptpCreate');
    }
    public function ptpCreateSubmit(Request $request)
    {
        // Validate dữ liệu từ form
        $validatedData = $request->validate([
            'ptpTaiKhoan' => 'required|string|min:6|max:255',
            'ptpMatKhau' => 'required|min:6',
            'ptpTrangThai' => 'required|in:1,0',
        ], [
            'ptpTaiKhoan.required' => 'Tài khoản là bắt buộc.',
            'ptpMatKhau.required' => 'Mật khẩu là bắt buộc.',
            'ptpTrangThai.required'=> 'Trạng thái bắt buộc'
        ]);

        // Tạo đối tượng sản phẩm mới
        $ptpQuanTri = new PTP_QUAN_TRI;
        $ptpQuanTri->ptpTaiKhoan  = $request->ptpTaiKhoan;
        $ptpQuanTri->ptpMatKhau = md5($request->ptpMatKhau);
        $ptpQuanTri->ptpTrangThai = $request->ptpTrangThai;
        $ptpQuanTri->save();
        return redirect()->route('ptpadmins.ptphoadon.ptplist')->with('message', 'Thêm tài khoản quản trị thành công!');

    }
    public function ptpDetailAdmin($id)
    {
        $ptpAdmins = PTP_QUAN_TRI::where('id', $id)->first();
    
        // Nếu không tìm thấy loại sản phẩm
        if (!$ptpAdmins) {
            return redirect()->route('ptpadmin.ptpListAdmin');
        }
    
        // Trả về view với dữ liệu loại sản phẩm
        return view('ptpadmins.ptpadmin.ptpdetail', compact('ptpAdmin'));
    }
    public function ptpEditAdmin($id)
{
    $ptpAdmins = PTP_QUAN_TRI::where('id', $id)->first();
    if (!$ptpAdmins) {
        return redirect()->route('ptpadmins.ptpListAdmin');
    }
    return view('ptpadmins.ptpadmin.ptpEdit', compact('ptpAdmin'));
}

public function ptpEditAdminSubmit(Request $request)
{
    // Lấy dữ liệu từ form
    $id_ = $request->id;  // Hoặc $request->ptpID
    $ptpTaiKhoan = $request->ptpTaiKhoan; // Mã loại sản phẩm
    $ptpMatKhau = md5($request->ptpMatKhau); // Tên loại sản phẩm
    $ptpTrangThai = $request->ptpTrangThai; // Trạng thái sản phẩm

    // Lấy bản ghi cần cập nhật từ database
    $ptpEdit = PTP_QUAN_TRI::where('id', $id_)->first();

    // Kiểm tra xem bản ghi có tồn tại không
    if ($ptpEdit) {
        // Cập nhật các trường dữ liệu
        $ptpEdit->ptpTaiKhoan = $ptpTaiKhoan;
        $ptpEdit->ptpMatKhau = $ptpMatKhau;
        $ptpEdit->ptpTrangThai = $ptpTrangThai;

        // Lưu lại thay đổi vào database
        $ptpEdit->save();

        // Redirect về trang cần thiết với thông báo thành công
        return redirect()->route('ptpadmins.ptpListAdmin')->with('message', 'Sửa loại sản phẩm thành công!'.'$id');
    } else {
        // Xử lý nếu không tìm thấy bản ghi
        return redirect()->route('ptpadmins.ptpListAdmin')->with('message', 'Không có bản ghi!');
    }
}

public function ptpDeleteAdmin($id)
{
    $ptpAdmin = PTP_QUAN_TRI::findOrFail($id);
    $ptpAdmin->delete();

    return redirect()->route('ptpadmins.ptpListAdmin')->with('message', 'Tài khoản admin đã được xoá thành công!');
}

}
