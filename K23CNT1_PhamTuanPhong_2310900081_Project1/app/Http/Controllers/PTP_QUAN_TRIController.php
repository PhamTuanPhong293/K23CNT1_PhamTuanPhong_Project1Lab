<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PTP_QUAN_TRIController extends Controller
{
    public function ptpLogin(){
        return view('PtpLogin.ptp-login');
    }

    public function ptpLoginSubmit(Request $request)
    {
        // Thêm logic kiểm tra đăng nhập (nếu cần)
        $phone = $request->input('phone');
        $password = $request->input('password');

        // Ví dụ: nếu thông tin đăng nhập hợp lệ
        if ($phone === '0981907669' && $password === '123456a@') {
            // Chuyển hướng đến trang quản trị
            return redirect('/ptp-admins#');
        }

        // Nếu đăng nhập thất bại, quay lại trang đăng nhập với thông báo lỗi
        return redirect()->back()->withErrors(['message' => 'Thông tin đăng nhập không chính xác!']);
    }
}
