<?php

namespace App\Http\Controllers;

use App\Models\PTP_QUAN_TRI;
use Illuminate\Http\Request;

class ptpAdminController extends Controller
{
    public function ptpList(){
        $ptpadmin = PTP_QUAN_TRI::all();
        return view("ptpadmins.ptpadmin.ptplist", compact("ptpadmin"));
    }
    public function ptpCreate(){
        return view('ptpadmins.ptpadmin.ptpcreate');
    }
    public function ptpCreateSubmit(Request $request)
    {
        // Validate dữ liệu từ form
        $validatedData = $request->validate([
            'ptpTaiKhoan' => 'required|string|min:6|max:255',
            'ptpMatKhau' => 'required|min:50',
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
        return redirect()->route('ptpadmins.ptpadmin.ptplist')->with('message', 'Thêm tài khoản quản trị thành công!');

    }
    public function ptpEdit($ptpID){
        $ptpadmin = PTP_QUAN_TRI::where('id', $ptpID)->first();
        if (!$ptpadmin) {
            return redirect()->route('ptpadmins.ptpadmin.ptplist');
        }
        return view('ptpadmins.ptpadmin.ptpedit', compact('ptpadmin'));
    }
    public function ptpEditSubmit(Request $request)
    {
        // Lấy dữ liệu từ form
        $id_ = $request->ptpID;  // Hoặc $request->ptpID
        $ptpTaiKhoan  = $request->ptpTaiKhoan; // Mã loại sản phẩm
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
            return redirect()->route('ptpadmins.ptpadmin.ptplist')->with('message', 'Sửa admin thành công!');
        } else {
            // Xử lý nếu không tìm thấy bản ghi
            return redirect()->route('ptpadmins.ptpadmin.ptplist')->with('message', 'Không có bản ghi!');
        }
    }
}
