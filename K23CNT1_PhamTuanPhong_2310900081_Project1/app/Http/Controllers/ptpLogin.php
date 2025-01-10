<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PTP_QUAN_TRI;

class ptpLogin extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
{
    // Validate the request inputs
    $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    // Use the validated email and password
    $credentials = [
        'email' => $validated['email'],
        'password' => $validated['password'],
    ];

    if (Auth::attempt($credentials)) {
        // Đăng nhập thành công, chuyển hướng đến /ptp-admins
        return redirect('/ptp-admins');
    } else {
        // Đăng nhập thất bại, quay lại trang đăng nhập với thông báo lỗi
        return redirect()->back()->withErrors(['email' => 'Tài khoản hoặc mật khẩu không đúng.']);
    }
}

}
